
@extends('admin.category.parentCategory')

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
 <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
</div>
  {!! Form::open(['url' => '/adminpanel/categories', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!} 
 <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('cat_name', 'Enter Name of Company:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cat_name', null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <div class="form-group text-center" style="width: 335px;margin-left: 300px">
  <input type="submit" name="add" class="btn btn-primary input-lg" style="width: 235px" value="Add" />
 </div>



 {!! Form::close()  !!}

@endsection