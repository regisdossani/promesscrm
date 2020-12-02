<div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($equipe->nom) ? $equipe->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($equipe->prenom) ? $equipe->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($equipe->password) ? $equipe->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('date_naiss') ? 'has-error' : ''}}">
    <label for="date_naiss" class="control-label">{{ 'Date de naissance' }}</label>
    <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($equipe->date_naiss) ? $equipe->date_naiss : ''}}" >
    {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email_1" class="control-label">{{ 'Email 1' }}</label>
    <input class="form-control" name="email_1" type="text" id="email_1" value="{{ isset($equipe->email_1) ? $equipe->email_1 : ''}}" >
    {!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('email_2') ? 'has-error' : ''}}">
    <label for="email_2" class="control-label">{{ 'Email 2' }}</label>
    <input class="form-control" name="email_2" type="text" id="email_2" value="{{ isset($equipe->email_2) ? $equipe->email_2 : ''}}" >
    {!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('tel_1') ? 'has-error' : ''}}">
    <label for="tel_1" class="control-label">{{ 'Tel 1' }}</label>
    <input class="form-control" name="tel_1" type="text" id="tel_1" value="{{ isset($equipe->tel_1) ? $equipe->tel_1 : ''}}" >
    {!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('tel_2') ? 'has-error' : ''}}">
    <label for="tel_2" class="control-label">{{ 'Tel 2' }}</label>
    <input class="form-control" name="tel_2" type="text" id="tel_2" value="{{ isset($equipe->tel_2) ? $equipe->tel_2 : ''}}" >
    {!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
</div>


{{-- <div class='form-group'>
    <label for="Rôle" class="control-label">{{ 'Les rôles' }}</label>

    @foreach ($roles as $role)
        {{ Form::checkbox('roles[]',  $role->id ) }}
        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
    @endforeach
</div> --}}

{{-- <div class="form-group {{ $errors->has('Roles') ? 'has-error' : ''}}">
    <label for="Roles" class="control-label">{{ 'Roles' }}</label>
    <input class="form-control" name="Roles[]"  id="Roles" type="checkbox">
</div> --}}







 @role('superadmin')

<div class="col-md-6 {{ $errors->has('titre_poste') ? 'has-error' : ''}}">
    <label for="titre_poste" class="control-label">{{ 'Titre du Poste' }}</label>
    <input class="form-control" name="titre_poste" type="text" id="titre_poste" value="{{ isset($equipe->titre_poste) ? $equipe->titre_poste : ''}}" >
    {!! $errors->first('titre_poste', '<p class="help-block">:message</p>') !!}
</div>
@if(isset($equipe->cv) && !empty($equipe->cv))
    <a href="{{ url('uploads/equipe/' . $equipe->cv) }}" ><i class="fa fa-download"></i> {{$equipe->cv}}</a>
@endif
<div class="col-md-6 {{ $errors->has('cv') ? 'has-error' : ''}}">
    <label for="cv" class="control-label">{{ 'Cv' }}</label>
    <input class="form-control" name="cv" type="file" id="cv" value="{{ isset($equipe->cv) ? $equipe->cv : ''}}" >
    {!! $errors->first('cv', '<p class="help-block">:message</p>') !!}
</div>


@if(isset($equipe->contrat) && !empty($equipe->contrat))
    <img src="{{url('/uploads/equipe/' . $equipe->contrat) }}" width="100" height="100"/>
@endif
<div class="col-md-6 {{ $errors->has('contrat') ? 'has-error' : ''}}">
    <label for="contrat" class="control-label">{{ 'Contrat' }}</label>
    <input class="form-control" name="contrat" type="file" id="contrat" value="{{ isset($equipe->contrat) ? $equipe->contrat : ''}}" >
    {!! $errors->first('contrat', '<p class="help-block">:message</p>') !!}
</div>

@endrole

<div class="col-md-6 {{ $errors->has('adresse') ? 'has-error' : ''}}">
    <label for="adresse" class="control-label">{{ 'Adresse' }}</label>
    <input class="form-control" name="adresse" type="text" id="adresse" value="{{ isset($equipe->adresse) ? $equipe->adresse : ''}}" >
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>



@if(isset($equipe->avatar) && !empty($equipe->avatar))
    <img src="{{url('/uploads/equipe/' . $equipe->avatar) }}" width="100" height="100"/>
@endif
<div class="col-md-6 {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" value="{{ isset($equipe->avatar) ? $equipe->avatar : ''}}" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-12">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
