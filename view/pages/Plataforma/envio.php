<!DOCTYPE HTML>
<!DOCTYPE HTML>
<?php
 require_once "../template/header.php";
 $id = $_GET['id'];
echo "<script> var id = $id </script>";
?>
<script>
    mostraAtividadeX(id);
</script>
<style>
    .tabelaAlunos{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        background-color: #f2f2f2;
        border: 1px solid grey;
        border-radius: 15px;
        margin-bottom: 10%;
        border-bottom: none;
    }
    .tabelaAlunos td{
        font-size: 20px;
    }
</style>
<!-- Nav -->
					

			<!-- Main -->
            <div id="conteudoAtividade">
                <main class="envioContexto">
                    <header>
                        <h1>Atividade X e Y</h1>
                    </header>
                    <!-- <span>ewq</span> -->
                    <section>
                        <div>
                            <p><span> <b>Descrição da Atividade:</b></span>
                            Essa atividade deve ser feita com base no que foi conversado na ultima aula de gestão empresarial</p>
                        </div>
                        <div>
                            <p> <span> <b>Aula:</b> </span> <a href="">Arquivo da aula</a></p>
                        </div>
                        <div>
                            <p><span><b>Data de entrega:</b></span>20/02/2022</p>
                        </div>
                    </section>
                    <footer>
                        <div>
                            <a href="" class="btn" id="removeBtn">enviar</a>
                            <div class="envioAtiv">
                                <form action="">
                                    <input type="file" name="tarefa">
                                    <input type="submit">
                                </form>
                            </div>
                        </div>
                    </footer>
                </main>
            </div>
            <div class="tabelaAlunos">
                <table>
                    <thead>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Envio</th>  
                        <th>Data</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rafael</td>
                            <td>Rafael@gmail.com</td>
                            <td><a href="">osidajoisd.pdf</a></td>
                            <td>03/05/2022</td>
                        </tr>
                        <tr>
                            <td>Rafael</td>
                            <td>Rafael@gmail.com</td>
                            <td><a href="">osidajoisd.pdf</a></td>
                            <td>03/05/2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>

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
            <script>
                $(".envioAtiv").hide();
                
                function envioAtividade(){
                    $(".envioAtiv").show();
                    $("#removeBtn").hide();
                }
            </script>
	</body>
</html>