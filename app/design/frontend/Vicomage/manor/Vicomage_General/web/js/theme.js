/******************** Js Custom ***********************/
define([
    'jquery',
    'parallax'
], function ($) {
	
	//ScrollTop
	$('#backtotop').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 350) {
            $('#backtotop').show();
        }
        else{
            $('#backtotop').hide();
        }
        return false;
    });
	$(document).ready(function($) {
		$('#backtotop').click(function(e) {
			$('html,body').animate({scrollTop:0}, 500);
			return false;
			e.preventDefault();
		});
	});

	// ==== Display navigation header-type4,8 ====
    $(document).ready(function($) {
        $("#btn-bar").on('click', function (e) {
            e.preventDefault();
            $('.siderbarmenu').addClass('siderbarmenu-active');
            $('.bg-over-lay').addClass('show-over-lay');
            return false;
        });
        $(".siderbarmenu .btn-close").on('click', function (e) {
            e.preventDefault();
            $('.bg-over-lay').removeClass('show-over-lay');
            $('.siderbarmenu').removeClass('siderbarmenu-active');
            return false;
        });
        $('.bg-over-lay').on('click', function (e) {
            e.preventDefault();
            $('.bg-over-lay').removeClass('show-over-lay');
            $('.siderbarmenu').removeClass('siderbarmenu-active');
            $('#btn-baropen').find('i').toggleClass('fa-bars fa-close');
            return false;
        });
    });
//header 3 menu
    $(document).ready(function($) {
        $('#btn-baropen').click(function() {
            $(this).find('i').toggleClass('fa-bars fa-close');
            $('.siderbarmenu').toggleClass('siderbarmenu-active');
            $('.bg-over-lay').toggleClass('show-over-lay');
            return false;
        });
    });
	//parallax
    $(document).ready(function($) {
		if($('.bg-parallax').length >0){
			$('.bg-parallax').each(function(){
				$(this).parallax("50%",0.1);
			})  
		}	
	});
});

