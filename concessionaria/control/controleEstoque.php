<?php
	
	include '../model/crudEstoque.php';
	include '../view/modal.php';

	$opcao = $_POST["opcao"];

	session_start();

	if($opcao == "Cadastrar Veiculo"){
		$nome = $_POST["nome"];
		$ano = $_POST["ano"];
		$preco = $_POST["preco"];
		cadastrarProduto($nome, $ano, $preco);
		
		$_SESSION['mensagem'] = 'Veiculo cadastrado com sucesso';
		$_SESSION['local'] = '../view/visualizarEstoquePesquisar.php';
		
		modalConfirmacao();
	}
	else if($opcao == "Alterar")
	{
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $ano = $_POST['ano']; 

		alterarProduto($codigo, $nome, $preco, $ano);

		$_SESSION['mensagem'] = 'Dados do veiculo alterados com sucesso';
		$_SESSION['local'] = '../view/visualizarEstoquePesquisar.php'; 

		modalConfirmacao();
	}
	else if($opcao == "Excluir")
	{
		$codigo = $_POST["codigo"];

		modalDesejaExcluir($codigo);
	
	}

	else if ($opcao == "excluirSim")
	{
		$codigo = $_POST["codigo"];
		excluirProduto($codigo);
		$_SESSION['mensagem'] = 'Veiculo excluido com sucesso';
		$_SESSION['local'] = '../view/visualizarEstoquePesquisar.php';

		modalConfirmacao();
	}



?>