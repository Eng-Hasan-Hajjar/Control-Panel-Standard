
@extends('admin.category.parentCategory')

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
                <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
            </div>
            <br /> <br />
     <form method="post" action="{{ route('categories.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group"style="margin-right: 320px"  align="left">
    {!! Form::label('cat_name', 'Alter Name of Category:',['class'=>' col-md-4 col-form-label text-right '] ) !!}
          {!! Form::text('cat_name',$data->cat_name, ['class'=>'form-control col-md-8'])!!}
       </div>
       <br/>
       <br/><br/>
       <div class="form-group text-center" style="width: 335px;margin-left: 300px">
       <input type="submit" name="edit" style="width: 235px" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection 