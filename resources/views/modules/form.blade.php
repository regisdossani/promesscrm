<div class="col-md-6 mb-3{{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom du module' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($module->nom) ? $module->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<br/>
<br/>

<hr class="mb-4">

    <div class="col-md-12 mb-3">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>


