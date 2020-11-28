function testFunction() {
    return 0;
}

function imc() {
    var nome = document.getElementById('nome').value
    var peso = document.getElementById('peso').value
    var altura = document.getElementById('altura').value

    var fantoche = document.getElementById('fantoche')

    if (nome == '' || peso == '' || altura == '' || peso < 0 || altura < 0) {
        fantoche.innerHTML = '<p style="color:#d00;">Valores Invalidos</p>'
    } else {
        var imc = peso / ((altura / 100) ** 2)
        var situacao, cor

        if (imc < 18.5) {
            situacao = "Magreza"
            cor = "#6CB4EE"
        } else if (imc <= 25) {
            situacao = "Normal"
            cor = "green"
        } else if (imc <= 30) {
            situacao = "Sobrepeso"
            cor = "#FEBE10"
        } else {
            situacao = "Obesidade"
            cor = "red"
        }

        fantoche.innerHTML =
            '<br><p style = \"padding:15px 0px;border:1px dashed #ddd;font-size:3em; text-align:center;\">' +
            nome +
            ' - <span style = \"color:' + cor +
            ';\">' +
            situacao.toUpperCase() + '</span></p>';

    }
}