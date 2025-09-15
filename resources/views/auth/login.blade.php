<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(to bottom, #c4a43c 10%, #ffffff 90%);">

    <div class="card shadow-lg p-4" style="max-width: 350px; width: 100%;">
        <!-- Logo -->
        <div class="text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo PUPR" class="img-fluid"
                style="width: 150px; height: 100px; object-fit: contain;">
        </div>

        <!-- Form -->
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                    required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
