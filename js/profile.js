
/*COMMENT MODAL*/

function openCommentsModal(reviewId) {
  document.getElementById('CommentModal').style.display = "block";
  document.getElementById('reviewId').value = reviewId;  
  loadComments(reviewId);
}

function loadComments(reviewId){
	 var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("previousComments").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "loadCommentForUserReview.php?reviewId="+reviewId, true);
	  xhttp.send();
}


function countComments(reviewId){
	 var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("commentCount"+reviewId).innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "countComments.php?reviewId="+reviewId, true);
	  xhttp.send();
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

/*REVIEW POSTED SUCCESSFULLY MODAL*/

function openReviewSuccessModal() {
  document.getElementById('reviewSuccessModal').style.display = "block";
}

function closeReviewSuccessModal() {
  document.getElementById('reviewSuccessModal').style.display = "none";
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


/*To add review for a user*/

$(document).ready(function (e) {
	$("#userReview").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "userReview.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#review").val('');
				clearAllStars();
				$("#starRating").val('0');
				openReviewSuccessModal();
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});


/*To mark a review helpful or not*/

$(document).ready(function (e) {
	$(".helpfulYes").on('submit',(function(e) {
		e.preventDefault();
		//console.log(this.reviewId.value);
		var reviewId = this.reviewId.value;
		$.ajax({
        	url: "helpfulYes.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#helpful"+reviewId).text(data);
				$("#helpfullness"+reviewId).text('');
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});

$(document).ready(function (e) {
	$(".helpfulNo").on('submit',(function(e) {
		e.preventDefault();
		var reviewId = this.reviewId.value;
		$.ajax({
        	url: "helpfulNo.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#helpful"+reviewId).text(data);
				$("#helpfullness"+reviewId).text('');
				
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});





/*To mark a review helpful or not in SHOW MORE REVIEWS*/

$(document).ready(function (e) {
	$(".helpfulYesMoreReviews").on('submit',(function(e) {
		e.preventDefault();
		var reviewId = this.reviewId.value;
		$.ajax({
        	url: "helpfulYes.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#helpfulMoreReviews"+reviewId).text(data);
				$("#helpfullnessMoreReviews"+reviewId).text('');
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});

$(document).ready(function (e) {
	$(".helpfulNoMoreReviews").on('submit',(function(e) {
		e.preventDefault();
		var reviewId = this.reviewId.value;
		$.ajax({
        	url: "helpfulNo.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#helpfulMoreReviews"+reviewId).text(data);
				$("#helpfullnessMoreReviews"+reviewId).text('');
				
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




/*To insert comment for user reviews*/

$(document).ready(function (e) {
	$("#enterCommentForUserReview").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "enterCommentForUserReview.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$("#commentText").val('');
				loadComments($("#reviewId").val());
				countComments($("#reviewId").val());
				
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});
