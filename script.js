$(document).ready(function() {
	var result;
	var insert = '';
	resultKard();
	$("#record").click(
		function(){
			recordKard('ajax_form', 'guestbook/index.php');
			return false; 
		}
	);
})

// вывод карточек из БД 
function resultKard() {
    $.ajax({
        url:     "guestbook/index.php", 
        type:     "GET", 
        dataType: "html",
        success: function(data){
			result = $.parseJSON(data);
			giveKard(data)},
    	error: function(data) { 
    		document.getElementById('messages').innerHTML = "Ошибка. Данные не отправленны.";
    	}
 	});
}

// обработка формы 
function recordKard(ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response){ 
		resultKard();
    	},
    	error: function(response) { 
			alert('Данные не отправлены');
    		document.getElementById('messages').innerHTML = "Ошибка. Данные не отправленны.";
    	}
 	});
}

function giveKard(data) { 
	var insert = '';
	for (key in result){
		insert = insert + "<section class='form-group col-12 col-md-6 col-xl-4'><div class='kard-top'>"
		+ result[key].name + "</div><div class='kard-body'><div class='kard-mail'>" 
		+ result[key].email + "</div>" 
		+ result[key].comment + "</div></section>";
	}
    document.getElementById('messages').innerHTML = insert;
}