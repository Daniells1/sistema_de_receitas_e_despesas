<?php include_once "components/topo.php";?>
    <?php 
    //1 - abrir conexão com o banco
    
   
    require_once "./funcoes/conexao.php";
    $titulo = trim($_POST["titulo"]);
    $valor = trim($_POST["valor"]);
    $tipo = trim($_POST["tipo"]);
    //vai alterar o caracter pelo ponto(no banco de dados double deve possuir ponto)
    //150,50 ----- 150.50
    $valo = str_replace(",",".",$valor);
    
    //crud  -- create(insert)  
    // INSERT INTO  NOME_TABELA(CAMPOS) VALUES(VALORES)
    //2 - montar o sql com os dados para inserir na tabela
    $sql = "INSERT INTO movimentacao VALUES(NULL,'".$titulo."','".$valor."','".$tipo."',now())";
    //executar o sql
     //3 - inserir na tabela(executar o sql -- mysqli_query)
    if(mysqli_query($conn,$sql)){
        echo "<p>Receita/Gasto: " .$titulo. ",enviado com sucesso!</p>";
    }else{
        echo "<p>Não foi possível cadastra receita/gasto</p>";
    }
    //4 - fechar conexão com banco
    mysqli_close($conn);
    ?>
   
<?php include_once "components/rodape.php";?>      