$(document).ready(function() {
	var img;
	$('#usewebcam').on('click',function(){
		$(".dues").hide();
	    $("#webcam").scriptcam({
	    	path:"http://"+window.location.hostname+'/HJM/app/js/scriptcam/',
	    	onError: oopsError,
	    	disableHardwareAcceleration:1,
	        onWebcamReady: showHWA
	    });
	    
	    $("#capture").show();
	    $('#usewebcam').hide();
	    $('#hidewebcam').show();
	    
	});

	$('#hidewebcam').on('click',function(){
		$('#webcam').hide();
		$("#capture").hide();
		$(".dues").show();
		$('#hidewebcam').hide();
		$('#usewebcam').show();
		$('.recapture').hide();
		$('#webcam2').hide();
	})

	$('#capture').on('click',function(){
		$('#capture').hide();
		$('.recapture').show();

		$('#webcam2').html();
		$('#webcam').hide();
		img = $.scriptcam.getFrameAsBase64();
		$('#webcam2').html('<img src="data:image/png;base64,'+img+'"/>');
		$('#webcam2').show();
	});

	$('#recapture').on('click',function(){
		$('.recapture').hide();
		$('#capture').show();
		$('#webcam').show();
		$('#webcam2').hide();
		$('#webcam2').html();
	});

	$('#save').on('click',function(){
		alert("Picture Saved!");
		$('#base64image').text('data:image/png;base64,'+img);
	});
    

	


});
function showHWA() {

    	// alert($.scriptcam.hardwareacceleration());

};
function getSnapshot() {
	 $('#webcam').html('<img src="data:image/png;base64,'+$.scriptcam.getFrameAsBase64()+'"/>');

			// alert($.scriptcam.getFrameAsBase64());
};
function oopsError(errorId,errorMsg) {
	if(errorId==3){
		$('#hidewebcam').trigger('click');
	}
	alert(errorMsg);
}