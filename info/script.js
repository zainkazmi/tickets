$("#tab-speeding").click(function(){
	removeAllClass();
	$("#tab-speeding").addClass("activeOn");
	$("#speeding").css("display","block");
});
$("#tab-traffic").click(function(){
	removeAllClass();
	$("#tab-traffic").addClass("activeOn");
	$("#traffic").css("display","block");
});
$("#tab-parking").click(function(){
	removeAllClass();
	$("#tab-parking").addClass("activeOn");
	$("#parking").css("display","block");
});
$("#tab-filing").click(function(){
	removeAllClass();
	$("#tab-filing").addClass("activeOn");
	$("#filing").css("display","block");
});

function removeAllClass(){
	$("#tab-speeding").removeClass("activeOn");
	$("#speeding").css("display","none");
	$("#tab-traffic").removeClass("activeOn");
	$("#traffic").css("display","none");
	$("#tab-parking").removeClass("activeOn");
	$("#parking").css("display","none");
	$("#tab-filing").removeClass("activeOn");
	$("#filing").css("display","none");
}