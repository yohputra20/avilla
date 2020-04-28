
$(document).ready(function() {
	if (window.location.hash != null && window.location.hash != ''){
      //   $('body').animate({
      //       scrollTop: $(window.location.hash).offset().top
      // }, 1500);
      console.log("scroll redirect" + $(window.location.hash).offset().top);
	  $("html, body")
				.stop()
				.animate(
					{
						scrollTop: $(window.location.hash).offset().top - 60
					},
					300
				);
    }

	// FUNCTION HANDLE SCROLL ANIMATE MENU
	$('.logo-front-mobile').css("display","none");
	if(window.matchMedia("(max-width: 850px)").matches){
        // The viewport is less than 768 pixels wide
		
		$('.back-front').css("display","inline");
    } 
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
					$("#logo-mobile").attr(
						"src",
						"https://lh3.googleusercontent.com/-9gr-NYNyHrw/XiAr2ZrrWcI/AAAAAAAAAEI/1fcm2vywk3kvr7MdMAxB7jAuoG-zg4GqACK8BGAsYHg/s0/2020-01-16.png"
					);
					$(".scroll-to-top").attr("style", "opacity:1;");
				} else {
					$(".navbar").addClass("nav-transparent");
					$("#logo").attr("src", "img/logo_white.png");

					$("#logo-mobile").attr(
						"src",
						"https://lh3.googleusercontent.com/-i-SfVZ_5u_A/XiDu4vdy6oI/AAAAAAAABfE/8Y4cov3_sKEh0FmguWsWHzHpayt6kvD8gCK8BGAsYHg/s0/2020-01-16.png"
					);

					$(".scroll-to-top").attr("style", "opacity:0;");
				}
			});
		}
	}

	$(".navbar-toggle").on("click", function() {
		$(".navbar").removeClass("nav-transparent");
		$("#logo").attr("src", "img/logo.png");
	});

	var lastId,
		topMenu = $(".scrollspy"),
		topMenuHeight = topMenu.outerHeight() + 25,
		menuItems = topMenu.find("a"),
		scrollItems = menuItems.map(function() {
			var item = $($(this).attr("href"));
			if (item.length) {
				return item;
			}
		});

	menuItems.click(function(e) {
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
		$("html, body")
			.stop()
			.animate(
				{
					scrollTop: offsetTop
				},
				300
			);
		e.preventDefault();
	});
	var scrollToElement = function(el, ms){
		var speed = (ms) ? ms : 600;
		$('html,body').animate({
			scrollTop: $(el).offset().top
		}, speed);
	}
	var topMenu_mobile = $(".scrollspy_mobile"),
		topMenuHeight_mobile = topMenu_mobile.outerHeight(),
		menuItems_mobile = topMenu_mobile.find("a");

	menuItems_mobile.click(function(e) {
		var href = $(this).attr("href");
			offsetTop =
				href === "#" ? 0 : $(href).offset().top - 60;
	   console.log("scroll offsetTop" + offsetTop);
		$("html, body")
			.stop()
			.animate(
				{
					scrollTop: offsetTop
				},
				300
			);
		e.preventDefault();
		//scrollToElement( href, 2000 );
	
	});

	$(window).scroll(function() {
		var sll= $(this).scrollTop();
	if(sll===0){
		$('.logo-front-mobile').css("display","none");
	}else{
		$('.logo-front-mobile').css("display","inline");
	}
	
		var fromTop = $(this).scrollTop() + topMenuHeight;
		
		var cur = scrollItems.map(function() {
			if ($(this).offset().top < fromTop) return this;
		});
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
			lastId = id;
			menuItems
				.parent()
				.removeClass("active")
				.end()
				.filter("[href='#" + id + "']")
				.parent()
				.addClass("active");
		}
	});

	$(".scroll-to-top").click(function() {
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
		$("html, body")
			.stop()
			.animate(
				{
					scrollTop: offsetTop
				},
				400
			);
	});

	// FUNCTION HANDLE LETS TALK CONTACT US
	$(".kirim").on("click", function() {
		var name = $(".name").val();
		var email = $(".email").val();
		var subject = $(".subject").val();
		var message = $(".message").val();

		if (name == "" && email == "" && subject == "" && message == "") {
			$(".name").css("box-shadow", "none");
			$(".name").css("border-color", "#d50000");
			$(".msgname").html("Please insert your name");
			$(".msgname").show();

			$(".email").css("box-shadow", "none");
			$(".email").css("border-color", "#d50000");
			$(".msgemail").html("Please insert your email");
			$(".msgemail").show();

			$(".subject").css("box-shadow", "none");
			$(".subject").css("border-color", "#d50000");
			$(".msgsubject").html("Please insert your subject");
			$(".msgsubject").show();

			$(".message").css("box-shadow", "none");
			$(".message").css("border-color", "#d50000");
			$(".msgmessage").html("Please insert your message");
			$(".msgmessage").show();
		} else if (name == "") {
			$(".name").css("box-shadow", "none");
			$(".name").css("border-color", "#d50000");
			$(".msgname").html("Please insert your name");
			$(".msgname").show();
		} else if (email == "") {
			$(".email").css("box-shadow", "none");
			$(".email").css("border-color", "#d50000");
			$(".msgemail").html("Please insert your email");
			$(".msgemail").show();

			$(".msgname").hide();
		} else if (!validateEmail(email)) {
			$(".email").css("box-shadow", "none");
			$(".email").css("border-color", "#d50000");
			$(".msgemail").html("Please insert your email correctly");
			$(".msgemail").show();

			$(".msgname").hide();
		} else if (subject == "") {
			$(".subject").css("box-shadow", "none");
			$(".subject").css("border-color", "#d50000");
			$(".msgsubject").html("Please insert your subject");
			$(".msgsubject").show();

			$(".msgname").hide();
			$(".msgemail").hide();
		} else if (message == "") {
			$(".message").css("box-shadow", "none");
			$(".message").css("border-color", "#d50000");
			$(".msgmessage").html("Please insert your message");
			$(".msgmessage").show();

			$(".msgname").hide();
			$(".msgemail").hide();
			$(".msgsubject").hide();
		} else {
			$(".msgmessage").hide();
			$(".msgname").hide();
			$(".msgemail").hide();
			$(".msgsubject").hide();
			console.log("submit");
			$.ajax({
				type: "post",
				url: base_url + "home/kirim_kontak_kami",
				data:
					"name=" +
					name +
					"&email=" +
					email +
					"&subject=" +
					subject +
					"&message=" +
					message,
				beforeSend: function() {
					$("#wrapper_loading").css("visibility", "visible");
				},
				success: function(msg) {
					$("#wrapper_loading").css("visibility", "hidden");
					$(".modal-window").css("display", "block");
					//$('#modalsucceskonsulgratis').modal('show');
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.status + ": " + xhr.statusText;
					$("#wrapper_loading").css("visibility", "hidden");
					return false;
				}
			});
		}
	});

	$(".btn_ok_modal").on("click", function() {
		//alert("qqqq");
		$(".modal-window").css("display", "none");
		window.location = base_url;
	});
});

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}
function goBack() {
	window.history.back();
  }
function redirectbaseurll() {
	window.location.assign(base_url);
}

// FUNCTION HANDLE ON SWIPE MENU DRAWER
function showmenu() {
	$("#menu").css("transform", "none");
}

function hidemenu(type) {
	if (type != "") {
		for (var i = 1; i <= 6; i++) {
			console.log("urutan " + i);
			$("." + i).css("background", "#18011B");
		}
		$("." + type).css("background", "#68551B");
	}
	$("#menu").css("transform", "translate(-100%, 0)");
}
