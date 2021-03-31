<div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Intitulé' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($nosmatiere->nom) ? $nosmatiere->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Référence' }}</label>
    <input class="form-control" name="reference" type="text" id="reference"  data-mask="M9S9C9"  value="{{ isset($nosmatiere->reference) ? $nosmatiere->reference : ''}}" >
    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
    <label for="formateur_id" class="control-label">{{ 'Formateur' }}</label>
    <select class="form-control" name="formateur_id"  id="formateur_id" >
        <option >-- Choisir un Formateur --</option>
        @foreach($formateurs as $formateur)
                <option value="{{ $formateur->id }} {{ isset($matieres->formateur_id) && $matieres->formateur_id == $formateur->id ? 'selected' : ''}}">{{ $formateur->prenom}}{{ $formateur->nom}}</option>
        @endforeach
    </select>

    {!! $errors->first('formateur_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('coef') ? 'has-error' : ''}}">
    <label for="coef" class="control-label">{{ 'Coef' }}</label>
    <input class="form-control" name="coef" type="number" id="coef" value="{{ isset($nosmatiere->coef) ? $nosmatiere->coef : ''}}" >
    {!! $errors->first('coef', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('module_id') ? 'has-error' : ''}}">
    <label for="module_id" class="control-label">{{ 'Module' }}</label>
    <select class="form-control" name="module_id"  id="module_id" >
        <option>-- Choisir un Module --</option>
        @foreach($modules as $module)
                <option value="{{ $module->id }}" {{ isset($matieres->module_id) && $matieres->module_id == $module->id ? 'selected' : ''}}>{{ $module->nom}}</option>
        @endforeach
    </select>
    {!! $errors->first('module_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="row"></div>
<br/>
<div class="col-md-8">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
