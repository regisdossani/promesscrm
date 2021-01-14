<div class="col-md-6 mb-3 {{ $errors->has('professionel_id') ? 'has-error' : ''}}">
    <label for="professionel_id" class="control-label">{{ 'Professionel Id' }}</label>
    <input class="form-control" name="professionel_id" type="number" id="professionel_id" value="{{ isset($encadreur->professionel_id) ? $encadreur->professionel_id : ''}}" >
    {!! $errors->first('professionel_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
    <label for="formateur_id" class="control-label">{{ 'Formateur' }}</label>
    <input class="form-control" name="formateur_id" type="number" id="formateur_id" value="{{ isset($encadreur->formateur_id) ? $encadreur->formateur_id : ''}}" >
    {!! $errors->first('formateur_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
