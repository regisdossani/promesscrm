

                            <div class="col-md-6 mb-3  {{ $errors->has('nom') ? 'has-error' : ''}}">
                                <label for="nom" class="control-label">{{ 'Noms du candidat :' }}</label>
                                <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($candidat->nom) ? $candidat->nom : ''}}">
                                {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                            </div>


                             <div class="col-md-6 mb-3 {{ $errors->has('sexe') ? 'has-error' : ''}}">
                                <label for="sexe" class="control-label">{{ 'Sexe :' }}</label>
                                <select name="sexe" id="sexe" class="form-control">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>



                            <div class="col-md-6 mb-3  {{ $errors->has('filiere_id') ? 'has-error' : ''}}">
                                <label for="filiere">Filière:</label>
                                <div class="select-list" class="form-group">
                                    <select name="filiere_id" id="filiere_id" class="form-control">
                                         <option value=""> Nos filières</option>
                                            @foreach($filieres as $filiere)
                                                <option value="{{ $filiere->id }}" {{ isset($candidats->filiere_id) && $candidats->filiere_id == $filiere->id ? 'selected' : ''}}>{{ $filiere->nom}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 {{ $errors->has('promo_id') ? 'has-error' : ''}}">
                                <label for="promo_id class="control-label">{{ 'Promo:' }}</label>
                                <select name="promo_id" id="promo_id" class="form-control">
                                    <option value="">Nos promos</option>
                                        @foreach($promos as $promo)
                                            <option value="{{ $promo->id }}" {{ isset($candidats->promo_id) && $candidats->promo_id == $promo->id ? 'selected' : ''}}>{{ $promo->nom}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3  {{ $errors->has('tel') ? 'has-error' : ''}}">
                                <label for="tel" class="control-label">{{'Téléphone:' }}</label>
                                <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($candidat->tel) ? $candidat->tel : ''}}" >
                                {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="col-md-6 mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email" class="control-label">{{ 'Email:' }}</label>

                                {{-- <input class="form-control" name="email" type="text" id="email" value="{{ isset($candidat->email) ? $candidat->email : ''}}" > --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($candidat->email) ? $candidat->email : ''}}"  required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- {!! $errors->first('email', '<p class="help-block">:message</p>') !!} --}}
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>
                            <script>
                                var email =  $("#email").val();
                                $('#registration').validate({
                                    rules: {
                                        email: {
                                            required: true,
                                            email: true,
                                            remote: {
                                                url: '{{url('candidat/checkemail')}}',
                                                type: "post",
                                                data: {
                                                    email:$(email).val(),
                                                    _token:"{{ csrf_token() }}"
                                                    },
                                                dataFilter: function (data) {
                                                    var json = JSON.parse(data);
                                                    if (json.msg == "true") {
                                                        return "\"" + "Email déjà utilisé" + "\"";
                                                    } else {
                                                        return 'true';
                                                    }
                                                }
                                            }
                                        }
                                    },
                                    messages: {
                                        email: {
                                            required: "Email is required!",
                                            email: "Entrer un EMail valide!",
                                            remote: "Email  déjà utilisé!"
                                        }
                                    }
                                });
                            </script>



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



    <div class="form-row">
        @role('superadmin')
                <div class="col-md-3 mb-3 {{ $errors->has('reception_dossier') ? 'has-error' : ''}}">
                    <label for="reception_dossier" class="control-label">{{ 'Reception ( dossier du candidat)' }}</label>
                    <div class="radio">
                        <label><input name="reception_dossier" type="radio" value="1" {{ (isset($candidat) && 1 == $candidat->reception_dossier) ? 'checked' : '' }}> Oui</label>
                    </div>
                    <div class="radio">
                        <label><input name="reception_dossier" type="radio" value="0" @if (isset($candidat)) {{ (0 == $candidat->reception_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
                    </div>
                    {!! $errors->first('reception_dossier', '<p class="help-block">:message</p>') !!}
                </div>
        @endrole
    </div>
              {{--   @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
                    <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
                @endif
                <div class="col-md-5 mb-3  {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
                    <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe 1 (Depot de dossier)' }}</label>
                    <input class="form-control" name="pj_depotdossier" type="file" id="pj_depotdossier"  >
                    {!! $errors->first('pj_depotdossier', '<p class="help-block">:message</p>') !!}
                </div> --}}

                {{-- @if(isset($candidat->pj_depotdossier2) && !empty($candidat->pj_depotdossier2))
                        <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier2}}</a>
                    @endif
                    <div class="col-md-5 mb-3 {{ $errors->has('pj_depotdossier2') ? 'has-error' : ''}}">
                        <label for="pj_depotdossier2" class="control-label">{{ 'Pièce jointe 2 (Depot de dossier)' }}</label>
                        <input class="form-control" name="pj_depotdossier2" type="file" id="pj_depotdossier2"  >
                        {!! $errors->first('pj_depotdossier2', '<p class="help-block">:message</p>') !!}
                    </div> --}}



                   {{--  <div class="col-md-6 mb-3 {{ $errors->has('test_pj') ? 'has-error' : ''}}">
                        @if(isset($candidat->test_pj) && !empty($candidat->test_pj))
                            <a href="{{ url('uploads/candidats/' . $candidat->test_pj) }}" ><i class="fa fa-download"></i> {{$candidat->test_pj}}</a>
                        @endif
                        <label for="test_pj" class="control-label">{{ 'Test pièce jointe' }}</label>
                        <input class="form-control" name="test_pj" type="file" id="test_pj"  >
                        {!! $errors->first('test_pj', '<p class="help-block">:message</p>') !!}
                    </div> --}}

                  {{--   <div class="col-md-6 mb-3 {{ $errors->has('signature') ? 'has-error' : ''}}">
                        <label for="signature" class="control-label">{{ 'Signature candidat' }}</label>
                        <div class="radio">
                            <label><input name="signature" type="radio" value="1" {{ (isset($candidat) && 1 == $candidat->reception_dossier) ? 'checked' : '' }}> Présent(e)</label>
                        </div>
                        <div class="radio">
                            <label><input name="signature" type="radio" value="0" @if (isset($candidat)) {{ (0 == $candidat->reception_dossier) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Absent(e)</label>
                        </div>
                        {!! $errors->first('signature', '<p class="help-block">:message</p>') !!}
                    </div> --}}



       {{--  @if(isset($candidat->avatar) && !empty($candidat->avatar))
            <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
        @endif
        <div class="col-md-6 form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
            <label for="avatar" class="control-label">{{ 'Photo' }}</label>
            <input class="form-control" name="avatar" type="file" id="avatar"  >
            {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
        </div> --}}

{{--
                             <div class="col-md-2  {{ $errors->has('test_ecrit') ? 'has-error' : ''}}">
                                <label for="test_ecrit" class="control-label">{{ 'Test Ecrit' }}</label>
                                <input class="form-control" name="test_ecrit" type="date" id="test_ecrit" value="{{ isset($candidat->test_ecrit) ? $candidat->test_ecrit : ''}}" >
                                {!! $errors->first('test_ecrit', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="col-md-2  {{ $errors->has('entretien') ? 'has-error' : ''}}">
                                <label for="entretien" class="control-label">{{ 'Entretien' }}</label>
                                <input class="form-control" name="entretien" type="date" id="entretien" value="{{ isset($candidat->entretien) ? $candidat->entretien : ''}}" >
                                {!! $errors->first('entretien', '<p class="help-block">:message</p>') !!}
                            </div> --}}
{{--
 --}}


{{-- <div class="col-md-6  {{ $errors->has('parrain') ? 'has-error' : ''}}">
    <label for="parrain" class="control-label">{{ 'Parrain' }}</label>
    <input class="form-control" name="parrain" type="text" id="parrain" value="{{ isset($candidat->parrain) ? $candidat->parrain : ''}}" >
    {!! $errors->first('parrain', '<p class="help-block">:message</p>') !!}
</div>
 --}}


    <div class="col-md-6 mb-3 {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">
        @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
            <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier}}</a>
        @endif
        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe1(Depot de dossier)' }}</label>
        <input class="form-control" name="pj_depotdossier" type="file" id="pj_depotdossier"  value="{{ isset($candidat->pj_depotdossier) ? $candidat->pj_depotdossier : ''}}">
        {!! $errors->first('pj_depotdossier', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-6 mb-3  {{ $errors->has('pj_depotdossier') ? 'has-error' : ''}}">

        @if(isset($candidat->pj_depotdossier) && !empty($candidat->pj_depotdossier))
            <a href="{{ url('uploads/candidats/' . $candidat->pj_depotdossier2) }}" ><i class="fa fa-download"></i> {{$candidat->pj_depotdossier2}}</a>
        @endif
        <label for="pj_depotdossier" class="control-label">{{ 'Pièce jointe2(Depot de dossier)' }}</label>
        <input class="form-control" name="pj_depotdossier2" type="file" id="pj_depotdossier2" value="{{ isset($candidat->pj_depotdossier2) ? $candidat->pj_depotdossier2 : ''}}" >
        {!! $errors->first('pj_depotdossier2', '<p class="help-block">:message</p>') !!}
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
<br/>
<br/>
<br/>

<div class="row">
    <div class="col-md-4 mb-3">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>

