
jQuery(document).ready(function(){


		$('#calendario').DatePicker({
			flat: true,
			date: ['2010-09-01', '2010-09-10'],
			current: '2010-09-30',
			format: 'Y-m-d',
			calendars: 1,
			mode: 'multiple',


			starts: 0
		});
});
