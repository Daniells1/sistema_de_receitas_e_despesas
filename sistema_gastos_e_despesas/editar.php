<?php include_once "components/topo.php";?>
<?php include_once "funcoes/conexao.php";
    include_once "funcoes/util.php";

$id = $_GET["id"];
$sql = "SELECT * FROM movimentacao WHERE id =".$id;
$resultSet = mysqli_query($conn,$sql);
$totalRegistros =mysqli_num_rows($resultSet);

if($totalRegistros == 0){

    echo "Nenhuma movimentação encontrada.";
    exit;
}
//pegar a linha da movimentação pelo id
$registro = mysqli_fetch_assoc($resultSet);
?>
    <h1>Editar Gastos e Receitas</h1>
    <form action="confirmar_edicao.php" method="POST">
        <input type="hidden" name ="id" value="<?=$registro["id"]?>">
        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?=$registro["titulo"]?>">
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" value="<?=$registro["valor"]?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <?=tipoMovimentacaoDesc($registro["tipo"])?>
        </div>
        
        <input type="submit" value="Editar Receita/Despesa">
    </form>

<?php include_once "components/rodape.php";?>      