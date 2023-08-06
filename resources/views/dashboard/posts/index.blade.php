@extends('layouts.app')
@section('title','Posts')
{{--@section('dashboard-title','Posts')--}}

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <!-- data table start -->
        <div class="col-md-8 mt-5">
            <a class="btn btn-dark m-3" href="{{url('dashboard/posts/create')}}">خبر جدید</a>
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <table id="" class="text-center table table-striped">
                            <thead class="text-capitalize">
                            <tr>
                                <th>عنوان</th>
                                <th>توسط</th>
                                <th></th>
                                <th>ویرایش</th>
{{--                                <th></th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td><span class="badge">{{$post->diff}}</span></td>

                                    <td>

                                        <form action="{{ route('dashboardposts.destroy',$post->id) }}" method="POST" class=""  onSubmit="if(!confirm('Are you sure?')){return false;}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="btn-group btn-group-sm" role="group" aria-label="action-button-group" dir="rtl">
                                                <a href="{{route('blog.show',$post->slug)}}" target="_blank" type="button" class="btn btn-outline-secondary" title="visit {{$post->title}}">نمایش</a>
                                                <a href="{{route('dashboardposts.update',$post->id)}}" type="button" class="btn btn-warning" title="Edit {{$post->title}}">ویرایش</a>
                                                <button type="submit" class="btn btn-danger" title="Delete {{$post->title}}">حذف</button>
                                            </div>
                                        </form>


                                    </td>
{{--                                    <td>--}}
{{--                                        {!! $post->content !!}--}}
{{--                                    </td>--}}
                                </tr>
                            @empty
                                There is no Posts!
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
