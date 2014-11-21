$(document).foundation();

$('.firstAccordSave').click(function() {
	/* Act on the event */
	$('#panel2b').parent().addClass('active');
	$('#panel2b').addClass('active');
	$('#panel1b').removeClass('active');
	$('#panel1b').parent().removeClass('active');
});
$('.secondAccordSave').click(function() {
	/* Act on the event */
	$('#panel3b').parent().addClass('active');
	$('#panel3b').addClass('active');
	$('#panel2b').removeClass('active');
	$('#panel2b').parent().removeClass('active');
});
$('.thirdAccordSave').click(function() {
	/* Act on the event */
	$('#panel4b').parent().addClass('active');
	$('#panel4b').addClass('active');
	$('#panel3b').removeClass('active');
	$('#panel3b').parent().removeClass('active');
});
$('.fourthAccordSave').click(function() {
	/* Act on the event */
	$('#panel5b').parent().addClass('active');
	$('#panel5b').addClass('active');
	$('#panel4b').removeClass('active');
	$('#panel4b').parent().removeClass('active');
});