<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Senarai Jabatan</h2>
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

            <div class="col-md-5">
            <div class="card card-outline collapsed-card card-primary">
              <div class="card-header">
              @foreach ($department as $t)
              
              <h3 class="card-title">{{$t->pic->name }}</h3>
              @break
              @endforeach
              
            
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
              <ul class="nav nav-pills flex-column">
                @foreach ($pic as $cat)
           
                    <li class="nav-item {{ $cat->id == $id ? 'active' : ''}} ">
                        <a class="nav-link" href="/admin/department/pic/{{ $cat->id }}">{{ $cat->name }}</a>
                    </li>      
                
                @endforeach
                
              </ul>
            </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
                <br>

                <a class="btn btn-success" href="{{ route('department.create') }}"> Tambah Jabatan Baru</a>
            </div>

            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
 
    <table  data-show-refresh="true"  data-sort-order="asc" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Juruteknik Bertanggungjawab</th>
      
            
         
            <th width="280px">Action</th>
        </tr>
        @foreach ($department as $s)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $s->deptname}}</td>
            <td>{{ $s->pic->name}}</td>
     
            <td>
                <form   action="{{ route('department.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('department.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure to delete it?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>