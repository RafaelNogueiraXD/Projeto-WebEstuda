$(document).ready(function(){
    $(".conteudo").hide();
    $(".conteudo").fadeToggle(1000);
    $("#campos").hide();
    $('.your-class').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });

});
//$(".iconehide").fadeToggle();
$("#pesquisar2").click(function(){
    $("#campos").show();    
    $("#pesquisar2").hide();
})

function titulo(head){
    $("#title").html(head);
}
//Modal
    function Modal(){
        $("#abreModal").click(() => {
            abreModal();
        });
        $("#fechaModal").click(() => {
            $(".conteudoModal").animate({
                marginTop: "-10%"
            },700,function(){})
            setTimeout(() => {
                $(".modal").css("display","none");
            }, 500);
        });
        $("#abreModal2").click(() => {
            abreModal();
        });
    }

function abreModal(){
    setTimeout(() => {
        $(".modal").css("display","block");
        $(".conteudoModal").animate({
            marginTop: "+10%"
        },700,function(){})
    }, 100);
}


