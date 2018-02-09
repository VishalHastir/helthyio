
$(document).ready(function(){
	$(".gender-radio").on("click",function(){
		//cookie code here
		var val = $('input:radio[name=gender-radio]:checked').val();
		saveToCookie("gender",val);

		//show next element code
		showNextDietQuestionModule("select-gender");
	});

	$(".activity-radio").on("click",function(){
		//cookie code here
		var val = $('input:radio[name=activity-radio]:checked').val();
		saveToCookie("activity",val);

		//show next element code
		showNextDietQuestionModule("physical-activity");
	});

	$("#meat-continue").on("click",function(){
		//cookie code here
		var dataArray = [];
		$('input:checkbox[name=include-meat-checkbox]:checked').each(function(){
		    dataArray.push($(this).val());
		});
		
		saveToCookie("meatData",dataArray);

		//show next element code
		showNextDietQuestionModule("meat");
	});

	$("#veggies-continue").on("click",function(){
		//cookie code here
		var dataArray = [];
		$('input:checkbox[name=include-veggies-checkbox]:checked').each(function(){
		    dataArray.push($(this).val());
		});
		
		saveToCookie("veggiesData",dataArray);

		//show next element code
		showNextDietQuestionModule("veggies");
	});

	$("#fruits-continue").on("click",function(){
		//cookie code here
		var dataArray = [];
		$('input:checkbox[name=include-fruits-checkbox]:checked').each(function(){
		    dataArray.push($(this).val());
		});
		
		saveToCookie("fruitsData",dataArray);

		//show next element code
		showNextDietQuestionModule("fruits");
	});

	$("#products-continue").on("click",function(){
		//cookie code here
		var dataArray = [];
		$('input:checkbox[name=include-products-checkbox]:checked').each(function(){
		    dataArray.push($(this).val());
		});
		
		saveToCookie("productsData",dataArray);

		//show next element code
		showNextDietQuestionModule("products");
	});

	$(".routine-radio").on("click",function(){
		//cookie code here
		var val = $('input:radio[name=routine-radio]:checked').val();
		saveToCookie("dailyRoutine",val);

		//show next element code
		showNextDietQuestionModule("routine-radio");
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
