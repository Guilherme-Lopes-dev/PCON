<?php
$pagina = "formulario_enviado";
include "_inc_headers.php";
?>
<title>Formulário Enviado</title>
</head>

<body id="<?php echo $pagina; ?>">

	<?php
	include "_inc_header.php";
	?>
	<img class="bg-contato" src="/website/img/contato/bg-contato.png" alt="">


	<section class="success">
		<div class="container">
			<img src="/website/img/form-sucesso/image 5.png" alt="">
			<h3>
				Formulário enviado com sucesso
			</h3>
			<a href="/">
				<button class="btn btn-red">
					voltar para a home
				</button>
			</a>
		</div>
	</section>



	<?php
	include "_inc_footer.php";
	// include "website/plugins/photoswipe/photoswipe.php";
	?>

</body>

</html>