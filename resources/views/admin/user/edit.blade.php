@extends('admin.layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit user</h2>
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
  
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="user_id" value="{{ $user->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pengguna:</strong>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nama"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emel:</strong>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Emel"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kata Laluan:</strong>
                    <input type="text" class="form-control" name="password" value="{{ $user->password }}" placeholder="Kata Laluan"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombor Telefon:</strong>
                    <input type="text" class="form-control" name="phone_no" value="{{ $user->phone_no }}" placeholder="Nombor Telefon"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombor Staff:</strong>
                    <input type="text" class="form-control" name="staff_no" value="{{ $user->staff_no }}" placeholder="No Staff"></input>
                </div>
            </div>
           
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection