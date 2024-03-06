@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah Suai Data Aset</h2>
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
  
    <form action="{{ route('department.update',$department->id) }}" method="POST">
        @csrf
        @method('PUT')

       
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nama Jabatan:</strong>
                <input type="text" name="deptname" class="form-control" value="{{$department->deptname}}">
            </div>
        </div>
       
        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Jabatan:</strong>
            <select class="form-control" name="pic_id">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($users as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($department['pic_id']) && $department['pic_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        
       <br>
       <br>
       <br>
       <br>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button onclick="return confirm('Adakah anda ingin mengubahsuai data ini?')" type="submit" class="btn btn-primary">Hantar</button>
                <a class="btn btn-primary" href="{{ route('department.index') }}"> Back</a>
            </div>
</div>
   
    </form>
@endsection