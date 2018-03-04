@extends('admin.layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Adminlər</h3>
    </div>
    <div class="col-md-offset-4 col-md-2">
    <button type="button" style="margin-top:12px" class="btn btn-success" data-toggle="modal" data-target="#modal">Əlave et</button>

      <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Admin əlavə et</h4>
            </div>
            <form action="{{url('/admin/create')}}" method="post">
            
            <div class="modal-body">

                <div class="form-group">
                  @csrf
                  <label for="name">Ad</label>
                  <input name="name" type="text" class="form-control"  id="name"  placeholder="Adı daxil edin" required>
                </div>
                <div class="form-group">
                  <label for="surname">Soyad</label>
                  <input name="surname" type="text" class="form-control"  id="surname"  placeholder="Soyadı daxil edin" required>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Email-i daxil edin" required>
                </div>
                <div class="form-group">
                  <label for="password">Şifrə</label>
                  <input name="password" type="password" class="form-control" id="password"  placeholder="Şifrəni daxil edin" required>
                </div>

            </div>
            <div class="modal-footer">
              <input type="submit" value="Əlave et" class="btn btn-success">
              <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
            </div>
            </form>
            
          </div>

        </div>
      </div>
    </div>
  </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admins as $admin)

      <tr>
        <td>{{$admin->name}}</td>
        <td>{{$admin->surname}}</td>
        <td>{{$admin->email}}</td>
        <td>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$admin->id}}">Sil</button>

          <div id="{{$admin->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Adminlikdən silməyə əminsiz?</h4>
                </div>
                <div class="modal-body">
                  <p>Bir dəfə silindəkdən sonrə admin əlavə et-dən yenidən əlavə edə bilərsiz.</p>
                </div>
                <div class="modal-footer">
                  <a href="{{url('/admin/remove').'/'.$admin->id}}" class="btn btn-danger">Sil</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                </div>
              </div>

            </div>
          </div>



          <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#update{{$admin->id}}">Redakte</button>

            <div id="update{{$admin->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Redakte et</h4>
                  </div>
                  <form action="{{url('/admin/update')}}" method="POST">
                  @csrf
                  <div class="modal-body">
                    <p>Adminin adını, soyadını və email-ini redakte et</p>
                      <div class="form-group">
                        <label for="name">Ad</label>
                        <input name="name" type="text" class="form-control"  id="name" value="{{$admin->name}}">
                      </div>
                      <div class="form-group">
                        <label for="surname">Soyad</label>
                        <input name="surname" type="text" class="form-control"  id="surname"  value="{{$admin->surname}}">
                      </div>
                      <input type="hidden" name="id" value="{{$admin->id}}">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{$admin->email}}">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Redakte et">
                    <!-- <a href="{{url('/admin/remove').'/'.$admin->id}}" class="btn btn-danger">Redakte et</a> -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                  </div>
                  </form>
                  
                </div>

              </div>
            </div>

        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>


{{$admins->links()}}


@endsection