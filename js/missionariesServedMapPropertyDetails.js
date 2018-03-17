
	$(document).ready(function() {
	  
	  
	  $('#map2').usmap({
	  'stateSpecificStyles': {
	      'MI' : {fill: 'yellow'}
	    },
	    'stateStyles': {
	      fill: 'lightgrey', /*color of the map*/ 
	      "stroke-width": 1,
	      'stroke' : 'silver' /*color of borders*/
	    },
	    'stateHoverStyles': {
	      fill: 'rgb(255,245,66)' /*color on hovering over the states*/
	    },
	    
	    'click' : function(event, data) {
		if(data.name == "MI"){
		$('#missonariesServedMapModal').css('display', 'block');
		}
		
		
		/*if(data.name == "MI")
	      {$('#alert')
	        .html('This Family has served 2 missonary from '+data.name+'<p>User name</p><p>Had lunch</p><p>had dinner and prayer</p><p>User 2 just had dinner</p>')        
			.stop()
			.css('height', '100px')
			.css('width', '100%')
			.css('overflow', 'scroll');
	        //.animate({backgroundColor: '#ddd'}, 1000);
			}*/
	    }
	  });
	  
	  
	  
	});

  