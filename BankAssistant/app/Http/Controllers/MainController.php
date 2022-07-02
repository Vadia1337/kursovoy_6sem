<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\invest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
function start(){
    if (Auth::check()){

       $product = new products();
       $invest = new invest();

       $num = $product->where('owner', Auth::user()->name)->count();
       $num2 = $invest->where('owner', Auth::user()->name)->count();
       $kursival = $this->CBR_XML_Daily_Ru();
       if($num != 0 && $num2 != 0){
         $products = $product->where('owner', Auth::user()->name)->get();
         $invests = $invest->where('owner', Auth::user()->name)->get();
         return view('Main', ['invests' => $invests, 'products' => $products, 'kursival' => $kursival]);
       }else if($num2 != 0){
         $invests = $invest->where('owner', Auth::user()->name)->get();
         return view('Main', ['invests' => $invests, 'kursival' => $kursival]);
       }else{
         return view('Main', ['kursival' => $kursival]);
       }
    }else{
       return view('Login');
    }
 }

function dologin(Request $request){
   $regnewuser = new User();
    $num = $regnewuser->where('name', $request->login)->count();
    if($num != 0){
        $user = $regnewuser->where('name', $request->login)->first();  
        if(Hash::check($request->pass, $user->pass)){
            Auth::loginUsingId($user->id);
            echo 1;
        }else{
            echo 2;  
        }
    
    }else{
        echo 0;
    }
}

public function logout(){
   Auth::logout();
   return redirect('/');
  }

function doregister(Request $request){
   $regnewuser = new User();
   $num = $regnewuser->where('email', $request->email)->count();
   $num2 = $regnewuser->where('name', $request->login)->count();
if($num == 0 && $num2 == 0){
    $user = User::create([
        'email' => $request->email,
        'name' => $request->login,
        'pass' => Hash::make($request->pass)
    ]);
    Auth::loginUsingId($user->id);
    echo 1;
}else{
    echo 0;
}
}

function login(){
   return view('Login');
}

function register(){
   return view('Register');
}


function vklad(){
    $products = "";
    return view('Vklad', ['products' => $products]);
}

function vkladid(Request $request){
          $product = new products();
          $products = $product->where('id', $request->id)->first();
          return view('Vklad', ['products' => $products]);  
 }

 function dosaveproduct(Request $request){
    if (Auth::check()) {
        if($request->categ == 1){ // Вклад
            products::create([
                'name' => "Вклад",
                'owner' => Auth::user()->name,
                'sum' => $request->sum,
                'categ' => 1, //зеленый
                'stavka' => $request->stavka,
                'startdate' => $request->srok,
                'pribil' => $request->pribil,
                'platezh' => $request->platezh
            ]);
            echo 1;
        }
        if($request->categ == 2){ // Кредит
            products::create([
                'name' => "Кредит",
                'owner' => Auth::user()->name,
                'sum' => $request->sum,
                'categ' => 2, //красный
                'stavka' => $request->stavka,
                'startdate' => $request->srok,
                'pribil' => $request->pribil,
                'platezh' => $request->platezh
            ]);
            echo 1;
        }
        if($request->categ == 3){ // Ипотека
            products::create([
                'name' => "Ипотека",
                'owner' => Auth::user()->name,
                'sum' => $request->sum,
                'categ' => 2, //красный
                'stavka' => $request->stavka,
                'startdate' => $request->srok,
                'pribil' => $request->pribil,
                'platezh' => $request->platezh
            ]);
            echo 1;
        }
    }else{
        return view('Login');
    }
 }

 function doupdateproduct(Request $request){
    $product = new products();
    $products = $product->where('id', $request->id)->first();

    $products->sum = $request->sum;
    $products->stavka = $request->stavka;
    $products->startdate = $request->srok;
    $products->pribil = $request->pribil;
    $products->platezh = $request->platezh;
    $products->save();
    echo 1;
 }

 function delproduct(Request $request){
    $product = new products();
    $product->where('id', $request->id)->first()->delete();
    echo 1;
 }

 function kredit(){
    $products = "";
    return view('Kredit', ['products' => $products]);
}

function kreditid(Request $request){
    $product = new products();
    $products = $product->where('id', $request->id)->first();
    return view('Kredit', ['products' => $products]);  
}

function ipoteka(){
    $products = "";
    return view('Ipoteka', ['products' => $products]);
}

function ipotekaid(Request $request){
    $product = new products();
    $products = $product->where('id', $request->id)->first();
    return view('Ipoteka', ['products' => $products]);  
}

function invest(){
    return view('Invest');
}

function investid(Request $request){
    if($request->id == 1){
        $numbofinvest = array(
            "Name" => "Инвестиции в золото",
            "Price" => "5 240 Р",
            "img" => 1,
            "Description" => "Инвестиции в золото обычно дают такую же доходность,
            как пассивные инвестиции в фондовый рынок, но при этом риски инвестирования в золото ниже.
            В целом оно должно быть в любом инвестиционном портфеле,
            так как наличие золота позволяет сбалансировать риски, связанные с другими активами, например с акциями.
            Инвестировать в физический металл нужно постоянно, как только позволяют средства.
            Есть такое правило: человек может считать себя богатым, если у него есть 240 граммов золота
            (по нынешним ценам на Московской бирже это 1 млн рублей).
            Сейчас цены на металл сильно упали после краткого периода бурного роста, что благоприятно для совершения покупки",
        );
    }
    if($request->id == 2){
        $numbofinvest = array(
            "Name" => "Инвестиции в нефтяные компании",
            "Price" => "2 700 Р",
            "img" => 2,
            "Description" => "«Мировой спрос на нефть стимулируется потреблением бензина
             и увеличением международных поездок по мере того, как все больше стран вновь
              открывают свои границы. Одновременно с этим он не такой быстрый из-за новых волн COVID-19
               в Европе, слабой промышленной активности и высоких нефтяных котировок. В итоге спрос на нефть
                в 2021 году может увеличиться на 5,5 млн б/с и на 3,4 млн б/с в 2022 году», — говорится в отчете МЭА.
                 В таких условиях вопрос инвестиций для нефтедобывающих проектов становится наиболее острым.
                  Потенциальный избыток предложения нефти в комбинации с политикой энергоперехода ряда стран,
                   где господдержка ВИЭ тесно переплетается с вытеснением углеводородов из энергетики и даже транспортной отрасли
                    — это факторы, которые отпугивают некоторых инвесторов в нефтегазовом секторе. В то же время отрасль сильно нуждается в деньгах.",
        );
    }
    if($request->id == 3){
        $numbofinvest = array(
            "Name" => "Инвестиции в сельское хозяйство",
            "Price" => "25 000 Р",
            "img" => 3,
            "Description" => "Последние десятилетия интерес к сельскому хозяйству растет, что связано со множеством факторов.
             Рост населения и необходимость удовлетворения его потребностей в продовольствии, высокие и нестабильные цены
              на продукты питания, изменение климата побудили общественность к осознанию важности сельского хозяйства и к
               действиям по усилению поддержки этого сектора. Согласно международным отчетам, сельскохозяйственный сектор 
               привлекает все большее внимание инвесторов. Ключевым фактором является долгосрочная тенденция роста цен на продукты
                питания в течение последнего десятилетия, которая подогревает ожидания инвесторов более высокой доходностью.
                 Инвестиции в сельское хозяйство – важная и наиболее эффективная стратегия сокращения бедности в сельских районах
                  путем создания значительного количества рабочих мест в сельскохозяйственных и несельскохозяйственных отраслях,
                   развития сельской инфраструктуры.",
        );
    }
    return view('Invest', ['numbofinvest' => $numbofinvest]);
}


function CBR_XML_Daily_Ru() {
    static $rates;
    
    if ($rates === null) {
        $rates = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'));
    }
    
    return $rates;
}

function dosaveinvest(Request $request){
    if (Auth::check()) {
    invest::create([
        'name' => $request->name,
        'owner' => Auth::user()->name,
        'sum' => $request->sum,
        'price' => $request->price,
        'kolvo' => $request->kolvo
    ]);
    echo 1;
    }else{
        return view('Login');
    }
}

}
