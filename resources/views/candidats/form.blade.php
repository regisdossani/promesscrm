

                                    <div class="col-md-6 {{ $errors->has('nom') ? 'has-error' : ''}} ">
                                        <label for="nom" class="control-label">{{ 'Nom :' }}</label>
                                        <input class="form-control" name="nom" type="text" id="nom" >
                                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                    </div>




                                <div class="col-md-6  {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <label for="email" class="control-label">{{ 'Email:' }}</label>
                                    <input class="form-control" name="email" type="text" id="email" value="{{ isset($candidat->email) ? $candidat->email_1 : ''}}" >
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                </div>


                            <div class="col-md-6  {{ $errors->has('tel') ? 'has-error' : ''}}">
								<label for="tel" class="control-label">{{'Téléphonel:' }}</label>
								<input class="form-control" name="tel" type="text" id="tel" value="{{ isset($candidat->tel) ? $candidat->tel_1 : ''}}" >
								{!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
							</div>


                        <div>
                            <label for="orientation">promo:</label>
                                <select class="form-control" name="promo"  id="promo" >
                                        <option>--Choisissez une orientation--</option>
                                        <option value="Formation initiale">Formation initiale</option>
                                        <option value="Formation initiale">Formation continue</option>
                                </select>
                                {!! $errors->first('promo', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="col-md-6 {{ $errors->has('parrain') ? 'has-error' : ''}} ">
                                <label for="parrain" class="control-label">{{ 'Parrain :' }}</label>
                                <input class="form-control" name="parrain" type="text" id="parrain" >
                                {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="col-md-6 {{ $errors->has('tel_parrain') ? 'has-error' : ''}} ">
                                <label for="tel_parrain" class="control-label">{{ 'Tél Parrain :' }}</label>
                                <input class="form-control" name="tel_parrain" type="text" id="tel_parrain" >
                                {!! $errors->first('tel_parrain', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="col-md-6 {{ $errors->has('email_parrain') ? 'has-error' : ''}} ">
                                <label for="email_parrain" class="control-label">{{ 'Email Parrain :' }}</label>
                                <input class="form-control" name="email_parrain" type="text" id="email_parrain" >
                                {!! $errors->first('email_parrain', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="col-md-6 {{ $errors->has('provenance') ? 'has-error' : ''}}">
                                <label for="provenance" class="control-label">{{ 'Provenance :' }}</label>
                                <input class="form-control" name="provenance" type="text" id="provenance" value="{{ isset($candidat->date_naiss) ? $candidat->date_naiss : ''}}" >
                                {!! $errors->first('provenance', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="col-md-6 {{ $errors->has('region') ? 'has-error' : ''}}">
                                <label for="region" class="control-label">{{ 'Region :' }}</label>
                                <input class="form-control" name="region" type="text" id="region" value="{{ isset($candidat->region) ? $candidat->region : ''}}" >
                                {!! $errors->first('region', '<p class="help-block">:message</p>') !!}
                            </div>




                             @role('superadmin')
                             <div>
                                <label for="filiere">Filière:</label>
                                <select class="form-control" name="filiere"  id="filiere" >
                                        <option>--Choisissez un filiere--</option>
                                            @foreach ($filiere as $item)
                                                <option value="$item->nom">{{$item->nom}}</option>
                                            @endforeach
                                </select>
                            </div>
                             <div class="col-md-2  {{ $errors->has('reception_dossier') ? 'has-error' : ''}}">
                                <label for="reception_dossier" class="control-label">{{ 'Reception Deposé?' }}</label>
                                <div class="radio">
                                        <label><input name="reception_dossier" type="radio" value="1" {{ (isset($candidat) && 1 == $candidat->reception_dossier) ? 'checked' : '' }}> Oui</label>
                                </div>
                                <div class="radio">
                                    <label><input name="reception_dossier" type="radio" value="0" @if (isset($candidat)) {{ (0 == $candidat->reception_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
                                </div>
                                {!! $errors->first('reception_dossier', '<p class="help-block">:message</p>') !!}
                            </div>
                             <div class="col-md-2  {{ $errors->has('test_ecrit') ? 'has-error' : ''}}">
                                <label for="test_ecrit" class="control-label">{{ 'Test Ecrit' }}</label>
                                <input class="form-control" name="test_ecrit" type="date" id="test_ecrit" value="{{ isset($candidat->test_ecrit) ? $candidat->test_ecrit : ''}}" >
                                {!! $errors->first('test_ecrit', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="col-md-2  {{ $errors->has('entretien') ? 'has-error' : ''}}">
                                <label for="entretien" class="control-label">{{ 'Entretien' }}</label>
                                <input class="form-control" name="entretien" type="date" id="entretien" value="{{ isset($candidat->entretien) ? $candidat->entretien : ''}}" >
                                {!! $errors->first('entretien', '<p class="help-block">:message</p>') !!}
                            </div>


                                <div class="col-md-6  {{ $errors->has('resultat') ? 'has-error' : ''}}">
                                        <label for="resultat" class="control-label">{{ 'Résultat' }}</label>
                                        <select class="form-control" name="resultat"  id="resultat" >
                                            <option>-- --Choisissez un resultat--</option>

                                                <option value="1">Non retenu</option>
                                                <option value="2">Absent(e)</option>
                                                <option value="3">Excusé(e)</option>
                                                <option value="4">Accepté(e) en FI</option>
                                                <option value="5">Passer tests en FC</option>
                                        </select>
                                            {!! $errors->first('resultat', '<p class="help-block">:message</p>') !!}
                                </div>

                                <div class="col-md-10   {{ $errors->has('commentaire') ? 'has-error' : ''}}">
                                    <label class="label" for="commentaire">Commentaire</label>
                                    <textarea name="commentaire" class="form-control" id="commentaire" cols="10" rows="4" placeholder="commentaire"></textarea>
                                    {!! $errors->first('commentaire', '<p class="help-block">:message</p>') !!}

                                </div>
                            @endrole




{{-- <div class="col-md-6  {{ $errors->has('parrain') ? 'has-error' : ''}}">
    <label for="parrain" class="control-label">{{ 'Parrain' }}</label>
    <input class="form-control" name="parrain" type="text" id="parrain" value="{{ isset($candidat->parrain) ? $candidat->parrain : ''}}" >
    {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
</div>
 --}}


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



{{--

<div class="col-md-8 form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    @if(isset($candidat->avatar) && !empty($candidat->avatar))
        <img src="{{url('/uploads/candidats/' . $candidat->avatar) }}" width="100" height="100"/>
    @endif

    <label for="avatar" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="col-md-6 ">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>

