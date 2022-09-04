<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Service::latest()->paginate(5);
         return view('adminCompany.service.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminCompany.service.create');
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
        'ser_name'            =>  'required',
        'ser_description'     =>  'required',
        'ser_price'           =>  'required',
        'ser_image'           =>  'required|image|max:2048',
    ]);

    $image = $request->file('ser_image');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $new_name);

    $form_data = array(
        'ser_name'            =>  $request->ser_name ,
        'ser_description'     =>  $request->ser_description ,
        'ser_price'           =>  $request->ser_price ,
        'ser_image'           =>  $new_name
    );

    Service::create($form_data);

    return redirect('/adminpanel/services')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Service::findOrFail($id);
        return view('adminCompany.service.view', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Service::findOrFail($id);
        return view('adminCompany.service.edit', compact('data'));

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
        $image = $request->file('ser_image');
        if($image != '')
        {
            $request->validate([
                'ser_name'            =>  'required',
                'ser_description'     =>  'required',
                'ser_price'           =>  'required',
                'ser_image'           =>  'required|image|max:2048',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
            'ser_name'      =>  'required',
            'ser_description'     =>  'required',
            'ser_price'      =>  'required',
            ]);
        }
        $form_data = array(
            'ser_name'      =>  $request->ser_name ,
            'ser_description'     =>  $request->ser_description ,
            'ser_price'      =>  $request->ser_price ,
            'ser_image'     =>  $image_name
        );
  
        Service::whereId($id)->update($form_data);
        return redirect('/adminpanel/services')->with('success', 'Data is successfully updated');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::findOrFail($id);
        $data->delete();

        return redirect('/adminpanel/services')->with('success', 'Data is successfully deleted');

    }
    public function showAllService()
    {
        $serviceAll = Service::latest()->paginate(3);
        return view('website.service.allServices', compact('serviceAll'))
                      ->with('i', (request()->input('page', 1) - 1) * 3);
    }
    public function showDetailService($id){
        $serviceInfo=Service::find($id);
       //   $serviceInfo=Service::findOrFail($id);
            return view('website.service.detailService', compact('serviceInfo'));
        }
    


}
