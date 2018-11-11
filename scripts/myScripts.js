



function MenuBackgrounds(id){
	var menuLinks = ['#about','#workHistory','#qualifications','#projects','#contact'];
	for(var i in menuLinks){
		if(menuLinks[i]!=id){
			$(menuLinks[i]).css({"background-color": "#1e1e82", "border-radius": "10px"});
		}
		else{
			$(id).css({"background-color": "#0762f1", "border-radius": "10px"});
		}
	}


}


function scrollToDiv(segment, id){
	  $('html, body').animate({
		        scrollTop: $(segment).offset().top
		 }, 1000);
		MenuBackgrounds(id);
}


function validateMyForm(){
	$('#submitError').text("");

	if($.trim($('#name').val()) == ''||$.trim($('#subject').val()) == ''||$.trim($('#email').val()) == ''||$.trim($('#message').val()) == ''){
		
		//event.preventDefault();
		$('#submitError').text("The form contains empty values");
		return false;
		
	}
	else{
		return true;
	}

}
		
$(document).ready(function() {

		$('html, body').animate({
		       scrollTop: $('#start').offset().top
		 });
		MenuBackgrounds("#about");
		$("#welcome").animate({'opacity':1},1500);


});


