var focusTo;

function checkTheForm(evt){
	var condition = true;
	var acceptCondition = document.getElementById('accept').checked;
	var currentMissionField = document.getElementById('currentMissionField').value;
	var reaching = document.getElementById('reaching').value;
	var homeChurch = document.getElementById('homeChurch').value;
	var street = document.getElementById('street').value;
	var city = document.getElementById('city').value;
	var state = document.getElementById('state').value;
	var sentFrom = document.getElementById('sentFrom').value;
	var roleAtChurch = document.getElementById('roleAtChurch').value;
	var churchInField = document.getElementById('churchInField').value;
	 
	 
	if(!acceptCondition) { 
		focusTo = document.getElementById('accept');
		openModal("Please accept the statement of faith inorder to continue." );			
		condition=false;
	}

	if(currentMissionField == "") { 
		focusTo = document.getElementById('currentMissionField');
		openModal("Please Enter Your Current Mission Field.");			
		condition=false;
	}
	
	if(reaching == "") { 
			focusTo = document.getElementById('reaching');
			openModal("Please Enter the group you are reaching for the kingdom.");			
			condition=false;
        }

	if(homeChurch == "") { 
			focusTo = document.getElementById('homeChurch');
			openModal("Please enter home Church.");			
			condition=false;
        }

	if(street == "") { 
			focusTo = document.getElementById('street');
			openModal("Please Enter Street in the Address section.");			
			condition=false;
        }

	if(city == "") { 
			focusTo = document.getElementById('city');
			openModal("Please Enter city in the Address section.");			
			condition=false;
        }

	if(state == "") { 
			focusTo = document.getElementById('state');
			openModal("Please Enter state in the Address section.");			
			condition=false;
        }
		
	if(sentFrom == "") { 
			focusTo = document.getElementById('sentFrom');
			openModal("Please Enter the Church you were sent from.");			
			condition=false;
        }
			
	if(roleAtChurch == "") { 
			focusTo = document.getElementById('roleAtChurch');
			openModal("Please Enter Your Role At Church.");			
			condition=false;
        }			


	if(churchInField == "") { 
			focusTo = document.getElementById('churchInField');
			openModal("Please Enter the in your missions field Church.");			
			condition=false;
        }			
		
					

        if(!condition) {
            if(evt.preventDefault) { event.preventDefault(); }    
            else if(evt.returnValue) { evt.returnValue = false; }    
            else { return false; }
        }
	 
 }
 
 function openModal(outputText){
 document.getElementById('outputTextDisplay').innerHTML = outputText;	 
 document.getElementById('Modal').style.display = "block";
 }
 
 function closeModal(){
	 document.getElementById('Modal').style.display = "none";
	 focusTo.focus();
 }