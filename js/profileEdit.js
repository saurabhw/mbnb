 /*PROFILE PIC MODAL*/

function openProfilePicModal() {
  document.getElementById('ProfilePicModal').style.display = "block";
}

function closeProfilePicModal() {
  document.getElementById('ProfilePicModal').style.display = "none";
}


/*CHANGE PASSWORD MODAL*/

function openChangePasswordModal() {
  document.getElementById('ChangePasswordModal').style.display = "block";
}

function closeChangePasswordModal() {
  document.getElementById('ChangePasswordModal').style.display = "none";
}


/* ADDING MORE EXPECTATIONS */

function addMoreExpectation(){	
	var i = document.getElementsByClassName('expextation').length;
	
	var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("class", "form-control form-group expextation");
	x.setAttribute("placeholder", "Enter your expectation");
	x.setAttribute("name", "exp"+(i+1));
                          	
	document.getElementById("expectationForm").appendChild(x);
	
}

/* ADDING MORE SUPPORTED */

function addMoreSupported(){	
	var i = document.getElementsByClassName('supported').length;
	
	var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("class", "form-control form-group supported");
	//x.setAttribute("placeholder", "test");
	x.setAttribute("name", "sup"+(i+1));
      
	var y = document.createElement("LI");  
	y.setAttribute("class", "list-group-item");
	y.appendChild(x)
	document.getElementById("supports").appendChild(y);
	
}



/* ADDING MORE Testimony */

function addMoreTestimony(){	
	var i = document.getElementsByClassName('testimony').length;
	
	var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("class", "form-control form-group testimony");
	//x.setAttribute("placeholder", "tests");
	x.setAttribute("name", "tes"+(i+1));
      
	
	document.getElementById("Testimony").appendChild(x);
	
}


/*Upload profile pic*/

$(document).ready(function (e) {
	$("#profilePicUpload").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "profilePicUpload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").attr("src",data);
			closeProfilePicModal();
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});




function channgePassword(userEmail) {
	var newPass = document.getElementById('newPass').value;
	var newPassConfirm = document.getElementById('newPassConfirm').value;
	if(newPass ==="" ){
		document.getElementById('successfulPasswordChangeDIV').className = "hidden";
		document.getElementById('unsuccessfulPasswordChangeDIV').className = "hidden";
		document.getElementById('newEmptyDIV').className = "";
		document.getElementById('newOldNoMatchDIV').className = "hidden";
	}
	else if(newPass != newPassConfirm ){
		document.getElementById('successfulPasswordChangeDIV').className = "hidden";
		document.getElementById('unsuccessfulPasswordChangeDIV').className = "hidden";
		document.getElementById('newEmptyDIV').className = "hidden";
		document.getElementById('newOldNoMatchDIV').className = "";
	}
	else{
		channgePasswordInDB(userEmail);
	}
	
}

/* Ajax call to change password*/

function channgePasswordInDB(userEmail) {
	var newPwd = document.getElementById('newPass').value;
	var oldPwd = document.getElementById('oldPass').value;
	
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		//document.getElementById('ShortDescModal').style.display = "none";
		//document.getElementById("demo").innerHTML = this.responseText;
		//document.getElementById("shortDescDisplay"+propID).innerHTML = shortDesc;
		
		if(this.responseText=="oldAndNewMatched"){
			document.getElementById('successfulPasswordChangeDIV').className = "";
			document.getElementById('unsuccessfulPasswordChangeDIV').className = "hidden";
			document.getElementById('newEmptyDIV').className = "hidden";
			document.getElementById('newOldNoMatchDIV').className = "hidden";
		}
		else if(this.responseText=="OldPwdNotMatch"){
			document.getElementById('successfulPasswordChangeDIV').className = "hidden";
			document.getElementById('unsuccessfulPasswordChangeDIV').className = "hidden";
			document.getElementById('newEmptyDIV').className = "hidden";
			document.getElementById('newOldNoMatchDIV').className = "";
		}
		
		
    }
  };
  xhttp.open("GET", "channgePassword.php?email="+userEmail+"&newPwd="+newPwd+"&oldPwd="+oldPwd, true);
  xhttp.send();
}