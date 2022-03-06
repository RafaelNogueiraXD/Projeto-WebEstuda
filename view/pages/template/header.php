<html>
	<head>
		<title>Web Estuda</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../../cssPlataforma/plataforma.css">
		<link rel="stylesheet" type="text/css" href="../../resources/slick-1.8.1/slick/slick.css"/>
		<!-- // Add the new slick-theme.css if you want the default styling -->
		<script src="../../js/jquery.js"></script>
		<script src="../../../model/topico/topico.js"></script>
		<script src="../../../model/disciplina/disciplina.js"></script>
		<script src="../../../model/atividade/atividade.js"></script>

		<style>
	</style>
		<link rel="stylesheet" type="text/css" href="../../resources/slick-1.8.1/slick/slick-theme.css"/>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Web Estuda</a></h1>

                    <?php
					// require_once "../../../model/disciplina/disciplina.php";
					// $disciplina = new disciplina();
					session_start();
					if($_SESSION['logado'] != 1){
						header("Location: ../login/login.html");
					}
					if($_SESSION['cargo'] == "Professor"){
						?>
						<script>
							var professor = true;
							var idProfesssor = <?= $_SESSION['id']?>;
							console.log(idProfesssor);
							menuProfessor(idProfesssor);
						</script>
						<?php
					}else{
						$curso = $_SESSION['id'];
						?>
						<script>
							var $curso = <?=$curso?>;
							console.log($curso);
							var professor = false;
							var idAluno = 30;
							menuAluno(idAluno);
						</script>
						<?php
					}
					?>
					<nav id="nav">
								
							<ul id="menuJS">
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="#">Disciplinas</a>
									<ul>
										<li><a href="#">DAW</a></li>
										<li><a href="#">Matemática</a></li>
										<li><a href="#">CPW</a></li>
										<li>
											<a href="#">Mais matérias</a>
											<ul >
												<li><a href="#">Matéria1</a></li>
												<li><a href="#">Matéria2</a></li>
												<li><a href="#">Matéria3</a></li>
												<li><a href="#">Matéria4</a></li>
												<li><a href="#">Matéria5</a></li>
											</ul>
										</li>
				
									</ul>
								</li>

								<li>
									<a href="">Disciplinas</a>
									<ul>
									</ul>
								</li>
								<!-- <li >
									<a href="">dsa</a>
									<ul >
									<li id="menuJS"></li>
									
									</ul>
								</li> -->
								<?php
									if($_SESSION['cargo'] == "Professor"){
									

									}
								?>
								<li>
									<a href="#">Opções</a>
									<ul>
										<li><a href="">Perfil</a></li>
										<li><a href="../login/login.html">sair</a></li>
									</ul>
								</li>
							</ul>
						</nav>

				</div>
