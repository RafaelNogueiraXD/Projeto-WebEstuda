$(document).ready(function(){
    verarquvios();
    // window.location.href = "../Plataforma/envio.html";
$("#msg").hide();

});
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