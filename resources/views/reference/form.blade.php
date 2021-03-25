<div class="form-group {{ $errors->has('format') ? 'has-error' : ''}}">
    <label for="format" class="control-label">{{ 'Format' }}</label>
    <input class="form-control" name="format" type="text" id="format" value="{{ isset($reference->format) ? $reference->format : ''}}" required>
    {!! $errors->first('format', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categorie') ? 'has-error' : ''}}">
    <label for="categorie" class="control-label">{{ 'Catégorie' }}</label>
    <input class="form-control" name="categorie" type="text" id="categorie" value="{{ isset($reference->categorie) ? $reference->categorie : ''}}" >
    {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('formateur_id') ? 'has-error' : ''}}">
    <label for="formateur_id" class="control-label">{{ 'Formateur' }}</label>
    <select class="form-control" name="candidat_id"  id="candidat_id" >
        @foreach($formateurs as $formateur)

                <option value="{{ $formateur->id }}" {{ isset($references->formateur_id) && $references->formateur_id == $formateur->id ? 'selected' : ''}}>{{ $formateur->nom}}</option>

        @endforeach
    </select>
   {{--  <input class="form-control" name="formateur_id" type="number" id="formateur_id" value="{{ isset($reference->formateur_id) ? $reference->formateur_id : ''}}" >
    {!! $errors->first('formateur_id', '<p class="help-block">:message</p>') !!} --}}
</div>
<div class="form-group {{ $errors->has('matiere') ? 'has-error' : ''}}">
    <label for="matiere" class="control-label">{{ 'Matière' }}</label>
    <input class="form-control" name="matiere" type="text" id="matiere" value="{{ isset($reference->matiere) ? $reference->matiere : ''}}" >
    {!! $errors->first('matiere', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Réference' }}</label>
    <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($reference->sreference) ? $reference->sreference : ''}}" >
    {!! $errors->first('sreference', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
