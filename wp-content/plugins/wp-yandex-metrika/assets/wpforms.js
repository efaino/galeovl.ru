jQuery(function($) {
	const {counters} = window.wpym;

	$(document.body).on('wpformsAjaxSubmitSuccess', function (e) {
		if ($(e.target).find('input[type=email], input[type=tel]').length > 0) {
			counters.forEach(counter => {
				ym(counter.number, 'reachGoal', 'ym-submit-leadform');
			});
		}
	});
});
