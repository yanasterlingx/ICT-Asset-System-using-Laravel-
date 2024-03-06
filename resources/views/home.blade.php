@extends('layouts.templateee')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
    <h2 class="mb-2 mt-4">Inventori Keseluruhan</h2>
    </div>
    <!-- Small Box (Stat card) -->
   
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$asset}}</h3>

                <p>JUMLAH ASET ICT</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$departments}}</h3>

                <p>JUMLAH JABATAN</p>
              </div>
              <div class="icon">
              <i class="fa fa-building" aria-hidden="true"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$device}}</h3>

                <p>JUMLAH JENIS PERKAKASAN</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$total}}</h3>

                <p>JUMLAH PENGGUNA SISTEM</p>
              </div>
              <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>{{$com}}</h3>

                <p>JUMLAH KOMPUTER (DESKTOP)</p>
              </div>
              <div class="icon">
              <i class="fa fa-desktop" aria-hidden="true"></i>
              </div>
              <a href="/asset/device/1" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>{{$lap}}</h3>

                <p>JUMLAH KOMPUTER RIBA (LAPTOP)</p>
              </div>
              <div class="icon">
              <i class="fa fa-laptop" aria-hidden="true"></i>
              </div>
              <a href="/asset/device/3" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3>{{$scan}}</h3>

                <p>JUMLAH PENGIMBAS (SCANNER)</p>
              </div>
              <div class="icon">
              <i class="fa fa-lightbulb" aria-hidden="true"></i>
              </div>
              <a href="/asset/device/5" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-olive">
              <div class="inner">
                <h3>{{$print}}</h3>

                <p>JUMLAH PENCETAK (PRINTER)</p>
              </div>
              <div class="icon">
              <i class="fa fa-print" aria-hidden="true"></i>
              </div>
              <a href="/asset/device/4" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-3">
            <div class="card card-success card-outline collapsed-card">
              <div class="card-header">
                
                <h3 class="card-title">SYED</h3>
               

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                @foreach ($syed as $cat)
                        <li class="nav-item {{ $cat->id == 2 ? 'active' : ''}} ">
                          <a class="nav-link" href="/asset/department/{{ $cat->id }}">{{ $cat->deptname }}</a>
                        </li>
                @endforeach
                  </ul>        
                     
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-primary card-outline collapsed-card">
              <div class="card-header">
            
                <h3 class="card-title">NAZLY</h3>
              
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <ul class="nav nav-pills flex-column">
                @foreach ($nazly as $cat)
                        <li class="nav-item {{ $cat->id == 4 ? 'active' : ''}} ">
                          <a class="nav-link" href="/asset/department/{{ $cat->id }}">{{ $cat->deptname }}</a>
                        </li>
                @endforeach
                  </ul>  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-danger card-outline collapsed-card">
              <div class="card-header">
                
                <h3 class="card-title">RAZUHRIN</h3>
               

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <ul class="nav nav-pills flex-column">
                @foreach ($razuhrin as $cat)
                        <li class="nav-item {{ $cat->id == 5 ? 'active' : ''}} ">
                          <a class="nav-link" href="/asset/department/{{ $cat->id }}">{{ $cat->deptname }}</a>
                        </li>
                @endforeach
                  </ul>  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-warning card-outline collapsed-card">
              <div class="card-header">
            
                <h3 class="card-title">AZLINA</h3>
              
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <ul class="nav nav-pills flex-column">
                @foreach ($azlina as $cat)
                        <li class="nav-item {{ $cat->id == 3 ? 'active' : ''}} ">
                          <a class="nav-link" href="/asset/department/{{ $cat->id }}">{{ $cat->deptname }}</a>
                        </li>
                @endforeach
                  </ul>  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
            
        </div>

    </div> 
</div>
@endsection
