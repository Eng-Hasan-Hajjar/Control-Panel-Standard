@extends('admin.company.parentCompany')
@section('main')
<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
  <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Name - {{ $data->cat_name }} </h3>
</div>
@endsection