<div class="col-md-6 mb-3 {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Apprenant Id' }}</label>
    <input class="form-control" name="apprenant_id" type="number" id="apprenant_id" value="{{ isset($mark->apprenant_id) ? $mark->apprenant_id : ''}}" required>
    {!! $errors->first('apprenant_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('module_id') ? 'has-error' : ''}}">
    <label for="module_id" class="control-label">{{ 'Module Id' }}</label>
    <input class="form-control" name="module_id" type="number" id="module_id" value="{{ isset($mark->module_id) ? $mark->module_id : ''}}" >
    {!! $errors->first('module_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('formation_id') ? 'has-error' : ''}}">
    <label for="formation_id" class="control-label">{{ 'Formation Id' }}</label>
    <input class="form-control" name="formation_id" type="number" id="formation_id" value="{{ isset($mark->formation_id) ? $mark->formation_id : ''}}" >
    {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="class_id" class="control-label">{{ 'Class Id' }}</label>
    <input class="form-control" name="class_id" type="number" id="class_id" value="{{ isset($mark->class_id) ? $mark->class_id : ''}}" >
    {!! $errors->first('class_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('note_exam') ? 'has-error' : ''}}">
    <label for="note_exam" class="control-label">{{ 'Note Exam' }}</label>
    <input class="form-control" name="note_exam" type="number" id="note_exam" value="{{ isset($mark->note_exam) ? $mark->note_exam : ''}}" >
    {!! $errors->first('note_exam', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('note1') ? 'has-error' : ''}}">
    <label for="note1" class="control-label">{{ 'Note1' }}</label>
    <input class="form-control" name="note1" type="number" id="note1" value="{{ isset($mark->note1) ? $mark->note1 : ''}}" >
    {!! $errors->first('note1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('note2') ? 'has-error' : ''}}">
    <label for="note2" class="control-label">{{ 'Note2' }}</label>
    <input class="form-control" name="note2" type="number" id="note2" value="{{ isset($mark->note2) ? $mark->note2 : ''}}" >
    {!! $errors->first('note2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('moyenne') ? 'has-error' : ''}}">
    <label for="moyenne" class="control-label">{{ 'Moyenne' }}</label>
    <input class="form-control" name="moyenne" type="number" id="moyenne" value="{{ isset($mark->moyenne) ? $mark->moyenne : ''}}" >
    {!! $errors->first('moyenne', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="text" id="year" value="{{ isset($mark->year) ? $mark->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
