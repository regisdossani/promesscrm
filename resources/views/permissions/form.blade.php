<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($permission->name) ? $permission->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
