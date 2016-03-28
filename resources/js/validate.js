//numeric validation

function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if ((iKeyCode < 48 || iKeyCode > 57) && (iKeyCode <8 || iKeyCode >9))
            return false;

        return true;
    }    
//mobile validation

function isNumbers(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if ((iKeyCode < 48 || iKeyCode > 57) && (iKeyCode <8 || iKeyCode >9))
            return false;

        return true;
    }    
		//AlphaNumeric Validation
	
	function alphanumeric_only(event)	
	{
		var keycode;
		keycode=event.keyCode?event.keyCode:event.which;
		if ((keycode >= 1 && keycode <= 31 )  || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122) || keycode == 47 || keycode == 63 || keycode == 95) {
          
        return true;

    }

		else 
		
	{
       
        return false;

    }
		
		return true;

	}
	
	function makeLowercase() {
document.feedBack.txtEmailAddressName.value = document.feedBack.txtEmailAddressName.value.toLowerCase();
}
function checkIt()
	{
	   if(document.getElementById("radio5").checked == true)
		{   
	        document.getElementById("txtDonationAmountId").focus();
			document.getElementById("txtDonationAmountId").readOnly = false;
			document.getElementById("txtPurposeId").readOnly = false;  
		}
		else
		{   
	      
	       document.getElementById("txtPurposeId").readOnly = true;  
			document.getElementById("txtDonationAmountId").readOnly = true; 
			document.getElementById("txtDonationAmountId").value =""; 
			document.getElementById("txtDonationAmountId").style.borderColor="";
			document.getElementById("txtPurposeId").value =""; 
		}
		if((document.getElementById("radio1").checked == false)&&(document.getElementById("radio2").checked == false)&&(document.getElementById("radio3").checked == false)&&(document.getElementById("radio4").checked == false)&&(document.getElementById("radio5").checked == false))
		{
			document.getElementById("errRadioId").innerHTML="Dontation Amount Required";
			
		}
	else
       {
		   document.getElementById("errRadioId").innerHTML="";
	   }
	}

//----ALPHABETS ONLY VALIDATION----//
 var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        //specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
       // specialKeys.push(39); //Right
        function AlphaOnly(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode || (keyCode >= 48 && keyCode <= 57) || keyCode==64 || keyCode==45 || keyCode==95 || keyCode==47  || keyCode==32 || keyCode==46));            
            return ret;
        }
//-----END---------//		

//onSubmit Validation
	
	function payGatway(){
		 var decimal=  /[-+][0-9]+\.[0-9]+$/;  
  var DonateAt = document.getElementById("txtDonationAmountId").value;
  var CalDonateAt = DonateAt/100;
	var valid= true;
	if((document.getElementById("radio1").checked == false)&&(document.getElementById("radio2").checked == false)&&(document.getElementById("radio3").checked == false)&&(document.getElementById("radio4").checked == false)&&(document.getElementById("radio5").checked == false))
		{
			document.getElementById("errRadioId").innerHTML="Dontation Amount Required";
			valid=false;
		}
	else
       {
		   var val="";		  
	   }		

	//Title	
	if(document.getElementById("txtTitleId").value=="0")
	{   
	document.getElementById("errorTitleId").innerHTML="Title Required";
	document.getElementById("txtTitleId").style.borderColor="#FF0000";
	valid= false;
	} 
	else
	{
	document.getElementById("errorTitleId").innerHTML="";
	document.getElementById("txtTitleId").style.borderColor="green";	
	}
	//DonationAmount
 if(document.getElementById("radio5").checked == true)
  {
   
   if(document.getElementById("txtDonationAmountId").value=="")
   {   
    document.getElementById("errRadioId").innerHTML="Dontation Amount Required" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
    valid=false;
   }
   else if(document.getElementById("txtDonationAmountId").value<500)
   {
    document.getElementById("errRadioId").innerHTML="Minimum Donation Rs.500/- in multiples of Rs.100/-" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
	 valid=false;
     } 
   else if(/^-?[0-9]*[.][0-9]+$/.test(CalDonateAt))
   {
    document.getElementById("errRadioId").innerHTML="Minimum Donation Rs.500/- in multiples of Rs.100/-" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
	 valid=false;
   }
   else
   {   
    document.getElementById("errRadioId").innerHTML="";
    document.getElementById("txtDonationAmountId").style.borderColor="green"; 
   }
  }
	
//First name
	
	if(document.getElementById("txtFirstNameId").value==""){   
	document.getElementById("errorFirstNameId").innerHTML="First Name Required";
	document.getElementById("txtFirstNameId").style.borderColor="#FF0000";
	valid= false;
	}
	else{
	document.getElementById("errorFirstNameId").innerHTML="";
    document.getElementById("txtFirstNameId").style.borderColor="green";	
	}
//Last name
	
	if(document.getElementById("txtLastNameId").value==""){   
	document.getElementById("errorLastNameId").innerHTML="Last Name Required";
	document.getElementById("txtLastNameId").style.borderColor="#FF0000";
	valid= false;
	}
	else{
	document.getElementById("errorLastNameId").innerHTML="";
    document.getElementById("txtLastNameId").style.borderColor="green";	
	}
//email 

	var email = document.getElementById("txtEmailAddressId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(email.value =="")
	{
		document.getElementById("errorEmailAddressId").innerHTML="Email Address Required";
		document.getElementById("txtEmailAddressId").style.borderColor="#FF0000";
		valid=false;
	}
	else if (!filter.test(email.value)) {
    document.getElementById("errorEmailAddressId").innerHTML="Enter a Valid Email Address";
	document.getElementById("txtEmailAddressId").style.borderColor="#FF0000";
    email.focus;
    return false;
	}
	else
 {
    document.getElementById("errorEmailAddressId").innerHTML="";
    document.getElementById("txtEmailAddressId").style.borderColor="green";	
 }
	
//cell nmbr
   
	if(document.getElementById("txtCellPhoneNumberId").value==""){   
	document.getElementById("errorCellPhoneNumberId").innerHTML="Mobile Number Required";
	document.getElementById("txtCellPhoneNumberId").style.borderColor="#FF0000";
	valid=false;
	}
	else if(document.getElementById("txtCellPhoneNumberId").value.length<10){   
	document.getElementById("errorCellPhoneNumberId").innerHTML="Mobile Number should be 10";
	document.getElementById("txtCellPhoneNumberId").style.borderColor="#FF0000";
	valid=false;
	}
	else{ 
	document.getElementById("errorCellPhoneNumberId").innerHTML="";
    document.getElementById("txtCellPhoneNumberId").style.borderColor="green";	
	}
	//pan_number
	 if((document.getElementById("radio4").checked == true)||(document.getElementById("txtDonationAmountId").value>=50000))
	{
		   
			 if(document.getElementById("txtPANNumberId").value==""){  
				document.getElementById("errorPANNumberId").innerHTML="PAN Required";
				document.getElementById("txtPANNumberId").style.borderColor="#FF0000";
				valid=false;
			   }
			  else	if(document.getElementById("txtPANNumberId").value.length<10){ 
				document.getElementById("errorPANNumberId").innerHTML="PAN should be 10 characters";
				document.getElementById("txtPANNumberId").style.borderColor="#FF0000";
				valid=false;
				
			   }
			   else{
				document.getElementById("errorPANNumberId").innerHTML="";
				document.getElementById("txtPANNumberId").style.borderColor="green";	
			   }
	   
	}else{
		document.getElementById("errorPANNumberId").innerHTML="";
		document.getElementById("txtPANNumberId").style.borderColor="";
	}

//Address Line 1

	if(document.getElementById("txtAddressLineId").value==""){   
	document.getElementById("errorAddressLineId").innerHTML="Address Line 1 Required";
	document.getElementById("txtAddressLineId").style.borderColor="#FF0000";
	valid =false;
	}
	else{
	document.getElementById("errorAddressLineId").innerHTML="";
    document.getElementById("txtAddressLineId").style.borderColor="green";	
	}
	
//Pin code
	
	if(document.getElementById("txtSelectPinCodeId").value==""){   
	document.getElementById("errorSelectPinCodeId").innerHTML="Postal Code Required";
	document.getElementById("txtSelectPinCodeId").style.borderColor="#FF0000";
	valid=false;
	}
	else if(document.getElementById("txtSelectPinCodeId").value.length<6){   
	document.getElementById("errorSelectPinCodeId").innerHTML="Postal Code should be 6 digits";
	document.getElementById("txtSelectPinCodeId").style.borderColor="#FF0000";
	valid=false;
	} 
	else{
	document.getElementById("errorSelectPinCodeId").innerHTML="";
    document.getElementById("txtSelectPinCodeId").style.borderColor="green";	
	}

//select state
	
	if(document.getElementById("txtSelectStateId").value=="0"){   
	document.getElementById("errorSelectStateId").innerHTML="State Name Required";
	document.getElementById("txtSelectStateId").style.borderColor="#FF0000";
	valid=false;
	}
	else{ 
	document.getElementById("errorSelectStateId").innerHTML="";
    document.getElementById("txtSelectStateId").style.borderColor="green";	
	}
	
//select City
	
	if(document.getElementById("txtSelectCityId").value=="0"){   
	document.getElementById("errorSelectCityId").innerHTML="District Name Required" ;
	document.getElementById("txtSelectCityId").style.borderColor="#FF0000";
	valid=false;
	}
	else{
	
	document.getElementById("errorSelectCityId").innerHTML="";
    document.getElementById("txtSelectCityId").style.borderColor="green";	
	}

	return valid;
	}
	//onblur
function Titlefunct()
	{
	if(document.getElementById("txtTitleId").value=="0")
	{   
	document.getElementById("errorTitleId").innerHTML="Title Required";
	document.getElementById("txtTitleId").style.borderColor="#FF0000";
	} 
	else
	{
	document.getElementById("errorTitleId").innerHTML="";
	document.getElementById("txtTitleId").style.borderColor="green";	
	}
	}	
	function panNumber(){
	
	 if((document.getElementById("radio4").checked == true)||(document.getElementById("txtDonationAmountId").value>=50000))
	{
		   
			 if(document.getElementById("txtPANNumberId").value==""){  
				document.getElementById("errorPANNumberId").innerHTML="PAN Required";
				document.getElementById("txtPANNumberId").style.borderColor="#FF0000";
			
			   }
			  else	if(document.getElementById("txtPANNumberId").value.length<10){ 
				document.getElementById("errorPANNumberId").innerHTML="PAN should be 10 characters";
				document.getElementById("txtPANNumberId").style.borderColor="#FF0000";
				
				
			   }
			   else{
				document.getElementById("errorPANNumberId").innerHTML="";
				document.getElementById("txtPANNumberId").style.borderColor="green";	
			   }
			   
	}else{
		document.getElementById("errorPANNumberId").innerHTML="";
		document.getElementById("txtPANNumberId").style.borderColor="";
	}

	}
	function DonateAmt()
 {
  var decimal=  /[-+][0-9]+\.[0-9]+$/;  
  var DonateAt = document.getElementById("txtDonationAmountId").value;
  var CalDonateAt = DonateAt/100;
  
  if(document.getElementById("radio5").checked == true)
  {
   
   if(document.getElementById("txtDonationAmountId").value=="")
   {   
    document.getElementById("errRadioId").innerHTML="Dontation Amount Required" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
    valid=false;
   }
   else if(document.getElementById("txtDonationAmountId").value<500)
   {
    document.getElementById("errRadioId").innerHTML="Minimum Donation Rs.500/- in multiples of Rs.100/-" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
     } 
   else if(/^-?[0-9]*[.][0-9]+$/.test(CalDonateAt))
   {
    document.getElementById("errRadioId").innerHTML="Minimum Donation Rs.500/- in multiples of Rs.100/-" ;
    document.getElementById("txtDonationAmountId").style.borderColor="#FF0000";
   }
   else
   {   
    document.getElementById("errRadioId").innerHTML="";
    document.getElementById("txtDonationAmountId").style.borderColor="green"; 
   }
  }
  }
	