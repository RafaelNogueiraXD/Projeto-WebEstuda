$(document).ready(function(){
    verarquvios();
});
function verarquvios(){
    $.ajax({
        type:"POST",
        url: "../../../model/historico/historicoExe.php",
        data:{
            determinante: 1
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#conteudo").empty().html(e);
    });
        return false;
}


