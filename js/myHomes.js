 /*PROFILE PIC MODAL*/

function openShortDescModal(propID) {
  document.getElementById('ShortDescModal').style.display = "block";
  document.getElementById('propertyID').innerText = propID;
  document.getElementById('shortDescText').value = document.getElementById('shortDescDisplay'+propID).innerText;
}

function closeShortDescModal() {
  document.getElementById('ShortDescModal').style.display = "none";
}


/*Ajax call to change the short description*/

function changeShortDesc() {
	var shortDesc = document.getElementById('shortDescText').value;
	var propID = document.getElementById('propertyID').innerText;
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		document.getElementById('ShortDescModal').style.display = "none";
		//document.getElementById("demo").innerHTML = this.responseText;
		document.getElementById("shortDescDisplay"+propID).innerHTML = shortDesc;
    }
  };
  xhttp.open("GET", "changeShortDesc.php?shortDesc="+encodeURIComponent(shortDesc)+"&propId="+propID, true);
  xhttp.send();
}



/*Adding a new home*/

function addNewHome() {
	
	var http = new XMLHttpRequest();
	var url = "addNewHome.php";
	var uncodedEmail = document.getElementById('uncodedEmail').innerText;
	var email = document.getElementById('decodedEmail').innerText;
	
	var params = "email="+email;

	//"imgId=Henry&lname=Ford"
	http.open("POST", url, true);

	//Send the proper header information along with the request
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	http.onreadystatechange = function() {//Call a function when the state changes.
		if(http.readyState == 4 && http.status == 200) {
			//location.replace("http://localhost/mbnb_git/mbnb/myHomes.php?email="+uncodedEmail);
		location.replace("https://www.missionsbnb.com/myHomes.php?email="+uncodedEmail);
			
			
		}
	}
	http.send(params);
  
  
  
  
  
}
