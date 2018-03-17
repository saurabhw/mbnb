/*MORE PHOTOS MODAL*/

function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

/*RESPONSE MODAL*/

function openResponseModal() {
  document.getElementById('ResponseModal').style.display = "block";
}

function closeResponseModal() {
  document.getElementById('ResponseModal').style.display = "none";
}



/*COMMENT MODAL*/

function openCommentsModal() {
  document.getElementById('CommentModal').style.display = "block";
}

function closeCommentModal() {
  document.getElementById('CommentModal').style.display = "none";
}


/*MORE REVIEW MODAL*/

function openMoreReviewsModal() {
  document.getElementById('MoreReviewModal').style.display = "block";
}

function closeMoreReviewsModal() {
  document.getElementById('MoreReviewModal').style.display = "none";
}

/*Closing the missonariesServedMapModal */

function closeMissonariesServedMapModal() {
  document.getElementById('missonariesServedMapModal').style.display = "none";
}



var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	event.stopPropagation();
  showSlides(slideIndex += n);
}

function currentSlide(n) {
	event.stopPropagation();
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}



var mq = window.matchMedia( "(min-width: 900px)" );

if (mq.matches) {

/* To fix the topbar */

var stickyTopbar = $('.topbar').offset().top;

$(window).scroll(function() {  
    if ($(window).scrollTop() > stickyTopbar) {
        $('.topbar').addClass('affix');
		/*$('.topbar2').addClass('affix');*/
    }
    else {
        $('.topbar').removeClass('affix');
		/*$('.topbar2').removeClass('affix');*/
    }  
});



/* To fix the left pannel*/


}


/* Increment guests */

function increment( who){
	if(who=="adults"){
		if(parseInt(document.getElementById('adults').innerText) < parseInt(document.getElementById('adultMax').innerText)){
			document.getElementById('adults').innerText =parseInt(document.getElementById('adults').innerText) +1;
		}
	}
	if(who=="childrens"){
		if(parseInt(document.getElementById('childrens').innerText) < parseInt(document.getElementById('childMax').innerText)){
			document.getElementById('childrens').innerText =parseInt(document.getElementById('childrens').innerText) +1;
		}
	}
	if(who=="infants"){
		if(parseInt(document.getElementById('infants').innerText) < parseInt(document.getElementById('infantMax').innerText)){
			document.getElementById('infants').innerText =parseInt(document.getElementById('infants').innerText) +1;
		}
	}
}

/* decrement guests */

function decrement( who){
	if(who=="adults"){
		if(parseInt(document.getElementById('adults').innerText) > 0){
			document.getElementById('adults').innerText =parseInt(document.getElementById('adults').innerText) -1;
		}
	}
	if(who=="childrens"){
		if(parseInt(document.getElementById('childrens').innerText) > 0){
			document.getElementById('childrens').innerText =parseInt(document.getElementById('childrens').innerText) -1;
		}
	}
	if(who=="infants"){
		if(parseInt(document.getElementById('infants').innerText) > 0){
			document.getElementById('infants').innerText =parseInt(document.getElementById('infants').innerText) -1;
		}
	}
}





/*To fillup the review stars*/
function fillStarsTill(starNo){
	clearAllStars();
	
	if(starNo == 1){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		document.getElementById("starRating").value = "1";
	}
	
	if(starNo == 2){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		document.getElementById("2").className = "glyphicon glyphicon-star";
		document.getElementById("2").style.color = "yellow";
		
		document.getElementById("starRating").value = "2";
	}
	
	if(starNo == 3){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		document.getElementById("2").className = "glyphicon glyphicon-star";
		document.getElementById("2").style.color = "yellow";
		
		document.getElementById("3").className = "glyphicon glyphicon-star";
		document.getElementById("3").style.color = "yellow";
		
		document.getElementById("starRating").value = "3";
	}
	
	if(starNo == 4){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		document.getElementById("2").className = "glyphicon glyphicon-star";
		document.getElementById("2").style.color = "yellow";
		
		document.getElementById("3").className = "glyphicon glyphicon-star";
		document.getElementById("3").style.color = "yellow";
		
		document.getElementById("4").className = "glyphicon glyphicon-star";
		document.getElementById("4").style.color = "yellow";
		
		document.getElementById("starRating").value = "4";
	}
	
	if(starNo == 5){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		document.getElementById("2").className = "glyphicon glyphicon-star";
		document.getElementById("2").style.color = "yellow";
		
		document.getElementById("3").className = "glyphicon glyphicon-star";
		document.getElementById("3").style.color = "yellow";
		
		document.getElementById("4").className = "glyphicon glyphicon-star";
		document.getElementById("4").style.color = "yellow";
		
		document.getElementById("5").className = "glyphicon glyphicon-star";
		document.getElementById("5").style.color = "yellow";
		
		document.getElementById("starRating").value = "5";
	}
}

/* Clearing all stars on mouse out */

function clearAllStars(){
	document.getElementById("1").className = "glyphicon glyphicon-star-empty";
	document.getElementById("2").className = "glyphicon glyphicon-star-empty";
	document.getElementById("3").className = "glyphicon glyphicon-star-empty";
	document.getElementById("4").className = "glyphicon glyphicon-star-empty";
	document.getElementById("5").className = "glyphicon glyphicon-star-empty";
	
	document.getElementById("1").style.color = "black";
	document.getElementById("2").style.color = "black";
	document.getElementById("3").style.color = "black";
	document.getElementById("4").style.color = "black";
	document.getElementById("5").style.color = "black";
	
}

 








function calcMissionaries(){
	var adult = document.getElementById('adults').innerText;
	var childrens = document.getElementById('childrens').innerText;
	var infants = document.getElementById('infants').innerText;
	document.getElementById('missionaryCount').innerText = adult +" Adult, " +childrens+ "Children, "+ infants+ " Infants";
}

$('.dropdown').on('hide.bs.dropdown', function () {
  calcMissionaries();
});


$(document).ready(function(){
	$("#checkIn").datepicker({
	 minDate: 0
	});
	
	$("#checkOut").datepicker({
	 minDate: 0
	});
	
});

/*jumbotron Image Load*/

function jumbotronImgLoad(){
	var path = document.getElementById('mainImg').innerText;
	document.getElementsByClassName('main-jumbotron')[0].style.background = "url('"+path+"') center center no-repeat";
}