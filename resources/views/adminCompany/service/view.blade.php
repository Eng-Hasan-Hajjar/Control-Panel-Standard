@extends('adminCompany.service.parentService')

@section('main')

<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
  <a href="{{ route('services.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Name - {{ $data->ser_name }} </h3>
 <h3>Description - {{ $data->ser_description }} </h3>
 <h3>Price - {{ $data->ser_price }} </h3>
 <img src="{{ URL::to('/') }}/images/{{ $data->ser_image }}" class="img-thumbnail" />

</div>
@endsection