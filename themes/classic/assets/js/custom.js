/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
$(function(){
	$("#customer-form input[name='phone']").mask('+38-(099)-999-9999');

	$("#customer-form input[name='phone']").focus(function(){
		var withoutFirstSixNumbers = $("#customer-form input[name='phone']").val().slice(6);
		$("#customer-form input[name='phone']").val("+38-(0" + withoutFirstSixNumbers);
	});

	$("#customer-form input[name='phone']").keyup(function(){
		var withoutFirstSixNumbers = $("#customer-form input[name='phone']").val().slice(6);
		$("#customer-form input[name='phone']").val("+38-(0" + withoutFirstSixNumbers);
		
		
		console.log('keydown');
	});
});