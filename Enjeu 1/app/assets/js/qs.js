$(document).ready(function(){
	// Preload
	images = ['assets/css/flecheVerte.png', 'assets/css/flecheBleue.png'];
  	for(var i = 0; i<images.length; i++) {
    	$("<img>").attr("src", images[i]);
	}	
	
	// Flèche
	$('ul#etapes li').mouseover(function() {
		$(this).addClass("hover");
		var itemID = $(this).attr("id").charAt(5);
		$('ul#etapes').addClass("hover" + itemID);
	}).mouseout(function() {
		$('ul#etapes li').removeClass("hover");
		$('ul#etapes').removeClass("hover1").removeClass("hover2").removeClass("hover3");
	}).click(function() {
		location.href = $(this).children("div").children("a").attr("href");
	});
	
	// Thèmes
	$("div#grosses-boites > div").click (function() {
		location.href = $(this).children("a").attr("href");
	});
	
	// Coins ronds
	$(".coinsronds").append($(
		'<div class="c1"></div><div class="c2"></div><div class="c3"></div><div class="c4"></div>'
	)).mouseover(function() {
		$(this).addClass("hover");
	}).mouseout(function() {
		$(this).removeClass("hover");
	}).click(function() {
		if ($(this).children("a").length > 0) {
			location.href = $(this).children("a").attr("href");
		}
	});
	
	// Formulaire
	/*$("form ul.themes li").click(function() {
		$(this).children("input").click();
	});
	 $("form div#perspectives").hide();
	$("input[name=type]").click(function() {
		if ($("input[name=type]").attr("checked") == false) {
			$("perspectives").hide();
		} else {
			$("perspectives").show();
		}
	})*/
	$('#form_perspective').click(function() {
		var selectedID = this.value;
		$('ul.perspectives-formulaire li').hide(); // Hide everything
		$('li#perspective-' + selectedID).show(); // Show selected perspective
	});
	
	$('#form_typeModification').click(function() {
		if (this.value == 4) {
			$('ul.perspectives-formulaire li').hide(); // Hide perspective
			$('#selecteur-perspective').hide(); // Hide selector box
		} else {
			$('#form_perspective').click();
			$('#selecteur-perspective').show();
		}
	});
	
	// Initialize perspective display
	$('#form_perspective').click();
	$('#form_typeModification').click();

	// Perspectives
	$('ul.perspectives li.parent > div.texte').click(function() {
		$(this).find('ul').toggle();
	});
	
	// FCKEditor
	if ($('div.wysiwyg textarea').length > 0) {
		$('div.wysiwyg textarea').attr('id', 'wysiwyg');
		
		// Find base path for FCKEditor
		$('script').each(function(index) {
			var string = $(this).attr('src');
			var index;
			if (index = string.indexOf('assets/js/')) {
				basePath = string.substring(0, index);
				return false;
			}
		});
		
		var oFCKeditor = new FCKeditor('wysiwyg');
		oFCKeditor.Width = '700';
		oFCKeditor.Height = '512';
		oFCKeditor.BasePath = basePath + "assets/js/fckeditor/";
		oFCKeditor.ReplaceTextarea() ;
	}	
	
	// Lexique
	$("div#lexique p").hide();
	$("span.definir").click(function() {
		var classes = $(this).attr("class");
		var definitionID = classes.substring(classes.indexOf(" ") + 1);
		var offset = $(this).offset();
		$("p#" + definitionID).fadeIn("normal").css('top', offset.top).css('position', 'absolute');
	});
	$("body").click(function() {
		$("div#lexique p:not(:animated)").fadeOut("normal");
	})
});
