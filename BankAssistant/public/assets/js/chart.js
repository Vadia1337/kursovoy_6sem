/*$(function() {
	'use strict';
	var ctx7 = document.getElementById('chartStacked2');
	new Chart(ctx7, {
		type: 'horizontalBar',
		data: {
			labels: ['Вклад'],
			datasets: [{
				data: [900],
				backgroundColor: '#705ec8',
				borderWidth: 1,
				fill: true
			}, {
				data: [14],
				backgroundColor:  'green',
				borderWidth: 1,
				fill: true
			}]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false,
				labels: {
					display: false
				}
			},
			scales: {
				yAxes: [{
					stacked: true,
					ticks: {
						beginAtZero: true,
						fontSize: 10,
						max: 80
					}
				}],
				xAxes: [{
					stacked: true,
					ticks: {
						beginAtZero: true,
						fontSize: 11
					}
				}]
			}
		}
	});
});*/