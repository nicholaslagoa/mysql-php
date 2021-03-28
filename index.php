<?php
declare(strict_types=1);
require "src/Blog.php";

$blog = new Blog();

switch($_GET['operacao']){
	case 'list':
		echo "<H3>Meu Blog!</H3>";
		echo "<HR></HR>";

		foreach($blog->list() as $value){
			echo "Id: " . $value['id'] . '<br> Descricao: ' . $value['descricao'] . '<br> Autor: ' . $value['autor'] . "<hr>";
		}
		break;
	case 'insert':
		$status = $blog->insert('eu amo este blog kkk', 'Nicholas Lagoa');
		if(!$status){
			echo "Não foi possível realizar a operação";
			return false;
		}
		echo "Inserção realizada com sucesso";
		break;
	case 'updDescricao':
		$status = $blog->updateDescricao('eu amo a joanita este é o blog', 1);
		if(!$status){
			echo "Não foi possível realizar a operação";
			return false;
		}
		echo "Atualização realizada com sucesso";
		break;
	case 'updAutor':
		$status = $blog->updateAutor('Joanita Lindita', 1);
		if(!$status){
			echo "Não foi possível realizar a operação";
			return false;
		}
		echo "Atualização realizada com sucesso";
		break;
	case 'delete':
		$status = $blog->delete(1);
		if(!$status){
			echo "Não foi possível realizar a operação";
			return false;
		}
		echo "Delete realizado com sucesso";
		break;
}