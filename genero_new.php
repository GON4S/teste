<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Novo Jogo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
           require_once "includes/banco.php";
           require_once "includes/funcoes.php";
           require_once "includes/login.php";
        ?>
        <div id="corpo">
            <?php
                if(!is_admin()){
                    echo msg_erro('Área restrita! Você não é administrador!');
                }else{
                    if(!isset($_POST['genero'])){
                        require "genero_new_form.php";
                    }else{
                        $genero = $_POST['genero'] ?? null;
                                   
                            if(empty($genero)){
                                echo msg_erro('O campo Genero precisa ser preenchido');
                            }else{
                                $q = "INSERT INTO generos(genero)VALUE('$genero')";
                                if($banco->query($q)){
                                    echo msg_sucesso("Genero $genero cadastrado com sucesso");
                                }else{
                                    echo msg_erro("Não foi possivel criar o genero $genero");
                                }
                            }                        
                        }                 
                    }
                echo voltar();
            ?>
        </div> 
    </body>
</html>