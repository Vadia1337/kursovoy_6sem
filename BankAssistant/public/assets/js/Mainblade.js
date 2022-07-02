document.addEventListener("DOMContentLoaded", function(event) {
if(document.querySelector(".btn-click-product")){ 
    document.querySelector(".btn-click-product").onclick = function(e){
        var btn = e.target || e.srcElement;
        
        let type = btn.id.substr(0, btn.id.indexOf("&&&"));
        let id = btn.id.substr(btn.id.indexOf("&&&")+3, btn.id.length);
        
        if(type == "Вклад"){
            document.location.href = '/vklad/' + id;
        }
        if(type == "Кредит"){
            document.location.href = '/kredit/' + id;
        }
        if(type == "Ипотека"){
            document.location.href = '/ipoteka/' + id;
        }
        
    }
}

});
document.addEventListener("DOMContentLoaded", function(event) {
if(arrayfromdb != ''){
    var prihod = [0, 0, 0, 0, 0, 0];
	var rashod = [0, 0, 0, 0, 0, 0];
	for(var i = 0; i < arrayfromdb.length; i++){
    if(arrayfromdb[i]['categ'] == 1){
		let datts = arrayfromdb[i]['startdate'];
		datts = datts.split(' Мес').join('');
		datts = Number(datts);
		for(var s = 0; s < datts; s++){
			prihod[s] = prihod[s] + Number(arrayfromdb[i]['platezh']);
		}
	}else if(arrayfromdb[i]['categ'] == 2){
		let datts = arrayfromdb[i]['startdate'];
		datts = datts.split(' Мес').join('');
		datts = Number(datts);
		for(var s = 0; s < datts; s++){
			rashod[s] = rashod[s] + Number(arrayfromdb[i]['platezh']);
		}
	}
	}
	var months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
	var date = new Date();


    'use strict';
	var ctx6 = document.getElementById('chartStacked1');
	new Chart(ctx6, {
		type: 'bar',
		data: {
			labels: [months[date.getMonth()], months[date.getMonth()+1], months[date.getMonth()+2], months[date.getMonth()+3], months[date.getMonth()+4], months[date.getMonth()+5]],
			datasets: [{
				data: prihod, //приход
				backgroundColor: '#705ec8',
				borderWidth: 1,
				fill: true
			}, {
				data: rashod, //расход
				backgroundColor:  '#fb1c52',
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
						fontSize: 11
					}
				}],
				xAxes: [{
					barPercentage: 0.5,
					stacked: true,
					ticks: {
						fontSize: 11
					}
				}]
			}
		}
	});
}
});