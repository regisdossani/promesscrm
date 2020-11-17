
<div class="form-group {{ $errors->has('eq_id') ? 'has-error' : ''}}">
    <label for="eq_id" class="control-label">{{ 'Mbre Equipe Promess' }}</label>
    {!! $errors->first('eq_id', '<p class="help-block">:message</p>') !!}
    <select class="form-control" name="eq_id"  id="eq_id" >
 @foreach($equipes as $eq)
    <option value="{{ $eq->id }}" {{ isset($eqattendances->eq_id) && $eqattendances->eq_id == $eq->id ? 'selected' : ''}}>{{ $eq->nom}}</option>
    @endforeach
</select>
</div>


<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($eqattendance->date) ? $eqattendance->date : ''}}" required>
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_from') ? 'has-error' : ''}}">
    <label for="time_from" class="control-label">{{ 'De' }}</label>
    <input class="form-control" name="time_from" type="time" id="time_from" pattern="[0-9]{2}:[0-9]{2}" required>
    {!! $errors->first('time_from', '<p class="help-block">:message</p>') !!}

</div>
<div class="form-group {{ $errors->has('time_to') ? 'has-error' : ''}}">
    <label for="time_to" class="control-label">{{ 'A' }}</label>
    <input class="form-control" name="time_to" type="time"  id="time_to" pattern="[0-9]{2}:[0-9]{2}"  required>
    {!! $errors->first('time_to', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('nbhours') ? 'has-error' : ''}}">
    <label for="nbhours" class="control-label">{{ 'Heures' }}</label>
    <input class="form-control" name="nbhours" type="number" id="nbhours" value="{{ isset($eqattendance->nbhours) ? $eqattendance->nbhours : ''}}" >
    {!! $errors->first('nbhours', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('comments') ? 'has-error' : ''}}">
    <label for="comments" class="control-label">{{ 'Commentaires' }}</label>
    <textarea name="comments" class="form-control" id="comments" cols="30" rows="4" placeholder="commentaires"></textarea>
    {!! $errors->first('comments', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
