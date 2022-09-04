
@extends('admin.company.parentCompany')

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
                <a href="{{ route('companies.index') }}" class="btn btn-default">Back</a>
            </div>
            <br /> <br />
     <form method="post" action="{{ route('companies.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group"style="margin-right: 320px">
    {!! Form::label('cmp_name', 'Enter Name of Company:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cmp_name',$data->cmp_name, ['class'=>'form-control col-md-8'])!!}
       </div>
<br /><br />
        <div class="form-group" style="margin-right: 320px"  align="left">
    {!! Form::label('cmp_phone', 'Phone:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cmp_phone', $data->cmp_phone, ['class'=>'form-control col-md-8'])!!}
 </div>
<br />
 <br />
   
   <div class="form-group" style="margin-right: 320px" align="left">
    {!! Form::label('cmp_city', 'Select City:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::select('cmp_city',['Allepo','Damascus','Homs','Lattakia',], null, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br /><br />

  <div class="form-group" style="margin-right: 320px">
    {!! Form::label('cmp_email', 'Email:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
    {!! Form::text('cmp_email', $data->cmp_email, ['class'=>'form-control col-md-8'])!!}
 </div>
 <br /> <br />
    <div class="form-group">
       <label class="col-md-4 text-right">Image for Company:</label>
       <div class="col-md-8">
        <input type="file" name="cmp_image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->cmp_image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->cmp_image }}" />
       </div>
      </div>

    
      <br />
      <div class="form-group text-center" style="margin-top: 100px" >
       <input type="submit" name="edit"style="width:335px;height: 30px;font-size: 16px" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection 