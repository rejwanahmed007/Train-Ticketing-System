"use strict";
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
	var regexp = /( )/i;
	value = value.toString();
	if(value.search(regexp) > 0)
	{
		return false; // there is space in the string/context;
	}
	else
	{
		return true; //there is no space in the string/context;
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