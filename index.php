<?php
session_start();
include("conexao.php");
if (isset($_GET["page"])) { $page= $_GET["page"]; }
else if (isset($_GET["assistencia"])) { $assistencia = $_GET["assistencia"]; }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema Intranet de RMA</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css"/>
	<script src="js/script.js"></script>
	<!-- Inicio da referencia ao ficheiro lightbox -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/lightbox.css">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
	<!-- Fim da referencia ao ficheiro lightbox -->
</head>
<body>
	<div id="FIXADO">
		<div id="TOPO">
			<div class="image-up"><a href="images/image-up.png" data-lightbox="lightbox" title="<p style='text-align:center;margin-left:20px;'>Desenvolvido por André Wielki<br/>andrewielki.php@gmail.com</p>"><img src="images/image-up.png" width="45" height="45" alt=""/></a></div>
			<ul>
				<li class="menu-up <?php if (isset($page)) { if ($page=="novo"){?> active <?php } }?>"><a href="index.php?page=novo">Novo</a></li>
				<li class="menu-up <?php if (isset($page)) { if ($page=="localizar"){?> active <?php } }?>"><a href="index.php?page=localizar">Localizar</a></li>
				<li class="menu-up <?php if (isset($page)) { if ($page=="fila"){?> active <?php } }?>"><a href="index.php?page=fila">Fila</a></li>
				<li class="menu-up <?php if (isset($page)) { if ($page=="pendentes"){?> active <?php } }?>"><a href="index.php?page=pendentes">Pendentes</a></li>
				<li class="menu-up <?php if (isset($page)) { if ($page=="encaminhados"){?> active <?php } }?>"><a href="index.php?page=encaminhados">Encaminhados</a></li>
				<li class="menu-up <?php if (isset($page)) { if ($page=="finalizados"){?> active <?php } }?>"><a href="index.php?page=finalizados">Finalizados</a></li>
			</ul>
			
			<?php if (isset($usuario)) {?>
			<form action="post/autenticacao.php" method="post">
				<button class="formButtonSIGNOUT" name="signout">SIGN OUT</button>
			</form>
			<?php } ?>
			<div class="help-text fr <?php if (isset($page)) { if ($page=="help"){?> active <?php } }?>"><a href="index.php?page=help">Help</div>
			<div class="fr"><img class="help-image" src="images/help.png" alt="Ajuda" width="24" height="24"/></a></div>
			</div>
		</div>
	</div>
	<div id="BASE">
		<?php if (!isset($usuario)) { ?>
		<div id="LINHA">
			<div class="fl"><p class="linha-usuario">Você não está logado</p></div>
			<div class="fr">
				<form action="post/autenticacao.php" method="post">
					<input type="text" name="email" placeholder="e-mail" required/>
					<input type="password" name="passwd" placeholder="passwd" required/>
					<button name="signin">SIGN IN</button>
				</form>
			</div>
			<div class="image-signin fr"><img src="images/signin.png" alt="" width="20" height="20"/></div>
		</div>
		<?php } ?>
		<div id="DIREITA">
			<div class="menu-right">
				<ul class="ul-right">
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="casa_do_nobreak"){?> active <?php } }?>"><a href="index.php?assistencia=casa_do_nobreak">Casa do Nobreak</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="samsung"){?> active <?php } }?>"><a href="index.php?assistencia=samsung">Samsung</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="acer"){?> active <?php } }?>"><a href="index.php?assistencia=acer">ACER</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="mymax"){?> active <?php } }?>"><a href="index.php?assistencia=mymax">Mymax</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="genius"){?> active <?php } }?>"><a href="index.php?assistencia=genius">SAC Genius</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="aldo"){?> active <?php } }?>"><a href="index.php?assistencia=aldo">Aldo</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="braile"){?> active <?php } }?>"><a href="index.php?assistencia=braile">Braile</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="houter"){?> active <?php } }?>"><a href="index.php?assistencia=houter">Houter</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="unicoba"){?> active <?php } }?>"><a href="index.php?assistencia=unicoba">TP-LINK</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="dlink"){?> active <?php } }?>"><a href="index.php?assistencia=dlink">D-LINK</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="pauta"){?> active <?php } }?>"><a href="index.php?assistencia=pauta">Pauta</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="hgst"){?> active <?php } }?>"><a href="index.php?assistencia=hgst">HGST</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="emproda"){?> active <?php } }?>"><a href="index.php?assistencia=emproda">Emproda</a></li>
					<li class="li-right <?php if (isset($assistencia)) { if ($assistencia=="metha_informatica"){?> active <?php } }?>"><a href="index.php?assistencia=metha_informatica">Metha Informática</a></li>
				</ul>
			</div>
		</div>
		<div id="MEIO">
			<div id="CONTEUDO">
				<?php
				if (isset($page)) {
					if( (file_exists("page/$page.php"))&&($page!=null)&&(isset($usuario)) ){
						include("page/$page.php");
					}	else if ($page=="signup") {
							include("page/signup.php");
						}	else {
								include("page/deny-notfound.php");
							}
				}
				else if (isset($assistencia)) {
					if( (file_exists("assistencia/$assistencia.php"))&&($assistencia!=null)&&(isset($usuario)) ){
							include("assistencia/$assistencia.php");
						}	else {
								include("page/deny-notfound.php");
							}
				}
				else {
					include("page/last.php");
				}
				?>		
			</div>
			<div id="RODAPE">
				<?php if (!isset($usuario)){?><p class="p-rodape fl <?php if (isset($page)) { if ($page=="signup"){?> active <?php } }?>"><a href="index.php?page=signup">Sign Up</a></p><?php } ?>
				<?php if (isset($usuario)){?><p class="p-rodape fl <?php if (isset($page)) { if ($page=="panel"){?> active <?php } }?>"><a href="index.php?page=panel">Painel de Administração</a></p><?php } ?>
			</div>
		</div>
	</div>
</body>