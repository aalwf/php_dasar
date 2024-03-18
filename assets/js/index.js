$(function() {
	
	/* sparkeline chart */
	$('#sparkel2').sparkline('html', {
		lineColor: '#f09819',
		lineWidth: 1.5,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(240, 152, 25, 0.09) ',
		chartRangeMin: 0,
		chartRangeMax: 10,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	$('#sparkel3').sparkline('html', {
		lineColor: '#3cba92',
		lineWidth: 1.5,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(60, 186, 146, 0.09) ',
		chartRangeMin: 0,
		chartRangeMax: 10,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	


	/* p-scroll */
	const ps3 = new PerfectScrollbar('.Activity-scroll', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	
   
   
   // Header-fixed
	$(window).on("scroll", function() {
		if($(window).scrollTop() > 50) {
			$(".main-header").addClass("header-sticky");
		} else {
			//remove the background property so it comes transparent again (defined in your css)
		   $(".main-header").removeClass("header-sticky");
		}
	});

});
/* Chartjs (#project-budget) opened */
function project(){
		
	var canvas = document.getElementById("project-budget");
	var areaData = {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
		datasets: [{
		data: [0, 150, 65, 160, 70, 130, 70, 120],
		backgroundColor: [
			'rgba(251, 73, 102,.5)'
		],
		borderColor: [
			'rgba(251, 73, 102,.8)'
		],
		borderWidth: 2,
		fill: 'origin',
		label: "total budget"
	},
	{
		data: [50, 90, 210, 90, 150, 75, 200, 70],
		backgroundColor: [
			hexToRgba(myVarVal, 0.4)
		],
		borderColor: [
			hexToRgba(myVarVal, 0.9)
		],
		borderWidth: 2,
		fill: 'origin',
		label: "amount"
	  }
	]
  };
  var areaOptions = {
	responsive: true,
	maintainAspectRatio: true,
	scales: {
		xAxes: [{
			display: true,
			ticks: {
				display: true,
				fontColor: "#8e9cad",
				fontSize: "13",
			},
			gridLines: {
				display: true,
				drawBorder: false,
				color: 'rgb(193, 184, 184,0.2)',
				zeroLineColor: '#000'
			}
		}],
		yAxes: [{
		display: false,
		ticks: {
			display: true,
			autoSkip: false,
			maxRotation: 0,
			stepSize: 15,
			min: 0,
			max: 250
		}
	  }]
	},
	legend: {
	  display: false
	},
	tooltips: {
	  enabled: true
	},
	elements: {
	  line: {
		tension: .3
	  },
	  point: {
		radius: 0
	  }
	}
  }
	var salesChartCanvas = $("#project-budget").get(0).getContext("2d");
	var salesChart = new Chart(salesChartCanvas, {
		type: 'line',
		data: areaData,
		options: areaOptions
	});


}
/* Chartjs (#project-budget) closed */

/* Chartjs (#chartDonut) */
function chart(){
	
		var ctx = document.getElementById("chartDonut").getContext("2d");
		ctx.canvas.width =170;
		ctx.canvas.height = 170;
		var gradientStrokeone = ctx.createLinearGradient(0, 0, 0, 1);
		gradientStrokeone.addColorStop(0, [myVarVal]);
		gradientStrokeone.addColorStop(1, [myVarVal]);
		var gradientLegendone = 'linear-gradient(45deg,#3858f9,#8e79fd)';
  
		var gradientStroketwo = ctx.createLinearGradient(0, 0, 0, 200);
		gradientStroketwo.addColorStop(0.68, 'rgb(245, 60, 91)');
		gradientStroketwo.addColorStop(1, 'rgba(251, 118, 140, .9)');
		var gradientLegendtwo = 'linear-gradient(145deg, rgba(245, 60, 91, 5), rgba(251, 118, 140, 1))';
		
		var gradientStrokethree = ctx.createLinearGradient(0, 0, 0, 80);
		gradientStrokethree.addColorStop(1, 'rgb(11, 163, 96)');
		gradientStrokethree.addColorStop(0, 'rgba(60, 186, 146,0.8)');
		var gradientLegendtwo = 'linear-gradient(145deg, rgba(11, 163, 96, 5), rgba(60, 186, 146, 1))';
		
		var draw = Chart.controllers.doughnut.prototype.draw;
		  Chart.controllers.doughnut = Chart.controllers.doughnut.extend({
		  draw: function() {
			  draw.apply(this, arguments);
			  let ctx = this.chart.chart.ctx;
			  let _fill = ctx.fill;
			  ctx.fill = function() {
				  ctx.save();
				  ctx.shadowColor = 'rgba(0,0,0,.2)';
				  ctx.shadowBlur = 1;
				  ctx.shadowOffsetX = 1;
				  ctx.shadowOffsetY = 1;
				  _fill.apply(this, arguments)
				  ctx.restore();
			  }
		  }
	   });
		var ChartData = {
		  datasets: [{
			data: [10, 60, 30],
		   backgroundColor: [
			 [myVarVal],'#f09819','#3cba92'
		   ],
			hoverBackgroundColor: [
			 [myVarVal],'#f09819','#3cba92'
			],
			borderColor:[
			 [myVarVal],'#f09819','#3cba92'
		   ],
			legendColor: [
			  gradientLegendone,
			  gradientStroketwo,
			  gradientStrokethree
			]
		  }],
	  
		  // These labels appear in the legend and in the tooltips when hovering different arcs
		  labels: [
			'Executive',
			'Ordinary',
			'Other',
		  ]
		};
		var gradientChartOptions = {
		  responsive: false,
		  maintainAspectRatio: true,
		  showScale: false,
		  animation: {
			animateScale: true,
			animateRotate: true
		  },
		  legend: false,
		  cutoutPercentage: 75
		};
	  
		var gradientChartCanvas = $("#chartDonut").get(0).getContext("2d");
		var gradientChart = new Chart(gradientChartCanvas, {
		  type: 'doughnut',
		  data: ChartData,
		  options: gradientChartOptions,
		});
		$("#chartDonut").html(gradientChart.generateLegend()); 
  

}
	
/* Chartjs (#chartDonut) closed */

function sparkel(){	
	$('#sparkel1').sparkline('html', {
		lineColor: hexToRgba(myVarVal, 0.9),
		lineWidth: 1.5,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: hexToRgba(myVarVal, 0.1),
		chartRangeMin: 0,
		chartRangeMax: 10,
		width: '100%',
		height: 30,
		disableTooltips: true
	});

}