<div class="row my-3 pt-5">
    <div class="col-12" id="pre-register-form">
        <div class="card">
            <div class="card-header">
                درخواست پیش ثبت نام
            </div>
            <div class="card-body">
                <form class="" action="{{route('per-registers.store')}}" method="post">
                    @csrf
                    @include('form-alerts')
                        <input type="hidden" name="url" value="{{url()->current()}}">
                    @auth
                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    @endauth
                    <div class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>متقاضی:</label>
                                <select class="@if($errors->has('for')) border border-danger @endif form-select" multiple aria-label="multiple select example" name="for[]">
                                    <option>یک یا چند گزینه را انتخاب کنید</option>
                                    <option value="1" {{Request::is('pre-register/pavilion') ? 'selected' : ''}}>اجاره غرفه در پاویون</option>
                                    <option value="2" {{Request::is('pre-register/shop') ? 'selected' : ''}}>فروش محصول در اکسپو</option>
                                    <option value="3" {{Request::is('pre-register/visitor') ? 'selected' : ''}}>شرکت در تور گروهی تجاری</option>
                                    <option value="4" {{Request::is('pre-register/visitor') ? 'selected' : ''}}>شرکت در تور تجاری</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>زمینه فعالیت</label>
                                {{--                                <input class="@if($errors->has('contact-person')) border border-danger @endif form-control" name="contact-person" type="text" placeholder="آقای ایمانی" value="{{old('contact-person')}}">--}}
                                <select class="@if($errors->has('category')) border border-danger @endif form-select" multiple aria-label="multiple select example" name="category[]">
                                    <option>یک یا چند گزینه را انتخاب کنید</option>
                                    @foreach($categories as $item)
                                        <option value="{{$item->slug}}">{{$item->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label>نام شرکت/سازمان</label>
                                <input class="@if($errors->has('company')) border border-danger @endif form-control" name="company" type="text" placeholder="" value="{{old('company')}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>نام مدیر عامل</label>
                                <input class="@if($errors->has('ceo')) border border-danger @endif form-control" name="ceo" type="text" placeholder="" value="{{old('ceo')}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>نام فرد رابط</label>
                                <input class="@if($errors->has('contact-person')) border border-danger @endif form-control" name="contact-person" type="text" placeholder="" value="{{old('contact-person')}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label>تلفن در دسترس</label>
                                <input class="@if($errors->has('mobile')) border border-danger @endif form-control" name="mobile" type="text" placeholder="" value="{{old('mobile')}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label>پست الکترونیکی<span></span></label>
                                <input class="@if($errors->has('email')) border border-danger @endif form-control" name="email" type="email" placeholder="" value="{{old('email')}}">
                            </div>
{{--                            <div class="form-floating">--}}
{{--                                <input type="email" class="@if($errors->has('email')) border border-danger @endif form-control" name="email" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">--}}
{{--                                <label for="floatingInput">پست الکترونیکی</label>--}}
{{--                            </div>--}}
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label>آدرس وبسایت</label>
                                <input class="@if($errors->has('site')) border border-danger @endif form-control" name="site" type="text" placeholder="" value="{{old('site')}}">
                            </div>
                        </div>
                        <div class="col-12">
{{--                            <div class="form-group message">--}}
{{--                                <label>توضیحات تکمیلی<span></span></label>--}}
{{--                                <textarea class="@if($errors->has('description')) border border-danger @endif form-control" name="message" placeholder="پیام خود را بنویسید">{{old('message')}}</textarea>--}}
{{--                            </div>--}}
                            <div class="form-floating">
                                <textarea class="@if($errors->has('description')) border border-danger @endif form-control" name="description" placeholder="" id="description" style="height: 100px">{{old('description')}}</textarea>
                                <label for="description">توضیحات تکمیلی</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group button">
                                <button type="submit" class="btn btn-success">ثبت درخواست</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
