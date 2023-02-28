<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>lista de hábitos</title>
</head>
<body>
    <div class="center">
        <h1>Lista de Hábitos</h1>

        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>

        <?php 
            //obtém a lista de hábitos do banco de dados MYSQL

                        
            $hostname = "localhost";
            $bancodedados = "listadehabito";
            $usuario = "root";
            $senha = "";

            $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

            if ($mysqli->connect_errno) {
                echo "falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;

            }
                //executa a query da variável $sql
             $sql = "SELECT id ,nome FROM habito WHERE `status` = 'A';";
            $resultado= $mysqli->query($sql);
    
                

            
            
                if($registro= $resultado->num_rows > 0){
               
            

            
        ?>
                 <br/>
            <table class="center">
                <tbody>
        <?php

                    //looping pelo registros retornados
                 while($registro=$resultado->fetch_assoc()) {

        ?> 
                    
                    <tr>
                        <td><?php echo $registro["nome"];?></td>

                        <td><a href="vencerhabito.php?id=  <?php echo $registro["id"]; ?>">Vencer</a></td>
                        <td><a href="desistirhabito.php?id= <?php echo $registro["id"]; ?>">Desistir</a></td>
                    </tr>
        <?php

            }//fim do looping

        ?>

			  </tbody>
            </table>
		         <p>Continue mudando sua vida!</p>
		         <p>Cadastre seus hábitos!</p>

        <?php

         }else{
         

         
               
               

        ?>

            <p>Você não possui hábitos cadastrados!</p>
            <p>Começe já a mudar sua vida!</p>

        <?php

        }//fim if
    
         
         //fecha a conexão com MYSQL
         $mysqli->close();

        ?>

    <a href="novohabito.php">Cadastrar Hábito</a>





    </div>

</body>
</html>