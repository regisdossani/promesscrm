<div class="col-md-6  {{ $errors->has('nom') ? 'has-error' : ''}}">
        <label for="nom" class="control-label">{{ 'Noms du candidat :' }}</label>
        <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($candidat->nom) ? $candidat->nom : ''}}">
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-3 {{ $errors->has('sexe') ? 'has-error' : ''}}">
        <label for="sexe" class="control-label">{{ 'Sexe :' }}</label>
            <select name="sexe" id="sexe" class="form-control">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
    </div>
    <div class="col-md-3 mb-3  {{ $errors->has('filiere_id') ? 'has-error' : ''}}">
        <label for="filiere" class="control-label">{{'Filière:'}}</label>
                <select name="filiere_id" id="filiere_id" class="form-control">
                    <option value=""> Nos filières</option>
                        @foreach($filieres as $filiere)
                            <option value="{{ $filiere->id }}" {{ isset($candidats->filiere_id) && $candidats->filiere_id == $filiere->id ? 'selected' : ''}}>{{ $filiere->nom}}</option>
                        @endforeach
                </select>
     </div>
     <div class="col-md-3 mb-3  {{ $errors->has('tel') ? 'has-error' : ''}}">
        <label for="tel" class="control-label">{{'Téléphone:' }}</label>
        <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($candidat->tel) ? $candidat->tel : ''}}" >
        {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-3 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="control-label">{{ 'Email:' }}</label>
        <input class="form-control" name="email" type="text" id="email" value="{{ isset($candidat->email) ? $candidat->email : ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>

    <div class=" col-md-6 mb-3  {{ $errors->has('provenance') ? 'has-error' : ''}}">
        <label for="provenance" class="control-label">{{ 'Provenance :' }}</label>
        <input class="form-control" name="provenance" type="text" id="date_naiss" value="{{ isset($candidat->provenance) ? $candidat->provenance : ''}}" >
        {!! $errors->first('provenance', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-6 mb-3{{ $errors->has('region') ? 'has-error' : ''}}">
        <label for="region" class="control-label">{{'Région:' }}</label>
        <input class="form-control" name="region" type="text" id="region" value="{{ isset($candidat->region) ? $candidat->region : ''}}" >
        {!! $errors->first('region', '<p class="help-block">:message</p>') !!}
    </div>



            <div class="col-md-6 mb-3 {{ $errors->has('parrain') ? 'has-error' : ''}}">
                <label for="parrain" class="control-label">{{ 'Parrain :' }}</label>
                <input class="form-control" name="parrain" type="text" id="parrain" value="{{ isset($candidat->parrain) ? $candidat->parrain : ''}}" >
                {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="col-md-6 mb-3  {{ $errors->has('tel_parrain') ? 'has-error' : ''}}">
                <label for="tel_parrain" class="control-label">{{ 'Tél. Parrain :' }}</label>
                <input class="form-control" name="tel_parrain" type="text" id="tel_parrain" value="{{ isset($candidat->tel_parrain) ? $candidat->tel_parrain : ''}}" >
                {!! $errors->first('tel_parrain', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="col-md-6 mb-3  {{ $errors->has('email_parrain') ? 'has-error' : ''}}">
                <label for="email_parrain" class="control-label">{{ 'Email Parrain :' }}</label>
                <input class="form-control" name="email_parrain" type="text" id="email_parrain" value="{{ isset($candidat->email_parrain) ? $candidat->email_parrain : ''}}" >
                {!! $errors->first('email_parrain', '<p class="help-block">:message</p>') !!}
            </div>

            @if(!empty($candidat->pj_depotdossier))
                <a href="{{ url('uploads/candidats/'.$candidat->pj_depotdossier) }}"><i class="fa fa-download"></i> {{'pj_depotdossier'}}</a>
            @endif
       {{--  <div class="col-md-6 mb-3 {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
            <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe(1)(Depot de dossier)' }}</label>
            <input class="form-control" name="pj_depotdossier" type="file" id="pj_depotdossier"  value="{{ isset($candidat->pj_depotdossier) ? $candidat->pj_depotdossier : ''}}">
            {!! $errors->first('pj_depotdossier', '<p class="help-block">:message</p>') !!}
        </div> --}}

     @if(!empty($candidat->pj_depotdossier2))
        <a href="{{ url('uploads/candidats/'.$candidat->pj_depotdossier2) }}"><i class="fa fa-download"></i> {{'pj depotdossier2'}}</a>
    @endif
   {{-- <div class="col-md-6 mb-3  {{ $errors->has('pj_depotdossier2') ? 'has-error' : ''}}">
        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe(2)(Depot de dossier)' }}</label>
        <input class="form-control" name="pj_depotdossier2" type="file" id="pj_depotdossier2" value="{{ isset($candidat->pj_depotdossier2) ? $candidat->pj_depotdossier2 : ''}}" >
        {!! $errors->first('pj_depotdossier2', '<p class="help-block">:message</p>') !!}
    </div> --}}


        @hasanyrole('Resp-Pedagogique|superadmin')
            <div class="col-md-6 mb-3 {{ $errors->has('promo_id') ? 'has-error' : ''}}">
                <label for="promo_id class="control-label">{{ 'Promo:' }}</label>
                <select name="promo_id" id="promo_id" class="form-control">
                    <option value="">Nos promotions</option>
                        @foreach($promos as $promo)
                            <option value="{{ $promo->id }}" {{ isset($candidats->promo_id) && $candidats->promo_id == $promo->id ? 'selected' : ''}}>{{ $promo->nom}}</option>
                        @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3 {{ $errors->has('reception_dossier') ? 'has-error' : ''}}">
                <label for="reception_dossier" class="control-label">{{ 'Reception ( dossier du candidat)' }}</label>
                <div class="form-inline">
                        <label><input name="reception_dossier" type="radio" value="1" {{ (isset($candidat) && 1 == $candidat->reception_dossier) ? 'checked' : '' }}> Oui</label>
                </div>
                <div class="form-inline">
                        <label><input name="reception_dossier" type="radio" value="0" @if (isset($candidat)) {{ (0 == $candidat->reception_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
                </div>
                    {!! $errors->first('reception_dossier', '<p class="help-block">:message</p>') !!}
                </div>
        @endrole


<div class="row"></div>
<br/>

<div class="row">
    <div class="col-md-6 mb-3">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>

