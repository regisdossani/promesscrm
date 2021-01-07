
                                    <div class="col-md-3  {{ $errors->has('civilite') ? 'has-error' : ''}}">
                                            <label for="civilite" class="control-label">{{ 'Civilité :' }}</label>
                                            <div class="select-list">
                                                <select name="civilite" id="civilite" class="form-control">
                                                    <option value="M">M</option>
                                                    <option value="Mme">Mme</option>
                                                    <option value="Mlle">Mlle</option>
                                                </select>
                                                {!! $errors->first('civilite', '<p class="help-block">:message</p>') !!}
                                            </div>
                                    </div>

                                    <div class="col-md-3  {{ $errors->has('date_naiss') ? 'has-error' : ''}}">
                                        <label for="date_naiss" class="control-label">{{ 'Date de Naissance :' }}</label>
                                        <input class="form-control" name="date_naiss" type="date" id="date_naiss" value="{{ isset($candidat->date_naiss) ? $candidat->date_naiss : ''}}" >
                                        {!! $errors->first('date_naiss', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="col-md-6 {{ $errors->has('adresse') ? 'has-error' : ''}}">
                                        <label for="adresse" class="control-label">{{ 'Adresse :' }}</label>
                                        <input class="form-control" name="adresse" type="text" id="adresse" value="{{ isset($candidat->date_naiss) ? $candidat->date_naiss : ''}}" >
                                        {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                                    </div>






                                    <div class="col-md-6 ">
                                        <label for="prenom" class="control-label">{{ 'Prénom :' }}</label>
                                        <input class="form-control" name="prenom" type="text" id="prenom" >
                                        {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                                    </div>


                                    <div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}} ">
                                        <label for="nom" class="control-label">{{ 'Nom :' }}</label>
                                        <input class="form-control" name="nom" type="text" id="nom" >
                                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                    </div>




                                <div class="col-md-6  {{ $errors->has('email_1') ? 'has-error' : ''}}">
                                    <label for="email_1" class="control-label">{{ 'Email 1:' }}</label>
                                    <input class="form-control" name="email_1" type="text" id="email_1" value="{{ isset($candidat->email_1) ? $candidat->email_1 : ''}}" >
                                    {!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
                                </div>

                                <div class="col-md-6  {{ $errors->has('email_2') ? 'has-error' : ''}}">
                                    <label for="email_2" class="control-label">{{ 'Email 2:' }}</label>
                                    <input class="form-control" name="email_2" type="text" id="email_2" value="{{ isset($candidat->email_2) ? $candidat->email_2 : ''}}" >
                                    {!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
                                </div>



                            <div class="col-md-6  {{ $errors->has('tel_1') ? 'has-error' : ''}}">
								<label for="tel_1" class="control-label">{{'Téléphonel 1:' }}</label>
								<input class="form-control" name="tel_1" type="text" id="tel_1" value="{{ isset($candidat->tel_1) ? $candidat->tel_1 : ''}}" >
								{!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
							</div>

							<div class="col-md-6  {{ $errors->has('tel_2') ? 'has-error' : ''}}">
								<label for="tel_2" class="control-label">{{'Téléphone 2:' }}</label>
									<input class="form-control" name="tel_2" type="text" id="tel_2" value="{{ isset($candidat->tel_2) ? $candidat->tel_2 : ''}}" >
									{!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
							</div>


                            <div class="col-md-6 ">
                                <label for="choix_formation">Choix de la formation du candidat:</label>
                                <input class="form-control" name="choix_formation" type="text" id="choix_formation" value="{{ isset($candidat->choix_formation) ? $candidat->choix_formation : ''}}" >
                                    {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
                            </div>

                             @role('superadmin')

                                <div class="col-md-6  {{ $errors->has('statut') ? 'has-error' : ''}}">
                                        <label for="statut" class="control-label">{{ 'Statut' }}</label>
                                        <select class="form-control" name="statut"  id="statut" >
                                            <option>-- --Choisissez un statut--</option>

                                                <option value="1">Intention</option>
                                                <option value="2">En attente</option>
                                                <option value="3">Acceptée</option>
                                                <option value="4">Refusée</option>

                                        </select>
                                            {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                                </div>
                            @endrole



@role('superadmin')





<div class="col-md-2  {{ $errors->has('depot_dossier') ? 'has-error' : ''}}">
    <label for="depot_dossier" class="control-label">{{ 'Dossier Deposé?' }}</label>
    <div class="radio">
            <label><input name="depot_dossier" type="radio" value="1" {{ (isset($candidat) && 1 == $candidat->depot_dossier) ? 'checked' : '' }}> Oui</label>
    </div>
    <div class="radio">
        <label><input name="depot_dossier" type="radio" value="0" @if (isset($candidat)) {{ (0 == $candidat->depot_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
    </div>
    {!! $errors->first('depot_dossier', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6  {{ $errors->has('parrain') ? 'has-error' : ''}}">
    <label for="parrain" class="control-label">{{ 'Parrain' }}</label>
    <input class="form-control" name="parrain" type="text" id="parrain" value="{{ isset($candidat->parrain) ? $candidat->parrain : ''}}" >
    {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
</div>



<div class="col-md-2  {{ $errors->has('test_ecrit') ? 'has-error' : ''}}">
    <label for="test_ecrit" class="control-label">{{ 'Date du test Ecrit' }}</label>
    <input class="form-control" name="test_ecrit" type="date" id="test_ecrit" value="{{ isset($candidat->test_ecrit) ? $candidat->test_ecrit : ''}}" >
    {!! $errors->first('test_ecrit', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-2  {{ $errors->has('test_oral') ? 'has-error' : ''}}">
    <label for="test_oral" class="control-label">{{ 'Date Test Oral' }}</label>
    <input class="form-control" name="test_oral" type="date" id="test_oral" value="{{ isset($candidat->test_oral) ? $candidat->test_oral : ''}}" >
    {!! $errors->first('test_oral', '<p class="help-block">:message</p>') !!}
</div>
    <div class="col-md-4  {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
        @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
            <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
        @endif
        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe1(Depot de dossier)' }}</label>
        <input class="form-control" name="pj_depotdossier" type="file" id="pj_depotdossier"  >
        {!! $errors->first('pj_depotdossier', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-4  {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">

        @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
            <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier2}}</a>
        @endif
        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe2(Depot de dossier)' }}</label>
        <input class="form-control" name="pj_depotdossier2" type="file" id="pj_depotdossier2"  >
        {!! $errors->first('pj_depotdossier2', '<p class="help-block">:message</p>') !!}
    </div>





         <div class="col-md-6  {{ $errors->has('test_pj') ? 'has-error' : ''}}">
            @if(isset($candidat->test_pj) && !empty($candidat->test_pj))
            <a href="{{ url('uploads/candidats/' . $candidat->test_pj) }}" ><i class="fa fa-download"></i> {{$candidat->test_pj}}</a>

        @endif

                    <label for="test_pj" class="control-label">{{ 'Pièce jointe Test' }}</label>
                    <input class="form-control" name="test_pj" type="file" id="test_pj"  >
                    {!! $errors->first('test_pj', '<p class="help-block">:message</p>') !!}
            </div>



        <div class="col-md-6 {{ $errors->has('orientation') ? 'has-error' : ''}}">
            <label for="orientation" class="label">{{ 'Orientation' }}</label>
            <input type="text" class="form-control" name="orientation" id="orientation" placeholder="orientation">
            {!! $errors->first('orientation', '<p class="help-block">:message</p>') !!}

        </div>


<div class="col-md-10   {{ $errors->has('commentaire') ? 'has-error' : ''}}">
    <label class="label" for="commentaire">Commentaire</label>
    <textarea name="commentaire" class="form-control" id="commentaire" cols="30" rows="4" placeholder="commentaire"></textarea>
    {!! $errors->first('commentaire', '<p class="help-block">:message</p>') !!}

</div>
@endrole




<div class="col-md-8 form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    @if(isset($candidat->avatar) && !empty($candidat->avatar))
        <img src="{{url('/uploads/candidats/' . $candidat->avatar) }}" width="100" height="100"/>
    @endif

    <label for="avatar" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 ">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>

