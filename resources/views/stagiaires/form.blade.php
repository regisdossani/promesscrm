<div class="col-md-6 mb-3 {{ $errors->has('stage_id') ? 'has-error' : ''}}">
    <label for="stage_id" class="control-label">{{ 'Stage Id' }}</label>
    <input class="form-control" name="stage_id" type="number" id="stage_id" value="{{ isset($stagiaire->stage_id) ? $stagiaire->stage_id : ''}}" >
    {!! $errors->first('stage_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Apprenant Id' }}</label>
    <input class="form-control" name="apprenant_id" type="number" id="apprenant_id" value="{{ isset($stagiaire->apprenant_id) ? $stagiaire->apprenant_id : ''}}" required>
    {!! $errors->first('apprenant_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('moyenne') ? 'has-error' : ''}}">
    <label for="moyenne" class="control-label">{{ 'Moyenne' }}</label>
    <input class="form-control" name="moyenne" type="text" id="moyenne" value="{{ isset($stagiaire->moyenne) ? $stagiaire->moyenne : ''}}" >
    {!! $errors->first('moyenne', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('appreciation') ? 'has-error' : ''}}">
    <label for="appreciation" class="control-label">{{ 'Appreciation' }}</label>
    <textarea class="form-control" rows="5" name="appreciation" type="textarea" id="appreciation" >{{ isset($stagiaire->appreciation) ? $stagiaire->appreciation : ''}}</textarea>
    {!! $errors->first('appreciation', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
