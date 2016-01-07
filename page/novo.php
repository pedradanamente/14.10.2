<p class="title-icone fl"><img src="images/novo.png" alt="" width="50" height="50"/></p>
<p class="title-comicone fl">Você pode adicionar uma nova solicitação para o Setor de RMA</p>
<p class="both"><hr/></p>
<form action="" method="post">
	<table class="tablenovo both">
		<tr width="100%">
			<td width="17%">Ordem de Serviço:</td>
			<td width="17%"><input type="text" name="os" placeholder="OS" maxlength="11"/></td>
			<td width="32%"></td>
			<td width="17%">Origem:</td>
			<td width="17%">
				<select name="origem">
					<option value="Cliente">Cliente</option>
					<option value="Cellsystem LTDA" selected>Cellsystem</option>
					<option value="Expert LAN HOUSE">Expert</option>
					<option value="Informatica LTDA">Informática</option>
					<option value="Registros Ativos">RGA</option>
					<option value="Desconhecida">Desconhecida</option>
				</select>
			</td>
		<tr width="100%">
			<td width="17%">Tipo:</td>
			<td width="17%"><input type="text" name="tipo" placeholder="Que produto é esse?" maxlength="50" required/></td>
			<td width="32%"></td>
			<td width="17%">Fabricante:</td>
			<td width="17%"><input type="text" name="fabricante" placeholder="Fabricante" maxlength="50"/></td>
		</tr>
		<tr width="100%">
			<td width="20%">Número de Série:</td>
			<td width="20%"><input type="text" name="sn" placeholder="S/N" maxlength="50"/></td>
			<td width="20%"></td>
			<td width="20%">Modelo:</td>
			<td width="20%"><input type="text" name="model" placeholder="MODEL" maxlength="50"/></td>
		<tr width="100%">
			<td width="17%"><br/></td>
			<td width="17%"></td>
			<td width="32%"></td>
			<td width="17%"></td>
			<td width="17%"></td>
		</tr>
		<tr width="100%">
			<td width="17%">NF DE COMPRA:</td>
			<td width="17%"><input type="text" name="nfcompra" placeholder="NF" maxlength="50"/></td>
			<td width="32%"></td>
			<td width="17%">NF EMITIDA EM:</td>
			<td width="17%"><input type="text" name="nfcompra_date" placeholder="00/00/2014" maxlength="50"/></td>
		</tr>
		<tr width="100%">
			<td width="17%">NF DE VENDA:</td>
			<td width="17%"><input type="text" name="nfvenda" placeholder="NF" maxlength="50"/></td>
			<td width="32%"></td>
			<td width="17%">NF EMITIDA EM:</td>
			<td width="17%"><input type="text" name="nfvenda_date" placeholder="00/00/2014" maxlength="50"/></td>
		</tr>
		<tr width="100%">
			<td width="17%"><br/></td>
			<td width="17%"></td>
			<td width="32%"></td>
			<td width="17%"></td>
			<td width="17%"></td>
		</tr>
	</table>
	<table class="tablenovo-defeito">
		<tr><td>Problema apresentado:</td><td><input class="formInputDefeito" type="text" name="defeito" maxlength="100" placeholder="Qual o defeito?" required/></td></tr>
	</table>
	<br/>
	<br/>
	<p class="fr"><img src="images/rma.png" alt="" width="120" height="120"/></p>
	<p class="p-observacao fl">Observação:</p><p class="fl"><textarea class="textarea-obs" placeholder="Qualquer informação adicional deve ser inserida aqui" name="descricao" maxlength="255"></textarea></p>
	<p class="both"><br/></p>
	<button class="formButtonEnviarNovo fl" name="novo">Enviar solicitação de RMA</button>
	<p class="both"></p>
	</form>