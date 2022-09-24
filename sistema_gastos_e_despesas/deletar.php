<?php include_once "components/topo.php";?>
<?php require_once "funcoes/conexao.php";?>
<?php 

//1 - pegar  o ID da movimentação que será excluido via GET
$id = $_GET["id"];

//2 - Montar o SQL para excluir o registro
$sql = "DELETE FROM movimentacao WHERE id ='".$id."'";

if(mysqli_query($conn,$sql)){
    echo "<p>Movimentação excluida com sucesso!</p>";
}else{
    echo "<p>Erro ao excluir a movimentação</p>";
}
?>




<?php include_once "components/rodape.php";?>      