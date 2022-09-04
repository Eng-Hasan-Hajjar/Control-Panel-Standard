
@extends('admin.visitor.parantUser')

@section('main')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 0px;margin-top: 20px">
                <a href="{{ route('visitors.index') }}" class="btn btn-default">Back</a>
            </div>
            <br /> <br />
     <form method="post" action="{{ route('visitors.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group"style="margin-right: 320px">
    {!! Form::label('vis_name', 'Enter Name of Visitor:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_name',$data->vis_name, ['class'=>'form-control col-md-8'])!!}
       </div>
       
<br /><br />
    <div class="form-group"style="margin-right: 320px">
    {!! Form::label('vis_last_name', 'Enter Last Name of Visitor:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_last_name',$data->vis_last_name, ['class'=>'form-control col-md-8'])!!}
       </div>
       <br /><br />
        <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('vis_phone', 'Phone:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('vis_phone', $data->vis_phone, ['class'=>'form-control col-md-8'])!!}
 </div>
<br />
 <br />
   
   <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('vis_city', 'Select City:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::select('vis_city',['Allepo','Damascus','Homs','Lattakia',], null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br /><br />

  <div class="form-group" style="margin-right: 320px">
    {!! Form::label('vis_address', 'Address:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::text('vis_address', $data->vis_address, ['class'=>'form-control col-md-8'])!!}
 </div>

      <br />
      <div class="form-group text-center" style="margin-top: 100px" >
       <input type="submit" name="edit"style="width:335px;height: 30px;font-size: 16px" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection 