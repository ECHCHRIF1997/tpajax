function hot(){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET","hotPetition.php",true);
	xhttp.send(null);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("hot").innerHTML=xhttp.responseText;
			alert(xhttp.responseText);
		}
	};
}
setInterval(function(){hot();},200);
