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
		    },
		  	error: function() 
	    	{
				
	    	} 	        
	   });
	}));
});