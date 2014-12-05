(function() {
	//ajax-form
	var form = document.getElementsByTagName('form')[0];

	document.getElementById('submit-form').addEventListener('click', function() {
      document.forms[0].submit(); 
   	});

	//If the form is successfully submitted
	if(document.contains(form)) {
		form.addEventListener('submitted', function(e) {
    		console.log("here");
	        if (event.detail.status > 299) {
	            // submit has failed
	        }
	    });
	}
}());