window.setTimeout(function () {
	$("#alert_message").fadeTo(500, 0).slideUp(500, () => {
		$(this).remove();
	});
}, 3000);
