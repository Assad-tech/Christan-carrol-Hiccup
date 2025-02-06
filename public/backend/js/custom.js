$(document).ready(function(){

	var ApiUrl = "https://landmarkautotradeinc.com/api";
	   
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    $(document).on('change','#brand', function(){
    	var models = $('#models');
    	models.empty();
    	models.append('<option value="">Select Model</option>');
    	$.ajax({
    		type: 'GET',
    		url: ApiUrl + '/get-models',
    		data: {
    			brandid: $(this).val(),
    		},
    		success:function(result){
    			if(result.status == 200){
    				if(result.data.length > 0){
	    				$.each(result.data, function(i,v){
	    					models.append('<option value="'+ v.id +'">'+ v.name +'</option>');
	    				});
	    			}
    			}
    		}
    	});
    });

    $(document).ready(function(){
    	var brand = $('#edit-brand').val();
    	var models = $('#edit-models');
    	var model_id = $('#edit-models').data('model');
    	models.empty();
    	models.append('<option value="">Select Model</option>');
    	$.ajax({
    		type: 'GET',
    		url: ApiUrl + '/get-models',
    		data: {
    			brandid: brand,
    		},
    		success:function(result){
    			if(result.status == 200){
    				if(result.data.length > 0){
	    				$.each(result.data, function(i,v){
	    					if(v.id == model_id){
	    						models.append('<option value="'+ v.id +'" selected="selected">'+ v.name +'</option>');
	    					}else{
	    						models.append('<option value="'+ v.id +'">'+ v.name +'</option>');
	    					}
	    				});
	    			}
    			}
    		}
    	});

    	var year = $('#vehicle-year').data('year');
    	var color = $('#vehicle-color').data('color');
    	var doors = $('#vehicle-doors').data('doors');
    	var drive_side = $('#vehicle-drive-side').data('driveside');
    	var seats = $('#vehicle-seats').data('seats');
    	var fuel = $('#vehicle-fuel').data('fuel');
    	var wheel_drive = $('#vehicle-wheel-drive').data('wheeldrive');
    	var odometre = $('#vehicle-odometre').data('odometre');
    	$('#vehicle-year').find('option[value="' + year + '"]').attr("selected", true);
    	$('#vehicle-color').find('option[value="' + color + '"]').attr("selected", true);
    	$('#vehicle-doors').find('option[value="' + doors + '"]').attr("selected", true);
    	$('#vehicle-drive-side').find('option[value="' + drive_side + '"]').attr("selected", true);
    	$('#vehicle-seats').find('option[value="' + seats + '"]').attr("selected", true);
    	$('#vehicle-fuel').find('option[value="' + fuel + '"]').attr("selected", true);
    	$('#vehicle-wheel-drive').find('option[value="' + wheel_drive + '"]').attr("selected", true);
    	$('#vehicle-odometre').find('option[value="' + odometre + '"]').attr("selected", true);
    });

    $(document).on('change','#edit-brand', function(){
    	var models = $('#edit-models');
    	models.empty();
    	models.append('<option value="">Select Model</option>');
    	$.ajax({
    		type: 'GET',
    		url: ApiUrl + '/get-models',
    		data: {
    			brandid: $(this).val(),
    		},
    		success:function(result){
    			if(result.status == 200){
    				if(result.data.length > 0){
	    				$.each(result.data, function(i,v){
	    					models.append('<option value="'+ v.id +'">'+ v.name +'</option>');
	    				});
	    			}
    			}
    		}
    	});
    });

});