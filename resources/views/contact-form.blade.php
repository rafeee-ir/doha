<div class="row my-3">
<div class="col-12" id="contact">
    <div class="card">
        <div class="card-header">
            فرم تماس با ما
        </div>
        <div class="card-body">
            <form class="" action="{{route('contact.store')}}" method="post">
                @csrf
                @include('form-alerts')
                <input type="hidden" name="url" value="{{url()->current()}}">

                @auth
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                @endauth
                <div class="row g-3">
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>نام</label>

                            <input class="@if($errors->has('name')) border border-danger @endif form-control" name="name" type="text" placeholder="علی احمدی" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>موضوع</label>
                            <input class="@if($errors->has('subject')) border border-danger @endif form-control" name="subject" type="text" placeholder="امور ثبت نام" value="{{old('subject')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>پست الکترونیکی<span>*</span></label>
                            <input class="@if($errors->has('email')) border border-danger @endif form-control" name="email" type="email" placeholder="info@qatarexpo.ir" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>تلفن شما</label>
                            <input class="@if($errors->has('mobile')) border border-danger @endif form-control" name="mobile" type="text" placeholder="091212345678" value="{{old('mobile')}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group message">
                            <label>your message<span>*</span></label>
                            <textarea class="@if($errors->has('message')) border border-danger @endif form-control" name="message" placeholder="پیام خود را بنویسید">{{old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group button">
                            <button type="submit" class="btn btn-success">ارسال پیام</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
