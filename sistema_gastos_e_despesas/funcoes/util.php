<?php

function tipoMovimentacaoDesc($tipoMovimentacao){
    if($tipoMovimentacao == 'REC'){
    return "Receita";
    }
    
    return "Despesa";
}