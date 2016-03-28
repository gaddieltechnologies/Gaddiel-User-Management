//------FORM VALIDATION------//

//----ALPHABETS ONLY VALIDATION----//
 var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function AlphaOnly(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode || keyCode==46 || keyCode==39 || keyCode==32));            
            return ret;
        }
//-----END---------//	

//-----NUMERIC ONLY VALIDATION---------//
	 function onlyNos(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 44 || charCode==44) {
                    return false;
                }
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
//-----END---------//

//---DONT ALLOW ANY LETTER IN TEXT FIELD FOR DATE PICKER FIELD---//
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
	
//--------END------//

//-------EMAIL VALIDATION----//

function emailCheck()
{
	var email = document.getElementById('txtMailAddressId');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(document.getElementById('txtMailAddressId').value =="")
	{ 
		document.getElementById("errMsgMailAddressId").innerHTML="Email Address Required";
		document.getElementById("txtMailAddressId").style.borderColor="#FF0000";
	}
    else if (!filter.test(email.value)) 
	{
    document.getElementById("errMsgMailAddressId").innerHTML="Enter a Valid Email Address";
	document.getElementById("txtMailAddressId").style.borderColor="#FF0000";
	}
	else 
   {	
    document.getElementById("errMsgMailAddressId").innerHTML="";
    document.getElementById("txtMailAddressId").style.borderColor="green";	
   }
}
//--------END------//

//-----PINCODE VALIDATION---------//
function zipcode(){
var pattern = /^(?:\s*\d{6}\s*(?:,|$))+$/;
var testvalue = document.getElementById('txtPostalCodeId').value;
if(pattern.test(testvalue)){	
varcument.getElementById("errMsgPostalCodeId").innerHTML="";
	document.getElementById("txtPostalCodeId").style.borderColor="green";
return true;
}
 else {
document.getElementById("errMsgPostalCodeId").innerHTML="Incorrect Postal Code";
document.getElementById("txtPostalCodeId").style.borderColor="#FF0000";
return false;
}
}	

//-----END---------//

//------DATE PICKER FOR REQUIRED DATE-----//
$(function() 
	{
		$(".date").datepicker({ dateFormat: 'dd-M-y',maxDate: 0 }).bind("change",function(){
			var minValue = $(this).val();
			minValue = $.datepicker.parseDate("dd-M-y", minValue);
			minValue.setDate(minValue.getDate()+1);
			$("#to").datepicker( "option", "minDate", minValue );
		})
	});
//-----END---------//