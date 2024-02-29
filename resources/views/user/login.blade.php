<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div class="container d-flex vh-100">
        <div class="my-auto align-items-center py-4 mx-auto justify-content-center" style="min-width: 300px;">
            <form action="/login" method="POST">
                @csrf

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}" id="email" name="email" type="email" class="form-control" aria-describedby="email">
                    @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" class="form-control" aria-describedby="password">
                    @error('password')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Sign In</button>
                <div id="emailHelp" class="form-text">Don&#039;t have an account ?, <a class="text-decoration-none" href="/registration">Sign up here.</a></div>
            </form>
        </div>
    </div>
</body>

</html>