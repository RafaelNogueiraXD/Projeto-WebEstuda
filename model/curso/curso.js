$(document).ready(function(){
    verarquvios();
});
function verarquvios(){
    $.ajax({
        type:"POST",
        url: "../../../model/curso/cursoExe.php",
        data:{
            determinante: 1
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#conteudo").empty().html(e);
    });
        return false;
}
$("form#add").submit(function(){
    $.ajax({
        type:"POST",
        url: "../../../model/curso/cursoExe.php",
        data:{
            nome: $('input#nomeC').val(),
            sigla: $('input#sigla').val(),
            determinante: 2
        }
    }).done(function(e){
        //$(".mostra").append(e);  
        // $("#msg").empty().html(e);
    }).then(function(){
        verarquvios();  
    });
        return false;
});

function Deletar(id){
    $.ajax({
        type:"POST",
        url:"../../../model/curso/cursoExe.php",
        data:{
            determinante:3,
            id: id
        }
    }).then(function(){
        verarquvios();  
    })
}

