$(document).ready(function(){
	$("#profile-page").on('click', function(){
		$(".profile-page").slideDown();
		$(".print-transcript").hide();
		$(".course-evaluation").hide();
		$(".eds-practical").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
		$(".course-registration").hide();
		$(".pay-fees").hide()
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();

	});
	$("#course-evaluation").on('click', function(){
		$(".profile-page").hide();
		$(".eds-practical").hide();
		$(".print-transcript").hide();
		$(".course-evaluation").slideDown();
		$(".pay-fees").hide();
		$(".course-registration").hide();
		$(".payment-history").hide();
		$(".add-drop").hide();
		$(".attendance-ca").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#pay-fees").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").slideDown();
		$(".eds-practical").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".print-transcript").hide();
		$(".course-registration").hide();
		$(".add-drop").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#payment-receipt").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").slideDown();
		$(".attendance-ca").hide();
		$(".print-transcript").hide();
		$(".eds-practical").hide();
		$(".course-registration").hide();
		$(".add-drop").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#attendance-ca").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".add-drop").hide();
		$(".print-transcript").hide();
		$(".eds-practical").hide();
		$(".course-registration").hide();
		$(".attendance-ca").slideDown();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#add-drop").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").slideDown();
		$(".eds-practical").hide();
		$(".course-registration").hide();
		$(".print-transcript").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#course-reg").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".eds-practical").hide();
		$(".course-registration").slideDown();
		$(".print-clearance").hide();
		$(".print-transcript").hide();
		$(".print-registration").hide();
	});
	$("#eds-practical").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".course-registration").hide();
		$(".eds-practical").slideDown();
		$(".print-transcript").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
	});
	$("#print-clearance").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".print-transcript").hide();
		$(".course-registration").hide();
		$(".eds-practical").hide();
		$(".print-clearance").slideDown();
		$(".print-registration").hide();
		
	});
	$("#print-reg").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".course-registration").hide();
		$(".eds-practical").hide();
		$(".print-clearance").hide();
		$(".print-transcript").hide();
		$(".print-registration").slideDown();
		
	});
	$("#print-transcript-unofficial").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".course-registration").hide();
		$(".eds-practical").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
		$(".print-transcript").slideDown();
		
	});
	$("#request-official-transcript").on('click', function(){
		$(".profile-page").hide();
		$(".course-evaluation").hide();
		$(".pay-fees").hide();
		$(".payment-history").hide();
		$(".attendance-ca").hide();
		$(".add-drop").hide();
		$(".course-registration").hide();
		$(".eds-practical").hide();
		$(".print-clearance").hide();
		$(".print-registration").hide();
		$(".print-transcript").hide();
		$("request-official").slideDown();
		
	});
	$("#200lvl").on('click', function(){
		$(".100-level-transcript").hide();
		$(".300-level-transcript").hide();
		$(".200-level-transcript").slideDown();
		$("#200lvl").addClass("active");
		$("#100lvl").removeClass("active");
		$("#300lvl").removeClass("active");
			
	});
	$("#100lvl").on('click', function(){
		$(".300-level-transcript").hide();
		$(".200-level-transcript").hide();
		$(".100-level-transcript").slideDown();
		$("#300lvl").removeClass("active");
		$("#100lvl").addClass("active");
		$("#200lvl").removeClass("active");	
	});
	$("#300lvl").on('click', function(){
		$(".200-level-transcript").hide();
		$(".100-level-transcript").hide();
		$(".300-level-transcript").slideDown();
		$("#100lvl").removeClass("active");
		$("#300lvl").addClass("active");
		$("#200lvl").removeClass("active");	
	});
	
	$("#assessment-btn").on('click', function(){
		$(".details").show();
		$(".assessment-btn-class").hide();
	});

	function printContent(el){
		var restorepage = $('body').html();
		var printcontent = $('#' + el).clone();
		$('body').empty().html(printcontent);
		window.print();
		$('body').html(restorepage);
		}
});