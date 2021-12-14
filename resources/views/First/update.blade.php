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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
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


body{
  background-color: #FFFFDD;
}

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

    /*main*/
    .fish{
      display: flex;
    }

    .main{
      margin-top: 100px;
      margin-left: 150px;
      height: auto;
      display: flex;
      flex-wrap: wrap;
    }

    .p{
      flex-direction: column;
      margin: 0 3vw 0;
      text-align: center;
    }
    .p h3{
      padding-bottom: 20px;
      color:#993300;
    }


    .table{
      display: flex;
    }

    .es34{
      padding-right: 25px;
      padding-bottom: 15px;
    }

    .content{
      background-color: #FFFFDD;
      text-align:center;
      margin: 80px 15vw 0 auto;
    }

    .create2{
      margin: 0 auto 10vh;
      width: 70%;
    }

    .create2 input{
      height: 5vh;
      width: 200px;
      margin: 0 auto 20px;
      border-radius: 5px;
      border: 1px solid black;
    }
    .create2 textarea{
      border-radius: 5px;
      border: 1px solid black;
      margin-left: 10px;
    }

    .alart{
      margin-bottom: 20px;      
    }
    .alart p{
      font-size: 14px;
      color: red;
    }

    .meat{
      display: flex;
    }

    button{
      margin-left: 20px;
      color: white;
      border-radius: 10px;
      border: 1px solid	#F4A460;
      background-color:#F4A460 ;
      padding:5px 10px;
    }

    i{
      position: absolute;
      top: 230px;
      left: 45vw;
      font-size: 20px;
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
  <header>
    <h1><span>BBA</span> レシピ</h1>
  </header>
  <div class="fish">
    <div class="main">
      @foreach ($items as $task)
      <div class="p">
        <h3>{{$task->title}}</h3>
        <div class="table">
          <p class="es34">{!! nl2br(htmlspecialchars($task->content)) !!}</p>
          <p>{!! nl2br(htmlspecialchars($task->amount)) !!}</p>
        </div>
      </div>
      @endforeach 
      <i class="fas fa-angle-double-right fa-3x"></i> 
    </div>
    <div class="content">
      <div class="create2">
        @foreach ($items as $item)
        <div class="alart">
          <p>*料理名の頭文字はひらがなから始めてください。</p>
          <br>
          <p>×揚げ出し豆腐->〇あげ出し豆腐</p>
        </div>
        <form action="/create" method="POST">
        @csrf
        <input type="text" name="newTask" value="{{$item->title}}" placeholder="料理名">
        <br>
        <div class="meat">
          <textarea name="newTask2" id="" cols="25" rows="5" placeholder="材料">{{$item->content}}</textarea>
          <textarea name="newTask3" id="" cols="15" rows="5" placeholder="量">{{$item->amount}}</textarea>
          <button>更新</button>
        </div>
        </form>
        @endforeach
      </div>
    </div>
  </div>  
</body>
</html>