<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
        }

        .break {
            page-break-after: always;
        }

        .footer table {
            width: 100%;
        }

        .footer table td {
            color: #b5b4b6;
        }

        .header {
            text-align: center;
        }

        .header-logo {
            height: 60px;
        }

        .lang {
            color: #003399;
        }

        table.details {
            background-color: #dddddd;
            border-collapse: collapse;
            width: 100%;
        }

        table.details td,
        table.details th {
            border: 1px solid #888888;
            vertical-align: top;
            padding: 5px;
            width: 50%;
        }

        table.details td p.text-center {
            display: block;
            text-align: center !important;
            width: 100%;
        }

        table.signatures {
            margin-top: 50px;
            margin-bottom: 30px;
            width: 100%;
        }

        table.signatures td {
            width: 50%;
        }

        table.signatures td.signature {
            text-align: center;
            padding-top: 80px;
            vertical-align: top;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
<sethtmlpageheader name="cee" show-this-page="1" />
<sethtmlpagefooter name="cee" />

@yield('content')

</body>
</html>