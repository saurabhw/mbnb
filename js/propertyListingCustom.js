function changeTheImg(propertyId){
	setTimeout(change(propertyId), 3000);
	
}

function change(propertyId){
	/*from the database fetch all the name of the images for the property returned will be a text seperated by a space use a for loop to loop over those names*/
	document.getElementById('property1').src="img/home-1.jpg";
}