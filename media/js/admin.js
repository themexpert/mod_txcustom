(function ($) {
  function toggleSource(){
    var val = $('#jform_params_source input[type=radio]:checked', '#module-form').val();
		if(val == 'icon'){
      $('#jform_params_icon').parent().parent().parent().show();

      $('#jform_params_image').parent().parent().parent().hide();
      $('#jform_params_video').parent().parent().hide();
      $('#jform_params_video_prev').parent().parent().parent().hide();
    }else if(val == 'image'){
      $('#jform_params_image').parent().parent().parent().show();

      $('#jform_params_icon').parent().parent().parent().hide();
      $('#jform_params_video').parent().parent().hide();
      $('#jform_params_video_prev').parent().parent().parent().hide();
    }else if(val == 'video'){
      $('#jform_params_video').parent().parent().show();
      $('#jform_params_video_prev').parent().parent().parent().show();

      $('#jform_params_icon').parent().parent().parent().hide();
      $('#jform_params_image').parent().parent().parent().hide();
    }else{
      $('#jform_params_video').parent().parent().hide();
      $('#jform_params_icon').parent().parent().parent().hide();
      $('#jform_params_image').parent().parent().parent().hide();
      $('#jform_params_video_prev').parent().parent().parent().hide();
    }
  }
	$(document).on("click", "label[for^='jform_params_source']", function(){
    toggleSource();
	});
  //onload
	$(function(){
		toggleSource();
	});


}(jQuery));
