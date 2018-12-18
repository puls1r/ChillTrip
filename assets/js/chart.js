function Rekening(){
		var d=document.getElementById("bank");
		var displaytext=d.options[d.selectedIndex].value;
		document.getElementById("rekening").innerHTML=displaytext;
	}