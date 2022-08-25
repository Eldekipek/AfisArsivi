@extends('back.layouts.master')
@section('title','Tüm Kullanıcılar')
@section('content')

{{--    <div class="row">--}}
{{--        <div class="col-md-4">--}}
{{--            <div class="card shadow mb-4">--}}
{{--                <div class="card-header py-3">--}}
{{--                    <h6 class="m-0 font-weight-bold text-primary">Yeni Kategori Oluştur</h6>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('category.create')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Kategori Adı</label>--}}
{{--                            <input type="text" class="form-control" name="category" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-primary btn-block">Ekle</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>

                                <th>Adı</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($users)&&!is_null($users))
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>ROL</td>

                                    <td>

{{--                                        <a user-id="{{$user->id}}" class="btn btn-sm btn-primary edit-click" title="Kullanıcı Ayarları"><i class="fa fa-edit text-white"></i></a>--}}
                                        <a user-id="{{$user->id}}" user-name="{{$user->name}}" class="btn btn-sm btn-danger remove-click" title="Kullanıcıyı Sil"><i class="fa fa-times text-white"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- Modal -->--}}
{{--    <div id="editModal" class="modal fade" role="dialog">--}}
{{--        <div class="modal-dialog">--}}

{{--            <!-- Modal content-->--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title">Kullanıcı Ayarları</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form method="post" action="{{route('category.update')}}">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="">Kategori Adı</label>--}}
{{--                            <input id="category" type="text" class="form-control" name="category">--}}
{{--                            <input type="hidden" name="id" id="category_id">--}}
{{--                        </div>--}}
{{--                    --}}{{--                        <div class="form-group">--}}
{{--                    --}}{{--                            <label for="">Kategori Slug</label>--}}
{{--                    --}}{{--                            <input id="slug" type="text" class="form-control" name="slug">--}}
{{--                    --}}{{--                        </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>--}}
{{--                    <button type="submit" class="btn btn-success">Kaydet</button>--}}
{{--                </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <!-- Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-size: larger">Kullanıcıyı Silmek istediğinize emin misiniz ?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div id="body" class="modal-body">
                    <div class="alert alert-danger" id="articleAlert">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Kapat</button>
                    <form method="post" action="{{route('users.delete')}}">
                        @csrf
                        <input type="hidden" name="id" id="deleteId">

                        <button id="deleteButton" type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.remove-click').click(function (){
                id = $(this)[0].getAttribute('user-id');
                count = $(this)[0].getAttribute('user-count');
                name = $(this)[0].getAttribute('user-name');

                if(id==1){
                    $('#articleAlert').html(name+' kategorisi sabit kategoridir. Silinen diğer kategorilere aıt makaleler bu kategoriye eklenecektir.');
                    $('#body').show();
                    $('#deleteButton').hide();
                    $('#deleteModal').modal();
                    return;
                }

                $('#deleteButton').show();
                $('#deleteId').val(id);
                $('#articleAlert').html('');
                $('#body').hide();
                if(count>0){
                    $('#articleAlert').html('Bu kategoriye ait ' +count+' tane makale bulunmaktadır. Silmek istediğinize emin misiniz?');
                    $('#body').show();
                }
                $('#deleteModal').modal();
            })

        })

        $(function() {
            $('.edit-click').click(function (){
                id = $(this)[0].getAttribute('category-id');
                $.ajax({
                    type:'GET',
                    url:'{{route('category.getdata')}}',
                    data:{id:id},
                    success:function (data){
                        console.log(data);
                        $('#category').val(data.name)
                        $('#slug').val(data.slug)
                        $('#category_id').val(data.id)
                        $('#editModal').modal();
                    }
                })
            })

            $('.switch').change(function () {
                id = $(this)[0].getAttribute('category-id');
                statu = $(this).prop('checked');
                $.get("{{route('category.switch')}}", {id:id,statu:statu}, function (data, status){});
            })
        })
    </script>
@endsection
