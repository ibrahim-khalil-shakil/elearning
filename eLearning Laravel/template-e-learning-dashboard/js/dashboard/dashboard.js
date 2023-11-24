(function($) {
    /* "use strict" */


 var eduMin = function(){
	
	var screenWidth = $(window).width();
	
	var morrisBarStalked = function(){
		if(jQuery('#morris_bar_stalked').length > 0)
		{	
			//bar chart
			Morris.Bar({
				element: 'morris_bar_stalked',
				data: [{
					y: 'S',
					a: 66, 
					b: 34
				}, {
					y: 'M',
					a: 75, 
					b: 25
				}, {
					y: 'T',
					a: 50, 
					b: 50
				}, {
					y: 'W',
					a: 75, 
					b: 25
				}, {
					y: 'T',
					a: 50, 
					b: 50
				}, {
					y: 'F',
					a: 16, 
					b: 84
				}, {
					y: 'S',
					a: 70, 
					b: 30
				}, {
					y: 'S',
					a: 30, 
					b: 70
				}, {
					y: 'M',
					a: 40, 
					b: 60
				}, {
					y: 'T',
					a: 29, 
					b: 71
				}, {
					y: 'W',
					a: 44, 
					b: 56
				}, {
					y: 'T',
					a: 30, 
					b: 70
				}, {
					y: 'F',
					a: 60, 
					b: 40
				}, {
					y: 'G',
					a: 40, 
					b: 60
				}, {
					y: 'S',
					a: 46, 
					b: 54
				}],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['A', 'B'],
				barColors: ['#1367c8', "#F1F3F7"],
				hideHover: 'auto',
				gridLineColor: 'transparent',
				resize: true,
				barSizeRatio: 0.25,
				stacked: true, 
				behaveLikeLine: true, 
				// barRadius: [6, 6, 0, 0]
			});
		}
	}
	var morrisDonught = function(){
		if(jQuery('#morris_donught_2').length > 0)
		{
			//donught chart
			Morris.Donut({
				element: 'morris_donught_2',
				data: [{
					label: "\xa0 \xa0 Download Sales \xa0 \xa0",
					value: 12,

				}, {
					label: "\xa0 \xa0 In-Store Sales \xa0 \xa0",
					value: 30
				}, {
					label: "\xa0 \xa0 Mail-Order Sales \xa0 \xa0",
					value: 20
				}],
				resize: true,
				colors: ['#1367c8', '#1367c8', '#1367c8']
			});
		}
	}
	
	var morrisArea = function(){
		if(jQuery('#morris_area').length > 0)
		{
			
			//area chart
			Morris.Area({
				element: 'morris_area',
				data: [{
						period: '2001',
						smartphone: 0,
						windows: 0,
						mac: 0
					}, {
						period: '2002',
						smartphone: 90,
						windows: 60,
						mac: 25
					}, {
						period: '2003',
						smartphone: 40,
						windows: 80,
						mac: 35
					}, {
						period: '2004',
						smartphone: 30,
						windows: 47,
						mac: 17
					}, {
						period: '2005',
						smartphone: 150,
						windows: 40,
						mac: 120
					}, {
						period: '2006',
						smartphone: 25,
						windows: 80,
						mac: 40
					}, {
						period: '2007',
						smartphone: 10,
						windows: 10,
						mac: 10
					}


				],
				lineColors: ['#5aa1f2', '#2176d8', '#1565c0'],
				xkey: 'period',
				ykeys: ['smartphone', 'windows', 'mac'],
				labels: ['Phone', 'Windows', 'Mac'],
				pointSize: 0,
				lineWidth: 2,
				resize: true,
				fillOpacity: 1,
				behaveLikeLine: true,
				gridLineColor: 'transparent',
				hideHover: 'auto'

			});
		}
	}
	
	
	
	/* Function ============ */
	return {
		init:function(){
		
		},
			
		load:function(){
			morrisBarStalked();
			morrisDonught();
			morrisArea();
		},
		
		resize:function(){
			
		}
	}
	
	}();
	
	var direction =  getUrlParams('dir');
		if(direction != 'rtl')
		{direction = 'ltr'; }
	
	var dlabSettingsOptions = {
		typography: "roboto",
			version: "light",
			layout: "Vertical",
			headerBg: "color_14",
			navheaderBg: "color_14",
			sidebarBg: "color_13",
			sidebarStyle: "modern",
			sidebarPosition: "static",
			headerPosition: "static",
			containerLayout: "full",
			direction: direction
	};

	jQuery(document).ready(function(){		
		new dlabSettings(dlabSettingsOptions); 
	});
	
	
	
	

	
	jQuery(window).on('load',function(){
		eduMin.load();
	});

	jQuery(window).on('resize',function(){
		new dlabSettings(dlabSettingsOptions); 
	}); 


})(jQuery);
