function gerar(){
    // INPUTS
    var nome = document.getElementById('nome');
    var endereco = document.getElementById('endereco');
    var email = document.getElementById('email');
    var telefone = document.getElementById('telefone');
    var objetivo = document.getElementById('objetivo');
    var qualificacao = document.getElementById('qualificacao');
    var exp = document.getElementById('exp');
    var formacao = document.getElementById('formacao');
    var cursos = document.getElementById('cursos');
    var idiomas = document.getElementById('idiomas');

    // RESULTADOS
    var nomeC = document.getElementById('nomeC');
    var enderecoC = document.getElementById('enderecoC');
    var emailC = document.getElementById('emailC');
    var telefoneC = document.getElementById('telefoneC');
    var objetivoC = document.getElementById('objetivoC');
    var qualificacaoC = document.getElementById('qualificacaoC');
    var expC = document.getElementById('expC');
    var formacaoC = document.getElementById('formacaoC');
    var cursosC = document.getElementById('cursosC');
    var idiomasC = document.getElementById('idiomasC');

    nomeC.innerHTML = nome.value
    enderecoC.innerHTML = endereco.value
    emailC.innerHTML = email.value
    telefoneC.innerHTML = telefone.value
    objetivoC.innerHTML = objetivo.value
    qualificacaoC.innerHTML = qualificacao.value
    expC.innerHTML = exp.value
    formacaoC.innerHTML = formacao.value
    cursosC.innerHTML = cursos.value
    idiomasC.innerHTML = idiomas.value
}

var uploadfoto = document.getElementById('uploadfoto');
var fotopreview = document.getElementById('fotopreview');

uploadfoto.addEventListener('change', function(e) {
    showThumbnail(this.files);
});

function showThumbnail(files) {
    if (files && files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
       fotopreview.src = e.target.result;
    }

        reader.readAsDataURL(files[0]);
    }
}

