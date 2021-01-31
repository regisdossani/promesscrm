@extends('inc.master')
@if (Auth::guard("admin")->check())
    @include('admins.sidebar')
@endif
@if (Auth::guard("equipe")->check())
    @include('equipes.sidebar')
@endif

@if (Auth::guard("apprenant")->check())
    @include('apprenants.sidebar')
@endif
@if (Auth::guard("formateur")->check())
    @include('formateurs.sidebar')
@endif

@section('content')



<section id="main-content">

<section class="wrapper">

        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <section  class="card">

						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>AJOUTER</strong> UNE ENTRÉES</h2>

                            </div>
                            <br/><br/>
                            <a href="{{ route('show.entres') }}" title="Précédent"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>

							<div class="widget-content padding">
								<div id="basic-form">
									<form action="{{ route('add.entres') }}" method="POST" role="form">
                                        <div class="col-md-6 mb-3 @if($errors->has('type_id')) has-error @endif">
                                            <label for="type_id">Types</label>
                                                <select class="form-control" name="type_id">
                                                    @foreach($types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-6 mb-3 @if($errors->has('date')) has-error @endif">
                                            <label for="date">Date</label>
                                            <input type="text" class="form-control datepicker-input"  name="date" data-mask="9999-99-99">
                                                    @if($errors->has('date')) <div class="help-block">
                                                    {{ $errors->first('date') }}
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="col-md-6 mb-3 @if($errors->has('nfacture')) has-error @endif">
                                            <label for="nfacture">N°Facture</label>
                                            <input type="text" class="form-control" name ="nfacture">
                                                @if($errors->has('nfacture')) <div class="help-block">
                                                {{ $errors->first('nfacture') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-3 @if($errors->has('quantite')) has-error @endif">
                                            <label for="quantite">Quantité</label>
                                            <input type="text" class="form-control" name="quantite" data-mask="999999" placeholder="999999">
                                            @if($errors->has('quantite')) <div class="help-block">
                                                {{ $errors->first('quantite') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-6 mb-3 @if($errors->has('prix_uni')) has-error @endif">
                                        <label for="prix_uni">Prix Unitaire</label>
                                        <input type="text" class="form-control" name="prix_uni" data-mask="999999" placeholder="999999">
                                        @if($errors->has('prix_uni')) <div class="help-block">
                                            {{ $errors->first('prix_uni') }}
                                        </div>
                                        @endif
                            </div>
                            <div class="col-md-6 mb-3 @if($errors->has('fourni')) has-error @endif">
                                <label for="fourni">Fournisseur</label>
                                <input type="text" class="form-control" name ="fourni">
                                @if($errors->has('fourni')) <div class="help-block">
                                    {{ $errors->first('fourni') }}
                                    </div>
                                 @endif
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
									  <button type="submit" class="btn btn-default">Ajouter</button>
									</form>
								</div>
							</div>
						</div>

                    </div>
            </div>

      </div>

</section>
</section>
@endsection
@section('scripts')
  <script src="{{ URL::to('assets/libs/d3/d3.v3.js')}}"></script>
  <script src="{{ URL::to('assets/libs/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/raphael/raphael-min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/morrischart/morris.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-knob/jquery.knob.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-clock/clock.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
  <script src="{{ URL::to('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/calculator.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/todo.js')}}"></script>
  <script src="{{ URL::to('assets/js/apps/notes.js')}}"></script>
  <script src="{{ URL::to('assets/js/pages/index.js')}}"></script>
  <script>
       $('#active-entres-add').addClass('active');
</script>
@endsection
