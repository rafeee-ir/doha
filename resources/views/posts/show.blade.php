@extends('layouts.app')
@section('title',$post->title)

@section('content')


    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$post->title}}</h1>
                <hr class="w-25">

                <a href="{{url('blog')}}" class="text-decoration-none badge bg-warning">اخبار</a>
                <span class="badge bg-info">{{$post->diff}}</span>

{{--                <p>{!! $post->content !!}</p>--}}
            </div>
            <div class="col-md-8 my-5">
                <img class="d-block w-100" style="object-fit: cover; aspect-ratio: 16/9"  src="@if(isset($post->image)) {{asset('storage/uploads/posts/'.$post->image)}} @else https://placehold.co/480x270?text={{$post->title}} @endif" alt="{{$post->title}}">
            </div>
            <div class="col-md-8">
{{--                <h1>{{$post->title}}</h1>--}}
{{--                <hr class="w-25">--}}
                {!! $post->content !!}
            </div>

        </div>
    </div>

@endsection





