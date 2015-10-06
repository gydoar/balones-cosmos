$(document).ready(function(){

	var item_ball = ""; 

	$(".item-ball").removeClass("hide");
	ajustarEstilos($("#tab-items .item-ball .img-cover img"), 1);
	ajustarEstilos($("#tab-items2 .item-ball2 .img-cover img"), 2);
	ajustarEstilos($("#tab-items3 .item-ball3 .img-cover img"), 3);

	$(window).resize(function () { 

		clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function()
        {
			ajustarEstilos($("#tab-items .item-ball .img-cover img"), 1);
			ajustarEstilos($("#tab-items2 .item-ball2 .img-cover img"), 2);
			ajustarEstilos($("#tab-items3 .item-ball3 .img-cover img"), 3);
        }, 50);
	});

	$(".move-up").on("click", function(event){
		event.preventDefault();
		
		$('html,body').animate({
		    scrollTop: $(".header-top").offset().top
		}, 3000);
	});

	$("#modalCot").on("click", function(){
		$(".bg").hide();
	});

	$("#form-cotizacion").on("submit", function(event){
		event.preventDefault();

		$(".bg").hide();
		$(".bg-warning").show();
		$.ajax({

			url: 'cotizar.php', 
            type:'POST', 
            data: $(this).serialize(),
            success: function(data){
                                
                $(".bg").hide();
                if (data.trim() == "yes") {

                	$(".bg-success").show();
	                $("#form-cotizacion input").val("");
                }else{
                	$(".bg-danger").html(data.trim()).show();
                }
            }
		});

		setTimeout(function(){ $('.bg').hide(); }, 10000);
	});

	/*$(".icono-lateral").on("click", function(event){
		event.preventDefault();

		$('#modalcontact').modal('toggle');
	});*/

	$("#form-modal-contact").on("submit", function(event){
		event.preventDefault();

		$(".bg").hide();
		$(".bg-warning").show();
		$.ajax({
			url: 'contacto-modal.php', 
            type:'POST', 
            data: $(this).serialize(),
            success: function(data){
                                
                $(".bg").hide();
                if (data.trim() == "yes") {

                	$(".bg-success").show();
	                $("#form-modal-contact input").val("");
                }else{
                	$(".bg-danger").html(data.trim()).show();
                }
            }
		});

		setTimeout(function(){ $('.bg').hide(); }, 10000);
	});

	function tipoPantalla(){

		var size = $(window).width();

		if (size < 768){return "xs";}
		else if (size >= 768 && size < 992) {return "sm";}
		else if (size >= 992 && size < 1200) {return "md";}
		else if (size >= 1200) {return "lg";}
	}

	function ajustarEstilos(elemento, tipo){

		var cont = elemento.length;
		var size_window = tipoPantalla();					
		 
		switch(size_window){
			case 'xs':
				ajustarXS(elemento, cont);
				break;
			case 'sm':
				ajustarSM(elemento, cont);
				break;
			default:
				ajustarMDLG(elemento, cont, tipo);
				break;						
		}

	}

	function ajustarXS(elemento, cont){

		elemento.each(function(i, value){
			
			if (i == 0) {

				if (!$(this).hasClass("top-left")) 
					{$(this).addClass("top-left");}

				if (!$(this).hasClass("top-right")) 
					{$(this).addClass("top-right");}

				if ($(this).hasClass("bottom-left")) 
					{$(this).removeClass("bottom-left");}

				if ($(this).hasClass("bottom-right")) 
					{$(this).removeClass("bottom-right");}

				if (i == cont-1) {
					
					if (!$(this).hasClass("bottom-left")) 
						{$(this).addClass("bottom-left");}

					if (!$(this).hasClass("bottom-right")) 
						{$(this).addClass("bottom-right");}
				}

			}else if (i == cont-1 && i != 0) {
				
				if ($(this).hasClass("top-left")) 
					{$(this).removeClass("top-left");}

				if ($(this).hasClass("top-right")) 
					{$(this).removeClass("top-right");}

				if (!$(this).hasClass("bottom-left")) 
					{$(this).addClass("bottom-left");}

				if (!$(this).hasClass("bottom-right")) 
					{$(this).addClass("bottom-right");}
			}else{
				if ($(this).hasClass("top-left")) 
					{$(this).removeClass("top-left");}

				if ($(this).hasClass("top-right")) 
					{$(this).removeClass("top-right");}

				if ($(this).hasClass("bottom-left")) 
					{$(this).removeClass("bottom-left");}

				if ($(this).hasClass("bottom-right")) 
					{$(this).removeClass("bottom-right");}
			}
		});
	}

	function ajustarSM(elemento, cont){

		if (cont <= 3) {

			elemento.each(function(i, value){
				
				if (i == 0) {
					
					if (!$(this).hasClass("top-left")) 
						{$(this).addClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if (!$(this).hasClass("bottom-left")) 
						{$(this).addClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}else if (i == cont-1) {
					
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if (!$(this).hasClass("top-right")) 
						{$(this).addClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if (!$(this).hasClass("bottom-right")) 
						{$(this).addClass("bottom-right");}
				}else{
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}
			});
		}else{
			elemento.each(function(i, value){

				if (i == 0) {
					
					if (!$(this).hasClass("top-left")) 
						{$(this).addClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}else if (i == 2){								
					
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if (!$(this).hasClass("top-right")) 
						{$(this).addClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}								
				}else if (i == cont-1) {
					
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if (!$(this).hasClass("bottom-right")) 
						{$(this).addClass("bottom-right");}
				}else if (i == cont-3) {
					
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if (!$(this).hasClass("bottom-left")) 
						{$(this).addClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}else{
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}
			});
		}

	}

	function ajustarMDLG(elemento, cont, tipo){

		if (cont <= 4) {
			
			elemento.each(function(i){
				
				if (i == 0) {
					if (!$(this).hasClass("top-left")) 
						{$(this).addClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if (!$(this).hasClass("bottom-left")) 
						{$(this).addClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
					
				}else if (i == cont-1) {
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if (!$(this).hasClass("top-right")) 
						{$(this).addClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if (!$(this).hasClass("bottom-right")) 
						{$(this).addClass("bottom-right");}								
				}else{
					if ($(this).hasClass("top-left")) 
						{$(this).removeClass("top-left");}

					if ($(this).hasClass("top-right")) 
						{$(this).removeClass("top-right");}

					if ($(this).hasClass("bottom-left")) 
						{$(this).removeClass("bottom-left");}

					if ($(this).hasClass("bottom-right")) 
						{$(this).removeClass("bottom-right");}
				}
			});
		}else{

			switch(tipo){

				case 1:
					elemento.each(function(i){

						if (i == 0) {
							if (!$(this).hasClass("top-left")) 
								{$(this).addClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}else if (i == 3){								
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if (!$(this).hasClass("top-right")) 
								{$(this).addClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}						
						}else if (i == cont-1) {
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if (!$(this).hasClass("bottom-right")) 
								{$(this).addClass("bottom-right");}
						}else if (i == cont-4) {
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if (!$(this).hasClass("bottom-left")) 
								{$(this).addClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}else{
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}
					});
					break;
				case 2:
					elemento.each(function(i){

						if (i == 0) {
							if (!$(this).hasClass("top-left")) 
								{$(this).addClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}else if (i == 3){								
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if (!$(this).hasClass("top-right")) 
								{$(this).addClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}						
						}else if (i == cont-2) {
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if (!$(this).hasClass("bottom-left")) 
								{$(this).addClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}else{
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}
					});
					break;
				case 3:
					elemento.each(function(i){

						if (i == 1){								
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if (!$(this).hasClass("top-right")) 
								{$(this).addClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}						
						}else if (i == cont-1) {
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if (!$(this).hasClass("bottom-right")) 
								{$(this).addClass("bottom-right");}
						}else if (i == cont-4) {
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if (!$(this).hasClass("bottom-left")) 
								{$(this).addClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}else{
							if ($(this).hasClass("top-left")) 
								{$(this).removeClass("top-left");}

							if ($(this).hasClass("top-right")) 
								{$(this).removeClass("top-right");}

							if ($(this).hasClass("bottom-left")) 
								{$(this).removeClass("bottom-left");}

							if ($(this).hasClass("bottom-right")) 
								{$(this).removeClass("bottom-right");}
						}
					});
					break;
			}

		}
	}


	function dump(obj) {

        var out = "";
        for (var i in obj) {
            out += i + ": " + obj[i] + "\n";
        }

        // or, if you wanted to avoid alerts...

        var pre = document.createElement("pre");
        pre.innerHTML = out;
        document.body.appendChild(pre)
    }
});