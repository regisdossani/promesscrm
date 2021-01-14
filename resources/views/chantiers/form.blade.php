
<div class="col-md-6 mb-3 {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($chantier->titre) ? $chantier->titre : ''}}" required>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('newchantier_id') ? 'has-error' : ''}}">
    <label for="newchantier_id" class="control-label">{{ 'Structure qui propose le chantier' }}</label>
    <select class="form-control" name="newchantier_id" type="text" id="newchantier_id">
                @foreach($newchantiers as $newchantier)
                        <option value="{{ $newchantier->id }}" {{ isset($chantiers->newchantier_id) && $chantiers->newchantier_id == $newchantier->id ? 'selected' : ''}}>{{ $newchantiet->structure}}</option>
                @endforeach
    </select>



    {!! $errors->first('newchantier_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Référence' }}</label>
    <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($chantier->reference) ? $chantier->reference : ''}}" >
    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date ' }}</label>
    <textarea class="form-control"  name="date" type="date" id="date" value="{{ isset($chantier->date) ? $chantier->date : ''}}">
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('duree_j') ? 'has-error' : ''}}">
    <label for="duree_j" class="control-label">{{ 'Durée(jour)' }}</label>
    <input class="form-control" name="duree_j" type="text" id="duree_j" value="{{ isset($chantier->duree_j) ? $chantier->duree_j : ''}}" >
    {!! $errors->first('duree_j', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3 {{ $errors->has('duree_h') ? 'has-error' : ''}}">
    <label for="duree_h" class="control-label">{{ 'Durée(heure)' }}</label>
    <input class="form-control" name="duree_h" type="text" id="duree_h" value="{{ isset($chantier->duree_h) ? $chantier->duree_h : ''}}" >
    {!! $errors->first('duree_h', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3 {{ $errors->has('maitre_oeuvre') ? 'has-error' : ''}}">
    <label for="maitre_oeuvre" class="control-label"> 'Maitre d'oeuvre </label>
    <input class="form-control" name="maitre_oeuvre" type="text" id="maitre_oeuvre" value="{{ isset($chantier->maitre_oeuvre) ? $chantier->maitre_oeuvre : ''}}" >
    {!! $errors->first('maitre_oeuvre', '<p class="help-block">:message</p>') !!}
</div>




<div class="col-md-6 mb-3 {{ $errors->has('teacher_id') ? 'has-error' : ''}}">
    <label for="teacher_id" class="control-label">{{ 'Nom du Formateur' }}</label>
        <select class="form-control" name="teacher_id"  id="teacher_id" >
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ isset($chantiers->teacher_id) && $chantiers->teacher_id === $teacher->id ? 'selected' : ''}}>{{ $teacher->nom}}</option>
            @endforeach
        </select>
    {{-- <input class="form-control" name="teacher_id" type="number" id="teacher_id" value="{{ isset($chantier->teacher_id) ? $chantier->teacher_id : ''}}" > --}}
    {{-- {!! $errors->first('teacher_id', '<p class="help-block">:message</p>') !!} --}}
</div>





<div class="col-md-6 mb-3 {{ $errors->has('nbre_appt') ? 'has-error' : ''}}">
    <label for="nbre_appt" class="control-label">{{ 'Participation des Professionnels' }}</label>
    <input class="form-control"  name="nbre_appt" type="text" id="nbre_appt" >{{ isset($chantier->nbre_appt) ? $chantier->nbre_appt : ''}}</textarea>
    {!! $errors->first('nbre_appt', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('descriptif') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Descriptif' }}</label>
    <textarea class="form-control" rows="5" name="descriptif" type="text" id="descriptif" value="{{ isset($chantier->descriptif) ? $chantier->descriptif : ''}}">
</div>

<div class="col-md-6 mb-3 {{ $errors->has('fiche_descriptive') ? 'has-error' : ''}}">
    @if(isset($chantier->fiche_descriptive) && !empty($chantier->fiche_descriptive))
        <a href="{{ url('uploads/chantiers/' . $chantier->fiche_descriptive) }}" ><i class="fa fa-download"></i> {{$chantier->fiche_descriptive}}</a>
    @endif
    <label for="fiche_descriptive" class="control-label">{{ 'Fiche Descriptive' }}</label>
             <input class="form-control" name="fiche_descriptive" type="file" id="fiche_descriptive" value="{{ isset($chantier->fiche_descriptive) ? $chantier->fiche_descriptive : ''}}" >
            {!! $errors->first('fiche_descriptive', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('etat') ? 'has-error' : ''}}">
    <label for="etat" class="control-label">{{ 'Etat' }}</label>
    <select class="form-control" name="statut"  id="statut" >
        <option>-- --Choisissez un état--</option>
            <option value="1">Réalisé</option>
            <option value="2">Non Réalisé</option>
    </select></div>



<div class="col-md-6 mb-3 {{ $errors->has('obs') ? 'has-error' : ''}}">
    <label for="obs" class="control-label">{{ 'Obs' }}</label>
    <input class="form-control"  name="obs" type="text" id="obs" value="{{ isset($chantier->obs) ? $chantier->obs : ''}}">
</div>



<div class="row">
    <div class="col-md-12 mb-3">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>
