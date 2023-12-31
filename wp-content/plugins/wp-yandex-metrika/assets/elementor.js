jQuery(function($) {
	const {counters} = window.wpym;

	$('form.elementor-form').on('submit', function (e, data) {
		if ($(e.target).find('input[type=email], input[type=tel]').length > 0) {
			counters.forEach(counter => {
				ym(counter.number, 'reachGoal', 'ym-submit-leadform');
			});
		}
	});

	$('div[data-widget_type^=paypal-button] form').on('submit', function (e) {
		counters.forEach(counter => {
			ym(counter.number, 'reachGoal', 'ym-purchase');
		});
	})
});
