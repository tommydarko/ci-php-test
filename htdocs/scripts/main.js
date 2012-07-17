require(["helper/util"], function(util) {
	
	var target = document.getElementById("clickMe");
	
	target.addEventListener("click", function(event){
		alert(util.message);
	});
});