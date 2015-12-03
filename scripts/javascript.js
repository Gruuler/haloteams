var $ = function(x) {
	return document.getElementById(x);
}

var search = function(){
	$('spartan').
	if($('name').value != "") {
		var name = $('name').value;

	}else{

	}

var findSpartan = function(x) {
	var size = 256;
  var url = "https://www.haloapi.com/profile/h5/profiles/"+ x +"/emblem[?size][?";
  var products = document.createElement("div");
  products.setAttribute("id","products"); 
  var xmlHttp = createXMLHttp();
  xmlHttp.open("GET",url);
  xmlHttp.send();
  var results = "";
  xmlHttp.onreadystatechange = function() {
    if(xmlHttp.readyState == 4) {
      var rows = JSON.parse(xmlHttp.responseText); 
      for(i=0; i<rows.length; i++) {
        var temp = createDiv(rows[i]["pId"],rows[i]["name"],rows[i]["description"],rows[i]["price"],rows[i]["picture"]);
        products.appendChild(temp);
      }
    }
  }
  $("productList").appendChild(products);
}

}