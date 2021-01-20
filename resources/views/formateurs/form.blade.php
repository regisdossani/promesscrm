
<div class="col-md-6 mb-3{{ $errors->has('sexe') ? 'has-error' : ''}}">
    <label for="civilite" class="control-label">{{ 'Genre' }}</label>
    {{-- <input class="form-control" name="civilite" type="text" id="civilite" value="{{ isset($candidat->civilite) ? $candidat->civilite : ''}}" > --}}
    <select name="sexe" id="sexe" class="form-control">

            <option value="M">M</option>
            <option value="F">F</option>

    </select>
    {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('noms') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Noms' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($formateur->nom) ? $formateur->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3{{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($formateur->prenom) ? $formateur->prenom : ''}}" >
    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 {{ $errors->has('reference') ? 'has-error' : ''}}">
    <label for="reference" class="control-label">{{ 'Référence' }}</label>
    <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($formateur->reference) ? $formateur->reference : ''}}" >
    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Téléphone ' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($formateur->tel_1) ? $formateur->tel_1 : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($formateur->email) ? $formateur->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3{{ $errors->has('date_naiss') ? 'has-error' : ''}}">
    <label for="date_naiss" class="control-label">{{ 'Date de naissance' }}</label>
    <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($formateur->date_naiss) ? $formateur->date_naiss : ''}}" >
    {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3{{ $errors->has('lieu_naiss') ? 'has-error' : ''}}">
    <label for="lieu_naiss" class="control-label">{{ 'Lieu de naissance' }}</label>
    <input class="form-control" name="lieu_naiss" type="text" id="lieu_naiss" value="{{ isset($formateur->date_naiss) ? $formateur->date_naiss : ''}}" >
    {!! $errors->first('lieu_naiss', '<p class="help-block">:message</p>') !!}
</div>


@role('superadmin')

<div class="col-md-6 mb-3{{ $errors->has('contratcadre') ? 'has-error' : ''}}">
    <label for="contratcadre" class="control-label">{{ 'Contrat cadre' }}</label>
    <div class="radio">
    <label><input name="contratcadre" type="radio" value="1" {{ (isset($formateur) && 1 == $formateur->contratcadre) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="contratcadre" type="radio" value="0" @if (isset($formateur)) {{ (0 == $formateur->contratcadre) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('contratcadre', '<p class="help-block">:message</p>') !!}
</div>

@if(isset($formateur->Contratcadre_pj) && !empty($formateur->Contratcadre_pj))
    <a href="{{ url('uploads/formateurs/' . $formateur->Contratcadre_pj) }}" ><i class="fa fa-download"></i> {{$formateur->Contratcadre_pj}}</a>
@endif
<div class="col-md-6 mb-3{{ $errors->has('Contratcadre_pj') ? 'has-error' : ''}}">
    <label for="Contratcadre_pj" class="control-label">{{ 'Pj Contrat cadre ' }}</label>
    <input class="form-control" name="Contratcadre_pj" type="file" id="Contratcadre_pj" value="{{ isset($formateur->Contratcadre_pj) ? $formateur->Contratcadre_pj : ''}}" >
    {!! $errors->first('Contratcadre_pj', '<p class="help-block">:message</p>') !!}
</div>

@if(isset($formateur->CV_pj) && !empty($formateur->CV_pj))
    <a href="{{ url('uploads/formateurs/' . $formateur->CV_pj) }}" ><i class="fa fa-download"></i> {{$formateur->CV_pj}}</a>
@endif
<div class="col-md-6 mb-3{{ $errors->has('CV_pj') ? 'has-error' : ''}}">
    <label for="CV_pj" class="control-label">{{ 'Le Cv' }}</label>
    <input class="form-control" name="CV_pj" type="file" id="CV_pj" value="{{ isset($formateur->CV_pj) ? $formateur->CV_pj : ''}}" >
    {!! $errors->first('CV_pj', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3{{ $errors->has('specialites') ? 'has-error' : ''}}">
    <label for="specialites" class="control-label">{{ 'Spécialités' }}</label>
    <textarea class="form-control" rows="5" name="specialites" type="textarea" id="specialites" >{{ isset($formateur->specialites) ? $formateur->specialites : ''}}</textarea>
    {!! $errors->first('specialites', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3{{ $errors->has('autres_activites') ? 'has-error' : ''}}">
    <label for="autres_activites" class="control-label">{{ 'Autres Activités' }}</label>
    <textarea class="form-control" rows="5" name="autres_activites" type="textarea" id="autres_activites" >{{ isset($formateur->autres_activites) ? $formateur->autres_activites : ''}}</textarea>
    {!! $errors->first('autres_activites', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3{{ $errors->has('formation_07_2018') ? 'has-error' : ''}}">
    <label for="formation_07_2018" class="control-label">{{ 'Formation 07 2018' }}</label>
    <div class="radio">
    <label><input name="formation_07_2018" type="radio" value="1" {{ (isset($formateur) && 1 == $formateur->formation_07_2018) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="formation_07_2018" type="radio" value="0" @if (isset($formateur)) {{ (0 == $formateur->formation_07_2018) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('formation_07_2018', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('formation_01_2019_') ? 'has-error' : ''}}">
    <label for="formation_01_2019_" class="control-label">{{ 'Formation 01 2019 ' }}</label>
    <div class="radio">
    <label><input name="formation_01_2019_" type="radio" value="1" {{ (isset($formateur) && 1 == $formateur->formation_01_2019_) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="formation_01_2019_" type="radio" value="0" @if (isset($formateur)) {{ (0 == $formateur->formation_01_2019_) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('formation_01_2019_', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('formation_securite_06_2019') ? 'has-error' : ''}}">
    <label for="formation_securite_06_2019" class="control-label">{{ 'Formation Sécurité 06 2019' }}</label>
    <div class="radio">
    <label><input name="formation_securite_06_2019" type="radio" value="1" {{ (isset($formateur) && 1 == $formateur->formation_securite_06_2019) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="formation_securite_06_2019" type="radio" value="0" @if (isset($formateur)) {{ (0 == $formateur->formation_securite_06_2019) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('formation_securite_06_2019', '<p class="help-block">:message</p>') !!}
</div>

@endrole


<div class="col-md-12">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
