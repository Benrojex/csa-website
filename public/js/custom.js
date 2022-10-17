function acceptDisc(acceptCheck,btnDownload)
{	
	var check=document.getElementById(acceptCheck).checked;
	if(check==true){
		document.getElementById(btnDownload).disabled=false;
		document.getElementById(btnDownload).style.backgroundColor = "skyblue";
		document.getElementById("mForm").style.display= "inline";

	}else{
		//document.getElementById(btnDownload).disabled=true;
		document.getElementById(btnDownload).style.backgroundColor = "red";
		//document.getElementById("mForm").style.display = "none";
	}
}

function showMessage(){
	document.getElementById("message").style.display= "inline";
}