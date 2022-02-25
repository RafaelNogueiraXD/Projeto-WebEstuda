
function mostraRespostaX(idforum){
    $.ajax({
        type:"GET",
        url: "../../../model/resposta/respostaExe.php",
        data:{
            determinante: 1,
            id: idforum
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#conteudoResposta").empty().html(e);
    });
        return false;
}

function deletaResposta(idforum,idResposta){
    $.ajax({
        type:"GET",
        url: "../../../model/resposta/respostaExe.php",
        data:{
            determinante: 3,
            id: idResposta
        }
    }).done(function(e){
        //$(".mostra").append(e);
        mostraRespostaX(idforum);
    });
        return false;
}



// function cadastraResposta(idforum,idUsu){
//     $.ajax({
//         type:"POST",
//         url: "../../../model/resposta/respostaExe.php",
//         data:{
//             resposta: $('#resposta').val(),
//             determinante: 2,
//             idUsu: idUsu,
//             idforum: idforum
//         }
//     }).done(function(e){

//     }).then(function(){
//         mostraRespostaX(idforum);  
//     });
//         return false;
// }