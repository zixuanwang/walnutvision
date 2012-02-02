/**
 * some testing js functions
 */

var xmlHttp;
function calcSin(val)
{
	if(val.length == 0)
		{
		alert("must provide value")
		return
		}
	xmlHttp = GetXmlHttpObject();
	if(xmlHttp == null)
		{
		alert ("Browser does not support HTTP Request");
		return;
		}
	var calcActionUrl = "/frontend_dev.php/post/calcSin" + "?origVal=" + val;
	xmlHttp.onreadystatechange=stateChange;
	xmlHttp.open("GET",calcActionUrl,true);
	xmlHttp.send(null);
}
function stateChange()
{
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
		{
		document.getElementById("sinValText").innerHTML=xmlHttp.responseText;
		}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
