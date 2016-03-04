var userShippingRadioButton1;
var userShippingRadioButton2;
var userShippingRadioButton3;
var userMail;  			    
var userPassword; 		    
var userQuantity; 			

function checkInput()
{
	userMail  			     = document.getElementById("userEmail").value;
	userPassword 		     = document.getElementById("userPassword").value;
	userQuantity  			 = document.getElementById("userQuantity").value;
	userShippingRadioButton1 = document.getElementById("radio1");
	userShippingRadioButton2 = document.getElementById("radio2");
	userShippingRadioButton3 = document.getElementById("radio3");
	
	if(checkValidMail(userMail) && checkQuantities(userQuantity)
	  && checkPassword(userPassword) && checkShipping())
	{
		return true;
	}
	return false;
}

function checkValidMail(possibleMail)
{
	if(possibleMail.search("@") > 0)
	{
		if(possibleMail.search(".com") > possibleMail.search("@"))
		{
			return true;
		}
	}
	alert("Not a valid mail mate");
	return false;
}

function checkQuantities(quantities)
{
	if(quantities >= 0)
	{
		return true;
	}
	alert("Not a valid quantity mate");
	return false;
}

function checkPassword(password)
{
	if(password.length > 0)
	{
		return true;
	}
	alert("Not a valid password man");
	return false;
}

function checkShipping()
{
	if(userShippingRadioButton1.checked ||  userShippingRadioButton2.checked || userShippingRadioButton3.checked )
	{
		return true;
	}	
	alert("Must choose a shipping method dood");
	return false;
}