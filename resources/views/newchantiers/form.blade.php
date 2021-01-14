

<div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($newchantier->nom) ? $newchantier->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($newchantier->prenom) ? $newchantier->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('structure') ? 'has-error' : ''}}">
    <label for="structure" class="control-label">{{ 'Structure' }}</label>
    <input class="form-control" name="structure" type="text" id="structure" value="{{ isset($newchantier->structure) ? $newchantier->structure : ''}}" >
    {!! $errors->first('structure', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($newchantier->email) ? $newchantier->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('etat') ? 'has-error' : ''}}">
    <label for="etat" class="control-label">{{ 'Etat' }}</label>
    <input class="form-control" name="etat" type="text" id="etat" value="{{ isset($newchantier->etat) ? $newchantier->etat : ''}}" >
    {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($newchantier->description) ? $newchantier->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-8">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
