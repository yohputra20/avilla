$(document).ready(function() {
	var scroll_start = 0;
	var startchange = $("#startchange");
	var offset = startchange.offset().top + 60;
	var type_halaman = $(".type_halaman").val();
	if (type_halaman == "is_detail") {
		$(".navbar").removeClass("nav-transparent");
	} else {
		if (startchange.length) {
			$(document).scroll(function() {
				scroll_start = $(this).scrollTop();
				if (scroll_start > offset) {
					$(".navbar").removeClass("nav-transparent");
					$(".navbar").addClass("ease-bg");
					$("#logo").attr("src", "img/logo.png");
					$("#logo-mobile").attr("src", "https://lh3.googleusercontent.com/-9gr-NYNyHrw/XiAr2ZrrWcI/AAAAAAAAAEI/1fcm2vywk3kvr7MdMAxB7jAuoG-zg4GqACK8BGAsYHg/s0/2020-01-16.png");
					$(".scroll-to-top").attr("style", "opacity:1;");
				} else {
					$(".navbar").addClass("nav-transparent");
					$("#logo").attr("src", "img/logo_white.png");

					$("#logo-mobile").attr("src", "https://lh3.googleusercontent.com/-i-SfVZ_5u_A/XiDu4vdy6oI/AAAAAAAABfE/8Y4cov3_sKEh0FmguWsWHzHpayt6kvD8gCK8BGAsYHg/s0/2020-01-16.png");
	
					$(".scroll-to-top").attr("style", "opacity:0;");
				}
			});
		}
	}

	$(".navbar-toggle").on("click", function() {
		$(".navbar").removeClass("nav-transparent");
		$("#logo").attr("src", "img/logo.png");
	});
});
