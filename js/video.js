
;(function($, undefined) {

	/* trigger when page is ready */
	$(document).ready(function() {
		$('.reel video').on('ended', function() {
			$(this).parent().find('.pause').removeClass('pause hidden');
		});

		$('.play').click(function(event){
			event.preventDefault();
			var $self = $(this);
			var timeout = null;

			function createTimeout() {
				timeout = setTimeout(function() {
					timeout = null;
					$self.addClass('hidden');
				}, 1000);
			}

			function onMouseMove() {
				$self.removeClass('hidden');
				if (timeout) {
					clearTimeout(timeout);
				}
				createTimeout();
			}

			if ( $self.hasClass('pause') ){
				if (timeout) {
					clearTimeout(timeout);
					timeout = null;
				}
				$self.removeClass('pause');
				$self.parent().find('video').get(0).pause();
				$('body').off('mousemove', onMouseMove);
				$self.removeClass('hidden');
			}
			else {
				$self.addClass('pause');
				$self.parent().find('video').get(0).play();
				$('body').on('mousemove', onMouseMove);
				createTimeout();
			}

		});

	});

})(window.jQuery);