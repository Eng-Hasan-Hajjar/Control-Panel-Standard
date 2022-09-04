
@extends('admin.visitor.parantUser')

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
 <a href="{{ route('visitors.index') }}" class="btn btn-default">Back</a>
</div>


  {!! Form::open(['url' => '/adminpanel/visitors', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!} 
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('vis_name', 'Enter Name:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_name', null, ['class'=>'form-control col-md-8'])!!}
 </div>

 <br />

<div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('vis_last_name', 'Enter Last Name:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_last_name', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('vis_phone', 'Phone:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_phone', null, ['class'=>'form-control col-md-8'])!!}
 </div>

 <br />

   <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('vis_city', 'Select City:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::select('vis_city',['Allepo','Damascus','Homs','Lattakia',], null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />

  <div class="form-group" style="margin-right: 320px">
    {!! Form::label('vis_address', 'Address:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::text('vis_address', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />
 <br />
 <div class="form-group text-center" style="width: 335px;margin-left: 300px">
  <input type="submit" name="add" class="btn btn-primary input-lg" style="width: 235px" value="Add" />
 </div>



 {!! Form::close()  !!}

@endsection