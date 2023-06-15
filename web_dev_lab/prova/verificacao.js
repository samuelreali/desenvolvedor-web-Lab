function enviarNotas(){
    // Verificar se todos campos foram preenchidos
    str_erros = ""

    if(document.getElementById("nota1").value.length < 1){
        str_erros += "O campo 'Nota 1' é obrigatório! <br>";
    }
    if(document.getElementById("nota2").value.length < 1){
        str_erros += "O campo 'Nota 2' é obrigatório! <br>";
    } 
    if(document.getElementById("nota3").value.length < 1){
        str_erros += "O campo 'Nota 3' é obrigatório! <br>";
    } 

    if(str_erros != "") {
        $('#div_sucesso').css('display', 'none');
        $('#div_erro').html("<b>Erro ao calcular média</b><br/>" + str_erros);
        $('#div_erro').css('display', 'block');
      } else {
        $('#div_erro').css('display', 'none');

        //Transformar as strings 'notas' em float
        nota1 = document.getElementById("nota1").value
        nota1_float = parseFloat(nota1)

        nota2 = document.getElementById("nota2").value
        nota2_float = parseFloat(nota2)

        nota3 = document.getElementById("nota3").value
        nota3_float = parseFloat(nota3)

        // Calculo da primeira média (sem recuperação)
        media = ((nota1_float + nota2_float + nota3_float) / 3)
        media_float = parseFloat(media.toFixed(2))

        function sortfunction(a, b){
            return (a - b) // Faz com que o array seja ordenado numericamente e de ordem crescente
          }
        
        // Aprovar aluno
        if(media_float >= 7){
            $('#div_sucesso').html("<b>O aluno foi APROVADO com média "+media_float+"</b><br/>");
            $('#div_sucesso').css('display', 'block');
            $('#div_erro').css('display', 'none');
        } else {
            // Informar a nota de recuperação
            while(!recup){
                var recup = prompt('O aluno está em RECUPERAÇÃO.\nDigite a nota de recuperação:');
            }
            // Ordenar as notas e substituir a menor pela recuperação
            let notas = [nota1_float, nota2_float, nota3_float]
            notas.sort(sortfunction)
            notas[0] = recup
            // Calculo da última média (com recuperação)
            mediaRecup = ((parseFloat(notas[0]) + parseFloat(notas[1]) + parseFloat(notas[2])) / 3)
            if(mediaRecup >= 7){ // Aprovado
                $('#div_sucesso').html("<b>O aluno foi APROVADO com média "+mediaRecup.toFixed(2)+"</b><br/>");
                $('#div_sucesso').css('display', 'block');
                $('#div_erro').css('display', 'none');
            } else { // Rejeitado
                $('#div_erro').html("<b>O aluno foi REPROVADO com média "+mediaRecup.toFixed(2)+"</b>");
                $('#div_erro').css('display', 'block');
                $('#div_sucesso').css('display', 'none');
            }
        }
}
}
