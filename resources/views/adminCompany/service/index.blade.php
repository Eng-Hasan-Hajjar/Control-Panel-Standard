
@extends('adminCompany.service.parentService')

@section('main')

<div align="right" style="margin-bottom: 10px">
          <a href="{{route('services.create')}}" class="btn btn-success btn-sm" style="width:335px;height: 30px;font-size: 16px">Add</a>
</div>

@if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
@endif

<table class="table table-bordered table-striped">
 <tr>
  <th width="20%">Name of service</th>
  <th width="20%">Image</th>
  <th width="20%">Description</th>
  <th width="20%">Price</th>

  <th width="10%">Action</th>
   <th width="10%">Delete</th>
 </tr>
    
 @foreach($data as $row)
  <tr>
 
   <td>{{ $row->ser_name }}</td>
     <td><img src="{{ URL::to('/') }}/images/{{ $row->ser_image }}" class="img-thumbnail" width="75" /></td>
     <td>{{ $row->ser_description }}</td>
     <td>{{ $row->ser_price }}</td>
   <td>
  
       <a href="{{route('services.show',$row->id)}}" class="btn btn-primary">Show</a>
      <a href="{{route('services.edit',$row->id)}}" class="btn btn-warning">Edit</a>
       </td>

<td>
     <form method="post" class="delete_form" action="
                             {{action('ServicesController@destroy',$row->id)}}">
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