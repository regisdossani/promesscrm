
{{-- <div class="col-md-6 mb-3 {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($stage->titre) ? $stage->titre : ''}}" required>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="col-md-6 mb-3 {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <textarea class="form-control"  name="date" type="text" id="date" >{{ isset($stage->date) ? $stage->date : ''}}</text>
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('encadreur_id') ? 'has-error' : ''}}">
    <label for="professionel_id" class="control-label">{{'Nom du Professionel' }}</label>
    <select class="form-control" name="encadreur_id"  id="professionnel_id" >
        @foreach($profs as $prof)
           <option value="{{ $prof->id }}" {{ isset($stages->encadreur_id) && $stages->encadreur_id == $encadreur->id ? 'selected' : ''}}>{{ $encadreur->nom}}</option>
        @endforeach
    </select>
</div>
<div class="col-md-6 mb-3 {{ $errors->has('stage_debut') ? 'has-error' : ''}}">
    <label for="stage_debut" class="control-label">{{ 'Stage Debut' }}</label>
    <input class="form-control" name="stage_debut" type="date" id="stage_debut" value="{{ isset($stage->stage_debut) ? $stage->stage_debut : ''}}" >
    {!! $errors->first('stage_debut', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('stage_fin') ? 'has-error' : ''}}">
    <label for="stage_fin" class="control-label">{{ 'Stage Fin' }}</label>
    <input class="form-control" name="stage_fin" type="date" id="stage_fin" value="{{ isset($stage->stage_fin) ? $stage->stage_fin : ''}}" >
    {!! $errors->first('stage_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('pjconvention_stage') ? 'has-error' : ''}}">
    <label for="pjconvention_stage" class="control-label">{{ 'Pièce jointe convention Stage' }}</label>
    <input class="form-control" name="pjconvention_stage" type="file" id="pjconvention_stage" value="{{ isset($stage->pjconvention_stage) ? $stage->pjconvention_stage : ''}}" >
    {!! $errors->first('pjconvention_stage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
