<?php



function defineCategoriaCompetidor(string $nome, string $idade)
{
    $catetorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
}
if(validaNome($nome) && validaIdade($idade))
{
    removerMensagemErro();
    if($idade >= 6 && $idade <= 12)
    {
        for($i = 0; count($categorias); i++ )
        {
            if($categorias[$i] == 'infantil')
                setarMensagemSucesso( mensagem:  "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                return null;
        
            }
    }
    else if($idade >= 13 && $idade <= 18)
    {
        for($i = 0; count($categorias); i++ )
        {
            if($categorias[$i] == 'adolescente')
                setarMensagemSucesso( mensagem:  "O nadador ".$nome." compete na categoria adolescente.");
                return null;
        }
    }
    else if($idade >= 19 && $idade <= 59)
    {
        for($i = 0; count($categorias); i++ )
        {
            if($categorias[$i] == 'adulto')
                setarMensagemSucesso( mensagem:  "O nadador ".$nome." compete na categoria adulto.");
                return null;
        }
    }
    else ($idade >= 60)
    {
        for($i = 0; count($categorias); i++ )
        {
            if($categorias[$i] == 'isodo')
                setarMensagemSucesso( mensagem:  "O nadador ".$nome." compete na categoria idoso.");
                return null;
        }
    }
}
else{
    removerMensagemSucesso();
    return obterMensagemErro; 
}

?>