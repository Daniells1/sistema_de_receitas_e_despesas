<?php include_once "components/topo.php";?>
    <?php 
    //1 - abrir conexão com o banco
    
   
    require_once "./funcoes/conexao.php";
    $titulo = trim($_POST["titulo"]);
    $valor = trim($_POST["valor"]);
    $id = trim($_POST["id"]);
    //vai alterar o caracter pelo ponto(no banco de dados double deve possuir ponto)
    //150,50 ----- 150.50
    $valo = str_replace(",",".",$valor);
    
    //crud  -- create(insert)  
    // INSERT INTO  NOME_TABELA(CAMPOS) VALUES(VALORES)
    //2 - montar o sql com os dados para inserir na tabela
    $sql = "UPDATE movimentacao SET titulo='".$titulo."', valor = '".$valor."' WHERE id = ".$id;
    //executar o sql
     //3 - inserir na tabela(executar o sql -- mysqli_query)
    if(mysqli_query($conn,$sql)){
        echo "<p>Movimentação editada com sucesso!";
    }else{
        echo "<p>Movimentação não pode ser editada</p>";
    }
    //4 - fechar conexão com banco
    mysqli_close($conn);
    ?>
   
<?php include_once "components/rodape.php";?>      