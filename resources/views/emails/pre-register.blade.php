<!DOCTYPE html>
<html>
<head>
    <title>قطر اکسپو</title>
</head>
<body>
<h1>Company Name: {{ $mailData['company'] }}</h1>
For:
@foreach($mailData['for'] as $item)
    @if($item==1)
        <p>اجاره غرفه در پاویون</p>
    @elseif($item==2)
        <p>فروش محصول در اکسپو</p>
    @elseif($item==3)
        <p>شرکت در تور گروهی تجاری</p>
    @elseif($item==4)
        <p>شرکت در تور تجاری</p>
    @endif
@endforeach
Category:
@forelse($mailData['category'] as $item)
    <p>{{$item}}</p>
@empty
    <p>$mailData['category']</p>
@endforelse

<p>CEO: {{ $mailData['ceo'] }}</p>
<p>Contact Person: {{ $mailData['contact-person'] }}</p>
<p>Description: {{ $mailData['description'] }}</p>


<p>Tel: <a href="tel:{{ $mailData['mobile'] }}">{{ $mailData['mobile'] }}</a></p>
<p>Email: <a href="mailto={{ $mailData['email'] }}">{{ $mailData['email'] }}</a></p>
<p>Web: <a href="{{ $mailData['site'] }}">{{ $mailData['site'] }}</a></p>
<p>Address: {{ $mailData['url'] }}</p>



<p>این ایمیل توسط تکمیل فرم پیش ثبت نام در سایت قطر اکسپو ارسال شده است</p>
</body>
</html>
