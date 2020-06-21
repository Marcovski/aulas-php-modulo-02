'use strict'

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('formCadastro').addEventListener('submit', (event) => {
        var recebevalue = getValor();

        if (!validar(recebevalue))
            event.preventDefault();
    });

});

function getValor() {
    var obj = {
        nome: document.getElementById('txtNome').value,
        telefone: document.getElementById('txtTel').value,
        email: document.getElementById('txtEmail').value        
    }
    return obj;
}

function validar(getValor) {

    var erros = [];

    if (getValor.nome.length < 4 || getValor.nome.length > 50) {
        erros++;
        document.getElementById('1').classList.add('erro');
    } else if (getValor.nome.length > 4 || nome.length < 50) {
        document.getElementById('1').classList.remove('erro');
    } else {
        erros++;
        document.getElementById('1').classList.add('erro');
    }

    if (getValor.telefone.length < 10 || getValor.telefone.length > 11) {
        erros++;
        document.getElementById('2').classList.add('erro');

    } else if (getValor.telefone.length > 10 || getValor.telefone.length < 11) {
        document.getElementById('2').classList.remove('erro');
    } else {
        erros++;
        document.getElementById('2').classList.add('erro');
    }

    if (getValor.email.length < 3 || getValor.email.length > 50 || !/.+?\@.+?\..+/.test(getValor.email)) {
        erros++;
        document.getElementById('3').classList.add('erro');
    } else if (getValor.email.length > 3 && getValor.email.length < 50 || getValor.email.length == /.+?\@.+?\..+/.test(pegavalor.email)) {
        document.getElementById('3').classList.remove('erro');
    } else {
        erros++;
        document.getElementById('3').classList.add('erro');
    }

    if (erros.length == 0) {

        alert('Cadastro realizado com sucesso.');
        return true;
    } 

}
