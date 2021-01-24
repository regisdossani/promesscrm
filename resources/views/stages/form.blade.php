
<div class="col-md-6 mb-3 {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Titre' }}</label>
    <div class="select-list" class="form-group">
        <select name="apprenant_id" id="apprenant_id" class="form-control">
             <option value=""> Nos Apprenants</option>
                @foreach($apprenants as $ap)
                    <option value="{{ $ap->id }}" {{ isset($stages->apprenant_id) && $stages->apprenant_id == $ap->id ? 'selected' : ''}}>{{ $ap->prenom}}{{$ap->nom}}</option>
                @endforeach
        </select>
        {{-- <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span> --}}
    </div>

</div>




<div class="col-md-6 mb-3 {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <textarea class="form-control"  name="date" type="text" id="date" >{{ isset($stage->date) ? $stage->date : ''}}</text>
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('encadreur_id') ? 'has-error' : ''}}">
    <label for="professionel_id" class="control-label">{{'Nom du Professionel' }}</label>
    <select class="form-control" name="encadreur_id"  id="professionnel_id" >
        @foreach($encadreurs as $prof)
           <option value="{{ $prof->id }}" {{ isset($stages->encadreur_id) && $stages->encadreur_id == $encadreur->id ? 'selected' : ''}}>{{ $encadreur->nom}}</option>
        @endforeach
    </select>
</div>
<div class="col-md-6 mb-3 {{ $errors->has('duree') ? 'has-error' : ''}}">
    <label for="duree" class="control-label">{{ 'Duree(J) ' }}</label>
    <input class="form-control" name="duree" type="number" id="duree" value="{{ isset($stage->duree) ? $stage->duree : ''}}" >
    {!! $errors->first('duree', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('referent') ? 'has-error' : ''}}">
    <label for="referent" class="control-label">{{ 'Reférent' }}</label>
    <input class="form-control" name="referent" type="text" id="referent" value="{{ isset($stage->referent) ? $stage->referent : ''}}" >
    {!! $errors->first('referent', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('entreprise') ? 'has-error' : ''}}">
    <label for="entreprise" class="control-label">{{ 'Entreprise' }}</label>
    <input class="form-control" name="entreprise" type="text" id="entreprise" value="{{ isset($stage->entreprise) ? $stage->entreprise : ''}}" >
    {!! $errors->first('entreprise', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('rapport') ? 'has-error' : ''}}">
    <label for="rapport" class="control-label">{{ 'Rapport' }}</label>
    <input class="form-control" name="rapport" type="file" id="rapport" value="{{ isset($stage->rapport) ? $stage->rapport : ''}}" >
    {!! $errors->first('rapport', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
