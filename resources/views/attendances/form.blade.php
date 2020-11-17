<div class='col-sm-8'>



    <div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="class_id" class="control-label">{{ 'Classe' }}</label>
    <select name="class_id" class="control-label" id="grid-state">
        <option value="">--Selectionnez une Classe--</option>
        @foreach ($classes as $classe)
            <option value="{{ $classe->id }}">{{ $classe->nom }}</option>
        @endforeach
    </select>
</div>

<div class="form-group {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
    <label for="formateur_id" class="control-label">{{ 'Nom du Formateur' }}</label>
    <select name="formateur_id" class="control-label" id="grid-state">
        <option value="">--Selectionnez le Formateur --</option>
        @foreach ($classes as $classe)
            <option value="{{ $classe->formateur->id }}">{{ $classe->formateur->nom }}</option>
        @endforeach
    </select>
</div>


<div class="form-group {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Nom Apprenant' }}</label>
    <select name="apprenant_id" class="control-label" id="grid-state">
        <option value="">--Selectionnez  Apprenant --</option>
        @foreach ($classes as $classe)
            <option value="{{ $classe->apprenant->id }}">{{ $classe->apprenant->nom }}</option>
        @endforeach
    </select>
</div>


<div class="form-group {{ $errors->has('attendence_date') ? 'has-error' : ''}}" id='datetimepicker1'>
     <label for="attendence_date" class="control-label">{{ ' Date' }}</label>
    <input class="form-control datetimepicker" name="attendence_date" type="text" id="attendence_date" value="{{ isset($attendance->attendence_date) ? $attendance->attendence_date : ''}}" >
    {!! $errors->first('attendence_date', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('attendence_status') ? 'has-error' : ''}}">
    <label for="attendence_status" class="control-label">{{ ' Status' }}</label>
    <div class="radio">
    <label><input name="attendence_status" type="radio" value="1" {{ (isset($attendance) && 1 == $attendance->attendence_status) ? 'checked' : '' }}> Présent(e)</label>
</div>
<div class="radio">
    <label><input name="attendence_status" type="radio" value="0" @if (isset($attendance)) {{ (0 == $attendance->attendence_status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Absent(e)</label>
</div>
    {!! $errors->first('attendence_status', '<p class="help-block">:message</p>') !!}
</div>

<script>
    $('.datetimepicker').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });
    </script>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>






</div>

