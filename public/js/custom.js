
<!-- Mobile Menu -->				
$(document).ready(function() {
"use strict";
$("#menu").mmenu({
"classes": "mm-slide",
"offCanvas": {
"position": "right"
},
"footer": {
"add": true,
"title": "Copyrights 2016 Pearl. all rights reserved."
},

"header": {
"title": "Pearl Food",
"add": true,
"update": true
},

});
});



<!-- Sticky Header -->

<!-- Header One -->
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});


<!-- Header Two -->
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.header-two').addClass("sticky");
    }
    else{
        $('.header-two').removeClass("sticky");
    }
});






<!-- Smooth Scrol -->	 
$(function(){

var $window = $(window);		//Window object

var scrollTime = 0.6;			//Scroll time
var scrollDistance = 355;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

$window.on("mousewheel DOMMouseScroll", function(event){

var delta = event.originalEvent.wheelDelta/125 || -event.originalEvent.detail/3;
var scrollTop = $window.scrollTop();
var finalScroll = scrollTop - parseInt(delta*scrollDistance);

TweenMax.to($window, scrollTime, {
scrollTo : { y: finalScroll, autoKill:true },
ease: Power1.easeOut,	
autoKill: true,
overwrite: 5							
});

});

});





<!-- All Carousel -->
<!-- Home News-Posts Carousel -->
$("#owl-demo").owlCarousel({
items :3,
lazyLoad : true,
navigation : true
});



<!-- Pearl Tour -->
$(document).ready(function() {
 
  $("#tour").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});





<!-- About Hotel -->
$(document).ready(function() {
 
  $("#hotel-view").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});







<!-- Welcome Text -->

$("#special-services").owlCarousel({
items :2,
lazyLoad : true,
navigation : true
});








//PreLoader
jQuery(window).load(function() { // makes sure the whole site is loaded
jQuery('#status').fadeOut(); // will first fade out the loading animation
jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
jQuery('body').delay(350).css({'overflow':'visible'});
})







jQuery(document).ready(function($){
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
offset_opacity = 1200,
//duration of the top scrolling animation (in ms)
scroll_top_duration = 1400,
//grab the "back to top" link
$back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function(){
( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
if( $(this).scrollTop() > offset_opacity ) { 
$back_to_top.addClass('cd-fade-out');
}
});






//smooth scroll to top
$back_to_top.on('click', function(event){
event.preventDefault();
$('body,html').animate({
scrollTop: 0 ,
}, scroll_top_duration
);
});

});



//smooth scroll
$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});








<!-- Shop Cart Bag -->
//Accordian Action
var action = 'click';
var speed = "500";


//Document.Ready
$(document).ready(function(){
  //Question handler
$('li.close-bag').on(action, function(){
  //gets next element
  //opens .a of selected question
$(this).next().slideToggle(0)
    //selects all other answers and slides up any open answer
    .siblings('li.open-bag').slideUp();
  
  //Grab img from clicked question
var img = $(this).children('img');
  //Remove Rotate class from all images except the active
  $('img').not(img).removeClass('rotate');
  //toggle rotate class
  img.toggleClass('rotate');

});//End on click

});//End Ready









<!-- Upcoming Event Coundown -->
$('#example').countdown({
			date: '5/29/2019 23:59:59',
			offset: -8,
			day: 'Day',
			days: 'Days'
		}, function () {

});








<!-- Home News-Posts Carousel -->
$("#owl-demo").owlCarousel({
items :3,
lazyLoad : true,
navigation : true
});



<!-- Testimonials Carousel -->
$("#owl-demo2").owlCarousel({
autoPlay : 111110,
stopOnHover : true,
navigation : true,
paginationSpeed : 1000,
goToFirstSpeed : 2000,
singleItem : true,
autoHeight : true,

});


<!-- Blog images slide Carousel -->
$("#blog-slide").owlCarousel({

navigation : true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true

// "singleItem:true" is a shortcut for:
// items : 1, 
// itemsDesktop : false,
// itemsDesktopSmall : false,
// itemsTablet: false,
// itemsMobile : false

});






















<!-- Form Validator -->


// JavaScript Document

function checkcontact(input)
{
	var pattern1=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	if(pattern1.test(input))
	{
		return true;
	}
	else{
		return false;
	}
}


	function validateContact(){
	var errors= "";
	var name  = document.getElementById("name");
	var email_address = document.getElementById("email_address");
	var msg = document.getElementById("msg");
	
	 if(name.value == "" || name.value == "Your Name"){
				name.className = "error";
				return false; 
		}
	 else if(email_address.value == "" || email_address.value == "E-mail Address"){
				email_address.className = "last error";
				return false; 
		}
		
	else if(checkcontact(email_address.value) == false){
				email_address.className = "last error";
				return false; 
	   }
	else if(msg.value == "" || msg.value == "Message"){
				msg.className = "error";
				return false; 
	   }
	
 

	        else{
				//document.coaches_form.submit();
				
				$.ajax({
				type: "POST",
				url: "process.php",
				data: $("#contact_form").serialize(),
				success: function(msg)
			   {
				 // alert(msg);
				   
				document.getElementById("name").value = "Your Name"; 
				document.getElementById("name").className = ""; 
				document.getElementById("email_address").value = "E-mail Address"; 
				document.getElementById("email_address").className = "last"; 
				document.getElementById("msg").value = "Message"; 
				document.getElementById("msg").className = ""; 
				$("#success_msg").fadeIn(2000);
				$("#contact_form").fadeOut(2000);
			   }
			   
			
			});
			
				setTimeout("$('#success_msg').fadeOut();", 6000);
				setTimeout("$('#contact_form').fadeIn();", 6000);
		}
	}
	

	function remove_contact_errors()
	{
	var name = document.getElementById("name");
	var email_address = document.getElementById("email_address");
	var msg = document.getElementById("msg");
			 if(name.value!="" && name.value!="Your Name")
			 {
				name.className = "";
				
			 }   if(email_address.value != "" && email_address.value != "E-mail Address"){
				email_address.className = "";
				
			} if(checkcontact(email_address.value) != true){
				email_address.className = "";
					
			} if(msg.value != "" && msg.value != "Message"){
					msg.className = "";
					
			} 
	}
	
	function validateNewsletter(){
	var errors= "";
	var nws_email_address = document.getElementById("nws_email_address");
	
	 if(nws_email_address.value == "" || nws_email_address.value == "Enter your e-mail address"){
				nws_email_address.className = "error";
				return false; 
		}
		
	else if(checkcontact(nws_email_address.value) == false){
				nws_email_address.className = "error";
				return false; 
	   }
	
 

	        else{
				//document.coaches_form.submit();
				
				$.ajax({
				type: "POST",
				url: "process.php",
				data: $("#newsletter_form").serialize(),
				success: function(msg)
			   {
				 // alert(msg);
				   
				document.getElementById("nws_email_address").value = "Enter your e-mail address"; 
				document.getElementById("nws_email_address").className = ""; 
				$("#nws_success_msg").fadeIn(2000);
				$("#newsletter_form").fadeOut(2000);
			   }
			   
			
			});
			
				setTimeout("$('#nws_success_msg').fadeOut();", 6000);
				setTimeout("$('#newsletter_form').fadeIn();", 6000);
		}
	}
		function remove_newsletter_errors()
	{
	var nws_email_address= document.getElementById("nws_email_address");
			  if(nws_email_address.value != "" && nws_email_address.value != "Enter your e-mail address"){
				nws_email_address.className = "";
				
			} if(checkcontact(nws_email_address.value) != true){
				nws_email_address.className = "";
			}
					
	}

	
	
	
	
	
