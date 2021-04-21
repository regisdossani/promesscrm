@extends('layouts.app')
 @include('inc.styles')

@section('content')
    <div class="log-w3">
        <div class="w3layouts-main">

            <h2>CONNEXION ADMIN</h2>
            <div class="card-header">
                 {{ isset($url) ? ucwords($url) : ""}}{{ __('Connexion') }}
            </div>
            <div class="card-body">
                @isset($url)
                <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                    @csrf

                    <div class="form-group">
                        <label for="email" class="control-label">{{'Email'}}</label>
                        <input type="email" class="ggg form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholder="Votre email" required>
                               @error('email')
                                   <span class="ggg" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">{{'Mot de Passe'}}</label>
                        <input type="password" class="ggg form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Votre Mot de passe" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                   <div class="form-group">
                      {{-- <span><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Se souvenir de Moi</span> --}}
                      <input type="submit" value="Se connecter" name="login">
                     {{--  <button type="submit" class="btn btn-primary">
                               {{ __('Login') }}
                            </button> --}}

                             @if (Route::has('admin.password.request'))
                               <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                {{ __('Mot de Passe oublié?') }}
                               </a>
                            @endif
                             <div class="clearfix"></div>
                    </div>
               </form>
            </div>
            </div>
               {{-- <p><a href="/register">Créer un compte</a></p> --}}
       </div>
 </div>

{{-- @include('inc.footer') --}}
@yield('scripts')
@endsection

{{-- @include('inc.footer') --}}
