<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Senarai Asset</h2>
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
                <a class="btn btn-success" href="{{ route('device.create') }}"> Add New Device</a>
                <a class="btn btn-primary" href="{{ route('device.index',['download'=>'pdf'])}}">Download PDF</a>
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
            <th>Device Name</th>
            <th>Quantity</th>
         
            <th width="280px">Action</th>
        </tr>
        @foreach ($device as $s)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $s->device_name}}</td>
            <td>{{ $s->quantity}}</td>
         
     
     
            <td>
                <form  action="{{ route('device.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('device.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('device.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure to delete it?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>