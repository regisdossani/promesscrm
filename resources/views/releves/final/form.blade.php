<div class="col-md-6 mb-3 {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Nom Prénom de l\'Apprenant' }}</label>
    <select class="form-control" name="apprenant_id" >
        @foreach($apprenants as $apprenant)
                <option value="{{ $apprenant->id }}">{{ $apprenant->nom}}{{ $apprenant->prenom}}</option>
        @endforeach
    </select>
</div>
 <div class="col-md-6 mb-3 {{ $errors->has('nbre_candidat') ? 'has-error' : ''}}">
    <label for="nbre_candidat" class="control-label">{{ 'Nombre de candidat' }}</label>
    <input class="form-control" name="nbre_candidat" type="text" id="nbre_candidat" value="{{ isset($nbre_candidat) ? $nbre_candidat : ''}}" >
    {!! $errors->first('nbre_candidat', '<p class="help-block">:message</p>') !!}

 </div>


<div class="col-md-6 mb-3 {{ $errors->has('moyenne_generale') ? 'has-error' : ''}}">
    <label for="moyenne_eleve" class="control-label">{{ 'Moyenne Générale' }}</label>
    <input class="form-control" name="moyenne_eleve" type="text" id="moyenne_généra" value="{{ isset($mark->moyenne_eleve) ? $mark->moyenne_eleve : ''}}" >
    {!! $errors->first('moyenne_générale', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('mention') ? 'has-error' : ''}}">
    <label for="moyenne_classe" class="control-label">{{ 'Mention' }}</label>
    <input class="form-control" name="mention" type="text" id="mention" value="{{ isset($mention) ? $mention : ''}}" >
    {!! $errors->first('mention', '<p class="help-block">:message</p>') !!}
</div>




<div class="col-md-6 mb-3 {{ $errors->has('pdt_jury') ? 'has-error' : ''}}">
    <label for="pdt_jury" class="control-label">{{ 'Président du jury' }}</label>
    <input class="form-control" name="pdt_jury" type="text" id="pdt_jury" value="{{ isset($pdt_jury) ? $pdt_jury : ''}}" >
    {!! $errors->first('insuffisant', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('nom_directeur') ? 'has-error' : ''}}">
    <label for="nom_directeur" class="control-label">{{ 'Le Directeur de Centre' }}</label>
    <input class="form-control" name="nom_directeur" type="text" id="nom_directeur" value="{{ isset($releve->nom_directeur) ? $releve->nom_directeur : ''}}" >
    {!! $errors->first('nom_directeur', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
