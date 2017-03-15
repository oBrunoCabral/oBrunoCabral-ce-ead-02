<!DOCTYPE html>
<html>
<head>
	<title>DECLARAÇÃO</title>

	<style type="text/css">

		body {
			max-width: 600px;
			margin: 0 auto;
		}

		h1 {
			text-align: center;
		}

		img {
			display: block;
			margin: 0 auto;	
			max-width: 300px;
			height: auto;
		
		}

		table {
			border-collapse: collapse;
		}

		table,th,td {
			 border : 1px solid;
			 text-align: center;
			 margin: 0 auto;
		}

		hr{
			max-width: 300px;
		}

		#nao {
			font-weight: bold;
			color: red;
		}

		.rodape {
			text-align: center;
		}

	</style>

</head>
<body>

	<header>
		<img src="<?php echo $logoFaculdade = $_POST['logoFacu']; ?>">
		<h1>DECLARAÇÃO</h1>
	</header>

	<?php

		$passou = "";

		$notaTotal =
			$nota1 = $_POST['notaVA1'] +
			$nota2 = $_POST['notaVA2'] +
			$nota3 = $_POST['notaVA3'] +
			$nota4 = $_POST['notaTrabalhos'];


		if ($notaTotal >= 90) {
			$conceito = "Excelente";
		}
		else if ($notaTotal >= 80 || $notaTotal > 90){
			$conceito = "Ótimo";
		}
		else if ($notaTotal >= 70 || $notaTotal > 80){
			$conceito = "Bom";
		}
		else if ($notaTotal >= 60 || $notaTotal > 70){
			$conceito = "Ruim";
		}
		else {
			$conceito = "Péssimo";
			$passou = " NÃO";
		}

		function porcentagem ($parcial, $total) {
    		return ($parcial * 100) / $total;
    	}

	?>

	<p>Declaramos, para os devidos fins, que <?php echo $nomeAluno = $_POST['nomeAluno']?> <span id="nao">
	<?php echo $passou ?></span> concluiu satisfatoriamente as atividades da disciplina
	<?php echo $nomeAluno = $_POST['nomeDisciplina']; ?> do curso de <?php echo $nomeAluno = $_POST['nomeCurso']; ?>.</p>

	<p>Segue o desempenho de <?php echo $nomeAluno = $_POST['nomeAluno']; ?>:</p>

	<table>
		<thead>
			<th>Critério</th>
			<th>Valor Total</th>
			<th>Nota do Aluno</th>
			<th>Desempenho (%)</th>
		</thead>
		<tbody>
			<tr class="rowImpar">
				<td>Prova1</td>
				<td>15</td>
				<td><?php echo number_format(($nota1 = $_POST['notaVA1']),2,',',',') ?></td>
				<td><?php echo round(porcentagem ($nota1 = $_POST['notaVA1'], 15)) ?></td>
			</tr>
			<tr class="rowPar">
				<td>Prova2</td>
				<td>25</td>
				<td><?php echo number_format(($nota1 = $_POST['notaVA2']),2,',',',') ?></td>
				<td><?php echo round(porcentagem ($nota1 = $_POST['notaVA2'], 25)) ?></td>
			</tr>
			<tr class="rowImpar">
				<td>Prova3</td>
				<td>35</td>
				<td><?php echo number_format(($nota1 = $_POST['notaVA3']),2,',',',') ?></td>
				<td><?php echo round(porcentagem ($nota1 = $_POST['notaVA3'], 35)) ?></td>
			</tr>
			<tr class="rowPar">
				<td>Trabalhos</td>
				<td>25</td>
				<td><?php echo number_format(($nota1 = $_POST['notaTrabalhos']),2,',',',') ?></td>
				<td><?php echo round(porcentagem ($nota1 = $_POST['notaTrabalhos'], 25)) ?></td>
			</tr>									
		</tbody>
	</table>

	<p class="rodape">Com esse resultado, o conceito de <?php echo $nomeAluno = $_POST['nomeAluno']; ?> foi
		<i><?php echo $conceito ?></i>, já que sua nota total foi de <b><?php echo $notaTotal ?></b> pontos.
	</p>

	<p class="rodape">	Belo Horizonte, <?php echo date("d/m/Y"); ?> </p>

	<p class="rodape"> <span>___________________________________<br></span>
	<?php echo $nomeAluno = $_POST['nomeProfessor']; ?> - Professor(a)</p>

	<p class="rodape"> <span>___________________________________<br></span>
	<?php echo $nomeAluno = $_POST['nomeCoordenador']; ?> - Coordenador(a)</p>

</body>
</html>