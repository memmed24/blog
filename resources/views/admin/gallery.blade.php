@extends('admin.layout')

@section('content')


<div class="container">
<div class="row">
    <div class="col-md-6">
      <h3>Qaleriya</h3>
    </div>
    <div class="col-md-offset-4 col-md-2">
    <button type="button" style="margin-top:12px" class="btn btn-success" data-toggle="modal" data-target="#modal">Əlave et</button>

      <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Şəkil yaxud video əlavə et</h4>
            </div>
            <form action="{{url('/admin/gallery/create')}}" method="post"  enctype="multipart/form-data">
            
            <div class="modal-body">

                <div class="form-group">
                  @csrf
                  <label for="name">Başlıq</label>
                  <input name="caption" type="text" class="form-control"  id="name"  placeholder="Adı daxil edin" required>
                </div>
                <div class="form-group">
                  <label for="name">Şəkil/Video</label>
                  <select name="type" class="form-control" id="">
                    <option value="0">Şəkil</option>
                    <option value="1">Video</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="file" style="border: 1px solid #e3e3e3; border-style:dashed; padding: 10px 15px; cursor: pointer">Foto seçin</label>
                  <input type="file" style="display:none" name="file" id="file">
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
        <th>Başlıq</th>
        <th>Şəkil(Video)</th>
        <th>Action</th>
        <th>Akitv/Deaktiv</th>
      </tr>
    </thead>
    <tbody>
      @foreach($galleries as $gallery)

      <tr>
        <td> {{$gallery->id}}.
          {{$gallery->caption}}</td>
        <td>
          @if($gallery->type == 0)
          <img height="100" src="/{{$gallery->source}}" alt="">
          @elseif($gallery->type ==1)
          <video height="100" src="/{{$gallery->source}}"></video>
          @endif

        </td>
        <td>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#update{{$gallery->id}}">Redakte</button>

          <div id="update{{$gallery->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Silməyə əminsiz?</h4>
                </div>
                <form action="{{url('/admin/gallery/update')}}" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    @csrf
                    <label for="name">Başlıq</label>
                    <input name="caption" type="text" class="form-control"  id="name"  value="{{$gallery->caption}}" required>
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$gallery->id}}">
                <div class="modal-footer">
                  <input type="submit" value="Dəyiş" class="btn btn-success">
                  <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                </div>
                </form>
              </div>

            </div>
          </div>

          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$gallery->id}}">Sil</button>

          <div id="{{$gallery->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Silməyə əminsiz?</h4>
                </div>
                <div class="modal-body">
                  <p>Bir dəfə silindəkdən sonrə qaleriya əlavə et düyməsindən yenidən əlavə edə bilərsiz. </p>
                </div>
                <div class="modal-footer">
                  <a href="{{url('/admin/gallery/delete').'/'.$gallery->id}}" class="btn btn-danger">Sil</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                </div>
              </div>

            </div>
          </div>

          

        </td>
        <td>
          <form action="{{url('/admin/gallery/active')}}" method="post">
            @csrf
            <input type="hidden" value="{{$gallery->id}}" name="id">
            @if($gallery->active == 0)
              <input type="submit" class="btn btn-secondary" value="Active et">
            @else
              <input type="submit" class="btn btn-dark" value="Deactive et">
            @endif
          </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

{{$galleries->links()}}

@endsection