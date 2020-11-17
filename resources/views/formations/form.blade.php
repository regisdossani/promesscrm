<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($formation->nom) ? $formation->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type de formation' }}</label>
    <select class="form-control" name="type"  id="type">
    @foreach($types as $type)
    <option value="{{ $type->id }}" {{ isset($formations->type) && $formations->type == $type->id ? 'selected' : ''}}>{{ $type->nom}}</option>
    @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('annee') ? 'has-error' : ''}}">
    <label for="annee" class="control-label">{{ 'Année scolaire' }}</label>
    <input class="form-control" name="annee" type="text" id="annee" value="{{ isset($formation->annee) ? $formation->annee : ''}}" >
    {!! $errors->first('annee', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
