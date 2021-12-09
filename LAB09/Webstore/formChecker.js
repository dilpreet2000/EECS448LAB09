function validate()
{
var good=false;
var size="n";

var username=document.getElementById("user").value;
var password=document.getElementById("pass").value;

var lead=document.getElementById("lead").value;
var paper=document.getElementById("paper").value;
var folder=document.getElementById("folder").value;

var shipping=document.getElementsByName("ups");

	//Checking the size of the array given via a radio button(s)
	for(var i=0; i<shipping.length;i++)
	{
		if(shipping[i].checked)
		{
			size=shipping[i].value;
		}
	}
	if(username.indexOf('@') < 0)
	{
		alert("Please enter in a email. (Page refreshing)");
		good=true;
	}
	if(password.length == 0)
	{
		alert("Enter in a password (Page refreshing)");
		good=true;
	}
	if(lead.length == 0)
	{
		alert("Enter in an amount of pencil lead. (Page refreshing)");
		good=true;
	}
	if(paper.length == 0)
	{
		alert("Enter in an amount of paper. (Page refreshing)");
		good=true;
	}
	if(folder == 0)
	{
		alert("Enter in an amount of folders. (Page refreshing)");
		good=true;
	}
	if(size == "n")
	{
		alert("Select a shipping option. (Page refreshing)");
		check=true;
	}
	if(good == true)
	{
		good==false;
		document.getElementById("CART").action="customerFrontend.html";
	}
	
}