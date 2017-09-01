function main(){
    var submit = document.getElementById('enviar');
    // quando clicar em enviar chama o ajax request
    submit.addEventListener('click', function(){
        ajaxRequest();
    })
}

// Faz o request no churrasco.php
function ajaxRequest(){
    // Armazena os atributos da form em variáveis
    var nome = document.forms.pessoa.nome.value;
    var sexo = document.forms.pessoa.sexo.value;
    var idade = document.forms.pessoa.idade.value;
    var vegetariana = document.forms.pessoa.vegetariana.value;
    
    // Cria e adiciona elementos ao formdata
    var fd = new FormData();
    fd.append('nome', nome);
    fd.append('sexo', sexo);
    fd.append('idade', idade);
    fd.append('vegetariana', vegetariana);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resp").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "churrasco.php", true);
    xhttp.send(fd);
}

window.onload = main;