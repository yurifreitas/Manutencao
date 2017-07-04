<?php include "head.php"; ?>
<body>
<div class ="tudo">
     <?php include "nav.php";?>
     <?php include "header.php"; ?>


<div class="section">
	<div class="contato">
	<form id="contact_form" action="" method="POST" >
	<div class="row">
		<label for="name">Nome:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="35" /><br />
	</div>
	<div class="row">
		<label for="email"> Email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="35" /><br />
	</div>
	<div class="row">
		<label for="message">Mensagem:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="28"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Enviar" />
</form>		
	</div>
<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3382.051559347833!2d-52.09010344268132!3d-32.040795819272724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xbaa8517ea9d4b26b!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o%2C+Ci%C3%AAncia+e+Tecnologia+do+Rio+Grande+do+Sul+-+C%C3%A2mpus+Rio+Grande!5e0!3m2!1spt-BR!2sbr!4v1448037809103" width="600" height="450"  style="border:0" allowfullscreen></iframe>
</div>

</div>

<?php include 'footer.php';?>