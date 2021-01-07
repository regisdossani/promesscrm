
 @role('superadmin')
 <div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
            <label for="nom" class="control-label">{{ 'Nom' }}</label>
            <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($partenaire->nom) ? $partenaire->nom : ''}}" required>
            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('type_partenariat') ? 'has-error' : ''}}">
            <label for="type_partenariat" class="control-label">{{ 'Type Partenariat' }}</label>
            <select class="form-control" name="type_partenariat"  id="type_partenariat" >
                <option value="">--Choisissez un type de Modalité--</option>

                <option value="Probono">Probono</option>
                <option value="Subvention">Subvention</option>
                <option value="Prestation">Prestation</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('modalite') ? 'has-error' : ''}}">
            <label for="modalite" class="control-label">{{ 'Modalités' }}</label>
            <select class="form-control" name="modalite"  id="modalite" >
                <option value="">--Selectionnez une Modalité--</option>
                <option value="Contrat">Contrat</option>
                <option value="Logistique">Logistique</option>
            </select>
        </div>


        <div class="col-md-6 mb-3  {{ $errors->has('fiche') ? 'has-error' : ''}}">
            @if(isset($partenaire->fiche) && !empty($partenaire->fiche))
                <a href="{{ url('uploads/partenaires/' . $partenaire->fiche) }}" ><i class="fa fa-download"></i> {{$partenaire->fiche}}</a>
            @endif
            <label for="fiche" class="control-label">{{ 'Fiche de description du partenariat' }}</label>
            <input class="form-control" name="fiche" type="file" id="fiche"  >
            {!! $errors->first('fiche', '<p class="help-block">:message</p>') !!}
        </div

        <div class="col-md-6 mb-3 {{ $errors->has('champ_activite') ? 'has-error' : ''}}">
            <label for="champ_activite" class="control-label">{{ 'Champ Activité' }}</label>
            <textarea class="form-control" rows="5" name="champ_activite" type="textarea" id="champ_activite" >{{ isset($partenaire->champ_activite) ? $partenaire->champ_activite : ''}}</textarea>
            {!! $errors->first('champ_activite', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <hr class="mb-4">

    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
</div>
@endrole
