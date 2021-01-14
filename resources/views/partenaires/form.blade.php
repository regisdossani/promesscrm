
 @role('superadmin')
 <div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('raison_social') ? 'has-error' : ''}}">
            <label for="raison_social" class="control-label">{{ 'Raison social' }}</label>
            <input class="form-control" name="raison_social" type="text" id="raison_social" value="{{ isset($partenaire->raison_social) ? $partenaire->raison_social : ''}}" required>
            {!! $errors->first('raison_social', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('type_organisation') ? 'has-error' : ''}}">
            <label for="type_organisation" class="control-label">{{ 'Champ Activité' }}</label>
            <input class="form-control"  name="type_organisation" type="text" id="activite_entreprise"   value="{{ isset($partenaire->type_organisation) ? $partenaire->type_organisation : ''}}" >
            {!! $errors->first('type_organisation', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('nom_referent') ? 'has-error' : ''}}">
            <label for="nom_referent" class="control-label">{{ 'Nom du Référent' }}</label>
            <input class="form-control" name="nom_referent" type="text" id="nom_referent" value="{{ isset($partenaire->nom_referent) ? $partenaire->nom_referent : ''}}" required>
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="control-label">{{ 'Email' }}</label>
            <input class="form-control" name="email" type="text" id="email" value="{{ isset($partenaire->email) ? $partenaire->email : ''}}" required>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 mb-3 {{ $errors->has('tel') ? 'has-error' : ''}}">
            <label for="tel" class="control-label">{{ 'Tél' }}</label>
            <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($partenaire->tel) ? $partenaire->tel : ''}}" required>
        </div>



       {{--  <div class="col-md-6 mb-3  {{ $errors->has('fiche') ? 'has-error' : ''}}">
            @if(isset($partenaire->fiche) && !empty($partenaire->fiche))
                <a href="{{ url('uploads/partenaires/' . $partenaire->fiche) }}" ><i class="fa fa-download"></i> {{$partenaire->fiche}}</a>
            @endif
            <label for="fiche" class="control-label">{{ 'Fiche de description du partenariat' }}</label>
            <input class="form-control" name="fiche" type="file" id="fiche"  >
            {!! $errors->first('fiche', '<p class="help-block">:message</p>') !!}
        </div> --}}


    </div>
    <hr class="mb-4">

    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
</div>
@endrole
