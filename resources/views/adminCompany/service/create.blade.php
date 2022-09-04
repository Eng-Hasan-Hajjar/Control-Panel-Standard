@extends('adminCompany.service.parentService')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px" >
 <a href="{{ route('services.index') }}" class="btn btn-default">Back</a>
</div>


  {!! Form::open(['url' => '/adminpanel/services', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!} 
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('ser_name', 'Enter Name of Services:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_name', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('ser_description', 'Enter Description of Servies:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_description', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('ser_price', 'Enter a Price of Services:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_price', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />



 <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('ser_image', 'Image for Services:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::file('ser_image', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br /><br /><br />
 <div class="form-group text-center" style="width: 335px;margin-left: 300px">
  <input type="submit" name="add" class="btn btn-primary input-lg" style="width: 235px" value="Add" />
 </div>



 {!! Form::close()  !!}

@endsection