@extends('layouts.app')
@section('title','Brands')

@section('content')



<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                @forelse($suppliers as $supplier)
                    <div class="col-md-3 mb-3">
                        {{--                <div class="card mb-3" style="">--}}
                        {{--                    <div class="row g-0">--}}
                        {{--                        <div class="card-img-top">--}}
                        <a href="{{url('/brands',$supplier->slug)}}">

                            <img class="w-100" src="@if(isset($supplier->logo)){{asset('storage/uploads/suppliers/'.$supplier->logo)}}@else https://via.placeholder.com/370x370 @endif" alt="{{$supplier->title}}">
                        </a>
                        {{--                        </div>--}}
                        {{--                        <div class="col-md-12">--}}
                        {{--                            <div class="card-body">--}}
                        {{--                                <a href="{{url('/brands',$supplier->slug)}}">--}}
                        {{--            <a href="{{url('/brands',$supplier->slug)}}">--}}

                        <h3 class="card-title text-decoration-none my-4 text-center">{{$supplier->title}}</h3>
                        {{--            </a>--}}
                        {{--                                </a>--}}
                        {{--                                <p class="card-text">{{strip_tags(Str::limit($supplier->about,100))}}</p>--}}
                        {{--                                <p class="card-text"><small class="text-muted">Funded at {{ date('Y', strtotime($supplier->funded_at))}}</small></p>--}}
                        {{--                                <hr class="w-100">--}}
                        {{--                                <a href="{{url('brands',$supplier->slug)}}" class="btn btn-dark">مشاهده</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

                    </div>
                @empty
                    <div class="col-12">
                        There is no supplier here
                    </div>
                @endforelse
            </div>
        </div>
        <div class="col-lg-4">
            <img src="{{url('images/more-about.png')}}" alt="">

        </div>
    </div>
</div>
@endsection
