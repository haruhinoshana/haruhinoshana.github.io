$(document).ready(function(){
	
$(window).ready(function(e){
      $.each($('div.progress-bar'),function(){
        $(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
      });
});

});
