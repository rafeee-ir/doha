<!DOCTYPE html>
<html>
<head>
    <title>قطر اکسپو</title>
</head>
<body>
<h1>{{ $mailData['subject'] }}</h1>
<p>{{ $mailData['message'] }}</p>

<p>by: {{ $mailData['name'] }}</p>
<p>Tel: <a href="tel:{{ $mailData['mobile'] }}">{{ $mailData['mobile'] }}</a></p>
<p>Email: <a href="mailto={{ $mailData['email'] }}">{{ $mailData['email'] }}</a></p>

<p>Address: {{ $mailData['url'] }}</p>

<p>این ایمیل توسط تکمیل فرم ارتباط با ما در سایت قطر اکسپو ارسال شده است</p>
</body>
</html>
