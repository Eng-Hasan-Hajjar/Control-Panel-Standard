
@extends('admin.visitor.parantUser')

@section('main')

<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
  <a href="{{ route('visitors.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Name - {{ $data->vis_name }} </h3>
 <h3>Last Name - {{ $data->vis_last_name }} </h3>
 <h3>Phone - {{ $data->vis_phone }}</h3>
 <h3>City - {{ $data->vis_city }}</h3>
 <h3>Address - {{ $data->vis_address }}</h3>

</div>
@endsection