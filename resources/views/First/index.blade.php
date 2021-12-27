<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBArecipe|ババアのご満悦レシピ！</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Kaisei+Opti&family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!--css style-->
  <style>
    html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, summary,
    time, mark, audio, video {
      margin:0;
      padding:0;
      border:0;
      outline:0;
      font-size:100%;
      vertical-align:baseline;
      background:transparent;
    }
    body {
    line-height:1;
      
    }
    article,aside,details,figcaption,figure,
    footer,header,hgroup,menu,nav,section {
        display:block;
    }
    nav ul {
        list-style:none;
    }
    blockquote, q {
        quotes:none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content:'';
        content:none;
    }
    a {
        margin:0;
        padding:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }
    ins {
        background-color:#ff9;
        color:#000;
     
        text-decoration:none;
    }
    mark {
        background-color:#ff9;
        color:#000;
        font-style:italic;
        font-weight:bold;
    }
    del {
        text-decoration: line-through;
    }
    abbr[title], dfn[title] {
        border-bottom:1px dotted;
        cursor:help;
    }
    table {
        border-collapse:collapse;
        border-spacing:0;
    }
    hr {
        display:block;
        height:1px;
        border:0;  
        border-top:1px solid #cccccc;
        margin:1em 0;
        padding:0;
    }
    input, select {
        vertical-align:middle;
    }



  
    /*index.blade style*/

    header{
      height: 14vh;
      background-color: #F0E68C;
    }
    header h1{
      text-align: center;
      padding: 5vh 0;
      color: rgba(110, 49, 8, 0.87);
    }
    header span{
      font-size: 30px;
      font-family: 'Indie Flower', cursive;
      font-family: 'Pacifico', cursive;
    }

    .content{
      background-color: #FFFFDD;
      padding-top: 5vh;
    }

    .create{
      margin: 0 auto 10vh;
      width: 70%;
      text-align: center;
    }
    .create2{
      margin: 0 auto 10vh;
      width: 70%;
      text-align: center;
      display: none;
    }

    .create input{
      height: 5vh;
      width: 200px;
      margin: 0 auto 20px;
      border-radius: 5px;
      border: 1px solid black;
    }
    .create textarea{
      border-radius: 5px;
      border: 1px solid black;
    }

    .create button{
      margin-left: 20px;
      color: white;
      border-radius: 10px;
      border: 1px solid	#F4A460;
      background-color:#F4A460 ;
      padding:5px 10px;
    }

    .alart{
      margin-bottom: 20px;      
    }
    .alart p{
      font-size: 14px;
      color: red;
    }

    .main{
      height: auto;
      display: flex;
      width: 98%;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .p{
      flex-direction: column;
      margin: 0 3vw 0;
      
    }
    .p h3{
      padding-bottom: 10px;
      color:#993300;
    }


    .table{
      display: flex;
    }

    .es34{
      padding-right: 25px;
      padding-bottom: 15px;
    }

    .delete{
      padding-bottom: 30px;
    }

    .button{
      border: 1px solid 	#CCFF33;
      border-radius: 20px;
      background-color: 	#CCFF33;
      padding: 5px;
    }

    .button2{
      border: 1px solid 	#CCFF33;
      border-radius: 20px;
      background-color: #FF99CC;
      padding: 5px;
      margin-right: 20px;      
    }

    .delete_update{
      display: flex;
    }

    footer{
      background-color: black;
      height: 5vh;
    }
    small{
      color: white;
      font-size: 10px;
    }
    .es{
      float: right;
      font-size: 12px;
      padding-top: 2px;
    }

    @media screen and (max-width:768px){
      .create input{
      height: 3vh;
      width: 20vw;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid black;
    }
      .create textarea{
        height: 6vh;
        width: 20vw;
      }
      .create{
      padding: 0 20vw 60px;
      }
      .create button{
        margin: 0 auto;
      }
    }
    @media screen and (max-width:480px){
      .create input{
      height: 3vh;
      width: 20vw;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid black;
    }
      .create textarea{
        height: 6vh;
        width: 20vw;
      }
      .create{
      padding: 0 15vw 60px;
      }
      .create button{
        margin: 0 auto;
      }
      .alart p{
        font-size: 11px;
      }
    }
  </style>
</head>

<body>
  <!--header-->
  <header>
    <h1><span>BBA</span> レシピ</h1>
  </header>
  <!--追加部分-->
  <div class="content">
    <div class="create">
      <div class="alart">
        <p>*料理名の頭文字はひらがなから始めてください。</p>
        <br>
        <p>×揚げ出し豆腐->〇あげ出し豆腐</p>
      </div>
      <form action="/create" method="POST">
      @csrf
        <input type="text" name="newTask" placeholder="料理名">
        <br>
        <textarea name="newTask2" id="" cols="25" rows="5" placeholder="材料"></textarea>
        <textarea name="newTask3" id="" cols="15" rows="5" placeholder="量"></textarea>
        <button>追加</button>
      </form>
    </div>
    <!--表示部分-->
    <div class="main">
      <form action="/update" method="POST">
      @csrf  
        @foreach ($items as $task)
        <div class="p">
          <h3>{{$task->title}}</h3>
          <div class="table">
            <p class="es34">{!! nl2br(htmlspecialchars($task->content)) !!}</p>
            <p>{!! nl2br(htmlspecialchars($task->amount)) !!}</p>
          </div>
          <div class="delete_update">
            <div class="update">
              <form action="/update" method="POST">
              @csrf
                <input onClick="return Check()" class="button2" type="submit" value="変更">
                <input type="hidden" name="taskId_up" value="{{$task->id}}">
              </form>
            </div>
      </form>
            <div class="delete">
              <form action="/delete" method="GET">
              @csrf
                <input onClick="return Check2()" class="button" type="submit" value="削除">
                <input type="hidden" name="taskId" value="{{$task->id}}">
              </form>
            </div>
          </div>
        </div>
        @endforeach  
    </div>
  </div>

  <!--footer-->
  <footer>
    <small>&copy; 2021 masakimanZ.net</small>
    <small class="es">gmail:huupmasari@gmail.com</small>
  </footer>

  <script type="text/javascript">
    function Check(){
      var checked = confirm("「OK」をクリックすると元のレシピは削除されますがよろしいですか？");
      if (checked == true) {
          return true;
      } else {
          return false;
      }
    }
    function Check2(){
      var checked = confirm("レシピが削除されますがよろしいですか？");
      if (checked == true) {
          return true;
      } else {
          return false;
      }
    }
  </script>
</body>

</html>