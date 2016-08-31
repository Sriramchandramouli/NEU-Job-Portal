
(function($) {

$.fn.breadcrumbsGenerator = function(option) {
	return this.each(function() {
		new BreadcrumbsGenerator(this, option);
	});
};

function BreadcrumbsGenerator(elem, option) {
	this.elem = elem;
	this.option = this.setOption(option);
	this.main();
}

$.extend(BreadcrumbsGenerator.prototype, /** @lends BreadcrumbsGenerator.prototype */ {

	setOption: function(option) {
		return $.extend({
			sitemaps  : '#sitemaps',
			index_type: 'index.html'
		}, option);
	},


	main: function() {
		var target_path = window.location.pathname.split('/').pop();
		if (target_path == '') target_path = this.option.index_type;
		var target_elem = $(this.option.sitemaps).find('a[href*="' + target_path + '"]');

		// ホームへのリンクが存在する場合、prependに備えて退避させておく。
		var origin_elem = $(this.elem).children();
		$(this.elem).empty();

		var self = this;
		$(target_elem)
			.parentsUntil(sitemaps)
			.filter(':has(> a[href])')
			.each(function() {
				$('<li>')
					.append($(this).children('a').clone())
					.prependTo(self.elem);
			});

		$(this.elem).prepend(origin_elem);

		$(this.elem)
			.find('a[href*="' + target_path + '"]')
			.each(function() {
				$(this).parent().text($(this).text());
			});
	}
}); // end of "$.extend"

})( /** namespace */ jQuery);
