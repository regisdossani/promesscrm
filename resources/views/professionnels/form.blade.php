<div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($professionnel->nom) ? $professionnel->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('date_naiss') ? 'has-error' : ''}}">
    <label for="date_naiss" class="control-label">{{ 'Date de naissance' }}</label>
    <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($professionnel->date_naiss) ? $professionnel->date_naiss : ''}}" >
    {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="col-md-6 mb-3 {{ $errors->has('tel_1') ? 'has-error' : ''}}">
    <label for="tel_1" class="control-label">{{ 'Tél 1' }}</label>
    <input class="form-control" name="tel_1" type="text" id="tel_1" value="{{ isset($professionnel->tel_1) ? $professionnel->tel_1 : ''}}" >
    {!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('tel_2') ? 'has-error' : ''}}">
    <label for="tel_2" class="control-label">{{ 'Tél 2' }}</label>
    <input class="form-control" name="tel_2" type="text" id="tel_2" value="{{ isset($professionnel->tel_2) ? $professionnel->tel_2 : ''}}" >
    {!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('email_1') ? 'has-error' : ''}}">
    <label for="email_1" class="control-label">{{ 'Email 1' }}</label>
    <input class="form-control" name="email_1" type="text" id="email_1" value="{{ isset($professionnel->email_1) ? $professionnel->email_1 : ''}}" >
    {!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('email_2') ? 'has-error' : ''}}">
    <label for="email_2" class="control-label">{{ 'Email 2' }}</label>
    <input class="form-control" name="email_2" type="text" id="email_2" value="{{ isset($professionnel->email_2) ? $professionnel->email_2 : ''}}" >
    {!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('zone_geographique') ? 'has-error' : ''}}">
    <label for="zone_geographique" class="control-label">{{ ' Zone géographique' }}</label>
    <input class="form-control" name="zone_geographique" type="text" id="zone_geographique" value="{{ isset($professionnel->zone_geographique) ? $professionnel->zone_geographique : ''}}" >
    {!! $errors->first('zone_geographique', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('thematiques_intervention') ? 'has-error' : ''}}">
    <label for="thematiques_intervention" class="control-label">{{ ' Thématiques d\'intervention' }}</label>
    <input class="form-control" name="thematiques_intervention" type="text" id="thematiques_intervention" value="{{ isset($professionnel->thematiques_intervention) ? $professionnel->thematiques_intervention : ''}}" >
    {!! $errors->first('thematiques_intervention', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('mode_collaboration') ? 'has-error' : ''}}">
    <label for="mode_collaboration" class="control-label">{{ ' Mode de collaboration' }}</label>
    <select class="form-control" name="mode_collaboration"  id="mode_collaboration" >

        <option value="Intention">Formation</option>
        <option value="attente">Visite terrain</option>
        <option value="Acceptée">Prestation</option>
        <option value="Refusée">Chantier École</option>
        <option value="Refusée">Stage</option>
        <option value="Refusée">Réponse d'appel d'offre</option>

       </select>
{!! $errors->first('mode_collaboration', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('nature_activite') ? 'has-error' : ''}}">
    <label for="nature_activite" class="control-label">{{ 'Nature d\'Activité' }}</label>
    <input class="form-control" name="nature_activite" type="number" id="nature_activite" value="{{ isset($professionnel->nature_activite) ? $professionnel->nature_activite : ''}}" >
    {!! $errors->first('nature_activite', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('nature_commentaire') ? 'has-error' : ''}}">
    <label for="nature_commentaire" class="control-label">{{ 'Nature de Commentaire' }}</label>
    <textarea class="form-control" rows="5" name="nature_commentaire" type="textarea" id="nature_commentaire" >{{ isset($professionnel->nature_commentaire) ? $professionnel->nature_commentaire : ''}}</textarea>
    {!! $errors->first('nature_commentaire', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('nombre_employe') ? 'has-error' : ''}}">
    <label for="nombre_employe" class="control-label">{{ 'Nombre Employe' }}</label>
    <input class="form-control" name="nombre_employe" type="number" id="nombre_employe" value="{{ isset($professionnel->nombre_employe) ? $professionnel->nombre_employe : ''}}" >
    {!! $errors->first('nombre_employe', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('zone_intervention') ? 'has-error' : ''}}">
    <label for="zone_intervention" class="control-label">{{ 'Zone d\'intervention' }}</label>
    <textarea class="form-control" rows="5" name="zone_intervention" type="textarea" id="zone_intervention" >{{ isset($professionnel->zone_intervention) ? $professionnel->zone_intervention : ''}}</textarea>
    {!! $errors->first('zone_intervention', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('exemple_realisation') ? 'has-error' : ''}}">
    <label for="exemple_realisation" class="control-label">{{ 'Exemple de Réalisation' }}</label>
    <textarea class="form-control" rows="5" name="exemple_realisation" type="textarea" id="exemple_realisation" >{{ isset($professionnel->exemple_realisation) ? $professionnel->exemple_realisation : ''}}</textarea>
    {!! $errors->first('exemple_realisation', '<p class="help-block">:message</p>') !!}
</div>


@if(isset($formateur->CV_pj) && !empty($formateur->pjexemple_realisation))
    <a href="{{ url('uploads/professionnels/' . $professionnel->pjexemple_realisation) }}" ><i class="fa fa-download"></i> {{$professionnel->pjexemple_realisation}}</a>
@endif
<div class="col-md-6 mb-3 {{ $errors->has('pjexemple_realisation') ? 'has-error' : ''}}">
    <label for="pjexemple_realisation" class="control-label">{{ 'Pj exemple Réalisation' }}</label>
    <input class="form-control" name="pjexemple_realisation" type="file" id="pjexemple_realisation" value="1" >
    {!! $errors->first('pjexemple_realisation', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
