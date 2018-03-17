/*SHARABLE LINK MODAL*/

function openSharableModal() {
  document.getElementById('SharableModal').style.display = "block";
}

function closeSharableModal() {
  document.getElementById('SharableModal').style.display = "none";
}


/*MORE PHOTOS MODAL*/

function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

/*TITLE IMAGE MODAL*/

function openTitleImageModal() {
  document.getElementById('TitleImageModal').style.display = "block";
}

function closeTitleImageModal() {
  document.getElementById('TitleImageModal').style.display = "none";
}

/*FAMILY IMAGE MODAL*/

function openFamilyImageModal() {
  document.getElementById('FamilyImageModal').style.display = "block";
}

function closeFamilyImageModal() {
  document.getElementById('FamilyImageModal').style.display = "none";
}

/*FAMILY NAME MODAL*/

function openFamilyNameModal() {
  document.getElementById('FamilyNameModal').style.display = "block";
  document.getElementById('familyName').value = document.getElementById('familyName1').innerText;
}

function closeFamilyNameModal() {
  document.getElementById('FamilyNameModal').style.display = "none";
}

/*WELCOME MESSAGE MODAL*/

function openWelcomeMessageModal() {
  document.getElementById('WelcomeMessageModal').style.display = "block";
  document.getElementById('welcomeMessageModel').value = document.getElementById('welcomeMessage1').innerText;
}

function closeWelcomeMessageModal() {
  document.getElementById('WelcomeMessageModal').style.display = "none";
}

/*RATE MODAL*/

function openRateModal() {
  document.getElementById('rateModal').style.display = "block";
}

function closeRateModal() {
  document.getElementById('rateModal').style.display = "none";
}

/*RULES MODAL*/

function openRulesModal() {
  document.getElementById('RulesModal').style.display = "block";
}

function closeRulesModal() {
  document.getElementById('RulesModal').style.display = "none";
}

/*RESPONSE MODAL*/

function openResponseModal() {
  document.getElementById('ResponseModal').style.display = "block";
}

function closeResponseModal() {
  document.getElementById('ResponseModal').style.display = "none";
}



/*COMMENT MODAL*/

function openCommentsModal(reviewId) {
  document.getElementById("commentsDiv").innerHTML="";
  document.getElementById("reviewId").innerText = reviewId;
  document.getElementById('CommentModal').style.display = "block";    	
	
	

	var http = new XMLHttpRequest();
	var url = "getCommentsOnReview.php";	
	var params = "reviewId="+reviewId;

	//"imgId=Henry&lname=Ford"
	http.open("POST", url, true);

	//Send the proper header information along with the request
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	http.onreadystatechange = function() {//Call a function when the state changes.
		if(http.readyState == 4 && http.status == 200) {
			//alert(http.responseText);
			var resp = JSON.parse(http.responseText);
			
			
			for (i = 0; i < resp.length; i++) { 
				var respParsed = JSON.parse(resp[i]);	
				
				
				document.getElementById("commentsDiv").innerHTML += "<blockquote>"+respParsed.comment_text+"<footer><a href=profile.php?email="+respParsed.comment_by_email_encoded+">"+respParsed.comment_by+"</a> on "+respParsed.comment_date+"</footer></blockquote>";
			}
		}
	}
	http.send(params);

  
}

function closeCommentModal() {
  document.getElementById('CommentModal').style.display = "none";
}


/*MORE REVIEW MODAL*/

function openMoreReviewsModal() {
  document.getElementById('MoreReviewModal').style.display = "block";
  
  
  var http = new XMLHttpRequest();
	var url = "loadMoreComments.php";
	var propId = document.getElementById("propID").innerHTML;	
	
	var params = "propId="+propId;

	//"imgId=Henry&lname=Ford"
	http.open("POST", url, true);

	//Send the proper header information along with the request
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	http.onreadystatechange = function() {//Call a function when the state changes.
		if(http.readyState == 4 && http.status == 200) {
			//alert(http.responseText);
		var resp = JSON.parse(http.responseText);
			
			
			for (i = 0; i < resp.length; i++) { 
				var respParsed = JSON.parse(resp[i]);
				var stars="";
				
				for(var j = 0; j<respParsed.rating_Stars; j++){
						stars += "<span class='glyphicon glyphicon-star' style='color:yellow; font-size:1.3em;'></span>";
				}	
				for(var j = 0; j<5-respParsed.rating_Stars; j++){
						stars += "<span class='glyphicon glyphicon-star-empty' style=' font-size:1.3em;'></span>";
				}
				
				document.getElementById("moreComments").innerHTML += "<blockquote><div><img src="+respParsed.img_path+" class='img-circle profile-pic'>"
				+stars
				+respParsed.review_text+				
				"</div><footer style='margin-top:1em;'> by <a href=profile.php?email="+respParsed.review_by_email_encoded+">"+respParsed.review_by+"</a> on "+respParsed.review_date+
				"<div class='text text-right'>"+
					"<button type='submit' class='btn btn-primary btn-sm' onclick='openCommentsModal("+respParsed.reviewId+")'>Comments (<span id='commentCount"+respParsed.reviewId+"'>"+respParsed.commentCount+"</span>)</button>"+								
				"</div>"+
				"<div class='text text-right'>"+
					respParsed.helpful_count+"people found this helpful."+
				"</div>"+
				"</footer></blockquote>";
			}	
			
		}
	}
	http.send(params);
  
}

function closeMoreReviewsModal() {
  document.getElementById('MoreReviewModal').style.display = "none";
}

/*Closing the missonariesServedMapModal */

function closeMissonariesServedMapModal() {
  document.getElementById('missonariesServedMapModal').style.display = "none";
}


/*features updating MODAL*/

function openFeaturesUpdatingModal() {
  document.getElementById('featuresUpdatingModal').style.display = "block";
}

function closeFeaturesUpdatingModal() {
  document.getElementById('featuresUpdatingModal').style.display = "none";
}



/*Limit missionaries updating MODAL*/

function openLimitMissionariesModal() {
  document.getElementById('limitMissionariesModal').style.display = "block";
}

function closeLimitMissionariesModal() {
  document.getElementById('limitMissionariesModal').style.display = "none";
}


/*Additional Charge  MODAL*/

function openAdditionalChargeModal() {
  document.getElementById('additionalChargeModal').style.display = "block";
}

function closeAdditionalChargeModal() {
  document.getElementById('additionalChargeModal').style.display = "none";
}

/*Saved MODAL*/

function openSavedModal() {
  document.getElementById('SavedModal').style.display = "block";
}

function closeSavedModal() {
  document.getElementById('SavedModal').style.display = "none";
}


/*Successful MODAL*/

function openSuccessfulModal() {
  document.getElementById('SuccessfulModal').style.display = "block";
}

function closeSuccessfulModal() {
  document.getElementById('SuccessfulModal').style.display = "none";
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





}


/* Increment guests */

function increment( who){
	if(who=="adults"){
	document.getElementById('adults').innerText =parseInt(document.getElementById('adults').innerText) +1;
	}
	if(who=="childrens"){
	document.getElementById('childrens').innerText =parseInt(document.getElementById('childrens').innerText) +1;
	}
	if(who=="infants"){
	document.getElementById('infants').innerText =parseInt(document.getElementById('infants').innerText) +1;
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

 /*Fixing the Star on click  

function fixStar(starNo){
	if(starNo == 1){
		document.getElementById("1").className = "glyphicon glyphicon-star";
		document.getElementById("1").style.color = "yellow";
		
		
	}
} */


/*strike out if unchecked*/
var checked;
function strike(elementId){
	//checked=this.checked;
	var className = $('#'+elementId).attr('class');
	//requiredName = className.split(" ")[2];
	//console.log(requiredName);
	if(className.includes("strike")){checked=false;}
	else{checked=true;}
	if(checked){
		checked=false;
		//alert("checked");
		$('#'+elementId).addClass('strike');
	}
	else{
		checked=true;
		//alert("un checked");
		$('#'+elementId).removeClass('strike');
	}
}


/*For multidate picker*/
$(document).ready(function(){
	$('#mdp-demo').multiDatesPicker({
	minDate: 0,
	addDates: [new Date(2017, 7, 27), new Date(2017, 7, 29)],  //Important month is from 0 to 11 the format here is yyyy, mm, dd SIMULATING PRESELECTED DATES
	
	beforeShowDay: function(date){ //SIMULATING DATES DISABLED DUE TO BOOKING BY A GUEST
			var year = date.getFullYear();
			var month = date.getMonth(); //month is from 0 to 11
			var disabledDate = date.getDate();
			if(month == 7 && disabledDate == 25){
				return [false];
			}
			if(year ==2017 && month == 7 && disabledDate == 31) {
				return [false];
			}
			else{
				return [true];
			}
	 }
	 
	 
	});
 });


 /*jumbotron Image Load*/

function jumbotronImgLoad(){	
	var path = document.getElementById('mainImg').innerText;
	document.getElementsByClassName('main-jumbotron')[0].style.background = "url('"+path+"') center center no-repeat";
}




/*================================
Backend updating
==================================*/


/*Ajax call for family name update*/

function updateFamilyName() {
	var newFamilyName = document.getElementById('familyName').value;
	var propId = document.getElementById('propId').value;
	
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		document.getElementById('FamilyNameModal').style.display = "none";
		//document.getElementById("demo").innerHTML = this.responseText;
		document.getElementById("familyName1").innerHTML = newFamilyName;
		document.getElementById("familyNameAbout").innerHTML = newFamilyName;
    }
  };
  xhttp.open("GET", "updateFamilyName.php?newFamilyName="+encodeURIComponent(newFamilyName)+"&propId="+propId, true);
  xhttp.send();
}



/*Ajax call for welcome message update*/

function updateWelcomeMessage() {
	var newWelcomeMessage = document.getElementById('welcomeMessageModel').value;
	var propId = document.getElementById('propId').value;
	
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		document.getElementById('WelcomeMessageModal').style.display = "none";
		//document.getElementById("demo").innerHTML = this.responseText;
		document.getElementById("welcomeMessage1").innerHTML = newWelcomeMessage;
		
    }
  };
  xhttp.open("GET", "updateWelcomeMessage.php?newWelcomeMessage="+encodeURIComponent(newWelcomeMessage)+"&propId="+propId, true);
  xhttp.send();
}



/*Update Title Img*/

$(document).ready(function (e) {
	$("#titleImgUpdate").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "updateTitleImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				//alert(data);
				$(".main-jumbotron:eq(0)").css("background", "url("+data+") center center no-repeat");			
			
				closeTitleImageModal();
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});


/*Update family Img*/

$(document).ready(function (e) {
	$("#familyPic").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "updateFamilyPic.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				//alert(data);
				//$(".main-jumbotron:eq(0)").css("background", "url("+data+") center center no-repeat");
				$("#familyPhoto").attr("src",data);
				$("#familyPhotoAbout").attr("src",data);
						
			
				closeFamilyImageModal();
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




/*Update features */

$(document).ready(function (e) {
	$("#featuresForm").on('submit',(function(e) {		
		e.preventDefault();
		openFeaturesUpdatingModal();
		$("#saving").removeClass("hidden");
		$("#saved").addClass("hidden");
		$.ajax({
        	url: "updateFeatures.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				//alert(data);
			
				$("#saving").addClass("hidden");
				$("#saved").removeClass("hidden");	
			
				
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});






/*Ajax call for Delete the property modal img*/

function deleteModalPropertyImg(imgId) {
var http = new XMLHttpRequest();
var url = "deleteModalPropertyImg.php";
var params = "imgId="+imgId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);
		var parentElement = document.getElementById("propImg"+imgId).parentNode;
		var child = document.getElementById("propImg"+imgId);
		parentElement.removeChild(child);
    }
}
http.send(params);
}

/*Adding inputs for more images
function addMoreImg(){
	var parentNode = document.getElementById("propImgModal");
	var pNode = document.createElement("p");
	
	
	var inputeNode = document.createElement("input");
	inputeNode.setAttribute("type", "file");
	inputeNode.setAttribute("class", "form-control");
	var newNode = pNode.appendChild(inputeNode);
	parentNode.appendChild(pNode);
}*/



/*Adding property modal Img*/

$(document).ready(function (e) {
	$("#form0").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form0").html(" ");
				var parentNode = document.getElementById("form0");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




$(document).ready(function (e) {
	$("#form1").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form1").html(" ");
				var parentNode = document.getElementById("form1");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




$(document).ready(function (e) {
	$("#form2").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form2").html(" ");
				var parentNode = document.getElementById("form2");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form3").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form3").html(" ");
				var parentNode = document.getElementById("form3");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




$(document).ready(function (e) {
	$("#form4").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form4").html(" ");
				var parentNode = document.getElementById("form4");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




$(document).ready(function (e) {
	$("#form5").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form5").html(" ");
				var parentNode = document.getElementById("form5");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form6").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form6").html(" ");
				var parentNode = document.getElementById("form6");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form7").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form7").html(" ");
				var parentNode = document.getElementById("form7");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form8").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form8").html(" ");
				var parentNode = document.getElementById("form8");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form9").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form9").html(" ");
				var parentNode = document.getElementById("form9");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form10").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form10").html(" ");
				var parentNode = document.getElementById("form10");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form11").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form11").html(" ");
				var parentNode = document.getElementById("form11");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form12").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form12").html(" ");
				var parentNode = document.getElementById("form12");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form13").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form13").html(" ");
				var parentNode = document.getElementById("form13");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form14").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form14").html(" ");
				var parentNode = document.getElementById("form14");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});



$(document).ready(function (e) {
	$("#form15").on('submit',(function(e) {		
		e.preventDefault();
		$.ajax({
        	url: "addPropertyModalImg.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(response)
		    {
				var data = response.trim();
				
				$("#form15").html(" ");
				var parentNode = document.getElementById("form15");
				var pNode = document.createElement("p");
				pNode.setAttribute("id", "propImg"+data);
				var imgNode = document.createElement("img");
				imgNode.setAttribute("class", "modalPropertyImg");
				imgNode.setAttribute("src", data);
				
				var buttonNode = document.createElement("button");
				buttonNode.setAttribute("type", "button");
				buttonNode.setAttribute("class", "btn btn-danger");
				buttonNode.setAttribute("onclick", "deleteModalPropertyImgUsingPath('"+data+"')");
				
				var textNode = document.createTextNode("Delete");
				buttonNode.appendChild(textNode);
				pNode.appendChild(imgNode);
				pNode.appendChild(buttonNode);
				parentNode.appendChild(pNode);
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});





/*For deleting modal img using path*/

function deleteModalPropertyImgUsingPath(path){
//alert(path);
var http = new XMLHttpRequest();
var url = "deleteModalPropertyImgUsingPath.php";
var propId = document.getElementById("propID").innerHTML;
var params = "path="+path+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);
		var parentElement = document.getElementById("propImg"+path).parentNode;
		var child = document.getElementById("propImg"+path);
		parentElement.removeChild(child);
		
    }
}
http.send(params);
}





/*For changing rate*/


function changeRate(){
//alert();

var http = new XMLHttpRequest();
var url = "changeRate.php";
var newRate = document.getElementById("newRate").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newRate="+newRate+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);
		document.getElementById("rateText").innerText = newRate;
		closeRateModal();
		
    }
}
http.send(params);
}


/*For changing missionaries limit*/

function saveNumMissionaries(){
//alert();

var http = new XMLHttpRequest();
var url = "saveNumMissionaries.php";
var newAdult = document.getElementById("adults").innerText;
var newChild = document.getElementById("childrens").innerText;
var newInfant = document.getElementById("infants").innerText;
var propId = document.getElementById("propID").innerHTML;
var params = "newAdult="+newAdult+"&newChild="+newChild+"&newInfant="+newInfant+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);		
		closeLimitMissionariesModal();
		openSavedModal();
		
    }
}
http.send(params);
}


/*For changing Additional charges*/

function saveCleaningCharges(){
//alert();

var http = new XMLHttpRequest();
var url = "saveCleaningCharges.php";
var newcharge = document.getElementById("charge").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newcharge="+newcharge+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);		
		closeAdditionalChargeModal();
		document.getElementById("charge").value = newcharge;
		
    }
}
http.send(params);
}


/*For changing check in timings*/

function changeCheckIn(){
//alert(document.getElementById("inAP").value);

var http = new XMLHttpRequest();
var url = "changeCheckIn.php";
var newinHr = document.getElementById("inHr").value;
var newinMin = document.getElementById("inMin").value;
var newinAP = document.getElementById("inAP").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newinHr="+newinHr+"&newinMin="+newinMin+"&newinAP="+newinAP+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		document.getElementById('successfulText').innerText="Check in timing is saved successfully"	
		openSuccessfulModal();
		
    }
}
http.send(params);
}



/*For changing check out timings*/

function changeCheckOut(){

var http = new XMLHttpRequest();
var url = "changeCheckOut.php";
var newoutHr = document.getElementById("outHr").value;
var newoutMin = document.getElementById("outMin").value;
var newoutAP = document.getElementById("outAP").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newoutHr="+newoutHr+"&newoutMin="+newoutMin+"&newoutAP="+newoutAP+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		document.getElementById('successfulText').innerText="Check out timing is saved successfully"	
		openSuccessfulModal();
		
    }
}
http.send(params);
}



/*For deleting a rules */

function deleteRule(x, ruleId){

	
var http = new XMLHttpRequest();
var url = "deleteARule.php";
var propId = document.getElementById("propID").innerHTML;
var params = "ruleId="+ruleId+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		y = x.parentNode;
		z = y.parentNode;	
		z.parentNode.removeChild(z);		
    }
}
http.send(params);
}






/*For adding rules */ 

function addRule(){

var http = new XMLHttpRequest();
var url = "addARule.php";
var newRule = document.getElementById("newRule").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newRule="+newRule+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		closeRulesModal();					
		var ruleSec = document.getElementById("rulesSection");		
		ruleSec.innerHTML+=http.responseText;
		
    }
}
http.send(params);
}



/*For updating family description */ 

function saveDescription(){

var http = new XMLHttpRequest();
var url = "updateFamilyDesc.php";
var newDesc = document.getElementById("familyDesc").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newDesc="+newDesc+"&propId="+propId;
//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		document.getElementById('successfulText').innerText="Description saved successfully"	
		openSuccessfulModal();
		
    }
}
http.send(params);
}


/*For updating Address */ 

function saveAddress(){

var http = new XMLHttpRequest();
var url = "updateAddress.php";
var newStreet_address = document.getElementById("Street_address").value;
var newHouse_No = document.getElementById("House_No").value;
var newCity = document.getElementById("addressCity").value;
var newState= document.getElementById("State").value;
var newCountry= document.getElementById("addressCountry").value;
var propId = document.getElementById("propID").innerHTML;
var params = "newStreet_address="+newStreet_address+"&newHouse_No="+newHouse_No+"&newCity="+newCity+"&newState="+newState+"&newCountry="+newCountry+"&propId="+propId;

//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //alert(http.responseText);	
		//document.getElementById('successfulText').innerText="Address saved successfully"	
		//openSuccessfulModal();
		
    }
}
http.send(params);
}




/*For answering property question */ 

function answerPropertyQuestion(e){
//alert(e.parentElement.children[1].innerText);
var ans = e.parentElement.children[0].value;
var questionId = e.parentElement.children[1].innerText;


var http = new XMLHttpRequest();
var url = "answerPropertyQuestion.php";
var propId = document.getElementById("propID").innerHTML;
var params = "questionId="+questionId+"&ans="+ans+"&propId="+propId;

//"imgId=Henry&lname=Ford"
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        
		e.parentElement.innerHTML="<span class='answerSymbol'>>></span>"+ans;
    }
}
http.send(params);



}



/*For adding a new comment*/
function addComment(){
	
	


	var http = new XMLHttpRequest();
	var url = "addCommentFromHost.php";
	var propId = document.getElementById("propID").innerHTML;
	var reviewId = document.getElementById("reviewId").innerText;
	var commentText = document.getElementById("commentText").value;
	
	var params = "reviewId="+reviewId+"&commentText="+commentText;

	//"imgId=Henry&lname=Ford"
	http.open("POST", url, true);

	//Send the proper header information along with the request
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	http.onreadystatechange = function() {//Call a function when the state changes.
		if(http.readyState == 4 && http.status == 200) {
			
			openCommentsModal(reviewId);
			document.getElementById("commentCount"+reviewId).innerText=http.responseText;
			
		}
	}
	http.send(params);
	
}