@extends('layouts.app')
@include('inc.styles')

@section('content')
<div class="log-w3">
    <div class="w3layouts-main">
                <div class="card-header">
                    {{ __('RÉINITIALISATION DU MOT DE PASSE ADMIN') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.password.email') }}">
                        @csrf

                        <div class="form-group row">
                        </div>
                            <div class="form-group">
                                <label for="email" class="form-label">{{ __(' Votre E-Mail de connexion') }}</label>

                                <input id="email" type="email" class="ggg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer le lien de réinitialisation') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
