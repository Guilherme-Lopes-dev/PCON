	<?php
	$pagina = "contato";
	include "_inc_headers.php";
	?>
	<title>Contato</title>
	</head>

	<body id="<?php echo $pagina; ?>">

		<?php
		include "_inc_header.php";
		?>
		<img class="bg-contato" src="/website/img/contato/bg-contato.png" alt="">

		<section class="contato" style="">
			<div class="container">
				<div class="breadcrumbs">
					<a href="/">Home </a>
					<span class="arrow"> > </span>
					<span>Portfólio</span>
				</div>
			</div>
		</section>

		<section class="form-text-desktop">
			<div class="container">
				<div class="left">
					<p class="nmp red">Fale conosco</p>
					<p class="nmp black">
						Entre em contato conosco, estamos a sua disposição
					</p>

					<p class="nmp grey">Onde estamos:</p>
					<div class="onde">
						<div class="left">
							<p class="nmp dark-grey">Goiânia</p>
							<p class="nmp grey">Rua T-53, nº 833 - Qd. 97, Lt. 23 St. Bueno, Goiânia - GO.</p>
						</div>
						<div class="right">
							<p class="nmp dark-grey">São Paulo</p>
							<p class="nmp grey">Rua T-53, nº 833 - Qd. 97, Lt. 23 St. Bueno, Goiânia - GO.</p>
						</div>

					</div>
					<div class="atendimento">
						<p class="nmp reds">Atendimento: </p>
						<p class="nmp dark-grey"> (62) 3771-3300 </p>
						<p class="nmp dark-grey">(11) 93771-3300</p>
					</div>
				</div>
				<div class="right">
					<div class="form-itens">
						<input type="text" class="inputs" placeholder="Nome">
						<input type="text" class="inputs" placeholder="E-mail">
						<input type="text" class="inputs" placeholder="Telefone">
						<textarea placeholder="Deixe uma mensagem" name="" id="" cols="30" rows="10" class="textarea"></textarea>
						<div class="content-check">
							<input type="checkbox" id="checkbox1" name="accept" value="accept" required>
							<label for="politica_privacidade">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et </label>
						</div>
						<a href="/formulario_enviado">
							<button class="btn btn-red">Enviar</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="form-text-mobile">
			<div class="container">
				<div class="left">
					<p class="nmp red">Fale conosco</p>
					<p class="nmp black">
						Entre em contato conosco, estamos a sua disposição
					</p>
					<div class="form-itens">
						<input type="text" class="inputs" placeholder="Nome">
						<input type="text" class="inputs" placeholder="E-mail">
						<input type="text"  id="input-telefone class="input-text-contato inputs" placeholder="Telefone">
						<textarea placeholder="Deixe uma mensagem" name="" id="" cols="30" rows="10" class="textarea"></textarea>
						<div class="content-check">
							<input type="checkbox" id="checkbox1" name="accept" value="accept" required>
							<label for="politica_privacidade">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</label>
						</div>
						<a href="/formulario_enviado">
							<button class="btn btn-red">Enviar</button>
						</a>
					</div>
					<p class="nmp grey">Onde estamos:</p>
					<div class="onde">
						<div class="left">
							<p class="nmp dark-grey">Goiânia</p>
							<p class="nmp grey">Rua T-53, nº 833 - Qd. 97, Lt. 23 St. Bueno, Goiânia - GO.</p>
						</div>
						<div class="right">
							<p class="nmp dark-grey">São Paulo</p>
							<p class="nmp grey">Rua T-53, nº 833 - Qd. 97, Lt. 23 St. Bueno, Goiânia - GO.</p>
						</div>

					</div>
					<div class="atendimento">
						<p class="nmp reds">Atendimento: </p>
						<p class="nmp dark-grey"> (62) 3771-3300 </p>
						<p class="nmp dark-grey">(11) 93771-3300</p>
					</div>
				</div>
				<div class="right"></div>
			</div>
		</section>




		<?php
		include "_inc_footer.php";
		// include "website/plugins/photoswipe/photoswipe.php";
		?>

	</body>

	</html>