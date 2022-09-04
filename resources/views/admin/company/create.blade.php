
@extends('admin.company.parentCompany')

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
 <a href="{{ route('companies.index') }}" class="btn btn-default">Back</a>
</div>


  {!! Form::open(['url' => '/adminpanel/companies', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!} 
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('cmp_name', 'Enter Name of Company:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cmp_name', null, ['class'=>'form-control col-md-8'])!!}
 </div>

 <br />

 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('cmp_phone', 'Phone:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cmp_phone', null, ['class'=>'form-control col-md-8'])!!}
 </div>

 <br />

   <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('cmp_city', 'Select City:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::select('cmp_city',['Allepo','Damascus','Homs','Lattakia',], null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />

  <div class="form-group" style="margin-right: 320px">
    {!! Form::label('cmp_email', 'Email:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::text('cmp_email', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br />


 <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('cmp_image', 'Image for Company:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::file('cmp_image', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br /><br /><br />
 <div class="form-group text-center" style="width: 335px;margin-left: 300px">
  <input type="submit" name="add" class="btn btn-primary input-lg" style="width: 235px" value="Add" />
 </div>



 {!! Form::close()  !!}

@endsection