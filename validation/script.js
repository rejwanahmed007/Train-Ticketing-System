"use strict"
function IsNumber(value)
{
	if(isNaN(value))
    {
    	return false; //not a number;
    }
    else
    {
    	return true; //valid number;
    }
}
function IsEmailValid(value)
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(reg.test(value.toString()) == false)
	{
		return false; //invalid email address
	}
	else
	{
		return true; //valid email
	}
}
function HasSpace(value)
{
	

	value = value.toString();
	var x = value.trim().length;
	var y = value.length;
	if(x==y)
	{
		var regexp = /( )/i;
		if(value.search(regexp) > 0)
	    {
		    return false; // there is space in the string/context;
	    }
	    else
	    {
		    return true; //there is no space in the string/context;
	    }
	}
	else
	{
		return false;
	}
	
}
function IsMobileNoValid(value)
{
	value = value.toString();
	if(value.length == 11)
	{
		var mob = value.substring(0, 3);
		if(mob=="011" || mob=="013" || mob=="014" || mob=="015" || mob=="016" || mob=="017" || mob=="018" || mob=="019" )
		{
			if(HasSpace(value) && IsNumber(value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;  //incorrect mobile number ;
	}
}
function IsNullOrWhiteSpace(value)
{
	value = value.toString();
	if(!value || !value.trim())
	{
		return false; //null or white space exists;
	}
	else
	{
		return true; // not null;
	}
}