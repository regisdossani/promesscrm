<div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('eq_id') ? 'has-error' : ''}}">
            <label for="eq_id" class="control-label">{{ 'Mbre Equipe Promess' }}</label>
            {!! $errors->first('eq_id', '<p class="help-block">:message</p>') !!}
            <select class="form-control" name="employee_id" id="eq_id" required>
                <option value="">--Selectionnez un Membre--</option>
                @foreach($equipes as $eq)
                <option value="{{ $eq->id }}" {{ isset($eqattendance->employee_id) && $eqattendance->employee_id == $eq->id ? 'selected' : ''}}>{{ $eq->nom}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('attendance_date') ? 'has-error' : ''}}">
            <label for="attendance_date" class="control-label">{{ 'Date' }}</label>
            <input class="form-control" name="attendance_date" type="date" id="date" value="{{ isset($eqattendance->attendance_date) ? $eqattendance->attendance_date : ''}}" required>
            {!! $errors->first('attendance_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('time_from') ? 'has-error' : ''}}">
            <label for="time_from" class="control-label">{{ 'De' }}</label>
            <input class="form-control" name="in_time" type="time" id="in_time" pattern="[0-9]{2}:[0-9]{2}" required>
            {!! $errors->first('time_from', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3 {{ $errors->has('out_time') ? 'has-error' : ''}}">
            <label for="out_time" class="control-label">{{ 'A' }}</label>
            <input class="form-control" name="out_time" type="time" id="out_time" pattern="[0-9]{2}:[0-9]{2}" required>
            {!! $errors->first('out_time', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('nbhours') ? 'has-error' : ''}}">
            <label for="nbhours" class="control-label">{{ 'Heures' }}</label>
            <input class="form-control" name="working_hour" type="number" id="nbhours" value="{{ isset($eqattendance->working_hour) ? $eqattendance->working_hour : ''}}">
            {!! $errors->first('nbhours', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3 {{ $errors->has('time_to') ? 'has-error' : ''}}">
            <label for="Statut" class="control-label">{{ 'Statut' }}</label>
            <input class="form-control" name="status" type="text" id="Statut" value="{{ isset($eqattendance->status) ? $eqattendance->status : ''}}" >
            {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3 {{ $errors->has('present') ? 'has-error' : ''}}">
            <label for="present" class="control-label">{{ ' Présent' }}</label>
            <div class="radio">
                <label><input name="present" type="radio" value="1" {{ (isset($eqattendance) && 1 == $eqattendance->present) ? 'checked' : '' }}> Oui</label>
            </div>
            <div class="radio">
                <label><input name="present" type="radio" value="0" @if (isset($zqattendance)) {{ (0 == $eqattendance->present) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
            </div>
            {!! $errors->first('present', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
</div>