@extends('admin.layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Brand</h2>
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
   
<form action="{{ route('brand.store') }}" method="POST">
    @csrf
  
     <div class="row">
      
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Brand Name:</strong>
                <input type="text" name="brand_name" class="form-control" placeholder="brand Name">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('brand.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection