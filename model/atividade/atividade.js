
function mostraAtividadeX(id1){
    $.ajax({
        type:"POST",
        url: "../../../model/atividade/atividadeExe.php",
        data:{
            determinante: 1,
            id: id1
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#conteudoAtividade").empty().html(e);
    });
        return false;
}
function mostraForumX(id1){
    $.ajax({
        type:"POST",
        url: "../../../model/atividade/atividadeExe.php",
        data:{
            determinante: 2,
            id: id1
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#conteudoForum").empty().html(e);
    });
        return false;
}