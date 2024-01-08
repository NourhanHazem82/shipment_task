$(document).ready(function() {
    "use strict";
    // $('<span class="asterisk">*</span>').insertBefore(':input[required]:not(.no-star)');

    $('.btn-delete').click(function(e) {
        e.preventDefault();
        var _this = $(this);
    	Swal.fire({
    		text: "هل انت متأكد من حذف هذا العنصر ؟",
    		icon: "error",
    		showCancelButton: true,
    		buttonsStyling: false,
    		confirmButtonText: "نعم",
    		cancelButtonText: "لا",
    		customClass: {
    			confirmButton: "btn font-weight-bold btn-primary",
    			cancelButton: "btn font-weight-bold btn-default"
    		}
    	}).then(function (result) {
            console.log(result);
            if(result.value){
                console.log(_this);
        		_this.parents('form').submit();
            }
    	});
    });

    $('.activeBtn').change(function(event){
        if(!$(this).is(':checked')){
        	if($('.activeBtn:checked').length == 0){
        		$(this).prop('checked',true);
        	}
        }
    });

});