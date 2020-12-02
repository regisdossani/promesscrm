
    <div class="row">
        <div class="col-md-6 mb-3 {{ $errors->has('username') ? 'has-error' : ''}}">
            <label for="username" class="control-label">{{ 'Username' }}</label>
            <input class="form-control" name="username" type="text" id="username" value="{{ isset($apprenant->username) ? $apprenant->username : ''}}" required>
            {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
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

        <div class="col-md-6 mb-3{{ $errors->has('password') ? 'has-error' : ''}}">
            <label for="password" class="control-label">{{ 'Mot de passe' }}</label>
            <input class="form-control" name="password" type="password" id="password" value="{{ isset($apprenant->password) ? $apprenant->password : ''}}" >
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>

    </div>


@role('superadmin')

    <div class="row">
      <div class="col-md-6 mb-3 {{ $errors->has('candidat_id') ? 'has-error' : ''}}">
           <label for="candidat_id" class="control-label">{{ 'candidat référence' }}</label>
            <select class="form-control" name="candidat_id"  id="candidat_id" >
                @foreach($candidats as $candidat)
                    @if ($candidat->statut=='3')
                        <option value="{{ $candidat->id }}" {{ isset($apprenants->candidat_id) && $apprenants->candidat_id == $candidat->id ? 'selected' : ''}}>{{ $candidat->nom}}</option>
                    @endif
                @endforeach
            </select>
         </div>
         <div class="col-md-6 mb-3 {{ $errors->has('formation_id') ? 'has-error' : ''}}">
            <label for="formation_id" class="control-label">{{ 'Choix de la formation' }}</label>
            <select class="form-control" name="formation_id"  id="formation_id" >
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}" {{ isset($apprenants->formation_id) && $apprenants->formation_id == $formation->id ? 'selected' : ''}}>{{ $formation->nom}}</option>
                @endforeach
            </select>
        </div>

         <div class="col-md-6 mb-3 {{ $errors->has('class_id') ? 'has-error' : ''}}">
            <label for="class_id" class="control-label">{{ 'Classe' }}</label>
            <select class="form-control" name="class_id"  id="class_id" >
                @foreach($classes as $class)
                <option value="{{ $class->id }}" {{ isset($apprenants->class_id) && $apprenants->class_id === $class->id ? 'selected' : ''}}>{{ $class->nom}}</option>

                @endforeach
            </select>
        </div>







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
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('visite_terain1') ? 'has-error' : ''}}">
            <label for="visite_terain1" class="control-label">{{ 'Visite Terain 1' }}</label>
            <textarea name="visite_terain1" id="visite_terain1"  rows="5" cols="60">Entrer le texte ici...</textarea>
            {!! $errors->first('visite_terain1', '<p class="help-block">:message</p>') !!}
        </div>


        <div class="col-md-6 mb-3 {{ $errors->has('visite_terain2') ? 'has-error' : ''}}">
            <label for="visite_terain2" class="control-label">{{ 'Visite Terain 2' }}</label>
            {{-- <input class="form-control" name="visite_terain2" type="textarea" id="visite_terain2" value="{{ isset($apprenant->visite_terain2) ? $apprenant->visite_terain2 : ''}}" > --}}
            <textarea name="visite_terain2" id="visite_terain2"  rows="5" cols="60">Entrer le texte ici...</textarea>

            {!! $errors->first('visite_terain2', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-6 mb-3 {{ $errors->has('visite_terain3') ? 'has-error' : ''}}">
            <label for="visite_terain3" class="control-label">{{ 'Visite Terain 3' }}</label>
            <textarea name="visite_terain3" id="visite_terain3"  rows="5" cols="60">Entrer le texte ici...</textarea>
            {!! $errors->first('visite_terain3', '<p class="help-block">:message</p>') !!}
        </div>



    </div>
@endrole



    <div class="row">
        <div class="col-md-12 mb-3">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
        </div>
    </div>
