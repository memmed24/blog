@extends('admin.layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Xəbərlər</h3>
    </div>
    <div class="col-md-offset-4 col-md-2">
    <button type="button" style="margin-top:12px" class="btn btn-success" data-toggle="modal" data-target="#modal">Əlave et</button>

      <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Xəbər əlavə et</h4>
            </div>
            <form action="{{url('/admin/news')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                <div class="form-group">
                  <label for="title">Başlıq(az)</label>
                  <input type="text" name="title_az" class="form-control"  id="title"  placeholder="Başlıq daxil edin">
                </div>
                <div class="form-group">
                  <label for="title">Başlıq(en)</label>
                  <input type="text" name="title_en" class="form-control"  id="title"  placeholder="Başlıq daxil edin">
                </div>
                <div class="form-group">
                  <label for="title">Başlıq(ru)</label>
                  <input type="text" name="title_ru" class="form-control"  id="title"  placeholder="Başlıq daxil edin">
                </div>

                <div class="form-group">
                  <label for="title">Link</label>
                  <input type="text" name="link" class="form-control"  id="link"  placeholder="Link">
                </div>
                <div class="form-group">
                  <label for="content">Kontent(az)</label>
                  <textarea name="content_az" id="content" cols="30" rows="10" class="form-control"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="content">Kontent(en)</label>
                  <textarea name="content_en" id="content" cols="30" rows="10" class="form-control"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="content">Kontent(ru)</label>
                  <textarea name="content_ru" id="content" cols="30" rows="10" class="form-control"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="category">Kateqoriya</label>
                  <select name="category" class="form-control" id="category">
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
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
        <th>İçərik</th>
        <th>Şəkil</th>
        <th>Kateqoriya</th>
        <th>Action</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
      @foreach($news as $new)

      <tr>
        <td>
          <div>{{$new->title_az}}</div>
          <div>{{$new->title_en}}</div>
          <div>{{$new->title_ru}}</div>
        </td>
        <td>
          <div>{{$new->content_az}}</div>
          <div>{{$new->content_en}}</div>
          <div>{{$new->content_ru}}</div>
        </td>
        <td>
          <img height="100" src="/{{$new->photo}}" alt="">
        </td>
        <td>{{$new->getCategoryAttr()}}</td>
        <td>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#{{$new->id}}">Redakte</button>

          <div id="{{$new->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Xəbər redakte et</h4>
                </div>
                <form action="{{url('/admin/news/update')}}" enctype="multipart/form-data" method="post">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="text">Başlıq(az)</label>
                    <input name="title_az" type="text" class="form-control"  id="text" value="{{$new->title_az}}">
                    <label for="text">Başlıq(en)</label>
                    <input name="title_en" type="text" class="form-control"  id="text" value="{{$new->title_en}}">
                    <label for="text">Başlıq(ru)</label>
                    <input name="title_ru" type="text" class="form-control"  id="text" value="{{$new->title_ru}}">
                  </div>

                  <div class="form-group">
                    <label for="content">Kontent(az)</label>
                    <textarea name="kontent_az" id="content" cols="30" rows="10" class="form-control">{{$new->content_az}}
                    </textarea>
                    <label for="content">Kontent(en)</label>
                    <textarea name="kontent_en" id="content" cols="30" rows="10" class="form-control">{{$new->content_en}}
                    </textarea>
                    <label for="content">Kontent(ru)</label>
                    <textarea name="kontent_ru" id="content" cols="30" rows="10" class="form-control">{{$new->content_ru}}
                    </textarea>
                  </div>
                  <input type="hidden" value="{{$new->id}}}" name="id">
                  <div class="form-group">
                    <label for="category">Kateqoriya</label>
                    <select name="category" id="category" class="form-control">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  @csrf
                  <div class="form-group">
                    <label for="text">Foto</label>

                  </div>

                  <div class="form-group">

                    <input type="submit" class="btn btn-success" value="Deyish">

                  </div>
                </div>

                </form>
              </div>

            </div>
          </div>


          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$new->id}}">Sil</button>

          <div id="delete{{$new->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Silməyə əminsiz?</h4>
                </div>
                <div class="modal-body">
                  <p>Bir dəfə silindəkdən sonrə xəbər əlavə et düyməsindən yenidən əlavə edə bilərsiz. </p>
                </div>
                <div class="modal-footer">
                  <a href="{{url('/admin/news/delete').'/'.$new->id}}" class="btn btn-danger">Sil</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                </div>
              </div>

            </div>
          </div>

        </td>
        <td>
          <form action="{{url('/admin/news/active')}}" method="post">
            @csrf
            <input type="hidden" value="{{$new->id}}" name="id">
            @if($new->active == 0)
              <input type="submit" class="btn btn-secondary" value="Active et">
            @else
              <input type="submit" class="btn btn-dark" value="Deactive et">
            @endif
          </form>
        </td>

      @endforeach
    </tbody>
    {{$news->links()}}
  </table>
</div>




@endsection