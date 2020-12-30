
<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($stage->titre) ? $stage->titre : ''}}" required>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stage_entreprise') ? 'has-error' : ''}}">
    <label for="stage_entreprise" class="control-label">{{ 'Stage Entreprise' }}</label>
    <textarea class="form-control" rows="5" name="stage_entreprise" type="textarea" id="stage_entreprise" >{{ isset($stage->stage_entreprise) ? $stage->stage_entreprise : ''}}</textarea>
    {!! $errors->first('stage_entreprise', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('professionel_id') ? 'has-error' : ''}}">
    <label for="professionel_id" class="control-label">{{'Nom du Professionel' }}</label>
    <select class="form-control" name="professionnel_id"  id="professionnel_id" >
        @foreach($profs as $prof)
           <option value="{{ $prof->id }}" {{ isset($stages->professionnel_id) && $stages->professionnel_id == $prof->id ? 'selected' : ''}}>{{ $prof->nom}}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('stage_debut') ? 'has-error' : ''}}">
    <label for="stage_debut" class="control-label">{{ 'Stage Debut' }}</label>
    <input class="form-control" name="stage_debut" type="date" id="stage_debut" value="{{ isset($stage->stage_debut) ? $stage->stage_debut : ''}}" >
    {!! $errors->first('stage_debut', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stage_fin') ? 'has-error' : ''}}">
    <label for="stage_fin" class="control-label">{{ 'Stage Fin' }}</label>
    <input class="form-control" name="stage_fin" type="date" id="stage_fin" value="{{ isset($stage->stage_fin) ? $stage->stage_fin : ''}}" >
    {!! $errors->first('stage_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pjconvention_stage') ? 'has-error' : ''}}">
    <label for="pjconvention_stage" class="control-label">{{ 'Pièce jointe convention Stage' }}</label>
    <input class="form-control" name="pjconvention_stage" type="file" id="pjconvention_stage" value="{{ isset($stage->pjconvention_stage) ? $stage->pjconvention_stage : ''}}" >
    {!! $errors->first('pjconvention_stage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
