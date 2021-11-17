$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $('#login').click(function(){
        $('#login-form').addClass('popup');
    });
    
    $('.login-form form .fa-times').click(function(){
        $('#login-form').removeClass('popup');
    });


    



    $(window).on('load scroll',function(){

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        $('#login-form').removeClass('popup');


        $('section').each(function(){

            let top = $(window).scrollTop();
            let height = $(this).height();
            let id = $(this).attr('id');
            let offset = $(this).offset().top - 200;

            if(top > offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }


        });

    });

}); 


function checkPassword(x)
{
    let password1=$('#pass1').val();
    let password2=$('#pass2').val();
    if (password1 != password2)
    {
        alert("Password Mismatch");
        $('#pass2').val('');

    }    
}
