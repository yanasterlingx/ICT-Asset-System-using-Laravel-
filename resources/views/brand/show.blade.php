@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show brand Details</h2>
            </div>
        </div>
    </div>
   
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>brand Name:</strong>
                {{ $brand->brand_name }}
            </div>
        </div>

       
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Joined On:</strong>
                {{ $brand->created_at }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('brand.index') }}"> Back</a>
        </div>
    </div>
@endsection