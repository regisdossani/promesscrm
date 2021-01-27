
<div class="col-md-6 mb-3 {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control"  name="date" type="date" id="date" value="{{isset($stage->date) ? $stage->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('encadreur_id') ? 'has-error' : ''}}">
    <label for="encadreur_id" class="control-label">{{'Nom de l\'encadreur'}}</label>
    <select class="form-control" name="encadreur_id" type="text" id="encadreur_id">
        <option value="">-- Choisissez l'Encadreur --</option>
        @foreach($encadreurs as $teacher)
                <option value="{{ $teacher->id }}" {{ isset($stages->encadreur_id) && $stages->encadreur_id == $teacher->id ? 'selected' : ''}}>{{ $teacher->noms}}</option>
        @endforeach
</select>
</div>

<div class="col-md-6 mb-3 {{ $errors->has('duree') ? 'has-error' : ''}}">
    <label for="duree" class="control-label">{{ 'Duree(J) ' }}</label>
    <input class="form-control" name="duree" type="number" id="duree" value="{{ isset($stage->duree) ? $stage->duree : ''}}" >
    {!! $errors->first('duree', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('referent') ? 'has-error' : ''}}">
    <label for="referent" class="control-label">{{ 'Reférent' }}</label>
    <input class="form-control" name="referent" type="text" id="referent" value="{{ isset($stage->referent) ? $stage->referent : ''}}" >
    {!! $errors->first('referent', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('entreprise') ? 'has-error' : ''}}">
    <label for="entreprise" class="control-label">{{ 'Entreprise' }}</label>
    <input class="form-control" name="entreprise" type="text" id="entreprise" value="{{ isset($stage->entreprise) ? $stage->entreprise : ''}}" >
    {!! $errors->first('entreprise', '<p class="help-block">:message</p>') !!}
</div>

<div class="row"></div>
<br/>
<div class="col-md-6">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
