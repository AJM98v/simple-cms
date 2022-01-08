@extends('layouts.auth.master')

@section('content')
<div class="container">
    <div class="justify-content-center login-box w-50 ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">{{ __('فراموشی پسورد') }}</div>

                <div class="card-body bg-dark-gradient">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('آدرس ایمیل :') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="w-50 m-auto text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تایید') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
