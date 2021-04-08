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
        <div class="table-agile-info">
            <div class="panel panel-default">
                <header class="panel-heading">
                    LES NOTES DES APPRENANTS
                </header>
                            <form method="GET" accept-charset="UTF-8" >
                                <div class="col-md-6 {{ $errors->has('class_id') ? 'has-error' : ''}}">
                                    <label for="class_id" class="control-label">{{ 'Classe :' }}</label>
                                        <select name="class_id" id="class_id" class="form-control">
                                            @foreach ($classes as $item)
                                                <option value="">--Choisissez und classe--</option>
                                                <option value="item">{{$item}}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('class_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </form>
                                <br/>
                                <br/>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Apprenant </th>
                                                <th>Matière </th>
                                                {{-- <th>Classe </th> --}}
                                                <th>Note1 </th>
                                                <th>Note2 </th>
                                                <th>Note Examen </th>
                                                <th>Moyenne </th>
                                                {{-- <th>Actions</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $row)
                                            <tr>
                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="apprenant_id ">
                                                    {{ $row->apprenant->nom }}
                                                    {{ $row->apprenant->prenom }}
                                                </a>
                                                </td>

                                                 <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="matiere_id ">
                                                    {{ $row->matiere->nom }}</a>
                                                </td>

                                                {{--
                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="classe_id ">
                                                    {{ $row->classe->nom }}</a>
                                                </td> --}}

                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="note1">
                                                    {{ $row->note1 }}</a>
                                                </td>

                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="note2">
                                                    {{ $row->note2 }}</a>
                                                </td>

                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="note_exam">
                                                    {{ $row->note_exam }}</a>
                                                </td>

                                                <td><a href="#" class="xedit"
                                                    data-pk="{{$row->id}}"
                                                    data-name="moyenne">
                                                    {{ $row->moyenne }}</a>
                                                </td>

                                                {{-- <td>{{ $item->module_id }}</td><td>{{ $item->formation_id }}</td> --}}
                                                 <td>
                                                    <a href="{{ url('/marks/' . $item->id) }}" title="Voir notes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                                    <a href="{{ url('/marks/' . $item->id . '/edit') }}" title="Edit mark"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                                                    <form method="POST" action="{{ url('/marks' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{-- <div class="pagination-wrapper"> {!! $marks->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                                </div>

                            </div>
                        <script>
                                $(document).ready(function(){
                                    $.ajaxSetup({
                                        headers:{
                                            'XCSRF-TOKEN':'{{csrf_token()}}'
                                        }
                                    });
                                            $('.xedit').editable({
                                                url:'{{url("marks/update")}}',
                                                titre:'Update',
                                                success:function(response,new Vue){
                                                    console.log('Updated','response')
                                                }
                                            });
                                        })
                            </script>

                    </div>

            </div>
        </div>
    </section>
</section>
@endsection
