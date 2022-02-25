$(document).ready(function(){
    verarquvios();
    mostraCursos();
    // window.location.href = "../Plataforma/envio.html";
$("#msg").hide();

});
function mostraCursos(){
    $.ajax({
        type:"POST",
        url:"../../../model/disciplina/disciplinaExe.php",
        data:{
            determinante: 6
        }
    }).done(function(e){
        $("#tentativaCurso").empty().html(e);
    });
     return false;
}
function verarquvios(){
    $.ajax({
        type:"POST",
        url: "../../../model/usuario/usuarioExe.php",
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
        url: "../../../model/usuario/usuarioExe.php",
        data:{
            nome: $('input#nomeC').val(),
            localizacao: $('input#localizacao').val(),
            cargo: $('#selectCargos').val(),
            email: $('input#emaila').val(),
            senha: $('input#senha').val(),
            matricula: $('#matricula1').val(),
            curso: $('#curso').val(),
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
        url:"../../../model/usuario/usuarioExe.php",
        data:{
            determinante:3,
            id: id
        }
    }).then(function(){
        verarquvios();  
    })
}
function perfil(idu){
    $.ajax({
        type:"POST",
        url: "../../../model/usuario/usuarioExe.php",
        data:{
            determinante: 6,
            idUsu: idu
        }
    }).done(function(e){
        //$(".mostra").append(e);
        $("#perfilUsu").empty().html(e);
    });
        return false;
}
// $("form#login").submit(function(){
//     $.ajax({
//         type:"POST",
//         url: "../../../model/usuario/usuarioExe.php",
//         data:{
//             email: $('input#emaila').val(),
//             senha: $('input#senha').val(),
//             determinante: 5
//         }
//     }).done(function(e){
//             $("#msg").fadeIn();
//             $("#msg").empty().html(e);

//     }).then(function(){
//         // verarquvios();
//     });
//         return false;
// });
// function escondeMsg(){
//     $("msg").hide();
// }