(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	
	var sparkBar2 = function(){
		if(jQuery('#spark-bar-2').length > 0 ){	
			$("#spark-bar-2").sparkline([33, 22, 68, 54, 8, 30, 74, 7, 36, 5, 41, 19, 43, 29, 38], {
				type: "bar",
				height: "140",
				width: 100,
				barWidth: 10,
				barSpacing: 10,
				barColor: "rgb(200, 255, 135)"
			});
		}	
	}	
	var sparkLineChart = function(){
		if(jQuery('#sparkline12').length > 0 ){
			//Pie
			$("#sparkline12").sparkline([24, 61, 51], {
				type: "pie",
				height: "100",
				resize: !0,
				sliceColors: ["#8d95ff", "#d7daff", "#c7cbff"]
			});
			
			$(".bar1").peity("bar", {
				fill: ["rgb(216, 196, 255)", "rgb(216, 196, 255)", "rgb(216, 196, 255)"],  
				width: "100%",
				height: "140"
			});
			
			$(".peity-line-2").peity("line", {
				fill: "#ff3232", 
				stroke: "#fac2c2", 
				width: "100%",
				strokeWidth: "3",
				height: "150"
			});
		}
	}
	var barChart = function(){
		if(jQuery('#barChart_2').length > 0 ){
		//gradient bar chart
			const barChart_2 = document.getElementById("barChart_2").getContext('2d');
			//generate gradient
			const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
			barChart_2gradientStroke.addColorStop(0, "rgba(141, 149, 255, 1)");
			barChart_2gradientStroke.addColorStop(1, "rgba(102, 115, 253, 1)");

			barChart_2.height = 100;

			new Chart(barChart_2, {
				type: 'bar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [65, 59, 80, 81, 56, 55, 40],
							borderColor: barChart_2gradientStroke,
							borderWidth: "0",
							backgroundColor: barChart_2gradientStroke, 
							hoverBackgroundColor: barChart_2gradientStroke
						}
					]
				},
				options: {
					legend: false, 
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}],
						xAxes: [{
							// Change here
							barPercentage: 0.5
						}]
					}
				}
			});
		}
	}
	var areaChart = function(){
		if(jQuery('#areaChart_1').length > 0 ){
			const areaChart_1 = document.getElementById("areaChart_1").getContext('2d');
			
			areaChart_1.height = 100;

			new Chart(areaChart_1, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: 'rgba(102, 115, 253, 1)',
							borderWidth: "3",
							backgroundColor: 'rgba(102, 115, 253, .2)', 
							pointBackgroundColor: 'rgba(102, 115, 253, 1)'
						}
					]
				},
				options: {
					legend: false, 
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true, 
								max: 100, 
								min: 0, 
								stepSize: 20, 
								padding: 10
							}
						}],
						xAxes: [{ 
							ticks: {
								padding: 5
							}
						}]
					}
				}
			});
		}
	}

		
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				sparkBar2();
				sparkLineChart();
				barChart();
				areaChart();
			},
			
			resize:function(){
				sparkBar2();
				sparkLineChart();
				barChart();
				areaChart();
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
		headerBg: "color_1",
		navheaderBg: "color_11",
		sidebarBg: "color_1",
		sidebarStyle: "full",
		sidebarPosition: "fixed",
		headerPosition: "fixed",
		containerLayout: "full",
		direction: direction
	};
	
	jQuery(document).ready(function(){
		new dlabSettings(dlabSettingsOptions); 
		
	});
		
	jQuery(window).on('load',function(){
		dzChartlist.load();
	});

	jQuery(window).on('resize',function(){
		dzChartlist.resize();
		new dlabSettings(dlabSettingsOptions); 
	});     
	

})(jQuery);