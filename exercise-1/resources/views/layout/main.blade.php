<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        .light {
            color: black;
            background-color: white;
        }

        .dark {
            color: white;
            background-color: black;
        }

    </style>
</head>

<body class="{{ $theme }}">
    @include('components.logo')

    @include('components.header')

    @yield('content')

</body>

</html>
