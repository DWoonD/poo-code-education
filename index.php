<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php
		class Cliente {
			public $id;
			public $nome;
			public $cpf;
			public $endereco;
			
		}
	
	$cliente_1 = new Cliente();
	$cliente_1->id = 1;
	$cliente_1->nome = "Claudia";
	$cliente_1->cpf = '234.123.234-90';
	$cliente_1->endereco = 'Rua dos Artesões';
	
	$cliente_2 = new Cliente();
	$cliente_2->id = 2;
	$cliente_2->nome = "Rodolfo";
	$cliente_2->cpf = '224.133.234-90';
	$cliente_2->endereco = 'Rua da conquista';
	
	$cliente_3 = new Cliente();
	$cliente_3->id = 3;
	$cliente_3->nome = "Jonathan";
	$cliente_3->cpf = '234.123.234-90';
	$cliente_3->endereco = 'Rua dos tristes';
	
	$cliente_4 = new Cliente();
	$cliente_4->id = 4;
	$cliente_4->nome = "Elizabeth";
	$cliente_4->cpf = '234.123.234-90';
	$cliente_4->endereco = 'Rua dos alegres';
	
	$cliente_5 = new Cliente();
	$cliente_5->id = 5;
	$cliente_5->nome = "Mariana";
	$cliente_5->cpf = '234.123.234-90';
	$cliente_5->endereco = 'Rua chimarrão';
	
	$cliente_6 = new Cliente();
	$cliente_6->id = 6;
	$cliente_6->nome = "Rebeca";
	$cliente_6->cpf = '234.123.234-90';
	$cliente_6->endereco = 'Rua mineiros e curintianos';
	
	$cliente_7 = new Cliente();
	$cliente_7->id = 7;
	$cliente_7->nome = "Allison";
	$cliente_7->cpf = '234.123.234-90';
	$cliente_7->endereco = 'Rua João Paulo e Daniel';
	
	$cliente_8 = new Cliente();
	$cliente_8->id = 8;
	$cliente_8->nome = "Steve";
	$cliente_8->cpf = '234.123.234-90';
	$cliente_8->endereco = 'Rua das festas e da neve';
	
	$cliente_9 = new Cliente();
	$cliente_9->id = 9;
	$cliente_9->nome = "Bianca";
	$cliente_9->cpf = '234.123.234-90';
	$cliente_9->endereco = 'Rua das orquídeas e girassóis';
	
	$cliente_10 = new Cliente();
	$cliente_10->id = 10;
	$cliente_10->nome = "Beatriz";
	$cliente_10->cpf = '234.123.234-90';
	$cliente_10->endereco = 'Rua dos barões de monfrato';
	
	
	$clientes = [$cliente_1, $cliente_2, $cliente_3, $cliente_4, $cliente_5, $cliente_6, $cliente_7, $cliente_8, $cliente_9, $cliente_10];
	
	
	if(!isset($_GET['cliente'])){
		echo 'Nenhum Cliente selecionado. Por favor escolha um da lista abaixo';
	}else{
		$id = $_GET['cliente'];
		if(array_key_exists($id -1, $clientes)){
			$cliente_atual = $clientes[$id-1];
			?>
	<div class="container">
		<div class="row">
			<div class="md-col-12">
				<h3><?php echo $cliente_atual->nome; ?></h3>
				<p><?php echo $cliente_atual->cpf; ?></p>
				<p><?php echo $cliente_atual->endereco; ?></p>
			</div>
		</div>
	</div>
			<?php
		}else{
			$cliente_atual = null;
		}
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md12">
				<table>
				<tr>
					<th>Nome</th>
				</tr>
				
	<?php
	for($i = 0; $i < count($clientes); $i++):
	?>
			<tr>
				<td><a href="?cliente=<?=$clientes[$i]->id;?>"><?=$clientes[$i]->nome;?></a></td>
			</tr>	
	<?php
		endfor;
	?>
				
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>