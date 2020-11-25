<div class="form-group {{ $errors->has('document') ? 'has-error' : ''}}">
    <label for="document" class="control-label">{{ 'Document' }}</label>
    <input class="form-control" name="document" type="text" id="document" value="{{ isset($leaf->document) ? $leaf->document : ''}}" >
    {!! $errors->first('document', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
    <label for="employee_id" class="control-label">{{ 'Employee Id' }}</label>
    <input class="form-control" name="employee_id" type="number" id="employee_id" value="{{ isset($leaf->employee_id) ? $leaf->employee_id : ''}}" >
    {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('leave_type') ? 'has-error' : ''}}">
    <label for="leave_type" class="control-label">{{ 'Leave Type' }}</label>
    <input class="form-control" name="leave_type" type="text" id="leave_type" value="{{ isset($leaf->leave_type) ? $leaf->leave_type : ''}}" >
    {!! $errors->first('leave_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('leave_date') ? 'has-error' : ''}}">
    <label for="leave_date" class="control-label">{{ 'Leave Date' }}</label>
    <input class="form-control" name="leave_date" type="date" id="leave_date" value="{{ isset($leaf->leave_date) ? $leaf->leave_date : ''}}" required>
    {!! $errors->first('leave_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($leaf->description) ? $leaf->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($leaf->status) ? $leaf->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
