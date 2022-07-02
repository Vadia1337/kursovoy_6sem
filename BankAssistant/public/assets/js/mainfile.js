document.addEventListener("DOMContentLoaded", function(event) { 

if(document.getElementById("add-new-prod-btn")){
    document.querySelector("#add-new-prod-btn").onclick = function(){
        var as = '<div class="btn-list text-center"><a href="/vklad" class="btn btn-primary">Вклад</a><a href="/kredit" class="btn btn-secondary">Кредит</a><a href="/ipoteka" class="btn btn-danger">Ипотека</a><a href="/invest" class="btn btn-info">Инвестиции</a></div>';
        document.getElementById("select-prod").innerHTML = as;
      }
}

if(document.getElementById("login-btn")){
    document.querySelector("#login-btn").onclick = function(){
        var login = document.getElementById("login-form-login").value;
        var pass = document.getElementById("login-form-pass").value;

        document.getElementById("login-form-login").value = "";
        document.getElementById("login-form-pass").value = "";
if(login != '' && pass != ''){
        var x = new XMLHttpRequest();
        var body = 'login=' + encodeURIComponent(login) +
              '&pass=' + encodeURIComponent(pass);
        x.open("POST", "/dologin", true);
        x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        x.setRequestHeader('X-CSRF-Token', csrftoken.getAttribute('content'));
        x.send(body);
        x.onload = function()
        {
               var info = this.response;
               if(info == 0){
                document.getElementById("errors").innerHTML = "<a style='color: red;'>Такого пользователя не существует!</a>";
               }
               if(info == 1){
                document.getElementById("errors").innerHTML = "<a style='color: red;'>Вы авторизовались!</a>";
                window.location.href = '/';
               }
               if(info == 2){
                document.getElementById("errors").innerHTML = "<a style='color: red;'>Пароль неверный!</a>";
               }
            
        };
      }else{
        document.getElementById("errors").innerHTML = "<a style='color: red;'>Вы не заполнили поля ввода!</a>";
      }
    }
}

if(document.getElementById("reg-form-btn")){
  document.querySelector("#reg-form-btn").onclick = function(){
    var login = document.getElementById("reg-form-login").value;
    var email = document.getElementById("reg-form-email").value;
    var pass = document.getElementById("reg-form-pass").value;

    document.getElementById("reg-form-login").value = "";
    document.getElementById("reg-form-email").value = "";
    document.getElementById("reg-form-pass").value = "";

    if(login != '' && email != '' && pass != ''){ 
    var x = new XMLHttpRequest();
    var body = 'login=' + encodeURIComponent(login) + '&email=' + encodeURIComponent(email) +
              '&pass=' + encodeURIComponent(pass);
    x.open("POST", "/doregister", true);
    x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    x.setRequestHeader('X-CSRF-Token', csrftoken.getAttribute('content'));
    x.send(body);
    x.onload = function()
    {
           var info = this.response;
           if(info == 0){
           document.getElementById("errors").innerHTML = "<a style='color: red;'>Пользователь с таким логином или email-ом уже существует!</a>";
           }
           if(info == 1){
            document.getElementById("errors").innerHTML = "<a style='color: red;'>Вы зарегистрировались!</a>";
            window.location.href = '/';
           }
    };
    }else{
      document.getElementById("errors").innerHTML = "<a style='color: red;'>Вы не заполнили поля ввода!</a>";
    }

    }
}




  });