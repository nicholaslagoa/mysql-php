<?php
//exercício pra simular um banco de dados de um blog
declare(strict_types=1);
class Blog{
	private $conexao;

	public function __construct(){
		try{
			$this->conexao = new PDO('mysql:host=localhost;dbname=exercicio', 'root', '');//trocar campos p/ bancos específicos
		}catch(Exception $e){
			echo $e->getMessage();
			die();
		}
	}

	public function list() : array{
		$sql = 'select * from posts';
		$posts = [];

		foreach($this->conexao->query($sql) as $key => $value){
			array_push($posts, $value);
		}
		return $posts;
	}
	public function insert(string $descricao, string $autor) : int{
		$sql = 'insert into posts(descricao, autor) values (?, ?)';

		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1, $descricao);
		$prepare->bindParam(2, $autor);
		$prepare->execute();
		return $prepare->rowCount();
	}
	public function updateDescricao(string $descricao, int $id) : int{
		$sql = 'update posts set descricao = ? where id = ?';

		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1, $descricao);
		$prepare->bindParam(2, $id);
		$prepare->execute();
		return $prepare->rowCount();
	}
	public function updateAutor(string $autor, int $id) : int{
		$sql = 'update posts set autor = ? where id = ?';

		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1, $autor);
		$prepare->bindParam(2, $id);
		$prepare->execute();
		return $prepare->rowCount();
	}
	public function delete(int $id) : int{
		$sql = 'delete from posts where id = ?';

		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1, $id);
		$prepare->execute();
		return $prepare->rowCount();
	}
}