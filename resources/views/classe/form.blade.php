<div style="width:75%;margin:auto">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">{{ 'Nom de la classe' }}</label>
        <input class="form-control" name="name" type="text" id="class_name" value="{{ isset($classe->name) ? $classe->name : ''}}" required>
        {!! $errors->first('class_name', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('class_numeric') ? 'has-error' : ''}}">
        <label for="class_numeric" class="control-label">{{ 'Class Numeric' }}</label>
        <input class="form-control" name="class_numeric" type="number" id="class_numeric" value="{{ isset($classe->class_numeric) ? $classe->class_numeric : ''}}" >
        {!! $errors->first('class_numeric', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('formation_id') ? 'has-error' : ''}}">
        <label for="formation_id" class="control-label">{{ 'Assigner une Formation' }}</label>

        <select name="formation_id" class="form-control" id="grid-state">
            <option value="">--Selectionnez Formation--</option>
            @foreach ($formations as $formation)
            <option value="{{ $formation->id }}" {{ isset($classe->formation_id) && $classe->formation_id == $formation->id ? 'selected' : ''}}>{{ $formation->nom }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group {{ $errors->has('class_description') ? 'has-error' : ''}}">
        <label for="class_description" class="control-label">{{ ' Description de la classe' }}</label>
        <input class="form-control" name="class_description" type="text" id="class_description" value="{{ isset($classe->class_description) ? $classe->class_description : ''}}">
        {!! $errors->first('class_description', '<p class="help-block">:message</p>') !!}
    </div>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>
