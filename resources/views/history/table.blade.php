<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Senarai Pengubahsuaian Data Oleh Pengguna</h2>
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
            <th>No Harta Modal/ No Asset</th>
            <th>No Siri</th>
            <th>Pengguna</th>
            <th>Perkara Yang di Ubah</th>
            <th>Sebelum Pengubahsuaian</th>
            <th>Setelah Pengubahsuaian</th>
            
        </tr>
        @foreach ($history as $s)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $s->asset_no}}</td>
            <td>{{ $s->serial_no}}</td>
            <td>{{ $s->user_id}}</td>
            <td>{{ $s->key}}</td>
            <td>{{ $s->old_value}}</td>
            <td>{{ $s->new_value}}</td>

        </tr>
        @endforeach
    </table>