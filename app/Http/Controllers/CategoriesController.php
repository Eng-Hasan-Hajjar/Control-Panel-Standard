<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $data = Category::latest()->paginate(5);
         return view('admin.category.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'cat_name'      =>  'required',
        ]);

        $form_data = array(
            'cat_name' =>  $request->cat_name
        );

        Category::create($form_data);

        return redirect('/adminpanel/categories')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.edit', compact('data'));
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
        $request->validate([
            'cat_name'      =>  'required',  
            ]);
            $form_data = array(
                'cat_name'      =>  $request->cat_name 
                
            );
      
            Category::whereId($id)->update($form_data);
    
            return redirect('/adminpanel/categories')->with('success', 'Data is successfully updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect('/adminpanel/categories')->with('success', 'Data is successfully deleted');

    }

    public function showAllCategory(){
        $categoryAll = Category::latest()->paginate(3);
      return view('website.category.all', compact('categoryAll'))
                    ->with('i', (request()->input('page', 1) - 1) * 3);
 }
}
