@extends('admin.layout.admin_template')
@section('title', 'Bài viết giới thiệu')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Bài viết giới thiệu</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}} <br>
                            @endforeach
                        </div>
                        @endif
                        @if(session('notification'))
                        <div class="alert alert-success">
                            {{session('notification')}}
                        </div>
                        @endif
                        <div>
                            <form method="post" action="/admin/article/put">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input require value="{{$article->title}}" type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <input require value="{{$article->description}}" type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <input require value="{{$article->content}}" type="text" name="content" class="form-control">
                                </div>
                                <div class="text-center col-md-12" style="margin-bottom: 30px;">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
