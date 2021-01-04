<div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($pers_ressource->nom) ? $pers_ressource->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($pers_ressource->prenom) ? $pers_ressource->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($pers_ressource->email) ? $pers_ressource->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Téléphone' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($pers_ressource->tel) ? $pers_ressource->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3 {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    @if(isset($pers_ressource->piece_jointe) && !empty($pers_ressource->piece_jointe))
        <a href="{{url('/uploads/pers_ressources/' . $pers_ressource->piece_jointe) }}"><i class="fa fa-download"></i>{{$pers_ressource->piece_jointe}}</a>
    @endif
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($pers_ressource->piece_jointe) ? $pers_ressource->piece_jointe : ''}}" >
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('nature_personne_ressource') ? 'has-error' : ''}}">
    <label for="nature_personne_ressource" class="control-label">{{ 'Nature Personne Ressource' }}</label>
    <input class="form-control" name="nature_personne_ressource" type="text" id="nature_personne_ressource" value="{{ isset($pers_ressource->nature_personne_ressource) ? $pers_ressource->nature_personne_ressource : ''}}" required>
    {!! $errors->first('nature_personne_ressource', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('objet_du_contact') ? 'has-error' : ''}}">
    <label for="objet_du_contact" class="control-label">{{ 'Objet Du Contact' }}</label>
    <textarea class="form-control" rows="5" cols="60" name="objet_du_contact" type="textarea" id="objet_du_contact" >{{ isset($pers_ressource->objet_du_contact) ? $pers_ressource->objet_du_contact : ''}}</textarea>
    {!! $errors->first('objet_du_contact', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" cols="60" name="description" type="textarea" id="description" >{{ isset($pers_ressource->description) ? $pers_ressource->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>




<div class="col-md-12">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
