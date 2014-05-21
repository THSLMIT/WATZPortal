$(document).ready(function(){
	$(".setup").html(getSource(0)).hide().fadeIn('slow');
});

var stp = 1;

/* Step Controller */
function swapStep(swap_to) {
	$(".setup").delay(300).fadeOut('slow', function() {
		$(".setup").empty();
		$(".setup").html(getSource(swap_to)).fadeIn('slow');
	});
}

/* Source Extraction */
function getSource(swap_to) {
	switch(swap_to++) {
		case 0:
			return step = "<section id='header' class='dark'><header><h1>Welcome</h1><h2>This interactive process will help you easily setup your device.</h2><h2>Please follow the on-screen instructions exactly.</h2></header><footer><a class='button'>Start</a></footer></section>";
			break;
		case 1:
		    return step = "";
		    break;
	}
}
