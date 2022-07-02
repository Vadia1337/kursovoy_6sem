function outputUpdate(val){
    if(val.toString().length <= 6){
        val = Math.round(val / 10000)*10000;
        document.getElementById("input-sum").value = Math.round(val/1000) + " 000 Р";
    }else if(val.toString().length >= 7){
        val = Math.round(val / 10000)*10000;
        var tis = val.toString().slice(1,4);
        var mln = val.toString().slice(0,1);

        document.getElementById("input-sum").value = mln + " " + tis + " 000 Р";
    } 

    let labl = document.querySelector(".name-label-set").innerHTML;
    if(labl == "Ипотека"){
        sumipot();
    }
}

function outputUpdate2(val){
    if(val.toString().length <= 6){
        val = Math.round(val / 10000)*10000;
        document.getElementById("input-sum2").value = Math.round(val/1000) + " 000 Р";
    }else if(val.toString().length >= 7){
        val = Math.round(val / 10000)*10000;
        var tis = val.toString().slice(1,4);
        var mln = val.toString().slice(0,1);

        document.getElementById("input-sum2").value = mln + " " + tis + " 000 Р";
    } 

    let labl = document.querySelector(".name-label-set").innerHTML;
    if(labl == "Ипотека"){
        sumipot();
    }
}

function sumipot(){
    let house = document.getElementById("input-sum").value;
    let vznos = document.getElementById("input-sum2").value;

    house = house.split(' ').join('');
    house = house.split('Р').join('');
    vznos = vznos.split(' ').join('');
    vznos = vznos.split('Р').join('');
    let sum = house - vznos;
    if(sum >= 0){
     document.querySelector(".sum-ipoteka").innerHTML = " "+sum+" Р";
    }else if(sum < 0){
        document.querySelector(".sum-ipoteka").innerHTML = " Стоимость жилья не может быть меньше, чем первоначальный взнос!";
    }
}


document.addEventListener("DOMContentLoaded", function(event) { 
    var rounded = function(number){
        return +number.toFixed(2);
    }
    document.querySelector(".body-plav-stavka").onclick = function(e){
        var btn = e.target || e.srcElement;
        if(btn.name == "plav-stavka-btn"){
            document.querySelector(".plav-stavka-ins").innerHTML = '<div class="row"><div class="col-sm-8"><div class="form-group"><label class="form-label">Добавте интервал(в месяцах)</label><div class="input-group"><input type="number" class="form-control input-plav-ot" placeholder="От"><input type="number" class="form-control input-plav-do" placeholder="До"></div></div></div><div class="col-sm-4"><div class="form-group"><label class="form-label">Ставка в %</label><input type="number" class="form-control input-plav-stavka" placeholder="Введите ставку"></div></div></div><div class="text-center"><button name="add-new-plav-stavka" type="button" class="btn btn-primary">Добавить <i class="fa fa-plus fa-spin ml-2"></i></button></div>';
            document.querySelector(".table-plav-stavka").setAttribute('style','display: block;')
        }
        if(btn.name == "add-new-plav-stavka"){
            var dateot = document.querySelector(".input-plav-ot").value;
            var datedo = document.querySelector(".input-plav-do").value;
            var datestavka = document.querySelector(".input-plav-stavka").value;

            document.querySelector(".input-plav-ot").value = '';
            document.querySelector(".input-plav-do").value = '';
            document.querySelector(".input-plav-stavka").value = '';

            let labl = document.querySelector(".name-label-set").innerHTML;

            if(labl == "Ипотека"){
                var sum = document.querySelector(".sum-ipoteka").textContent;
            }else{
                var sum = document.querySelector("#input-sum").value;
            }

            sum = sum.split(' ').join('');
            sum = sum.split('Р').join('');
            var pribil = (((datestavka/12) * (datedo - dateot))/100) * sum;
            pribil = rounded(pribil);
            var tbody = document.querySelector(".tbody-plav-stavka");
            tbody.innerHTML = tbody.innerHTML + '<tr><th scope="row">'+dateot+'</th><td>'+datedo+'</td><td>'+datestavka+'</td><td>'+pribil+'</td></tr>';
        }
        if(btn.name == "btn-nextprevnext"){
            
            if(document.querySelector(".input-plav-ot") == null){
                var instavka = document.querySelector(".input-vklad-stavka").value;
                var inselect = document.querySelector(".input-vklad-select").value;

                let labl = document.querySelector(".name-label-set").innerHTML;

                if(labl == "Ипотека"){
                   var sum = document.querySelector(".sum-ipoteka").textContent;
                }else{
                   var sum = document.querySelector("#input-sum").value;
                }
                sum = sum.split(' ').join('');
                sum = sum.split('Р').join('');
                var pribil = (((instavka/12) * inselect)/100) * sum;
                pribil = rounded(pribil);
            
                document.querySelector(".stavka-out").innerHTML = instavka + " %";
                document.querySelector(".srok-out").innerHTML = inselect + " Мес";
                document.querySelector(".pribil-out").innerHTML = pribil + " Руб";
                document.querySelector(".summ-out").innerHTML = (Number(sum) + Number(pribil)) + " Руб";

                if(labl == "Кредит" || labl == "Ипотека"){
                    document.querySelector(".platesh-out").innerHTML = rounded(((Number(sum) + Number(pribil))/inselect)) + " Руб/Мес";
                }

                updatechartjs(sum, pribil, labl);
                document.querySelector(".chart-js-11").setAttribute('style','display: block;')
            }else{
                var numbofrows = document.querySelector('.tbody-plav-stavka').getElementsByTagName('tr').length;
                var table = document.querySelector('.tab-plav-stavka');
                let labl = document.querySelector(".name-label-set").innerHTML;

                if(labl == "Ипотека"){
                   var sum = document.querySelector(".sum-ipoteka").textContent;
                }else{
                   var sum = document.querySelector("#input-sum").value;
                }
                sum = sum.split(' ').join('');
                sum = sum.split('Р').join('');
                var dats = 0;
                var stavka = 0;
                var pribil1 = 0;
                    for(var i=1;i<=numbofrows; i++){
                        let row = table.rows[i]
                        dats += (row.cells[1].textContent - row.cells[0].textContent);
                        stavka = stavka +  Number(row.cells[2].textContent);
                        pribil1 = pribil1 + Number(row.cells[3].textContent);
                    }
                    stavka = rounded(stavka/numbofrows);
                    pribil1 = rounded(pribil1);
                    document.querySelector(".stavka-out").innerHTML = stavka + " %";
                    document.querySelector(".srok-out").innerHTML = dats + " Мес";
                    document.querySelector(".pribil-out").innerHTML = pribil1 + " Руб";
                    document.querySelector(".summ-out").innerHTML = (Number(sum) + Number(pribil1)) + " Руб";

                    if(labl == "Кредит" || labl == "Ипотека"){
                        document.querySelector(".platesh-out").innerHTML = rounded(((Number(sum) + Number(pribil1))/dats)) + " Руб/Мес";
                    }

                    updatechartjs(sum, pribil1, labl);
                document.querySelector(".chart-js-11").setAttribute('style','display: block;')
            }
        }
        if(btn.name == "btn-nextprevprevious"){
            document.querySelector(".tbody-plav-stavka").innerHTML ='';
        }
        if(btn.name == "btn-nextprevfinish"){
                let stavka = document.querySelector(".stavka-out").innerHTML;
                let srok = document.querySelector(".srok-out").innerHTML;
                let pribil = document.querySelector(".pribil-out").innerHTML;
                let sum = document.querySelector(".summ-out").innerHTML;
                
                sum1 = sum.split(' ').join('');
                sum1 = sum.split('Руб').join('');
                pribil1 = pribil.split(' ').join('');
                pribil1 = pribil.split('Руб').join('');
                sum = Number(sum1) - Number(pribil1);

                var platezh;
                let labl = document.querySelector(".name-label-set").innerHTML;
                if(labl == "Вклад"){
                    srok1 = srok.split(' ').join('');
                    srok1 = srok.split('Мес').join('');
                    var categ = 1;
                    platezh = rounded(Number(pribil1) / Number(srok1));
                    platezh = String(platezh);
                }else if(labl == "Кредит"){
                    var categ = 2;
                     platezh = document.querySelector(".platesh-out").textContent;
                     platezh = platezh.split(' ').join('');
                     platezh = platezh.split('Руб/Мес').join('');
                }else if(labl == "Ипотека"){
                    var categ = 3;
                     platezh = document.querySelector(".platesh-out").textContent;
                     platezh = platezh.split(' ').join('');
                     platezh = platezh.split('Руб/Мес').join('');
                }
               

                var x = new XMLHttpRequest();

                        let id = document.querySelector(".set-id-product").getAttribute('name');
                         if(id != 0){
                           var body = 'stavka=' + encodeURIComponent(stavka) +
                          '&srok=' + encodeURIComponent(srok) + '&pribil=' + encodeURIComponent(pribil) +
                          '&sum=' + encodeURIComponent(sum1) + '&id=' + encodeURIComponent(id) +
                          '&categ=' + encodeURIComponent(categ) + '&platezh=' + encodeURIComponent(platezh);
                          x.open("POST", "/doupdateproduct", true);
                         }else{
                          var body = 'stavka=' + encodeURIComponent(stavka) +
                          '&srok=' + encodeURIComponent(srok) + '&pribil=' + encodeURIComponent(pribil) +
                          '&sum=' + encodeURIComponent(sum1) + '&platezh=' + encodeURIComponent(platezh) + '&categ=' + encodeURIComponent(categ);
                          x.open("POST", "/dosaveproduct", true);
                         }

                x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                x.setRequestHeader('X-CSRF-Token', csrftoken.getAttribute('content'));
                x.send(body);

                x.onload = function()
                {
                    var info = this.response;
                    if(info == 1){
                        document.querySelector(".set-errors").innerHTML = "<a style='color: red;'>Успех!</a>";
                        document.location.href = '/'
                    }
                };
        }
        if(btn.name == "del-product-btn"){
            let id = document.querySelector(".set-id-product").getAttribute('name');
            var x = new XMLHttpRequest();
            var body = 'id=' + encodeURIComponent(id);
            x.open("POST", "/delproduct", true);
            x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                x.setRequestHeader('X-CSRF-Token', csrftoken.getAttribute('content'));
                x.send(body);
                x.onload = function()
                {
                    var info = this.response;
                    if(info == 1){
                        document.location.href = '/'
                    }
                };
        }


    }

});



function updatechartjs(sum, parametr, setlabel){
    'use strict';
	var ctx7 = document.getElementById('chartStacked2');
	new Chart(ctx7, {
		type: 'horizontalBar',
		data: {
			labels: [setlabel],
			datasets: [{
				data: [sum],
				backgroundColor: '#705ec8',
				borderWidth: 1,
				fill: true
			}, {
				data: [parametr],
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
}