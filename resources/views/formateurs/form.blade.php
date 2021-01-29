<div class="row">
<div class="col-md-6 mb-3{{ $errors->has('sexe') ? 'has-error' : ''}}">
    <label for="civilite" class="control-label">{{ 'Genre' }}</label>
    {{-- <input class="form-control" name="civilite" type="text" id="civilite" value="{{ isset($candidat->civilite) ? $candidat->civilite : ''}}" > --}}
    <select name="sexe" id="sexe" class="form-control">
            <option>-- Choisir un sexe --</option>
            <option value="M">M</option>
            <option value="F">F</option>
    </select>
    {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
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
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($formateur->tel_1) ? $formateur->tel : ''}}" >
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
    <input class="form-control" name="lieu_naiss" type="text" id="lieu_naiss" value="{{ isset($formateur->lieu_naiss) ? $formateur->lieu_naiss : ''}}" >
    {!! $errors->first('lieu_naiss', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3{{ $errors->has('formation') ? 'has-error' : ''}}">
    <label for="formation" class="control-label">{{ 'Formation' }}</label>
    <input class="form-control" name="formation" type="text" id="formation" value="{{ isset($formateur->formation) ? $formateur->formation : ''}}" >
    {!! $errors->first('formation', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3{{ $errors->has('structure') ? 'has-error' : ''}}">
    <label for="structure" class="control-label">{{ 'Structure' }}</label>
    <input class="form-control" name="structure" type="text" id="structure" value="{{ isset($formateur->structure) ? $formateur->structure : ''}}" >
    {!! $errors->first('structure', '<p class="help-block">:message</p>') !!}
</div>

 <div class="col-md-6 mb-3{{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Mot de passe' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3{{ $errors->has('fonction') ? 'has-error' : ''}}">
    <label for="fonction" class="control-label">{{ 'Fonction' }}</label>
    <input class="form-control" name="fonction" type="text" id="fonction" value="{{ isset($formateur->fonction) ? $formateur->fonction : ''}}" >
    {!! $errors->first('structure', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="col-md-6 mb-3{{ $errors->has('module_id') ? 'has-error' : ''}}">
    <label for="module_id" class="control-label">{{ 'Module' }}</label>
    <select name="module_id" id="module_id" class="form-control">
        <option>-- Choisir un module--</option>
            @foreach ($modules as $module)
                    <option value="{{$module->id}}" {{ isset($formateurs->module_id) && $formateurs->module_id=$module->id ? 'selected':''}}> {{  $module->nom }}</option>
            @endforeach
    </select>
    {!! $errors->first('module_id', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="row">
    <div class="col-md-6 mb-3{{ $errors->has('adresse') ? 'has-error' : ''}}">
        <label for="adresse" class="control-label">{{ 'Adresse' }}</label>
        <input class="form-control"  name="adresse" type="text" id="adresse" value="{{ isset($formateur->adresse) ? $formateur->adresse : ''}}">
        {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<br/>
<br/>

<hr class="mb-4">


<div class="row">
    <div class="col-md-3 mb-3">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>
