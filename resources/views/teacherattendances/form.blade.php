<div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('class_id') ? 'has-error' : ''}}">
            <label for="class_id" class="control-label">{{ 'Classe' }}</label>
            <select name="class_id" class="form-control" id="grid-state" required>
                <option value="">--Selectionnez une Classe--</option>
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}" {{ isset($attendance) && $attendance->class_id == $classe->id ? 'selected' : '' }}>{{ $classe->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
            <label for="formateur_id" class="control-label">{{ 'Nom du Formateur' }}</label>
            <select name="formateur_id" class="form-control" id="grid-state" required>
                <option value="">--Selectionnez le Formateur --</option>
                @foreach ($formateurs as $formateur)
                    <option value="{{ $formateur->id }}" {{ isset($attendance) && $attendance->formateur_id == $formateur->id ? 'selected' : ''}}>{{ $formateur->nom }}</option>
                @endforeach
            </select>
        </div>
    </div>

<div class="row">
    <div class="col-md-6 mb-3 {{ $errors->has('attendence_date') ? 'has-error' : ''}}" id='datetimepicker1'>
        <label for="attendence_date" class="control-label">{{ ' Date' }}</label>
        <input class="form-control datetimepicker" name="date" type="text" id="attendence_date" value="{{ isset($attendance->date) ? $attendance->date : ''}}" required data-date-format="YYYY-MM-DD HH:mm:ss"/>
        {!! $errors->first('attendence_date', '<p class="help-block">:message</p>') !!}
    </div>
    <script type="text/javascript">
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

</div>


<hr class="mb-4">

    <div class="row">
        <div class="col-md-12 mb-3 {{ $errors->has('attendence_status') ? 'has-error' : ''}}">
            <label for="attendence_status" class="control-label">{{ ' Statut' }}</label>
            <div class="radio">
                <label><input name="attendence_status" type="radio" value="1" {{ (isset($attendance) && 1 == $attendance->attendence_status) ? 'checked' : '' }}> Présent(e)</label>
            </div>
            <div class="radio">
                <label><input name="attendence_status" type="radio" value="0" @if (isset($attendance)) {{ (0 == $attendance->attendence_status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Absent(e)</label>
            </div>
            {!! $errors->first('attendence_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <hr class="mb-4">

    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
</div>
