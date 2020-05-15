<?php
declare(strict_type=1);

function ValidaNome(string $nome) : bool
{
    if(empty($nome)){
        setarMensagemErro(mensagem:'O nome não pode ser vazio. Por favor preenchao novamente');
        return false;
    }
    if(strlen($nome) < 3)
    {
        setarMensagemErro(mensagem:'O nome deve conter mais de 3 caracteres');
        return false;
    }
    if(strlen($nome) > 40)
    {
        setarMensagemErro(mensagem: 'O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}

function ValidaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro(mensagem: 'Informe um numero para idade');
        return false;
    }
    return true;
}
?>