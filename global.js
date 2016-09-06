window.addEventListener("load", function() {

	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("individualsButton");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];


	// When the user clicks the button, open the modal
	btn.addEventListener("mouseover", function() {
	    modal.style.display = "block";
	});

	// When the user clicks anywhere outside of the modal, close it
	btn.addEventListener("mouseleave", function(event) {
	    modal.style.display = "none";
	    
	});
});
