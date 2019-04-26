
var midsToMenus = [
  {mid:'#aboutMid', menu:'#about'},
  {mid:'#jobsMid', menu:'#workHistory'},
  {mid:'#bscMid', menu:'#qualifications'},
  {mid:'#projMid', menu:'#projects'},
  {mid:'#contactFormMid', menu:'#contact'}];

var lastScrolled = midsToMenus[0].mid;

var autoScrolling = false;



function MenuBackgrounds(menuid){

	for(var i in midsToMenus){
		if(midsToMenus[i].menu != menuid){
			$(midsToMenus[i].menu).css({"background-color": "#1e1e82", "border-radius": "10px"});
		}
		else{
			$(menuid).css({"background-color": "#0762f1", "border-radius": "10px"});
		}
	}

}


function scrollToDiv(segment, id){

		autoScrolling = true;
		//console.log("Started scrolling");
	  $('html, body').animate({
		        scrollTop: $(segment).offset().top
		 }, 1000);

	  setTimeout(function(){
	  	MenuBackgrounds(id);
	  	autoScrolling = false;
	  	//console.log("Stopped scrolling");
		}, 1100);
		
		
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
	


function visible(midToMenu){

	$(midToMenu.mid).on('inview', function(event, visible) {
	      if (visible && lastScrolled != midToMenu.mid) {
	       	MenuBackgrounds(midToMenu.menu);
	       	lastScrolled = midToMenu.mid;
	      }
	 });

}



$(document).ready(function() {

		$('html, body').animate({
		       scrollTop: $('#start').offset().top
		 });
		MenuBackgrounds(midsToMenus[0].menu);
		$("#welcome").animate({'opacity':1},1500);


});



$(window).on('scroll',function(){ 

		if(!autoScrolling){
		 	//console.log("triggering");
			   for(var i in midsToMenus){
					visible(midsToMenus[i]);
				}
				
		}
});







