$(document).ready(function(){
	$("#subscribeForm").on("submit", function(e) {
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax({
			url: formURL,
			type: "POST",
			data: postData,
			success: function(data, textStatus, jqXHR) {
				$('#homeModal .modal-header .modal-title').html("EZYFX WELCOMES YOU!!!");
				$('#homeModal .modal-body').html(data);
				$("#subscribeBtn").remove();
			},
			error: function(jqXHR, status, error) {
				console.log(status + ": " + error);
			}
		});
		e.preventDefault();

		$("#subscribeBtn").on('click', function() {
			$("#subscribeForm").submit();
		});
	});
})