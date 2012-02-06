$(document).ready(function() {
	$('#s3slider').s3Slider( {
		timeOut: 3000
	});

});
	
function scrollBg() {
                
//Go to next pixel row.
current -= step;
                
//If at the end of the image, then go to the top.
if (current == restartPosition) {
	current = 0;
}
                
//Set the CSS of the header.
$('h1').css("background-position","0 "+current+"px");
}
            
