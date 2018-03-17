var focusTo;

function checkTheForm(evt){
	var condition = true;
	var acceptCondition = document.getElementById('accept').checked;
	var homeChurch = document.getElementById('homeChurch').value;
	var roleAtChurch = document.getElementById('roleAtChurch').value;
	var street = document.getElementById('street').value;
	var houseNo = document.getElementById('houseNo').value;
	var city = document.getElementById('city').value;
	var state = document.getElementById('state').value;
	var pastor = document.getElementById('pastor').value;
	 
	 
	if(!acceptCondition) { 
		focusTo = document.getElementById('accept');
		openModal("Please accept the statement of faith inorder to continue." );			
		condition=false;
	}

	if(homeChurch == "") { 
		focusTo = document.getElementById('homeChurch');
		openModal("Please Enter Your Home Church.");			
		condition=false;
	}
	
	if(roleAtChurch == "") { 
			focusTo = document.getElementById('roleAtChurch');
			openModal("Please Enter Your Role at the Church.");			
			condition=false;
        }

	if(street == "") { 
			focusTo = document.getElementById('street');
			openModal("Please Enter Street in the Address section.");			
			condition=false;
        }

	if(houseNo == "") { 
			focusTo = document.getElementById('houseNo');
			openModal("Please Enter House number in the Address section.");			
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
		
	if(pastor == "") { 
			focusTo = document.getElementById('pastor');
			openModal("Please Enter Pastor.");			
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