@extends('layouts.auth.Master')

@section('content')


<div class="login-box">
    <div class="justify-content-center m-auto">
        <div class="col-md-12 container m-auto">
            <div class="card bg-dark-gradient">
                <div class="card-header bg-dark">{{ __('ورود') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('آدرس ایمیل') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('رمز عبور') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <div class="col-md-12 m-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا بخاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-flat btn-success">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        {{ __('رمز عبور خود را فراموش کردم') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
