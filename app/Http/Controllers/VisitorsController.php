<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Visitor;

class VisitorsController extends Controller
{
      public function index()
    {
    	 $data = Visitor::latest()->paginate(5);
        	return view ('admin.visitor.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     public function create()
    {
         return view('admin.visitor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vis_name'    		  =>  'required',
            'vis_last_name'       =>  'required',
            'vis_phone'     	  =>  'required',
            'vis_city'            =>  'required',
            'vis_address'         =>  'required',
        ]);

        $form_data = array(
        	'vis_name'          =>   $request->vis_name ,
            'vis_last_name'     =>   $request->vis_last_name ,
            'vis_phone'         =>   $request->vis_phone ,
            'vis_city'          =>   $request->vis_city ,
            'vis_address'       =>   $request->vis_address 
        );

        Visitor::create($form_data);

        return redirect('/adminpanel/visitors')->with('success', 'Data Added successfully.');
    }
      public function show($id)
    {
           $data = Visitor::findOrFail($id);
        return view('admin.visitor.view', compact('data'));
    }
      public function edit($id)
    {
        $data = Visitor::findOrFail($id);
        return view('admin.visitor.edit', compact('data'));
    }
      public function update(Request $request, $id)
    {
       
         $request->validate([
            'vis_name'    		  =>  'required',
            'vis_last_name'       =>  'required',
            'vis_phone'     	  =>  'required',
            'vis_city'            =>  'required',
            'vis_address'         =>  'required',
        ]);

        $form_data = array(
        	'vis_name'          =>   $request->vis_name ,
            'vis_last_name'     =>   $request->vis_last_name ,
            'vis_phone'         =>   $request->vis_phone ,
            'vis_city'          =>   $request->vis_city ,
            'vis_address'       =>   $request->vis_address 
        );
  
        Visitor::whereId($id)->update($form_data);

        return redirect('/adminpanel/visitors')->with('success', 'Data is successfully updated');
    }
     public function destroy($id)
    {
        $data = Visitor::findOrFail($id);
        $data->delete();

        return redirect('/adminpanel/visitors')->with('success', 'Data is successfully deleted');
    }

}


    