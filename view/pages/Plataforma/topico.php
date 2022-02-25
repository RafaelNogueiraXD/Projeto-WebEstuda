<!DOCTYPE HTML>
<!DOCTYPE HTML>
<?php
 require_once "../template/header.php";
$idDisciplina = $_GET['id'];
echo "<script> var idDisciplina = $idDisciplina </script>";
?>
<!-- Nav -->
<script>
	verlinks(idDisciplina);
	versections(idDisciplina);
	mostraTopicosSelect(idDisciplina);
</script>
			<style>
				select{
					background: transparent;
					width: 268px;
					padding: 5px;
					font-size: 16px;
					line-height: 1;
					border: 0;
					border-radius: 20;
					height: 34px;
					-webkit-appearance: none;
					border:  0.5px solid black;

				}
			</style>

			<!-- Main -->
			<section id="addTopcio">
				<a class="close">X</a>
				<h1>Adicionar Tópico</h1>
				<form action="../../../model/topico/topicoExe.php" id="addtopicos" method="POST">
					<input type="text" placeholder="digitar o titulo" id="titulo" name="titulo">
					<input type="hidden" name="idDisciplina" id="idDisciplina" value="<?= $idDisciplina?>">				
					<input type="hidden" name="determinante" id="determinante" value="2">				
					<input type="text" name="subtitulo" id="subtitulo" placeholder="digite o subtitulo">				
					<select name="visualiza" id="visualiza">
						<option value="0">Não visualizar</option>
						<option value="1">visualizar</option>
					</select>
					<input type="submit" value="Adicionar">
				</form>

			</section>
			<style>
				.cadastro2{
					text-align: center;
					align-items: center;
					background-color: #f2f2f2;
					
				}
			</style>
			<section id="cadastro" class="cadastro2">
					<a class="close">x</a>
					<h1>Adicionar Item ao tópico</h1>
					<form action="../../../model/topico/topicoExe.php" method="POST">
				
						<div class="formulario">
							<div>
								<label for=""  class="atividade" >Nome do Arquivo:</label>
								<input type="text" class="atividade"name="titulo" placeholder="Digite o nome do arquivo"> <br>
								<input type="hidden" name="determinante" value="5">
								<input type="hidden" name="idDisciplina" value="<?= $idDisciplina ?>">
								<span>
									<label for="">Tipo:</label>
									<select name="tipo" id="escolhaArquivoSection">
										<option value="1">Fórum</option>
										<option value="2">Atividade</option>
										<option value="3">Paragrafo</option>
									</select>
								</span>
								<label for="" class="atividade">Arquivos:</label>
								<input type="file" name="arquivo" class="atividade" placeholder="Adicione um Arquivo">
							</div>
							<div>
								<label for="">Descrição:</label>
								<textarea name="texto" id="forum" cols="20" rows="5"></textarea>
							</div>
						
							<div>
								<span>
									<label for="">Tópico:</label>
									<select name="idtopico" id="mostraTopicosSelect">

									</select>
								</span>
							</div>
							<div class="atividade">
								<label for="">Data de entrega:</label>
								<input type="date" class="data" > <br>
							</div>
							<div>
								<input type="submit" value="adicionar">
							</div>
						</div>
					</form>
				</section>
				<div class="tituloDisciplinas">
					
				</div>
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->
										<section class="linksTopicos">
											<h3>Tópicos</h3>
											<ul class="printLinks links" >
												<li><a href="#semana1">Semana 1</a></li>
												<li><a href="#semana2">Semana 2</a></li>
												<li><a href="#semana3">Semana 3</a></li>
												<li><a href="#">Semana 4</a></li>
												<li><a href="#">Semana 5</a></li>
												<li><a href="#">Semana 5</a></li>
												<li><a href="#">Semana 5</a></li>
												<li><a href="#">Semana 5</a></li>
								
								
											</ul>
											<ul id="professorAuto">
											<li><div class="reduzBotao">
														<a class="btn" id="abreCad"> Editar Tópico</a>
													</div>
												</li>
												<li><div class="reduzBotao">
														<a class="btn" id="abreTopico"> Adiciona Tópico</a>
													</div>
												</li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->
									

								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<footer id="footer">
					

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
					</ul>
			</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="../../js/puro.js"></script>
			<!-- <script src="../../js/main.js"></script> -->
			<script >
				// modal();
				$(document).ready(function(){
					$(".atividade").hide();
					$(".forum").show();
					$(".paragrafo").hide();


				});
				$("select#escolhaArquivoSection").change(displayVals);
				displayVals();
				function displayVals(){
				var opcao = $("#escolhaArquivoSection").val();
					switch(opcao){
					case "1":
						$(".forum").show();
						$(".paragrafo").hide();
						$(".atividade").hide();
						console.log(opcao);
					break;
					case "2":
						$(".forum").hide();
						$(".paragrafo").show();
						$(".atividade").show();
						console.log(opcao);
					break;
					case "3": 
						$(".forum").show();
						$(".paragrafo").hide();
						$(".atividade").hide();
						console.log(opcao);
					break;
					}
				}
		
				$(".atividade").hide();
				if(professor == false){
					$("#professorAuto").hide();
				}
			    $("#cadastro").hide();
				$("#abreCad").click(function(){
					$("#cadastro").fadeIn();
					$("#addTopcio").fadeOut();
				});
				$(".close").click(function(){
					$("#cadastro").fadeOut();
				});
			    $("#addTopcio").hide();
				$("#abreTopico").click(function(){
					$("#addTopcio").fadeIn();
					$("#cadastro").fadeOut();
				});
				$(".close").click(function(){
					$("#addTopcio").fadeOut();
				});
			</script>
	</body>
</html>