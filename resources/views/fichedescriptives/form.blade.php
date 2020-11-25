<div class="form-group {{ $errors->has('context') ? 'has-error' : ''}}">
    <label for="context" class="control-label">{{ 'Context' }}</label>
    <input class="form-control" name="context" type="text" id="context" value="{{ isset($fichedescriptive->context) ? $fichedescriptive->context : ''}}" required>
    {!! $errors->first('context', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('besoins') ? 'has-error' : ''}}">
    <label for="besoins" class="control-label">{{ 'Besoins' }}</label>
    <input class="form-control" name="besoins" type="text" id="besoins" value="{{ isset($fichedescriptive->besoins) ? $fichedescriptive->besoins : ''}}" >
    {!! $errors->first('besoins', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dimensionnement') ? 'has-error' : ''}}">
    <label for="dimensionnement" class="control-label">{{ 'Dimensionnement' }}</label>
    <input class="form-control" name="dimensionnement" type="text" id="dimensionnement" value="{{ isset($fichedescriptive->dimensionnement) ? $fichedescriptive->dimensionnement : ''}}" >
    {!! $errors->first('dimensionnement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('interventions') ? 'has-error' : ''}}">
    <label for="interventions" class="control-label">{{ 'Interventions' }}</label>
    <input class="form-control" name="interventions" type="text" id="interventions" value="{{ isset($fichedescriptive->interventions) ? $fichedescriptive->interventions : ''}}" >
    {!! $errors->first('interventions', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('devis_id') ? 'has-error' : ''}}">
    <label for="devis_id" class="control-label">{{ 'Devis Id' }}</label>
    <input class="form-control" name="devis_id" type="number" id="devis_id" value="{{ isset($fichedescriptive->devis_id) ? $fichedescriptive->devis_id : ''}}" >
    {!! $errors->first('devis_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cout') ? 'has-error' : ''}}">
    <label for="cout" class="control-label">{{ 'Cout' }}</label>
    <input class="form-control" name="cout" type="number" id="cout" value="{{ isset($fichedescriptive->cout) ? $fichedescriptive->cout : ''}}" >
    {!! $errors->first('cout', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
