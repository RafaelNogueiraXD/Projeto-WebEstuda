function mostraAlunosEnvio(idAtividade){
    console.log("dsadsa",idAtividade);
    $.ajax({
        type:"GET",
        url: "../../../model/envioAtividade/envioAtividadeExe.php",
        data:{
            determinante: 1,
            id: idAtividade
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#mostraEnvios").html(e);
        // console.log(e);
    });
        return false;
}
