<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Senarai Akaun Pengguna</h2>
            </div>
            <div class="pull-right">

            <form action="" class="form-inline">
                    <div class="input-group input-group-sm">
                    <input type="search" class="orm-control form-control-navbar" name="search" placeholder="Search">
                    <div class="input-group-append">
                    <button class="btn btn-primary">Search</button>
                    </div>
                    </div>
                </form>
                <br>

                <a class="btn btn-success" href="{{ route('user.create') }}"> Tambah Akaun Pengguna</a>
            </div>

        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Emel</th>
            <th>No Telefon</th>
            <th>No Staff</th>
            <th width="280px">Pilihan</th>
        </tr>
        @foreach ($user as $s)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $s->name}}</td>
            <td>{{ $s->email}}</td>
            <td>{{ $s->phone_no}}</td>
            <td>{{ $s->staff_no}}</td>
     
            <td>
                <form  action="{{ route('user.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('user.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('user.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure to delete it?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>