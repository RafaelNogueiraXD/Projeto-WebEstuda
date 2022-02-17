<!DOCTYPE HTML>
<!DOCTYPE HTML>
<?php
 require_once "../template/header.php";
?>
<!-- Nav -->
					

			<!-- Main -->
             <style>
         
             </style>
                <main class="forumContainerMain">
                    <section>
                        <header>
                            <h1>Titulo do Fórum</h1>
                        </header>
                        <div class="corpoDoForum">
                            <p><span>Descrição: </span> Responda esse tópico  quem vai querer pizza e qual sabor irá pedir.</p>
                        </div>
                        <footer>
                            <div>
                                <a href="">Responder</a>
                                <a href="">Excluir</a>
                                <a href="">Editar</a>
                            </div>
                        </footer>
                    </section>
                </main>

                <main class="forumContainerResposta">
                    <section>
                        <header>
                            <h1>Fulano não sei das quantas</h1>
                        </header>
                        <div class="corpoDoForum">
                            <p><span>Resposta: </span> Quem come pizza é ótario,negócio é comer coxinha com coca-cola.</p>
                        </div>
                        <footer>
                            <div>
                                <a href="">Responder</a>
                                <a href="">Excluir</a>
                                <a href="">Editar</a>
                            </div>
                        </footer>
                    </section>
                </main>
			

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
			<script >
			    $("#cadastro").hide();
				$("#abreCad").click(function(){
					$("#cadastro").fadeIn();
				});
				$(".close").click(function(){
					$("#cadastro").fadeOut();
				});
			</script>
	</body>
</html>