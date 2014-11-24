$(document).foundation();

$('.firstAccordSave').click(function() {
	/* Act on the event */
	$('#panel2b').parent().addClass('active');
	$('#panel2b').addClass('active');
	$('#panel1b').removeClass('active');
	$(".firstPanel .checked").show();
	$('#panel1b').parent().removeClass('active');
});
$('.secondAccordSave').click(function() {
	/* Act on the event */
	$('#panel3b').parent().addClass('active');
	$('#panel3b').addClass('active');
	$('#panel2b').removeClass('active');
	$('#panel2b').parent().removeClass('active');
	$("#goTopanel2b .checked").show();
});
$('.thirdAccordSave').click(function() {
	/* Act on the event */
	$('#panel4b').parent().addClass('active');
	$('#panel4b').addClass('active');
	$('#panel3b').removeClass('active');
	$('#panel3b').parent().removeClass('active');
	$("#goTopanel3b .checked").show();
});
$('.fourthAccordSave').click(function() {
	/* Act on the event */
	$('#panel5b').parent().addClass('active');
	$('#panel5b').addClass('active');
	$('#panel4b').removeClass('active');
	$('#panel4b').parent().removeClass('active');
	$("#goTopanel4b .checked").show();
});

$('.fifthAccordSave').click(function() {
	/* Act on the event */
	$('#panel6b').parent().addClass('active');
	$('#panel6b').addClass('active');
	$('#panel5b').removeClass('active');
	$('#panel5b').parent().removeClass('active');
	$("#goTopanel5b .checked").show();
	$(".hiddenObject").addClass('visible');
});

$('.lastAccordCancel').click(function() {
		$(".checked").hide();
		$(".hiddenObject").removeClass('visible');
});

$('.lastAccordSave').click(function() {
		var daddy = $('#panel6b').parent();
		var hidden = $('.contolsWrap.hiddenObject');
		if (daddy.hasClass('active')){
			$('#panel6b').parent().removeClass('active');
			$('#panel6b').removeClass('active');
			hidden.css('display', 'block');
			$("#goTopanel6b .checked").show();
		}

});


/*logins bei erfolgreichen Dateneingabe weiterleiten & Spinner schalten*/
$('#login').on('valid.fndtn.abide', function () {
	var info = $('.spinner');
	if ( info.hasClass("hidden") ){
		info.removeClass("hidden");
	}
	setTimeout(function() {
		window.location.href  = "verifizierung"; 
		}, 1500);
   	 event.preventDefault()
  });

$('#verification').on('valid.fndtn.abide', function () {
	var info = $('.spinner');
	if ( info.hasClass("hidden") ){
		info.removeClass("hidden");
	}
	setTimeout(function() {
		window.location.href  = "zweitmeinung"; 
		}, 2000);
    	event.preventDefault()
  });



