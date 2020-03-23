@extends('layouts.app')

@section('content')
<div class="background-login">
    <div class="row justify-content-end">
        <div class="col-md-5">

            <div class="card card-block h-100 justify-content-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p style="margin-top:0pt;margin-bottom:0pt;margin-left:0in;text-align:center;"><span style="font-size:32px;font-family:Garamond;color:#C00000;font-weight:bold;">P</span><span style="font-size:24px;font-family:Garamond;color:black;">rofessioanlism –&nbsp;</span><span style="font-size:32px;font-family:Garamond;color:#C00000;font-weight:bold;">Q</span><span style="font-size:24px;font-family:Garamond;color:black;">uality –&nbsp;</span><span style="font-size:32px;font-family:Garamond;color:#C00000;font-weight:bold;">P</span><span style="font-size:24px;font-family:Garamond;color:black;">roactiveness –&nbsp;</span><span style="font-size:32px;font-family:Garamond;color:#C00000;font-weight:bold;">O</span><span style="font-size:24px;font-family:Garamond;color:black;">penness –&nbsp;</span><span style="font-size:32px;font-family:Garamond;color:#C00000;font-weight:bold;">C</span><span style="font-size:24px;font-family:Garamond;color:black;">ommitment&nbsp;</span></p>
</div>
@endsection
