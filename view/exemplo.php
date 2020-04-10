<style type="text/css">
	.escondida {
		display:none;
	}
</style>

<script type="text/javascript">
	function abrir() {
		var main = document.getElementById("central");
		var iten = main.getElementsByTagName("input");
		if (iten) {
			for (var i=0;i<iten.length;i++) {
				iten[i].onclick = function() {
					var el = document.getElementById(this.id.substr(7,7));
					if (el.style.display == "block")
						el.style.display = "none";
					else
						el.style.display = "block";
				}
			}
		}
	}
	window.onload=abrir;
</script>

<div id="central">
	<!-- Botao -->
	<input type="button" value="Abrir / fechar" id="receita1">
	<!-- conteudo escondido -->
	<div id="1" class="escondida"> 
		<!-- Aqui fica o seu form -->
		
		<!-- INICIO DO FORMULÁRIO -->
		
		<form id="formulario" method="post" action="enviar.php">
			
			<p>
				Nome:<br>
				<input type="text" name="nome" id="nome_id">
			</p>
			
			<p>
				E-mail:<br>
				<input type="email" name="email" id="email_id">
			</p>
			
			<p>
				Telefone:<br>
				<input type="tel" name="fone" id="fone_id">
			</p>
			
			<p>
				Mensagem:<br>
				<textarea name="msg" cols="35" rows="5"></textarea>
			</p>
			
			<p>
				<input class="botao" type="submit" name="enviar" id="enviar_id" value="Enviar">
			</p>
			
		</form>
		
		<!-- FIM DO FORMULÁRIO -->
		
		
	</div>

</div>