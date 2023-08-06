@extends('layouts.app')
@section('title','Edit '. $post->title)
{{--@section('dashboard-title','Edit')--}}

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <!-- data table start -->
        <div class="col-md-8 mt-5">
            <a class="btn btn-dark m-3" href="{{url('dashboard/posts')}}">برگشت</a>

            <div class="card">
                <div class="card-header bg-dark text-light h4">
                    ویرایش
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('dashboardposts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('Patch')
                                @include('form-alerts')

                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title" class="col-form-label">عنوان*</label>
                                            <input class="form-control input @if($errors->has('title')) border border-danger @endif" value="{{old('title') ?? $post->title}}" type="text" id="title" name="title" required>
                                        </div>
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="image" class="col-form-label">Post banner</label>--}}
{{--                                            <input class="form-control" type="file" value="" id="image" name="image"  accept=".jpg,.jpeg,.png">--}}
{{--                                            <small class="form-text text-muted">JPG,PNG in 1280*720px | Max: 2MB</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="editor" class="col-form-label">متن خبر*</label>
                                            <textarea class="form-control @if($errors->has('content')) border border-danger @endif" id="editor" name="content" rows="7">{{old('content') ?? $post->content}}</textarea>
                                        </div>
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="published" class="col-form-label">Publish now?</label>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input  onclick="checkboxHelper(this)" class="form-check-input" type="checkbox" id="published" name="published" @if($post->published===1) CHECKED @endif value="{{$post->published }}">--}}
{{--                                                <label class="form-check-label" for="published">--}}
{{--                                                    Publish--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="form-group my-4">
                                    <button type="submit" class="btn btn-primary">ویرایش</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
    </div>

@endsection
@section('script')
    <script src="{{url('js/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
{{--    <script>--}}
{{--        const checkboxHelper = checkbox => {--}}
{{--            if(document.getElementById('published').value==1){--}}
{{--                document.getElementById('published').value=0;--}}
{{--            }else{--}}
{{--                document.getElementById('published').value=1;--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}
@endsection
