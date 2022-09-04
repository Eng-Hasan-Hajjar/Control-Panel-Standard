
@extends('admin.visitor.parantUser')

@section('main')

<div align="right" style="margin-bottom: 10px">
          <a href="{{route('visitors.create')}}" class="btn btn-success btn-sm" style="width:335px;height: 30px;font-size: 16px">Add</a>
</div>

@if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
@endif

<table class="table table-bordered table-striped">
 <tr>
  <th width="20%">Name</th>
  <th width="15%">Last Name</th>
  <th width="20%">Phon number</th>
  <th width="10%">City</th>
  <th width="20%">Address</th>
  

  <th width="10%">Action</th>
  <th width="5%">Delete</th>
 </tr>
    
 @foreach($data as $row)
  <tr>
 
   <td>{{ $row->vis_name }}</td>
   <td>{{ $row->vis_last_name }}</td>
   <td>{{ $row->vis_phone }}</td>
   <td>{{ $row->vis_city }}</td>
   <td>{{ $row->vis_address }}</td>
   <td>
       <a href="{{route('visitors.show',$row->id)}}" class="btn btn-primary">Show</a>
       <a href="{{route('visitors.edit',$row->id)}}" class="btn btn-warning">Edit</a>
   </td>
    <td>
         <form method="post" class="delete_form" action="
                                 {{action('VisitorsController@destroy',$row->id)}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="btn btn-danger">Delete</button>
         </form>
    </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection