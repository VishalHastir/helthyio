
$(document).ready(function(){
	$(".gender-radio").on("click",function(){
		//cookie code here
		var val = $('input:radio[name=gender-radio]:checked').val();
		saveToCookie("gender",val);

		//show next element code
		showNextDietQuestionModule("select-gender");
	});
});

function saveToCookie(key,value){
	alert(JSON.parse(localStorage.getItem(key)));
	localStorage.setItem(key, JSON.stringify(value));
	alert(JSON.parse(localStorage.getItem(key)));
}

function showNextDietQuestionModule(className){
	$("."+className).addClass("hidden");
    $("."+className).nextAll("div").eq(0).removeClass("hidden");
}

function showPreviousDietQuestionModule(){
    $("."+className).addClass("hidden");
    $("."+className).prevAll("div").eq(0).removeClass("hidden");               

}
