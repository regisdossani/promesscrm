@extends('layouts.app')
@include('inc.styles')

@section('content')
    <div class="log-w3">
        <div class="w3layouts-main">

            <h2>VOIR VOTRE DOSSIER</h2>

            <div class="card-body">

                @if ($message = Session::get('flash_message'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                <br/><br/>

                <form method="POST" action='{{ url('dossier') }}' >
                    @csrf
                    <div class="form-group">
                        <label for="tel" class="control-label">{{'Entrez votre code' }}</label>

                            <input type="text" class=" form-control"    name="code"  placeholder="Veuillez entrer votre code" required>
                    </div>
                    <div class="form-group">
                             <input type="submit" value="Se connecter" >
                    <div class="clearfix"></div>
                    </div>
               </form>
            </div>
            </div>
               {{-- <p><a href="/register">Créer un compte</a></p> --}}
       </div>
 </div>

@yield('scripts')
@endsection

