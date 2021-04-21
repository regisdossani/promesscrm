<div class="col-md-6 mb-3 {{ $errors->has('civilité') ? 'has-error' : ''}}">
    <label for="civilite" class="control-label">{{ 'Civilite' }}</label>
    <select name="civilite" id="civilite" class="form-control">
        <option value="monsieur">M</option>
        <option value="madame">Mme</option>
        <option value="madame">Mlle</option>
</select>    {!! $errors->first('civilite', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($client->prenom) ? $client->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($client->nom) ? $client->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('tel_1') ? 'has-error' : ''}}">
    <label for="tel_1" class="control-label">{{ 'Tel 1' }}</label>
    <input class="form-control" name="tel_1" type="text" id="tel_1" value="{{ isset($client->tel_1) ? $client->tel_1 : ''}}" >
    {!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('tel_2') ? 'has-error' : ''}}">
    <label for="tel_2" class="control-label">{{ 'Tel 2' }}</label>
    <input class="form-control" name="tel_2" type="text" id="tel_2" value="{{ isset($client->tel_2) ? $client->tel_2 : ''}}" >
    {!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($client->email) ? $client->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
