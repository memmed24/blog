@extends('admin.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Fayllar</h3>
        </div>
        <div class="col-md-offset-4 col-md-2">
            <button type="button" style="margin-top:12px" class="btn btn-success" data-toggle="modal" data-target="#modal">Əlave et</button>

            <div id="modal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Fayl əlavə et</h4>
                        </div>
                        <form action="{{url('/admin/files')}}" method="post" enctype="multipart/form-data">

                            <div class="modal-body">

                                <div class="form-group">
                                    @csrf
                                    <label for="name">Başlıq</label>
                                    <input name="caption" type="text" class="form-control"  id="name"  placeholder="Başlıq daxil edin" required>
                                </div>
                                <div class="form-group">
                                    <label for="file" style="border: 1px solid #e3e3e3; border-style:dashed; padding: 10px 15px; cursor: pointer">Fayl seçin</label>
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


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Başlıq</th>
                <th>Fayl</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($files as $file)

                <tr>
                    <td>{{$file->caption}}</td>
                    <td>
                        <a href="/{{$file->source}}">{{$file->source}}</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$file->id}}">Sil</button>

                        <div id="{{$file->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Faylı silməyə əminsiz?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Bir dəfə silindəkdən sonrə fayl əlavə et düyməsindən yenidən əlavə edə bilərsiz.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{url('/admin/files/remove').'/'.$file->id}}" class="btn btn-danger">Sil</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">İmtina et</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
            <tbody>

            </tbody>
        </table>
</div>
{{$files->links()}}
@endsection