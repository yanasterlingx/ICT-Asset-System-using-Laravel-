<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of brand</h2>
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
                <a class="btn btn-success" href="{{ route('brand.create') }}"> Add New brand</a>
                <a class="btn btn-primary" href="{{ route('brand.index',['download'=>'pdf'])}}">Download PDF</a>
            </div>
        </div>

      
                
</div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <!-- -->
    <table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>Brand Name</th>
         
          
         
            <th width="280px">Action</th>
        </tr>
        @foreach ($brand as $s)
        <tr>
            <td>{{ $loop->iteration}}</td>
      
            <td>{{ $s->brand_name}}</td>
           
            
            <td>
                <form  action="{{ route('brand.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('brand.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('brand.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure to delete it?')" type="submit" class="btn btn-danger">Delete</button>

                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>