//Script para capturar & adciona produto no carinho de compra

$(document).ready(function(){

    function listarCart(){
        $.ajax({
            method: "GET",
            url: "https://tlc.dev/cart"
        }).done(function(result){
            console.log(result);
        });
    }


    //listarCart();

    $("button.addCard").on("click", function(e){
        e.preventDefault();
        var idProduct = $(this).val();

        console.log("O id e: " + idProduct);
        //fazendo uma requisicao ajax para adcionar produro no carinho de compra
        $.ajax({
            method: "GET",
            url: "https://tlc.dev/addCart/"+idProduct,
        }).done(function(result){
            //listarCart();
        });
    });
});