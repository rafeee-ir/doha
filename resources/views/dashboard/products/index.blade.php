@extends('layouts.app')
@section('title','Products')
{{--@section('dashboard-title','Products')--}}

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <!-- data table start -->
        <div class="col-md-8 mt-5">
            <a class="btn btn-dark m-3" href="{{url('dashboard/products/create')}}">محصول جدید</a>

            <div class="card">
                <div class="card-body">
                    {{--                    <h4 class="header-title">{{$users_count}} users</h4>--}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="data-tables datatable-dark">
                        <table id="dataTable" class="text-center table table-striped">
{{--                            <thead class="text-capitalize">--}}
{{--                            <tr>--}}
{{--                                <th>ID</th>--}}
{{--                                <th>Title</th>--}}
{{--                                <th>Added on</th>--}}
{{--                                <th>action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
                            <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->title}}</td>
{{--                                    <td>{{$user->email}}</td>--}}
                                    <td><span class="status-p bg-info">{{$product->created_at}}</span></td>
                                    <td>
                                        <form action="{{ route('dashboardproducts.destroy',$product->id) }}" method="POST" class="visually-hidden"  onSubmit="if(!confirm('Are you sure?')){return false;}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                There is no Products!
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
    </div>

@endsection
