<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Holiday</title>
</head>

<body>

<h1>Free holiday</h1>

<p><strong>What type of real estate would you be interested in to stay in Sirava Park?</strong></p>

<p>{{ $objRequest->estate }}</p>

<p><strong>Would you be interested in rent or buy?</strong></p>

<p>{{ $objRequest->interested }}</p>

<p><strong>What amount would you willing to pay for this?</strong></p>

<p>{{ $objRequest->buy_from }} - {{ $objRequest->buy_to }} Eur</p>

<p>{{ $objRequest->rent_from }} - {{ $objRequest->rent_to }} Eur per day</p>

<p>Domes: {{ $objRequest->domes }}</p>

{{--<p><strong>What is your favorite area in Sirava Park?</strong></p>--}}

{{--<p>{{ $objRequest->favorite }}</p>--}}

<p><strong>Any suggestions for our development team?</strong></p>

<p>{{ $objRequest->comment }}</p>

<hr>

<p><strong>Name</strong></p>

<p>{{ $objRequest->name }}</p>

<p><strong>Phone</strong></p>

<p>{{ $objRequest->phone }}</p>

<p><strong>E-mail</strong></p>

<p>{{ $objRequest->email }}</p>

</body>
</html>
