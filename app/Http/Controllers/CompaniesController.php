<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Company::latest()->paginate(5);
        return view('admin.company.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cmp_name'      =>  'required',
            'cmp_phone'     =>  'required',
            'cmp_city'      =>  'required',
            'cmp_email'     =>  'required|email',
            'cmp_image'     =>  'required|image|max:2048',
        ]);

        $image = $request->file('cmp_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'cmp_name'      =>  $request->cmp_name ,
            'cmp_phone'     =>  $request->cmp_phone ,
            'cmp_city'      =>  $request->cmp_city ,
            'cmp_email'     =>  $request->cmp_email ,
            'cmp_image'     =>  $new_name
        );

        Company::create($form_data);

        return redirect('/adminpanel/companies')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $data = Company::findOrFail($id);
        return view('admin.company.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Company::findOrFail($id);
        return view('admin.company.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('cmp_image');
        if($image != '')
        {
            $request->validate([
            'cmp_name'      =>  'required',
            'cmp_phone'     =>  'required',
            'cmp_city'      =>  'required',
            'cmp_email'     =>  'required|email',
            'cmp_image'     =>  'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
            'cmp_name'      =>  'required',
            'cmp_phone'     =>  'required',
            'cmp_city'      =>  'required',
            'cmp_email'     =>  'required|email'
            ]);
        }

        $form_data = array(
            'cmp_name'      =>  $request->cmp_name ,
            'cmp_phone'     =>  $request->cmp_phone ,
            'cmp_city'      =>  $request->cmp_city ,
            'cmp_email'     =>  $request->cmp_email ,
            'cmp_image'     =>  $image_name
        );
  
        Company::whereId($id)->update($form_data);

        return redirect('/adminpanel/companies')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::findOrFail($id);
        $data->delete();

        return redirect('/adminpanel/companies')->with('success', 'Data is successfully deleted');
    }
public function showAllCompany(){
           $companyAll = Company::latest()->paginate(3);
         return view('website.company.all', compact('companyAll'))
                       ->with('i', (request()->input('page', 1) - 1) * 3);
    }
public function showDetailCompany($id){
    $companyInfo=Company::find($id);
   //   $companyInfo=Company::findOrFail($id);
        return view('website.company.detailCompany', compact('companyInfo'));
    }

public function showCategory(){
        return view('website.category.category-1');
    }
    public function showCategory2(){
        return view('website.category.category2');
    }
    public function showCategory3(){
        return view('website.category.category3');
    }
    public function showCategory4(){
        return view('website.category.category4');
    }
    public function showCategory5(){
        return view('website.category.category5');
    }
    public function showCategory6(){
        return view('website.category.category6');
    }
    public function showCategory7(){
        return view('website.category.category7');
    }
    public function showCategory8(){
        return view('website.category.category8');
    }
  

}
