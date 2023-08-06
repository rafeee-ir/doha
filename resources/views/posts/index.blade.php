@extends('layouts.app')
@section('title','Posts')

@section('content')

    <!-- Start Shop Blog  -->
    <section class="shop-blog section mt-5">
        <div class="container">

            <div class="row blog-single-main">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-12 mb-4" style="margin-top: 30px">
                                <!-- Start Single Blog  -->
                                <div class="row d-md-flex justify-content-around align-items-center">
                                    <div class="col-md-6 col-12">
                                        <a href="{{url('/blog',$post->slug)}}" title="{{$post->title}}">
                                            <img class="d-block w-100" style="object-fit: cover; aspect-ratio: 16/9; border-radius: 150px"  src="@if(isset($post->image)) {{asset('storage/uploads/posts/'.$post->image)}} @else https://placehold.co/480x270?text={{$post->title}} @endif" alt="{{$post->title}}">
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-12 px-4 p-4">
{{--                                        <p class="date">{{$post->created_at}}</p>--}}
                                        <a href="{{url('/blog',$post->slug)}}" class="title text-decoration-none"><h4>{{$post->title}}</h4></a>
                                        <p class="card-text">{{strip_tags(Str::limit($post->content,150))}}</p>
{{--                                        <a href="{{url('/post',$post->id)}}" class="more-btn">Continue Reading</a>--}}
                                    </div>
                                </div>
                                <!-- End Single Blog  -->
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="main-sidebar">
                                    <h3>There is no blog posts yet.</h3>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <img src="{{url('images/more-about.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Blog  -->


@endsection
