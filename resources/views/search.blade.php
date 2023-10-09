@extends('layouts.app')
@section('title','جستجو ' . request()->s ?? '')

@section('content')


    <div class="container my-5">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="alert my-5 alert-secondary alert-dismissible fade show" role="alert"><strong>{{$products->count()}}</strong> محصول با "{{request()->s}}"
{{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
                </div>
            </div>
            @forelse($products as $product)
                <div class="col-lg-3 col-md-4  mb-3">
                    <a href="{{url('/products',$product->slug)}}">
                        <div class="card" style="">
                            <img src="@if(isset($product->featured_image)){{asset('storage/uploads/products/'.$product->featured_image)}}@else https://placehold.co/300x300?text={{$product->title}} @endif" alt="{{$product->title}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{Str::limit($product->description,100)}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price (FOB): {{$product->price_fob}}{{$product->price_currency}}</li>
                                <li class="list-group-item">Min. order (Qty): {{$product->minimum_order_qty}}</li>
                                <li class="list-group-item">Brand: {{$product->supplier->title}}</li>
                            </ul>
                            {{--                            <div class="card-body">--}}
                            {{--                                <a href="#" class="card-link">Labels</a>--}}
                            {{--                                <a href="#" class="card-link">Categories</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-md-8">
                    چیزی یافت نشد
                </div>
            @endforelse
        </div>
    </div>
@endsection
