<div class="col-md-6 mb-3 {{ $errors->has('candidat_id') ? 'has-error' : ''}}">
    <label for="candidat_id" class="control-label">{{ 'Candidat' }}</label>
    <input class="form-control" name="candidat_id" type="number" id="candidat_id" value="{{ isset($testcandidat->candidat_id) ? $testcandidat->candidat_id : ''}}" required>
    {!! $errors->first('candidat_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-6 mb-3 {{ $errors->has('filiere_id') ? 'has-error' : ''}}">
    <label for="filiere_id" class="control-label">{{ 'Filière' }}</label>
    <select name="filiere" id="filiere">
        <option value="">Choisissez une filière</option>
            @foreach($filieres as $filiere)
                <option value="{{ $filiere->id }}" {{ isset($tests->filiere) && $tests->filiere == $filiere->id ? 'selected' : ''}}>{{ $filiere->nom}}</option>
            @endforeach
    </select>    {{-- {!! $errors->first('filiere_id', '<p class="help-block">:message</p>') !!} --}}

</div>

                        <div class="col-md-6 mb-3 {{ $errors->has('test_ecrit') ? 'has-error' : ''}}">

                            <label for="test_ecrit" class="control-label">{{ 'Test écrit' }}</label>
                            <input class="form-control" name="test_ecrit" type="date" id="test_ecrit"  >
                            {!! $errors->first('test_ecrit', '<p class="help-block">:message</p>') !!}
                        </div>


<div class="col-md-6 mb-3 {{ $errors->has('entretien') ? 'has-error' : ''}}">
    <label for="entretien" class="control-label">{{ 'Entretien' }}</label>
    <input class="form-control datetimepicker" name="entretien" type="date" id="entretien" value="{{ isset($testcandidat->entretien) ? $testcandidat->entretien : ''}}" >
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

<div class="col-md-6  {{ $errors->has('test_pj') ? 'has-error' : ''}}">
    @if(isset($testcandidat->test_pj) && !empty($testcandidat->test_pj))
    <a href="{{ url('uploads/testcandidats/' . $testcandidat->test_pj) }}" ><i class="fa fa-download"></i> {{$testcandidat->test_pj}}</a>
    @endif
            <label for="test_pj" class="control-label">{{ 'Pièce jointe Test' }}</label>
            <input class="form-control" name="test_pj" type="file" id="test_pj"  >
            {!! $errors->first('test_pj', '<p class="help-block">:message</p>') !!}
    </div>





<div class="col-md-6 mb-3 {{ $errors->has('resultat') ? 'has-error' : ''}}">
    <label for="resultat" class="control-label">{{ 'Resultat' }}</label>
    <input class="form-control" name="resultat" type="text" id="resultat" value="{{ isset($testcandidat->resultat) ? $testcandidat->resultat : ''}}" >
    {!! $errors->first('resultat', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-6 mb-3 {{ $errors->has('signature') ? 'has-error' : ''}}">
    <label for="signature" class="control-label">{{ 'Signature' }}</label>
    <div class="radio">
    <label><input name="signature" type="radio" value="1" {{ (isset($testcandidat) && 1 == $testcandidat->signature) ? 'checked' : '' }}> Oui</label>
</div>
<div class="radio">
    <label><input name="signature" type="radio" value="0" @if (isset($testcandidat)) {{ (0 == $testcandidat->signature) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Non</label>
</div>
    {!! $errors->first('signature', '<p class="help-block">:message</p>') !!}
</div>


<div class="col-md-6 mb-3">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'Editer' ? 'Modifier' : 'Créer' }}">
</div>
