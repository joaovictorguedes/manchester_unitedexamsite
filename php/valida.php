<?php
	session_start();
	include_once("conexao.php");
	$acessar = filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
	
	if($acessar) {
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		
		//Pesquisa no banco de dados o usuário
		if((!empty($usuario)) AND ((!empty($senha)))) {
			$resul_usuario = "select * from users where usuario = '$usuario' limit 1";
			$resultado_usuario = mysqli_query($sql, $resul_usuario);
			
			if ($resultado_usuario) {
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				
				if(password_verify($senha, $row_usuario['senha'])) {
					$_SESSION['id'] = $row_usuario['id'];
					$_SESSION['nome'] = $row_usuario['nome'];
					$_SESSION['email'] = $row_usuario['email'];
					header("Location:../php/prova.php");
                    echo '<script>alert("sexooo")</script>';
				} else {
					$_SESSION['msg'] = "<text>Senha incorreta.</text>";
					header("Location:../index.php");
				}	
			} else {
				$_SESSION['msg'] = "<text>Usuário incorreto.</text>";
				header("Location:../index.php");
			}
		} else {
			$_SESSION['msg'] = "<text>Página não encontrada.</text>";
		}
	}
?>