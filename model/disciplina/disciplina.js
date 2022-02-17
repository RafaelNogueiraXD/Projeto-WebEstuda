// console.log(idProfessor);
function funcaoAAA(variavel){
}
function menuProfessor(idprofessor){
    console.log("dsadsa",idprofessor);
    $.ajax({
        type:"POST",
        url: "../../../model/disciplina/disciplinaExe.php",
        data:{
            determinante: 5,
            idProfessor: idprofessor
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#menuJS").html(e);
        // console.log(e);
    });
        return false;
}

$(document).ready(function(){
    verarquvios();
    mostraCursos();
});
function mostraCursos(){
    $.ajax({
        type:"POST",
        url:"../../../model/disciplina/disciplinaExe.php",
        data:{
            determinante: 4
        }
    }).done(function(e){
        $("#tentativaCurso").empty().html(e);
    });
     return false;
}
function verarquvios(){
    $.ajax({
        type:"POST",
        url: "../../../model/disciplina/disciplinaExe.php",
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
        url: "../../../model/disciplina/disciplinaExe.php",
        data:{
            nome: $('input#nomeC').val(),
            idCurso: $('#curso').val(),
            sigla: $('input#sigla').val(),
            idProfessor: $('#professor').val(),
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
        url:"../../../model/disciplina/disciplinaExe.php",
        data:{
            determinante:3,
            id: id
        }
    }).then(function(){
        verarquvios();  
    })
}

