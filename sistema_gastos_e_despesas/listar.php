

<?php include_once "components/topo.php";?>

    <h1>Listar Gastos e Receitas</h1>
    <?php require_once "funcoes/conexao.php"?>
    <?php require_once "funcoes/util.php"?>
    <?php $sql = "SELECT * FROM movimentacao"; 
    $resultSet = mysqli_query($conn,$sql);
    $totalResgistros= mysqli_num_rows($resultSet);
    if($totalResgistros >0){

    
    ?>
    <!--Como só esta imprimindo uma váriavel pode-se abrir o php do jeito a seguir,só pode-se fazer quando só
se tem uma linha apenas-->
    <h2>Total de Registros encontrados foi de <?= $totalResgistros; ?></h2>
   <table>
    <thead>
    <tr>
        <th>TITULO</th>
        <th>VALOR</th>
        <th>TIPO</th>
        <th>AÇÃO</th>
    </tr>
    </thead>
   
    <tbody>
    <?php while ($registro = mysqli_fetch_assoc($resultSet)){
       
        ?>
    <tr>
     <td><?=mb_strtoupper($registro["titulo"], "UTF-8") ?> </td>
     <td>R$<?=number_format($registro["valor"],2,',',".") ?>  </td>
     <td> <?=tipoMovimentacaoDesc($registro["tipo"]) ?>  </td>
     <td>

     <a href="editar.php?id=<?=$registro["id"]?>" class="btn btn-edit"><i class="fa-solid fa-pen-to-square"></i> </a>

     <a href="deletar.php?id=<?=$registro["id"]?>" onclick ="return excluir()" class="btn btn-remove">  
     <i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php } ?>

    </tbody>
   </table>
   <?php
   }else{
    echo "<p>Nenhuma movimentação encontrada no banco de dados.</p>";
   }
   ?>
<?php include_once "components/rodape.php";?>      