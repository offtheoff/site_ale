<?php
	include_once('conexao.php');

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$numerocasa = $_POST['numerocasa'];
	$pedido = $_POST['pedido'];
	$pagamento = $_POST["pagamento"];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, telefone, cidade, endereco, bairro, numerocasa, pedido, pagamento, created) VALUES ('$nome', '$telefone', '$cidade','$endereco ',' $bairro ','	$numerocasa','$pedido','$pagamento', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>