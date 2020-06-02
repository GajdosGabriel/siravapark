<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real Estate</title>
</head>

<body>

<h1>Real Estate - {{ $objRequest->re }}</h1>

<p><strong>Name</strong>: {{ $objRequest->name }}</p>

<p><strong>Phone</strong>: {{ $objRequest->phone }}</p>

<p><strong>E-mail</strong>: {{ $objRequest->email }}</p>

<p><strong>Message</strong>: {{ $objRequest->message }}</p>

</body>
</html>