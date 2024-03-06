@extends('layouts.templateee')
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
  
    <form action="{{ route('asset.update',$asset->id) }}" method="POST">
        @csrf
        @method('PUT')

       
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nombor Asset:</strong>
                <input type="text" name="asset_no" class="form-control" value="{{$asset->asset_no}}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nombor Siri:</strong>
                <input type="text" name="serial_no" class="form-control" value="{{$asset->serial_no}}">
            </div>
        </div>
    
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Pemilik Perkakasan:</strong>
                <input type="text" name="assigned_to" class="form-control" value="{{$asset->assigned_to}}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Tahun Pembelian:</strong>
                <input type="text" name="purchase_year" class="form-control"  value="{{$asset->purchase_year}}">
            </div>
    </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Lokasi:</strong>
                <input type="text" name="location" class="form-control" value="{{$asset->location}}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Jenama:</strong>
            <select class="form-control" name="brand_id">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($brands as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($asset['brand_id']) && $asset['brand_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Perkakasan:</strong>
            <select class="form-control" name="device_id">
                <option value="">-- Pilih Perkakasan --</option>
                @foreach ($devices as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($asset['device_id']) && $asset['device_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
       
        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Jabatan:</strong>
            <select class="form-control" name="department_id">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($departments as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($asset['department_id']) && $asset['department_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
       <br>
       <br>
       <br>
       <br>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button onclick="return confirm('Adakah anda ingin mengubahsuai data ini?')" type="submit" class="btn btn-primary">Hantar</button>
                <a class="btn btn-primary" href="{{ route('asset.index') }}"> Back</a>
            </div>
</div>
   
    </form>
@endsection