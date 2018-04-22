$(function() {

	  // $(".untoggled").click(function() {
		// $(this).removeClass('untoggled').addClass('toggled');
		// $("#nav-container").css("margin-bottom", "1rem");
		// alert("button click to open");  
		// });
		
		// $(".toggled").click(function() {
		// $(".toggled").addClass('untoggled').removeClass('toggled');
		// $("#nav-container").css("margin-bottom", "-2rem");
		// alert("button click to close");  
		// });


		//REMOVE -x TO ACTUATE
			$(document).on('click', '.untoggled', function() {
				//alert('OPENING');
				$(this).removeClass('untoggled').addClass('toggled');
				$("#nav-container-x").css("margin-bottom", "1rem");
			});
			
			$(document).on('click', '.toggled', function() {
				//alert('CLOSING');
				$(this).removeClass('toggled').addClass('untoggled');
				$("#nav-container-x").css("margin-bottom", "-2rem");
			});
});