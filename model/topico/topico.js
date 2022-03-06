
function verlinks(idDisicplina){
    $.ajax({
        type:"POST",
        url: "../../../model/topico/topicoExe.php",
        data:{
            determinante: 4,
            disicplina:idDisicplina
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $(".printLinks").empty().html(e);
    });
        return false;
}
function mostraTopicosSelect(idDisicplina){
    $.ajax({
        type:"POST",
        url: "../../../model/topico/topicoExe.php",
        data:{
            determinante: 6,
            disicplina: idDisicplina
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#mostraTopicosSelect").empty().html(e);
    });
        return false;
}
$("form#addtopicos").submit(function(){
   
});

function versections(idDisicplina){
    $.ajax({
        type:"POST",
        url: "../../../model/topico/topicoExe.php",
        data:{
            determinante: 1,
            disicplina:idDisicplina
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#content").empty().html(e);
    });
        return false;
}
function cadastraTopico(){
    $.ajax({
        type:"POST",
        url: "../../../model/topico/topicoExe.php",
        data:{
            titulo: $('input#titulo').val(),
            visualiza: $('#visu').val(),
            subtitulo: $('#subtitulo').val(),
            idDisciplina: $('input#idDisciplina').val(),
            determinante: 2
        }
    }).done(function(e){
    }).then(function(){
        verlinks();  
    });
        return false;
}


