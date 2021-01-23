<div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($promo->nom) ? $promo->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('annee') ? 'has-error' : ''}}">
    <label for="annee" class="control-label">{{ 'Année' }}</label>
    <input class="form-control" name="annee" type="text" id="annee" value="{{ isset($promo->annee) ? $promo->annee : ''}}" >
    {!! $errors->first('annee', '<p class="help-block">:message</p>') !!}
</div>
<div class="row"></div>
<br/>
<div class="col-md-8">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
