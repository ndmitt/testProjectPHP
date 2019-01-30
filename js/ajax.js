$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'ajaxform/save');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url, 
        type:     "POST",
        dataType: "html", 
        data: jQuery("#"+ajax_form).serialize(), 
        success: function(response) { 
            //console.log('res'+response);
        	result = jQuery.parseJSON(response);
            document.getElementById(result_form).innerHTML = result.inputFirstName+", данные успешно отправлены"
    	},
    	error: function(response) { //
    		document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});
}