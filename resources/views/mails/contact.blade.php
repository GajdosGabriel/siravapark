<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact form</title>
</head>

<body>

<h1>Šírava Park contact form</h1>

<p><strong>Name</strong>: {{ $objRequest->name }}</p>

<p><strong>Phone</strong>: {{ $objRequest->phone }}</p>

<p><strong>E-mail</strong>: {{ $objRequest->email }}</p>

<p><strong>Message</strong>: {{ $objRequest->text }}</p>

<p><strong>Accommodations</strong>: {{ $objRequest->place }}</p>
<p><strong>Date arrive</strong>: {{ $objRequest->arrival }}</p>
<p><strong>Date departure</strong>: {{ $objRequest->departure }}</p>
<p><strong>No. adults</strong>: {{ $objRequest->adults }}</p>
<p><strong>No. kids</strong>: {{ $objRequest->kids }}</p>

</body>
</html>
