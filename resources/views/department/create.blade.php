@extends('admin.layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New department</h2>
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('department.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Nama Jabatan:</strong>
                <input type="text" name="deptname" class="form-control" placeholder="department Name">
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-12">
                <strong>Jabatan:</strong>
            <div class="form-group">
            <select class="form-control" name="pic_id">
                <option value="">-- Pilih Juruteknik Bertanggungjawab --</option>
                @foreach ($users as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($asset['pic_id']) && $asset['pic_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('department.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection

