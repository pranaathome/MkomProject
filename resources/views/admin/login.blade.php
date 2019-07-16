<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap_4_3_1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>MKom Project | Production in Progress...</title>
  </head>
  <body>
    <div id="container">
      <div class="form-wrap">
        <h1>ADMIN | Sign In</h1>
        <form method="POST" action="{{ route('admin.login.submit') }}">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" />

            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" />

            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

          </div>                 
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
          </div>
          <button type="submit" class="btn">Sign In</button>
        </form>
      </div>
    <script src="{{ asset('js/jquery_3_4_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_4_3_1/js/bootstrap.min.js') }}"></script>
  </body>
</html>