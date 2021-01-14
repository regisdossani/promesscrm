<div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($pers_ressource->nom) ? $pers_ressource->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="col-md-6 {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($pers_ressource->prenom) ? $pers_ressource->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div> --}}
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

<div class="col-md-6 mb-3 {{ $errors->has('atelier_de_juillet_2018') ? 'has-error' : ''}}">
    <label for="atelier_de_juillet_2018" class="control-label">{{ 'atelier_de_juillet_2018' }}</label>
        <div class="radio">
            <label><input name="atelier_de_juillet_2018" type="radio" value="1" {{ (isset($pers_ressource) && 1 == $pers_ressource->reception_dossier) ? 'checked' : '' }}> Oui</label>
        </div>
        <div class="radio">
        <label><input name="atelier_de_juillet_2018" type="radio" value="0" @if (isset($pers_ressource)) {{ (0 == $pers_ressource->reception_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
        </div>
    {!! $errors->first('atelier_de_juillet_2018', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('formation_de_janvier_2019') ? 'has-error' : ''}}">
    <label for="formation_de_janvier_2019" class="control-label">{{ 'formation_de_janvier_2019' }}</label>
        <div class="radio">
            <label><input name="formation_de_janvier_2019" type="radio" value="1" {{ (isset($pers_ressource) && 1 == $pers_ressource->formation_de_janvier_2019) ? 'checked' : '' }}> Oui</label>
        </div>
        <div class="radio">
        <label><input name="formation_de_janvier_2019" type="radio" value="0" @if (isset($pers_ressource)) {{ (0 == $pers_ressource->formation_de_janvier_2019) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
        </div>
    {!! $errors->first('formation_de_janvier_2019', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3 {{ $errors->has('qualite') ? 'has-error' : ''}}">
    <label for="qualite" class="control-label">{{ 'Qualite' }}</label>
    <input class="form-control"  name="qualite" type="text" id="qualite" >{{ isset($pers_ressource->qualite) ? $pers_ressource->qualite : ''}}</textarea>
    {!! $errors->first('qualite', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('specialites') ? 'has-error' : ''}}">
    <label for="specialites" class="control-label">{{ 'Specialites' }}</label>
    <input class="form-control"  name="specialites" type="text" id="specialites" >{{ isset($pers_ressource->specialites) ? $pers_ressource->specialites : ''}}</textarea>
    {!! $errors->first('specialites', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="col-md-6 mb-3 {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" cols="60" name="description" type="textarea" id="description" >{{ isset($pers_ressource->description) ? $pers_ressource->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
 --}}

 <div class="col-md-6 mb-3 {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    @if(isset($pers_ressource->piece_jointe) && !empty($pers_ressource->piece_jointe))
        <a href="{{url('/uploads/pers_ressources/' . $pers_ressource->piece_jointe) }}"><i class="fa fa-download"></i>{{$pers_ressource->piece_jointe}}</a>
    @endif
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($pers_ressource->piece_jointe) ? $pers_ressource->piece_jointe : ''}}" >
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-12">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
