<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layouts.app')
@include('inc.styles')
@section('content')
<div class="reg-w3">
<div class="w3layouts-main">
    <h2>{{ __('Enrégistrement') }}</h2>
    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}}</div>
    <div class="card-body">
        @isset($url)
        {{-- <form action="{{ route('register') }}" method="post" > --}}
            <form method="POST" action='{{ url("regiser/$url") }}' >
                @else
                <form method="POST" action="{{ route('register') }}" >
                @endisset
            @csrf
			<input id="nom" type="text" class="ggg form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Nom d'Utilisateur " value="{{ old('nom') }}" required autocomplete="nom" autofocus>
            @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="email" class="ggg form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre Email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="image" type="file" class="ggg form-control @error('image') is-invalid @enderror" name="image" placeholder="Votre photo" >
            @error('image')
            <span class="invalid-feedback" role="alert">
                <span>{{ $message }}</span>
            </span>
            @enderror

			<input id="password" type="password" class="ggg form-control @error('password') is-invalid @enderror" name="password" placeholder="Saisir le mot de passe" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="ggg">
                                    <input id="password-confirm" type="password" class="ggg form-control" name="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                                </div>

                <div class="clearfix"></div>
                <div>
                    <input type="submit" value="S'Enrégistrer" name="sinin">
                </div>
				{{-- <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button> --}}

        </form>
    </div>
</div>
</div>

@yield('scripts')
@endsection
