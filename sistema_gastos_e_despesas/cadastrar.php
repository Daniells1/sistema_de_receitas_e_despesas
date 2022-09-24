<?php include_once "components/topo.php";?>
    <h1>Cadastrar Gastos e Receitas</h1>
    <form action="salvar.php" method="POST">
        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo">
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value=""></option>
                <option value="REC">RECEITA</option>
                <option value="DES">DESPESA</option>
            </select>
        </div>
        <input type="submit" value="Cadastrar Receita/Despesa">
    </form>

<?php include_once "components/rodape.php";?>      