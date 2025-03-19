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
