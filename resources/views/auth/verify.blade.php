@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تاییدیه پست الکترونیک') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک لینک تایید برای ایمیل شما ارسال شده است.') }}
                        </div>
                    @endif

                    {{ __('قبل از ادامه ایمیل خود را چک کنید شاید لینک فعال سازی قبلا ارسال شده باشد.') }}
                    {{ __('اگر ایمیل را دریافت نکرده اید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('اینجا بزنید تا یک لینک جدید دریافت کنید') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
