<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('inc.style')
    <title>@yield('title')</title>

</head>

<body class="container">

    <main>
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    @include('inc.script')
</body>

</html>
