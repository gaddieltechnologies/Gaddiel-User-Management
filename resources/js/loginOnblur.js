//OnBlur Validation
//Title
	function title()
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
//First name
	function firstName()
	{
	if(document.getElementById("txtFirstNameId").value=="")
	{   
	document.getElementById("errorFirstNameId").innerHTML="First Name Required";
	document.getElementById("txtFirstNameId").style.borderColor="#FF0000";
	}
	else
	{
	document.getElementById("errorFirstNameId").innerHTML="";
    document.getElementById("txtFirstNameId").style.borderColor="green";	
	}
	}
//First name
	function lastName()
	{
	if(document.getElementById("txtLastNameId").value==""){   
	document.getElementById("errorLastNameId").innerHTML="Last Name Required";
	document.getElementById("txtLastNameId").style.borderColor="#FF0000";
	valid= false;
	}
	else{
	document.getElementById("errorLastNameId").innerHTML="";
    document.getElementById("txtLastNameId").style.borderColor="green";	
	}
	}
//email 
	function emailAddress()
	{
	var email = document.getElementById("txtEmailAddressId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(email.value =="")
	{
		document.getElementById("errorEmailAddressId").innerHTML="Email Address Required";
		document.getElementById("txtEmailAddressId").style.borderColor="#FF0000";
	}
	else if (!filter.test(email.value)) 
	{
    document.getElementById("errorEmailAddressId").innerHTML="Enter a Valid Email Address";
	document.getElementById("txtEmailAddressId").style.borderColor="#FF0000";
    email.focus;
	}
	else
	{
    document.getElementById("errorEmailAddressId").innerHTML="";
    document.getElementById("txtEmailAddressId").style.borderColor="green";	
	}
	}
	
//cell nmbr
	function mobileNumber()
	{
	if(document.getElementById("txtCellPhoneNumberId").value=="")
	{   
	document.getElementById("errorCellPhoneNumberId").innerHTML="Mobile Number Required";
	document.getElementById("txtCellPhoneNumberId").style.borderColor="#FF0000";

	}
	else if(document.getElementById("txtCellPhoneNumberId").value.length<10){   
	document.getElementById("errorCellPhoneNumberId").innerHTML="Mobile Number should be a 10 digit number";
	document.getElementById("txtCellPhoneNumberId").style.borderColor="#FF0000";
	}
	else
	{ 
	document.getElementById("errorCellPhoneNumberId").innerHTML="";
    document.getElementById("txtCellPhoneNumberId").style.borderColor="green";	
	}
	}

    
//Address Line 1
	
	function addressLine1()
	{
	if(document.getElementById("txtAddressLineId").value=="")
	{   
	document.getElementById("errorAddressLineId").innerHTML="Address Line 1 Required";
	document.getElementById("txtAddressLineId").style.borderColor="#FF0000";

	}
	else
	{
	document.getElementById("errorAddressLineId").innerHTML="";
    document.getElementById("txtAddressLineId").style.borderColor="green";	
	}
	}
//Pin code
	function pinCode()
	{
	if(document.getElementById("txtSelectPinCodeId").value==""){   
	document.getElementById("errorSelectPinCodeId").innerHTML="Pin Code Required";
	document.getElementById("txtSelectPinCodeId").style.borderColor="#FF0000";
	valid=false;
	}
	else if(document.getElementById("txtSelectPinCodeId").value.length<6){   
	document.getElementById("errorSelectPinCodeId").innerHTML="Pin Code should be a 6 digit number";
	document.getElementById("txtSelectPinCodeId").style.borderColor="#FF0000";
	valid=false;
	} 
	else{
	document.getElementById("errorSelectPinCodeId").innerHTML="";
    document.getElementById("txtSelectPinCodeId").style.borderColor="green";	
	}
	}
	
//select state
	function state()
	{
	if(document.getElementById("txtSelectStateId").value=="0")
	{   
	document.getElementById("errorSelectStateId").innerHTML="State Name Required";
	document.getElementById("txtSelectStateId").style.borderColor="#FF0000";
	}
	else
	{ 
	document.getElementById("errorSelectStateId").innerHTML="";
    document.getElementById("txtSelectStateId").style.borderColor="green";	
	}
	}
	
//select City
	function city()
	{
	if(document.getElementById("txtSelectCityId").value=="0")
	{   
	document.getElementById("errorSelectCityId").innerHTML="District Name Required" ;
	document.getElementById("txtSelectCityId").style.borderColor="#FF0000";
	}
	else
	{
	document.getElementById("errorSelectCityId").innerHTML="";
    document.getElementById("txtSelectCityId").style.borderColor="green";	
	}
	}
	function restrict(e)
	{
		try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode >= 1 && charCode <= 300)) {
                    return false;
                }
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
	}