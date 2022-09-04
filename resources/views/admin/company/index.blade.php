
@extends('admin.company.parentCompany')

@section('main')

<div align="right" style="margin-bottom: 10px">
          <a href="{{route('companies.create')}}" class="btn btn-success btn-sm" style="width:335px;height: 30px;font-size: 16px">Add</a>
</div>

@if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
@endif

<table class="table table-bordered table-striped">
 <tr>
  <th width="20%">Name of company</th>
  <th width="15%">Phon number</th>
  <th width="10%">City</th>
  <th width="20%">Email</th>
  <th width="20%">Image</th>

  <th width="10%">Action</th>
   <th width="5%">Delete</th>
 </tr>
    
 @foreach($data as $row)
  <tr>
 
   <td>{{ $row->cmp_name }}</td>
   <td>{{ $row->cmp_phone }}</td>
   <td>{{ $row->cmp_city }}</td>
   <td>{{ $row->cmp_email }}</td>
     <td><img src="{{ URL::to('/') }}/images/{{ $row->cmp_image }}" class="img-thumbnail" width="75" /></td>

   <td>
  
       <a href="{{route('companies.show',$row->id)}}" class="btn btn-primary">Show</a>
      <a href="{{route('companies.edit',$row->id)}}" class="btn btn-warning">Edit</a>
       </td>

<td>
     <form method="post" class="delete_form" action="
                             {{action('CompaniesController@destroy',$row->id)}}">
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