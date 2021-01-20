
 @role('superadmin')
 <div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('raison_social') ? 'has-error' : ''}}">
            <label for="raison_social" class="control-label">{{ 'Raison social' }}</label>
            <input class="form-control" name="raison_social" type="text" id="raison_social" value="{{ isset($partenaire->raison_social) ? $partenaire->raison_social : ''}}" required>
            {!! $errors->first('raison_social', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('type_organisation') ? 'has-error' : ''}}">
            <label for="type_organisation" class="control-label">{{ 'Type d\'Organisation' }}</label>
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

    <div class="col-md-6 mb-3  {{ $errors->has('type_partenariat') ? 'has-error' : ''}}">

            <label for="type_partenariat" class="control-label">{{ 'Type de partenariat' }}</label>
            {{-- <input class="form-control" name="type_partenariat" type="text" id="type_partenariat"  >
            {!! $errors->first('type_partenariat', '<p class="help-block">:message</p>') !!} --}}
            <select name="type_partenariat" id="type_partenariat" class="form-control">
                <option value="">--Choisir un type partanariat--</option>
                <option value="ENTREPRISES PARTENAIRES">ENTREPRISES PARTENAIRES</option>
                <option value="COLLECTIVITES TERRITORIALES">COLLECTIVITES TERRITORIALES</option>
                <option value="PARTENAIRES DE MISE EN OEUVRE">PARTENAIRES DE MISE EN OEUVRE</option>

                <option value="STRUCTURES DE L'ADMINISTRATION">STRUCTURES DE L'ADMINISTRATION</option>
                <option value="PARTENAIRES TECHNIQUES ET FIANCIERS">PARTENAIRES TECHNIQUES ET FIANCIERS</option>
                <option value="STRUCTURES  D’ENSEIGNEMENT  ET DE FORMATION">STRUCTURES  D’ENSEIGNEMENT  ET DE FORMATION</option>
            </select>
        </div>



        <div class="col-md-6 mb-3 {{ $errors->has('tel') ? 'has-error' : ''}}">
            <label for="tel" class="control-label">{{ 'Téléphone' }}</label>
            <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($partenaire->tel) ? $partenaire->tel : ''}}" required>
        </div>


    <hr class="mb-4">

    <br />
    <br />
    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
</div>
@endrole
