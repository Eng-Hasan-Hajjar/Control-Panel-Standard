
@extends('admin.company.parentCompany')

@section('main')

<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
  <a href="{{ route('companies.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->cmp_image }}" class="img-thumbnail" />
 <h3>Name - {{ $data->cmp_name }} </h3>
 <h3>City - {{ $data->cmp_city }}</h3>
 <h3>Phone - {{ $data->cmp_phone }}</h3>
 <h3>Email - {{ $data->cmp_email }}</h3>

</div>
@endsection