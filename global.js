window.addEventListener("load", function() {

	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("individualsButton");

	// Get the <span> element that closes the modal
	var span = document.getElementById("individuals");

	// When the user clicks the button, open the modal
	btn.addEventListener("mouseover", function() {
	    modal.style.display = "flex";
	    span.innerHTML = "click to learn more";
	});

	// When the user clicks anywhere outside of the modal, close it
	btn.addEventListener("mouseleave", function(event) {
	    modal.style.display = "none"; 
	    span.innerHTML = "<i class='fa fa-plus-circle' aria-hidden='true'></i>&nbsp;Individuals";  
	});
});
