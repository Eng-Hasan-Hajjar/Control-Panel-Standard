@extends('adminCompany.service.parentService')

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
                <a href="{{ route('services.index') }}" class="btn btn-default">Back</a>
            </div>
            <br /> <br />
     <form method="post" action="{{ route('services.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group"style="margin-right: 320px">
    {!! Form::label('ser_name', 'Enter Name of Service:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_name',$data->ser_name, ['class'=>'form-control col-md-8'])!!}
       </div>

<br />
 <br />
 <div class="form-group"style="margin-right: 320px">
    {!! Form::label('ser_description', 'Alter a Description of Service:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_description',$data->ser_description, ['class'=>'form-control col-md-8'])!!}
       </div>

<br />
<div class="form-group"style="margin-right: 320px">
    {!! Form::label('ser_price', 'Alter a Price of Service:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('ser_price',$data->ser_price, ['class'=>'form-control col-md-8'])!!}
       </div>
<br />
 <br /> <br />
    <div class="form-group">
       <label class="col-md-4 text-right">Image for Service:</label>
       <div class="col-md-8">
        <input type="file" name="ser_image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->ser_image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->ser_image }}" />
       </div>
      </div>

    
      <br />
      <div class="form-group text-center" style="margin-top: 100px" >
       <input type="submit" name="edit"style="width:335px;height: 30px;font-size: 16px" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection 