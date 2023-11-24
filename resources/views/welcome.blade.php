<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel</title>

</head>

<body>


    <div class="container-fluid">
        <div class="container mx-auto">
            <h1 class="text-center mt-4 mb-4">Welcome to User Authentication Page</h1>
        </div>
        <div class="container d-grid gap-2 col-6 mx-auto">
            <a type="button" class="btn btn-primary btn-lg" href="{{ route('login') }}">Log in</a>
            <a type="button" class="btn btn-primary btn-lg" href="{{ route('register') }}">Registration</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>
