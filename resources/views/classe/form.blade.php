<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="class_name" class="control-label">{{ 'Nom de la classe' }}</label>
    <input class="form-control" name="class_name" type="text" id="class_name" value="{{ isset($classe->name) ? $classe->name : ''}}" required>
    {!! $errors->first('class_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('class_numeric') ? 'has-error' : ''}}">
    <label for="class_numeric" class="control-label">{{ 'Class Numeric' }}</label>
    <input class="form-control" name="class_numeric" type="number" id="class_numeric" value="{{ isset($classe->class_numeric) ? $classe->class_numeric : ''}}" >
    {!! $errors->first('class_numeric', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
     <label for="formateur_id" class="control-label">{{ 'Assigner des Formateurs(ctrl pour multiple):' }}</label>
  <select name="formateurs" class="form-control input-lg" id="prettify" data-placeholder = "Choisissez au moins un formateur" multiple>
        <option value="">--Selectionnez les Formateurs--</option>
        @foreach ($formateurs as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->nom }}{{ $teacher->prenom }}</option>
        @endforeach
    </select>
</div>


<div class="form-group {{ $errors->has('class_description') ? 'has-error' : ''}}">
    <label for="class_description" class="control-label">{{ ' Description de la classe' }}</label>
    <input class="form-control" name="class_description" type="text" id="class_description" value="{{ isset($classe->class_description) ? $classe->class_description : ''}}" >
    {!! $errors->first('class_description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
