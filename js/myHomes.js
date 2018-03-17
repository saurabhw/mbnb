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