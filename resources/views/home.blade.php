<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
        <h1>Laravel multi language web with example -readerstacks.com </h1>
       <div>
           Langauge : <select onchange="changeLanguage(this.value)" >
               <option {{session()->has('lang_code')?(session()->get('lang_code')=='uz'?'selected':''):''}} value="uz">Uzbek</option>
               <option {{session()->has('lang_code')?(session()->get('lang_code')=='ru'?'selected':''):''}} value="ru">Russian</option>
               <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
           </select>
       </div>
   
       <h2>{{__("messages.title")}}</h2>
   
       </body>
      <script>
       
       function changeLanguage(lang){
           window.location='{{url("change-language")}}/'+lang;
       }
       </script>
</body>
</html>