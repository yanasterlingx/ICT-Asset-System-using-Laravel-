@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show user Details</h2>
            </div>
        </div>
    </div>
   
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pekerja:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Emel:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kata Laluan:</strong>
                {{ $user->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telefon:</strong>
                {{ $user->phone_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Staff:</strong>
                {{ $user->staff_no }}
            </div>
        </div>
        
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
    </div>
@endsection