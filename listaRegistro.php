<table border="1" cellspacing="0" cellpadding="4" width="100%">

	<tr>
		<td>Nome</td>
		<td>CPF</td>
		<td>RG</td>
		<td>Tel</td>
		<td>Email</td>
	</tr>

<?php


	$conexao = mysql_connect('localhost', 'root', 'root');
	mysql_select_db('banco_app', $conexao);



	$sql = "SELECT nome, cpf, rg, tel, email FROM cliente";
	$query = mysql_query($sql);
	
	while($n = mysql_fetch_array($query)){
		$nome 	= $n['nome'];
		$cpf 	= $n['cpf'];
		$rg 	= $n['rg'];
		$tel 	= $n['tel'];
		$email  = $n['email'];
		
		echo "
		<tr>
			<td>$nome</td>
			<td>$cpf</td>
			<td>$rg</td>
			<td>$tel</td>
			<td>$email</td>
		</tr>
		";

	}
	
?>
</table>