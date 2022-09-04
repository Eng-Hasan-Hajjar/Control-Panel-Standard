@extends('admin.category.parentCategory')
@section('main')
<div align="right" style="margin-bottom: 10px">
          <a href="{{route('categories.create')}}" class="btn btn-success btn-sm" style="width:335px;height: 30px;font-size: 16px">Add</a>
</div>
@if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
@endif
<table class="table table-bordered table-striped">
 <tr>
  <th width="20%">Name of Category</th>
  <th width="10%">Action</th>
   <th width="5%">Delete</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->cat_name }}</td>
   <td>
      <a href="{{route('categories.show',$row->id)}}" class="btn btn-primary">Show</a>
      <a href="{{route('categories.edit',$row->id)}}" class="btn btn-warning">Edit</a>
   </td>
<td>
     <form method="post" class="delete_form" action="
                             {{action('CategoriesController@destroy',$row->id)}}">
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