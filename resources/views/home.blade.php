@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 hvr-float">
            <div class="card">
                <div class="card-header">غرفه</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row p-4 g-2">
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">پیش ثبت نام</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">ارسال مدارک</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">بررسی وضعیت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 m-4  hvr-float">
            <div class="card">
                <div class="card-header">محصول</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row p-4 g-2">
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">ثبت محصول</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">بررسی وضعیت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 m-4 hvr-float">
            <div class="card border border-info">
                <div class="card-header">گردشگری</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row p-4 g-2">
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">درخواست اقامت</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">بررسی وضعیت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
