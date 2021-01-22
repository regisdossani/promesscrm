<div class="col-md-6 mb-3{{ $errors->has('sexe') ? 'has-error' : ''}}">
    <label for="civilite" class="control-label">{{ 'Genre' }}</label>
    {{-- <input class="form-control" name="civilite" type="text" id="civilite" value="{{ isset($candidat->civilite) ? $candidat->civilite : ''}}" > --}}
    <select name="sexe" id="sexe" class="form-control">
            <option value="">-- Choisir un sexe --</option>
            <option value="M">M</option>
            <option value="F">F</option>
    </select>
    {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
</div>



        <div class="col-md-6 mb-3{{ $errors->has('nom_prenom') ? 'has-error' : ''}}">
            <label for="nom_prenom" class="control-label">{{ 'Nom & Prénom' }}</label>
            <input class="form-control" name="nom_prenom" type="text" id="nom_prenom" value="{{ isset($equipe->nom_prenom) ? $equipe->nom_prenom : ''}}" >
            {!! $errors->first('nom_prenom', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-6 mb-3{{ $errors->has('reference') ? 'has-error' : ''}}">
            <label for="reference" class="control-label">{{ 'Référence' }}</label>
            <input class="form-control" name="reference" type="text" id="reference" value="{{ isset($equipe->reference) ? $equipe->reference : ''}}" >
            {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
        </div>


        <div class="col-md-6 mb-3{{ $errors->has('password') ? 'has-error' : ''}}">
            <label for="password" class="control-label">{{ 'Password' }}</label>
            <input class="form-control" name="password" type="password" id="password" value="{{ isset($equipe->password) ? $equipe->password : ''}}" >
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3{{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="control-label">{{ 'Email' }}</label>
            <input class="form-control" name="email" type="text" id="email" value="{{ isset($equipe->email) ? $equipe->email : ''}}" >
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3{{ $errors->has('tel') ? 'has-error' : ''}}">
            <label for="tel_1" class="control-label">{{ 'Téléphone' }}</label>
            <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($equipe->tel) ? $equipe->tel : ''}}" >
            {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
        </div>



        @role('superadmin')

        <div class="col-md-6 mb-3{{ $errors->has('role') ? 'has-error' : ''}}">
            <label for="role" class="control-label">{{ 'Rôle' }}</label>
           {{--  <select class="form-control" name="role" type="text" id="role">
                <option>-- Choisir un rôle--</option>
                                        @foreach ($equipeRole as $role)
                                                @if ($e->name!="superadmin")
                                                    <option value="{{$role->id}}" {{ isset($teams->role) && $teams->role=$role->id ? 'selected':''}}> {{  $role->name }}</option>
                                                @endif
                                        @endforeach
            </select> --}}

            {!! Form::select('roles[]', $roles,$equipeRole, array('class' => 'form-control','multiple')) !!}
        </div>


        @if(isset($equipe->cv) && !empty($equipe->cv))
            <a href="{{ url('uploads/equipe/' . $equipe->cv) }}" ><i class="fa fa-download"></i> {{$equipe->cv}}</a>
        @endif
        <div class="col-md-6 mb-3{{ $errors->has('cv') ? 'has-error' : ''}}">
            <label for="cv" class="control-label">{{ 'Cv' }}</label>
            <input class="form-control" name="cv" type="file" id="cv" value="{{ isset($equipe->cv) ? $equipe->cv : ''}}" >
            {!! $errors->first('cv', '<p class="help-block">:message</p>') !!}
        </div>


   {{--      @if(isset($equipe->contrat) && !empty($equipe->contrat))
            <img src="{{url('/uploads/equipe/' . $equipe->contrat) }}" width="100" height="100"/>
        @endif --}}
        <div class="col-md-6 mb-3{{ $errors->has('contrat') ? 'has-error' : ''}}">
            <label for="contrat" class="control-label">{{ 'Contrat' }}</label>
            <input class="form-control" name="contrat" type="text" id="contrat" value="{{ isset($equipe->contrat) ? $equipe->contrat : ''}}" >
            {!! $errors->first('contrat', '<p class="help-block">:message</p>') !!}
        </div>

        @endrole
        <div class="row">
            @if(isset($equipe->photo) && !empty($equipe->photo))
                <img src="{{url('/uploads/equipe/' . $equipe->photo) }}" width="100" height="100"/>
            @endif
            <div class="col-md-6 mb-3{{ $errors->has('photo') ? 'has-error' : ''}}">
                <label for="photo" class="control-label">{{ 'Photo' }}</label>
                <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($equipe->photo) ? $equipe->photo : ''}}" >
                {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <hr class="mb-4">

<br/>


<div class="row">
    <div class="col-md-5 mb-3">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
    </div>
</div>



