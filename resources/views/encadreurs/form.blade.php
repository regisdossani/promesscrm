
<div class="col-md-6 mb-3 {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
    <label for="formateur_id" class="control-label">{{ 'Formateur' }}</label>
    <select class="form-control" name="formateur_id" type="text" id="formateur_id">
        <option value="">-- Choisissez le formateur --</option>
        @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ isset($encadreurs->formateur_id) && $encadreurs->formateur_id == $teacher->id ? 'selected' : ''}}>{{ $teacher->prenom}}{{$teacher->nom}}</option>
        @endforeach
</select>
  {!! $errors->first('formateur_id', '<p class="help-block">:message</p>') !!}
</div>



<div class="col-md-6 mb-3 {{ $errors->has('noms') ? 'has-error' : ''}}">
    <label for="noms" class="control-label">{{ 'Noms' }}</label>
    <input class="form-control" name="noms" type="noms" id="noms" value="{{ isset($encadreur->noms) ? $encadreur->noms : ''}}" >
    {!! $errors->first('noms', '<p class="help-block">:message</p>') !!}
</div>

<div class="row"></div>
<br/>
<div class="col-md-6 ">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
