$(document).ready(function() {

    $("#open-sidebar").click(function() {
        $("#sidebar-buttons").toggleClass("active");
    });

    $(".mural-avisos").slick({
        slidesToShow: 2,
        dots: false,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToScroll: 2
    });


    $('#callajax').click(function(){
        $.ajax({
            url: 'http://localhost/projetoIntegrador/ajax.php',
            type: 'POST',
            data: {
                controller: 'indexController',
                action: 'inserePessoa'
            },
            dataType: 'json',
            success: function(url) {
                console.log("sucesso")
            }
        });
    });

    $('#form-login').submit(function(e){
        e.preventDefault();
        let login = document.getElementById('login').value
        let senha = document.getElementById('senha').value
        console.log(login)
        $.ajax({
            url: 'http://localhost/projetoIntegrador/ajax.php',
            type: 'POST',
            data: {
                controller: 'loginController',
                action: 'login',
                login:login,
                senha:senha,
            },
            dataType: 'text',
            success: function(data) {
                if(data) {
                    window.location.reload();
                }
                else {
                    alert("Usuário ou senha inválidos!")
                }
            }
        });
    });
})