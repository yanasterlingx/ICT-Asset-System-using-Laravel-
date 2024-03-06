<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Aset Lupus</h2>
            </div>
            <div class="pull-right">

            <form action="" class="form-inline" >
                    <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-navbar" name="search" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Cari</button>
                            </div>
                    </div>
            </form>
                <br>

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="form-inline">
                    @csrf
                        <div class="input-group input-group-sm">
                            <input type="file" name="file" class="form-control form-control-navbar">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Hantar</button>
                            </div>
                    </div>
            </form>    
            <br>
                <a class="btn btn-success" href="{{ route('asset.create') }}"> Tambah Inventori Asset</a>
                <a class="btn btn-primary" href="{{ route('asset.index',['download'=>'pdf'])}}">Muat Turun PDF</a>
            </div>
            
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Jabatan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="/asset" class="nav-link">
                     All
                  </a>
                </li>
                @foreach ($depart as $cat)
                      <li class="nav-item {{ $cat->id == $id ? 'active' : ''}} ">
                        <a class="nav-link" href="/asset/department/{{ $cat->id }}">{{ $cat->deptname }}</a>
                      </li>
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
            
            
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
            <th>Nombor Harta Modal</th>
            <th>No Casis</th>
            <th>Nama Pengguna</th>
            <th>Jenis Perkakasan</th>
            <th>Jenama</th>
            <th>Jabatan</th>
            <th>Lokasi</th>
            <th>Pengubahsuaian Terakhir Oleh</th>
            <th width="280px">Pilihan</th>
        </tr>


        @foreach ($assets as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
             <td>{{ $t->asset_no }}</td>
            <td>{{ $t->serial_no }}</td>
            <td>{{ $t->assigned_to}} </td>
            <td>{{ $t->device->device_name}} </td>
            <td>{{ $t->brand->brand_name}}</td>
            <td>{{ $t->department->deptname}}</td>
            <td>{{ $t->location->location_name}}</td>
            <td>{{ $t->user->name}} </td>

            <td>
            <form   action="{{ route('asset.destroy',$t->id) }}" method="POST">
   
        <a class="btn btn-info" href="{{ route('asset.show',$t->id) }}"><i class="fas fa-eye"></i></a>

       <a class="btn btn-primary" href="{{ route('asset.edit',$t->id) }}"><i class="fa fa-edit"></i></a>

       @csrf
       @method('DELETE')

       <button onclick="return confirm('Adakah anda ingin membuang data ini?')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
   </form>
            </td>
        </tr>
        @endforeach
    </table>