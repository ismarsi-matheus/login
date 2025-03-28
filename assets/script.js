function mascaraTelefone(input) {
    let numero = input.value.replace(/\D/g, "");
    if (numero.length > 11) numero = numero.slice(0, 11);
    input.value = numero.length > 10 ? `(${numero.slice(0, 2)}) ${numero.slice(2, 7)}-${numero.slice(7)}` :
                      numero.length > 6 ? `(${numero.slice(0, 2)}) ${numero.slice(2, 6)}-${numero.slice(6)}` :
                      numero.length > 2 ? `(${numero.slice(0, 2)}) ${numero.slice(2)}` : numero;
}

function mascaraCPF(input) {
    let cpf = input.value.replace(/\D/g, "");
    if (cpf.length > 11) cpf = cpf.slice(0, 11);
    input.value = cpf.length > 9 ? `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6, 9)}-${cpf.slice(9)}` :
                      cpf.length > 6 ? `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6)}` :
                      cpf.length > 3 ? `${cpf.slice(0, 3)}.${cpf.slice(3)}` : cpf;
}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const senha = document.getElementById("senha");
    const confirmarSenha = document.getElementById("confirmar_senha");

    form.addEventListener("submit", function (event) {
        let senhaVal = senha.value.trim();
        let confirmarSenhaVal = confirmarSenha.value.trim();
        const regexSenha = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,12}$/;

        if (!regexSenha.test(senhaVal)) {
            event.preventDefault();
            document.getElementById("erroSenhaRequisitos").style.display = "block";
        } else {
            document.getElementById("erroSenhaRequisitos").style.display = "none";
        }

        if (senhaVal !== confirmarSenhaVal) {
            event.preventDefault();
            document.getElementById("erroSenha").style.display = "block";
        } else {
            document.getElementById("erroSenha").style.display = "none";
        }
    });
});
