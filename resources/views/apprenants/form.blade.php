<div style="width:75%;margin:auto">
    <div class="row">
        <div class="col-md-6  {{ $errors->has('sexe') ? 'has-error' : ''}}">
            <label for="sexe" class="control-label">{{ 'Sexe :' }}</label>
            <div class="select-list">
                <select name="sexe" id="sexe" class="form-control">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
                {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
            </div>
    </div>

        <div class="col-md-6 mb-3 {{ $errors->has('prenom') ? 'has-error' : ''}}">
            <label for="prenom" class="control-label">{{ 'Prénom' }}</label>
                <input class="form-control" name="prenom" type="text" id="prenom"  value="{{ isset($apprenant->prenom) ? $apprenant->prenom : ''}}" >
                {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
        </div>


        <div class="col-md-6 mb-3 {{ $errors->has('nom') ? 'has-error' : ''}}">
            <label for="nom" class="control-label">{{ 'Nom' }}</label>
            <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($apprenant->nom) ? $apprenant->nom : ''}}" >
               {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('reference') ? 'has-error' : ''}}">
            <label for="reference" class="control-label">{{ 'Référence' }}</label>
            <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($apprenant->reference) ? $apprenant->reference : ''}}" >
               {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="control-label">{{ 'Email' }}</label>
            <input class="form-control" name="email" type="text" id="email" value="{{ isset($apprenant->email) ? $apprenant->email : ''}}" required>
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3{{ $errors->has('tel') ? 'has-error' : ''}}">
            <label for="tel" class="control-label">{{ 'Téléphone' }}</label>
            <input class="form-control" name="tel" type="text" id="password" value="{{ isset($apprenant->tel) ? $apprenant->tel : ''}}" >
            {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3{{ $errors->has('date_naiss') ? 'has-error' : ''}}">
            <label for="date_naiss" class="control-label">{{ 'Date de naissance' }}</label>
            <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($apprenant->date_naiss) ? $apprenant->date_naiss : ''}}" >
            {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3{{ $errors->has('lieu_naiss') ? 'has-error' : ''}}">
            <label for="lieu_naiss" class="control-label">{{ 'Lieu de naissance' }}</label>
            <input class="form-control" name="lieu_naiss" type="text" id="lieu_naiss" value="{{ isset($apprenant->lieu_naiss) ? $apprenant->lieu_naiss : ''}}" >
            {!! $errors->first('lieu_naiss', '<p class="help-block">:message</p>') !!}
        </div>


        <div class="col-md-6 mb-3{{ $errors->has('password') ? 'has-error' : ''}}">
            <label for="password" class="control-label">{{ 'Mot de passe' }}</label>
            <input class="form-control" name="password" type="password" id="password" value="{{ isset($apprenant->password) ? $apprenant->password : ''}}" >
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>

    </div>


@role('superadmin')

    <div class="row">
      <div class="col-md-6 mb-3 {{ $errors->has('candidat_id') ? 'has-error' : ''}}">
           <label for="candidat_id" class="control-label">{{ 'Candidat Apprenant' }}</label>
            <select class="form-control" name="candidat_id"  id="candidat_id" >
                @foreach($candidats as $candidat)
                    @if ($candidat->statut=='3')
                        <option value="{{ $candidat->id }}" {{ isset($apprenants->candidat_id) && $apprenants->candidat_id == $candidat->id ? 'selected' : ''}}>{{ $candidat->nom}}</option>
                    @endif
                @endforeach
            </select>
         </div>
         <div class="col-md-6 mb-3 {{ $errors->has('filiere_id') ? 'has-error' : ''}}">
            <label for="filiere_id" class="control-label">{{ 'Choix de la filiere' }}</label>
            <select class="form-control" name="filiere_id"  id="filiere_id" >
                @foreach($filieres as $filiere)
                    <option value="{{ $filiere->id }}" {{ isset($apprenants->filiere_id) && $apprenants->filiere_id == $filiere->id ? 'selected' : ''}}>{{ $filiere->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 mb-3 {{ $errors->has('promo_id') ? 'has-error' : ''}}">
            <label for="promo_id" class="control-label">{{ 'Choix de la Promo' }}</label>
            <select class="form-control" name="promo_id"  id="promo_id" >
                @foreach($promos as $promo)
                    <option value="{{ $promo->id }}" {{ isset($apprenants->$promo_id) && $apprenants->$promo_id == $promo->id ? 'selected' : ''}}>{{ $promo->nom}}</option>
                @endforeach
            </select>
        </div>


{{--
        <div class="col-md-6 mb-3 {{ $errors->has('note_1') ? 'has-error' : ''}}">
            <label for="note_1" class="control-label">{{ 'Note 1' }}</label>
            <input class="form-control" name="note_1" type="number" id="note_1" value="{{ isset($apprenant->note_1) ? $apprenant->note_1 : ''}}" >
            {!! $errors->first('note_1', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3 {{ $errors->has('note_2') ? 'has-error' : ''}}">
            <label for="note_2" class="control-label">{{ 'Note 2' }}</label>
            <input class="form-control" name="note_2" type="number" id="note_2" value="{{ isset($apprenant->note_2) ? $apprenant->note_2 : ''}}" >
            {!! $errors->first('note_2', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3 {{ $errors->has('note_3') ? 'has-error' : ''}}">
            <label for="note_3" class="control-label">{{ 'Note 3' }}</label>
            <input class="form-control" name="note_3" type="number" id="note_3" value="{{ isset($apprenant->note_3) ? $apprenant->note_3 : ''}}" >
            {!! $errors->first('note_3', '<p class="help-block">:message</p>') !!}
        </div> --}}

    </div>

        <div class="row">
            <div class="col-md-6 mb-3 {{ $errors->has('visite_terain') ? 'has-error' : ''}}">
                <label for="visite_terain" class="control-label">{{ 'Visite Terain ' }}</label>
                <input class="form-control" name="tel" type="text" id="visite_terain" value="{{ isset($apprenant->visite_terain) ? $apprenant->visite_terain : ''}}" >
                {!! $errors->first('visite_terain', '<p class="help-block">:message</p>') !!}

                {{--  <label><input name="visite_terain[]" type="checkbox" value="Visite Terain 1" > Visite Terain 1</label>
                    <label><input name="visite_terain[]" type="checkbox" value="Visite Terain 2" > Visite Terain 2</label>
                    <label><input name="visite_terain[]" type="checkbox" value="Visite Terain 3" > Visite Terain 3</label> --}}
            </div>
            <div class="col-md-6 mb-3 {{ $errors->has('annee') ? 'has-error' : ''}}">
                <label for="annee" class="control-label">{{ 'Année ' }}</label>
                <input class="form-control" name="annee" type="text" id="annee" value="{{ isset($apprenant->annee) ? $apprenant->annee : ''}}" >
                {!! $errors->first('annee', '<p class="help-block">:message</p>') !!}
            </div>

        </div>

        </div>



@endrole

<hr class="mb-4">

{{-- <div class="bs-example">
    <!-- Extra Large modal -->
    <button  data-toggle="modal" data-target="#stageLargeModal">Ajouter un Stage</button>

    <div id="stageLargeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AJOUTER DES STAGE À L'APPRENANT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="POST">
                        <div class="modal-body">
                                    <label for="stage_id" class="control-label">{{ 'Liste des Stages' }}</label>
                                    <div class="checkbox">
                                            @foreach($stages as $stage)
                                            <label><input name="stage[]" type="checkbox"  value="{{ $stage->id }}" > {{ $stage->titre}}</label>
                                            @endforeach
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                </form>
            </div>
        </div>
    </div>


    <button  data-toggle="modal" data-target="#chantierLargeModal">Ajouter un Chantier école</button>

    <div id="chantierLargeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AJOUTER DES CHANTIER ÉCOLE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="POST">
                        <div class="modal-body">
                            <label for="chantier_id" class="control-label">{{ 'Liste des Chantiers école' }}</label>
                            <div class="checkbox">
                                @foreach($chantiers as $chantiier)
                                <label><input name="chantier[]" type="checkbox"  value="{{ $chantier->id }}" > {{ $chantier->titre}}</label>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">OK</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<hr class="mb-4">
<br><br>


<div class="row">
    <div class="col-md-12 mb-3">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>
</div>
