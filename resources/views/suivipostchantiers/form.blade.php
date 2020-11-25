

<div class="form-group {{ $errors->has('evaluation') ? 'has-error' : ''}}">
    <label for="evaluation" class="control-label">{{ 'Evaluation' }}</label>
    <input class="form-control" name="evaluation" type="text" id="evaluation" value="{{ isset($suivipostchantier->evaluation) ? $suivipostchantier->evaluation : ''}}" >
    {!! $errors->first('evaluation', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('maintenance') ? 'has-error' : ''}}">
    <label for="maintenance" class="control-label">{{ 'Maintenance' }}</label>
    <textarea class="form-control" rows="5" name="maintenance" type="textarea" id="maintenance" >{{ isset($suivipostchantier->maintenance) ? $suivipostchantier->maintenance : ''}}</textarea>
    {!! $errors->first('maintenance', '<p class="help-block">:message</p>') !!}
</div>


{{-- <div class="form-group {{ $errors->has('chantier_id') ? 'has-error' : ''}}">
    <label for="chantier_id" class="control-label">{{ 'Chantier Id' }}</label>
    <input class="form-control" name="chantier_id" type="number" id="chantier_id" value="{{ isset($suivipostchantier->chantier_id) ? $suivipostchantier->chantier_id : ''}}" >
    {!! $errors->first('chantier_id', '<p class="help-block">:message</p>') !!}
</div>
 --}}

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
