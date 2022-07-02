document.addEventListener("DOMContentLoaded", function(event) {
if(document.querySelector(".invest-ideas")){
    document.querySelector(".invest-ideas").onclick = function(e){
        let btn = e.target || e.srcElement;

        document.location.href = '/invest/' + btn.id;
    }
}


if(document.querySelector(".invest-buy-btn")){
    document.querySelector(".invest-buy-btn").onclick = function(e){
        let price =  document.querySelector(".invest-price").textContent;
        let sum = document.querySelector(".out-sum-invest").innerHTML;
        let kolvo = document.querySelector(".input-invest").value;
        let name = document.querySelector(".name-invest").innerHTML;

        var x = new XMLHttpRequest();
        var body = 'name=' + encodeURIComponent(name) +
        '&kolvo=' + encodeURIComponent(kolvo) +
        '&sum=' + encodeURIComponent(sum) + '&price=' + encodeURIComponent(price);
        x.open("POST", "/dosaveinvest", true);

        x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        x.setRequestHeader('X-CSRF-Token', csrftoken.getAttribute('content'));
        x.send(body);
        x.onload = function()
                {
                    var info = this.response;
                    if(info == 1){
                        document.location.href = '/';
                    }
                };
    }
}

});

function investchange(val){
  let price =  document.querySelector(".invest-price").textContent;
  price = price.split(' ').join('');
  price = price.split('Р').join('');
  price = Number(price);

  let sum =  price * Number(val);
  document.querySelector(".out-sum-invest").innerHTML = sum+" Руб";
    
}