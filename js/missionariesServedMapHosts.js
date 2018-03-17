
$(document).ready(function() {


	/*For getting state list  */ 


		var http = new XMLHttpRequest();
		var url = "statesLookup.php";		
		var propId = document.getElementById("propID").innerHTML;
		var params = "propId="+propId;

		
		http.open("POST", url, true);

		//Send the proper header information along with the request
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		http.onreadystatechange = function() {//Call a function when the state changes.
			if(http.readyState == 4 && http.status == 200) {
				//alert(http.responseText);	
				var stateNames = http.responseText.trim().split("*"); //php script sends with a leading space so trim
				//alert(stateNames.length);				
				var fill = {fill: 'yellow'};
				var states = {};
				
				for(var i=0; i<stateNames.length-1; i++ ){
					//alert(stateNames[i]);	
					states[stateNames[i]] = fill;
				}
				
										

				$('#map2').usmap({
					'stateSpecificStyles':states,
					'stateStyles': {
						fill: 'lightgrey', /*color of the map*/ 
						"stroke-width": 1,
						'stroke' : 'silver' /*color of borders*/
					},
					'stateHoverStyles': {
						fill: 'rgb(255,245,66)' /*color on hovering over the states*/
					},

					'click' : function(event, data) {
						for(var j=0; j<stateNames.length-1; j++ ){	
							if(data.name == stateNames[j]){
								$('#missonariesServedMapModal').css('display', 'block'); //will have to think about this one how to link a gest that is served.
								}
						}	
					}
				});							

			}
		}
	http.send(params);
	
});

  