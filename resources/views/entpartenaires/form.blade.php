<div class="col-md-6 mb-3 {{ $errors->has('raison_sociale') ? 'has-error' : ''}}">
    <label for="raison_sociale" class="control-label">{{ 'Raison Sociale' }}</label>
    <input class="form-control" name="raison_sociale" type="text" id="raison_sociale" value="{{ isset($entpartenaire->raison_sociale) ? $entpartenaire->raison_sociale : ''}}" >
    {!! $errors->first('raison_sociale', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Référence' }}</label>
    <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($entpartenaire->reference) ? $entpartenaire->reference : ''}}">

    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('activite_entreprise') ? 'has-error' : ''}}">
    <label for="activite_entreprise" class="control-label">{{ 'Activité de l\'Entreprise' }}</label>
    <input class="form-control" name="activite_entreprise" type="text" id="activite_entreprise" value="{{ isset($entpartenaire->activite_entreprise) ? $entpartenaire->activite_entreprise : ''}}" >
    {!! $errors->first('activite_entreprise', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3{{ $errors->has('responsable') ? 'has-error' : ''}}">
    <label for="responsable" class="control-label">{{ 'Responsable' }}</label>
    <input class="form-control" name="responsable" type="text" id="responsable" value="{{ isset($entpartenaire->responsable) ? $entpartenaire->responsable : ''}}" >
    {!! $errors->first('responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('contact_tel') ? 'has-error' : ''}}">
    <label for="contact_tel" class="control-label">{{ 'Contact Téléphonique' }}</label>
    <input class="form-control" name="contact_tel" type="text" id="contact_tel" value="{{ isset($entpartenaire->contact_tel) ? $entpartenaire->contact_tel : ''}}" >
    {!! $errors->first('contact_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('contact_email') ? 'has-error' : ''}}">
    <label for="contact_email" class="control-label">{{ 'Contact Email' }}</label>
    <input class="form-control" name="contact_email" type="email" id="contact_email" value="{{ isset($entpartenaire->contact_email) ? $entpartenaire->contact_email : ''}}" >
    {!! $errors->first('contact_email', '<p class="help-block">:message</p>') !!}
</div>

<div class="row"></div>
<br/>
<div class="col-md-8 ">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
