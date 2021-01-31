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
        <div class="widget">
          <div class="widget-header">
            <h2 class="text-center"><strong>TYPES D'OBJETS</strong></h2>
            <a href="{{ route('index.generation') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Précédent</button></a>
<br/><br/><br/>
<div class="row">

    <div class="col-md-6">
        <div class="widget clearfix">
          <div class="widget-header transparent clearfix">
            <h2 class="text-center"><strong>Ajouter</strong> un Type</h2>

          </div>
          <div class="widget-content padding clearfix">
            <div id="basic-form">
              <form action="{{ route('post.types') }}" method="POST" role="form">
             <div class="col-md-8 col-md-offset-2">


              <div class="form-group @if($errors->has('name')) has-error @endif">
              <input type="text" class="form-control"  name="name">

      </div>

            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <button type="submit" class="btn btn-success pull-right">Enregistrer</button>
          </form>
        </div>
      </div>

                </div>
          </div>
</div>


<br/><br/>
          <div class="widget-content">

            <div class="table-responsive">
              <table data-sortable class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>N°</th>
                   <th>Nom</th>
                    <th>Crée à</th>
                    <th>modifié à</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($types as $type)
                  <tr>
                    <td>
                      {{ $type->id }}
                    </td>


                    <td>
                        {{-- <a href="{{ route('single.type',$type->id) }}">{{ $type->name }}</a> --}}

                      {{ $type->name }}
                    </td>
                    <td>
                      {{ date('d/m/Y H:i',strtotime($type->created_at)) }}
                    </td>
                    <td>
                      {{ date('d/m/Y H:i',strtotime($type->updated_at)) }}
                    </td>
                  </tr>
                @endforeach
                </tbody>
                </table>
              </div>
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
<script>
       $('#active-type').addClass('active');
</script>
@endsection
