<html>
	<head>
		<meta charset="utf-8">
		<title>Relevé </title>
		<link rel="stylesheet" href="{{asset('css/relevestyle.css')}}">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="{{asset('js/relevescript.js')}}"></script>
	</head>
	<body>
	<div id="content">

	<header>
		<h1>RELEVÉ DE NOTES</h1>
	</header>
		<article>
			<!-- <h1>Recipient</h1> -->

			<table class="meta" style="width:720px;">
				<tr>
					<td colspan=3><span contenteditable>{{$apprenant->prenom}}</span></td>
					<td colspan=2><span contenteditable>{{$apprenant->nom}}</span></td>
					<th colspan=2><span contenteditable>Année académique</span></th>
				</tr>
				<tr>
					<td colspan=3><span contenteditable>$apprenant->sexe</span></td>
					<td colspan=2><span contenteditable></span></td>
					<td colspan=2><span contenteditable>{{$filiere->annee}}</span></td>
				</tr>
				<tr>
					<td colspan=3><span contenteditable>
                        @if ($apprenant->filieres)
                        {{$apprenant->filieres->nom}}
                        @endif
                    </span></td>
					<td colspan=2><span contenteditable></span></td>
					<th colspan=2><span contenteditable>Durée formation</span></th>

				</tr>
				<tr>
					<th colspan=3><span contenteditable>Référence</span></th>
					<!-- <td ><span contenteditable></span></td> -->
					<td colspan=2><span contenteditable >{{$apprenant->reference}}</span></td>
					<td colspan=2><span contenteditable>{{$filiere->duree}}</span></td>
				</tr>
				<tr>
					<th colspan=2 rowspan=2 style="font-weight:bold"><span contenteditable>Matières</span></th>
					<th rowspan=2 style="font-weight:bold"><span contenteditable>Coef</span></th>
					<th rowspan=2 style="font-weight:bold"><span contenteditable>Moy élève</span></th>
					<td colspan=3 style="font-weight:bold"><span contenteditable>Moyenne classe</span></td>
				</tr>
				<tr>
					<td style="font-weight:bold"><span contenteditable>Mini</span></td>
					<td style="font-weight:bold"><span contenteditable>Moy</span></td>
					<td style="font-weight:bold"><span contenteditable>Max</span></td>
				</tr>


				<tr>
					<th colspan=7 style="font-weight:bold;text-align:center"><span contenteditable>Module de Mise à Niveau</span></th>

				</tr>


            @foreach ($modules as $item)
                @if ($item->matiere=="Module de Mise à Niveau")
                    <tr>
                        <td colspan=2><span contenteditable></span>
                            @if ($item->matieres)
                            $item->matieres->coef
                            @endif
                        </td>
                        <td><span contenteditable></span>$mark->moyenne</td>
                        <td><span contenteditable></span></td>
                        <td><span contenteditable></span></td>
                        <td><span contenteditable></span></td>
                        <td><span contenteditable></span></td>
                    </tr>
                @endif

            @endforeach

				<tr>
					<th colspan=7 style="font-weight:bold"><span contenteditable>Module solaire</span></th>
				</tr>

				<tr>
						<td colspan=2><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2 style="font-weight:bold"><h2 >Moyenne générale de l'élève</h2></th>
					<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2 style="font-weight:bold"><h2 >Moyenne générale de la classe</h2></th>
					<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
				</tr>

				<tr>
					<td  colspan=7></td>
				</tr>
				<tr>
					<th colspan=2><span contenteditable>Félicitations</span></th>
					<td><span contenteditable></span></td>
					<td colspan=4 rowspan=5><span contenteditable style="font-weight:bold">Appréciations générales: </span></td>
                    <td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2><span contenteditable>Encouragements </span></th>
					<td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2><span contenteditable>TH</span></th>
					<td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2><span contenteditable>Passable</span></th>
					<td><span contenteditable></span></td>
				</tr>
				<tr>
					<th colspan=2><span contenteditable>Insuffisant</span></th>
					<td><span contenteditable></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Le Directeur du Centre</span></h1>
			<div contenteditable>
				<p>M. Socé WELLE</p>
			</div>
		</aside>

		</div>
		<div id="editor"></div>
				<br/><br/>

		<!--Add External Libraries - JQuery and jspdf!-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
	</body>
</html>
