$(function() {
	'use strict';
	$('#vmap').vectorMap({
		map: 'world_en',
		backgroundColor: 'rgb(227, 225, 245)',
		color: '#ffffff',
		hoverOpacity: 0.7,
		selectedColor: '#666666',
		enableZoom: true,
		showTooltip: true,
		scaleColors: ['#285cf7', '#007bff'],
		values: sample_data,
		normalizeFunction: 'polynomial'
	});
	$('#vmap2').vectorMap({
		map: 'usa_en',
		showTooltip: true,
		backgroundColor: '#285cf7',
		hoverColor: '#00cccc'
	});
	$('#vmap3').vectorMap({
		map: 'canada_en',
		color: '#212229',
		borderColor: '#fff',
		backgroundColor: 'rgb(227, 225, 245)',
		hoverColor: '#007bff',
		showLabels: true
	});
	$('#vmap7').vectorMap({
		map: 'germany_en',
		color: '#285cf7',
		borderColor: '#fff',
		backgroundColor: 'rgb(227, 225, 245)',
		hoverColor: '#285cf7',
		showLabels: true
	});
	
	$('#vmap8').vectorMap({
		map: 'russia_en',
		color: '#3db4ec',
		borderColor: '#fff',
		backgroundColor: 'rgb(227, 225, 245)',
		hoverColor: '#3db4ec',
		showLabels: true
	});
	
	$('#vmap9').vectorMap({
		map: 'france_fr',
		color: '#f10075',
		borderColor: '#fff',
		backgroundColor: 'rgb(227, 225, 245)',
		hoverColor: '#f10075',
		showLabels: true
	});
});