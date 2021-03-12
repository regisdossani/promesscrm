<div class="col-md-6 mb-3 {{ $errors->has('apprenant_id') ? 'has-error' : ''}}">
    <label for="apprenant_id" class="control-label">{{ 'Nom Prénom de l\'Apprenant' }}</label>
    <select class="form-control" name="apprenant_id" >
        @foreach($apprenants as $apprenant)
                <option value="{{ $apprenant->id }}">{{ $apprenant->nom}}{{ $apprenant->prenom}}</option>
        @endforeach
    </select>
</div>
 <div class="col-md-6 mb-3 {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="class_id" class="control-label">{{ 'Classe' }}</label>
    <select class="form-control" name="class_id" >
        @foreach($classes as $classe)
                <option value="{{ $classe->id }}">{{ $classe->nom}}</option>
        @endforeach
    </select>
</div>





{{-- <div class="col-md-6 mb-3 {{ $errors->has('apprenant_prenom') ? 'has-error' : ''}}">
    <label for="apprenant_prenom" class="control-label">{{ 'Prenom' }}</label>
    <select class="form-control" name="apprenant_prenom" >
        @foreach($apprenants as $apprenant)
                <option value="{{ $apprenant->id }}">{{ $apprenant->prenom}}</option>
        @endforeach
    </select>
</div> --}}


{{-- <div class="col-md-6 mb-3 {{ $errors->has('module_nom') ? 'has-error' : ''}}">
    <label for="module_nom" class="control-label">{{ 'Module' }}</label>
    <select class="form-control" name="module_nom" >
        @foreach($modules as $module)
                <option value="{{ $module->id }}">{{ $module->nom}}</option>
        @endforeach
    </select>
</div> --}}


{{-- <div class="col-md-6 mb-3 {{ $errors->has('filiere_id') ? 'has-error' : ''}}">
    <label for="filiere_id" class="control-label">{{ 'Filière' }}</label>
    <select class="form-control" name="filiere_nom"  >
        @foreach($filieres as $filiere)
                <option value="{{ $filiere->nom }}">{{ $filiere->nom}}</option>
        @endforeach
    </select>
</div> --}}

<div class="col-md-6 mb-3 {{ $errors->has('annee') ? 'has-error' : ''}}">
    <label for="annee" class="control-label">{{ 'Année Académique' }}</label>
    <input class="form-control" name="annee" type="text" id="note1" value="{{ isset($filiere->annee) ? $filiere->annee : ''}}" >
    {!! $errors->first('annee', '<p class="help-block">:message</p>') !!}
</div>




{{-- <div class="col-md-6 mb-3 {{ $errors->has('matiere') ? 'has-error' : ''}}">
    <label for="matiere" class="control-label">{{ 'Matiere' }}</label>
    <select class="form-control" name="matiere_nom"  >
        @foreach($matieres as $matiere)
                <option value="{{ $matiere->id }}">{{ $matiere->nom}}</option>
        @endforeach
    </select>
</div> --}}

{{-- <div class="col-md-6 mb-3 {{ $errors->has('ref') ? 'has-error' : ''}}">
    <label for="ref" class="control-label">{{ 'Référence' }}</label>
    <input class="form-control" name="ref" type="text" id="ref" value="{{ isset($apprenant->reference) ? $apprenant->reference : ''}}" >
    {!! $errors->first('note2', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="col-md-6 mb-3 {{ $errors->has('moyenne_eleve') ? 'has-error' : ''}}">
    <label for="moyenne_eleve" class="control-label">{{ 'Moyenne Élève' }}</label>
    <input class="form-control" name="moyenne_eleve" type="text" id="moyenne_eleve" value="{{ isset($mark->moyenne_eleve) ? $mark->moyenne_eleve : ''}}" >
    {!! $errors->first('moyenne_eleve', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('moyenne_classe') ? 'has-error' : ''}}">
    <label for="moyenne_classe" class="control-label">{{ 'Moyenne Classe' }}</label>
    <input class="form-control" name="moyenne_classe" type="text" id="moyenne_classe" value="{{ isset($releve->moyenne_classe) ? $releve->moyenne_classe : ''}}" >
    {!! $errors->first('moyenne_classe', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3 {{ $errors->has('duree') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Durée de la formation' }}</label>
    <input class="form-control" name="duree" type="text" id="duree" value="{{ isset($filiere->duree) ? $filiere->duree : ''}}" >
    {!! $errors->first('duree', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('appreciations_generales') ? 'has-error' : ''}}">
    <label for="appreciations_generales" class="control-label">{{ 'Appréciations générales' }}</label>
    <textarea class="form-control" name="appreciations_generales" type="text" id="appreciations_generales" value="{{ isset($releve->appreciations_generales) ? $releve->appreciations_generales : ''}}" ></textarea>
    {!! $errors->first('appreciations_generales', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('felicitations') ? 'has-error' : ''}}">
    <label for="felicitations" class="control-label">{{ 'Félicitations' }}</label>
    <input class="form-control" name="felicitations" type="text" id="felicitations" value="{{ isset($releve->felicitations) ? $releve->felicitations:''}}">
    {!! $errors->first('felicitations', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('encouragements') ? 'has-error' : ''}}">
    <label for="encouragements" class="control-label">{{ 'Encouragements' }}</label>
    <input class="form-control" name="encouragements" type="text" id="encouragements" value="{{ isset($releve->encouragements) ? $releve->encouragements : ''}}" >
    {!! $errors->first('encouragements', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('th') ? 'has-error' : ''}}">
    <label for="th" class="control-label">{{ 'TH' }}</label>
    <input class="form-control" name="th" type="text" id="th" value="{{ isset($releve->th) ? $releve->th : ''}}" >
    {!! $errors->first('th', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('passable') ? 'has-error' : ''}}">
    <label for="passable" class="control-label">{{ 'Passable' }}</label>
    <input class="form-control" name="passable" type="text" id="passable" value="{{ isset($releve->passable) ? $releve->passable : ''}}" >
    {!! $errors->first('passable', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('insuffisant') ? 'has-error' : ''}}">
    <label for="insuffisant" class="control-label">{{ 'Insuffisant' }}</label>
    <input class="form-control" name="passable" type="text" id="insuffisant" value="{{ isset($releve->insuffisant) ? $releve->insuffisant : ''}}" >
    {!! $errors->first('insuffisant', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('nom_directeur') ? 'has-error' : ''}}">
    <label for="nom_directeur" class="control-label">{{ 'Le Directeur de Centre' }}</label>
    <input class="form-control" name="nom_directeur" type="text" id="nom_directeur" value="{{ isset($releve->nom_directeur) ? $releve->nom_directeur : ''}}" >
    {!! $errors->first('nom_directeur', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
