/*
	Deferred startup Javascript
*/

(function($) {

	// MOBILE MENU
	var themeCSSPath = $('script').last().data('theme-root') + '/css/';

	skel.init({
		reset: 'full',
		breakpoints: {
			global:		{ range: '*', containers: 1400, grid: { gutters: 60 } },
			wide:		{ range: '-1680', containers: 1200, grid: { gutters: 60 } },
			normal:		{ range: '-1280', containers: 960, lockViewport: false },
			narrow:		{ range: '-980', containers: '95%', grid: { gutters: 50 } },
			narrower:	{ range: '-840', grid: { collapse: true } },
			mobile:		{ range: '-640', containers: '90%', grid: { gutters: 15 } }
		}
	}, {
		layers: {
			layers: {
				navPanel: {
					animation: 'pushX',
					breakpoints: 'narrower',
					clickToClose: true,
					height: '100%',
					hidden: true,
					html: '<div data-action="navList" data-args="nav"></div>',
					orientation: 'vertical',
					position: 'top-left',
					side: 'left',
					width: 275
				},
				titleBar: {
					breakpoints: 'narrower',
					height: 44,
					html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span><span class="title" data-action="copyHTML" data-args="logo"></span>',
					position: 'top-left',
					side: 'top',
					width: '100%'
				}
			}
		}
	});

	// DROPDOWN
	var	$window = $(window),
		$body = $('body');

	// Disable animations/transitions until page has loaded
	$body.addClass('loading');

	$window.on('load', function() {
		$body.removeClass('loading');
	});

	// Submenus
	// Documentation: https://github.com/ajlkn/jquery.dropotron
	$('#nav > ul').dropotron({
		offsetY: 0,
		offsetX: -58,
		expandMode: 'hover',
		hoverDelay: 0,
		hideDelay: 50,
		mode: 'slide',
		speed: 0,
		noOpenerFade: true,
	});

})(jQuery);