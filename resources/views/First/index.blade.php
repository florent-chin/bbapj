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




    header{
      height: 15vh;
      background-color: #F0E68C;
    }
    header h1{
      text-align: center;
      padding: 20px;
      color: rgba(110, 49, 8, 0.87);
      
    }
    header span{
      font-size: 30px;
      font-family: 'Indie Flower', cursive;
      font-family: 'Pacifico', cursive;
    }

    .content{
      background-color: #FFFFDD;
      padding-top: 10vh;
    }

    .create{
      padding: 0 28vw 60px;
    }

    .create input{
      height: 5vh;
      width: 20vw;
      margin-bottom: 10px;
      margin-left: 7vw;
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

    .main{
      height: auto;
      display: flex;
      padding: 0 30px 40px;
      flex-wrap: wrap;
    }

    .p{
      flex-direction: column;
      margin: 0 40px 0;
    }
    .table{
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
  </style>
</head>


<body>
  <header>
    <h1><span>BBA</span> レシピ</h1>
  </header>

  <div class="content">
    <div class="create">
      <form action="/create" method="POST">
      @csrf
      <input type="text" height="20px" name="newTask" placeholder="料理名">
      <br>
      <textarea name="newTask2" id="" cols="30" rows="5" placeholder="材料"></textarea>
      <textarea name="newTask3" id="" cols="15" rows="5" placeholder="量"></textarea>
      <button>追加</button>
      </form>
    </div>
    <div class="main">
      @foreach ($items as $task)
      <div class="p">
        <h3>{{$task->title}}</h3>
        <div class="table">
          <p>{!! nl2br(htmlspecialchars($task->content)) !!}</p>
          <p>{!! nl2br(htmlspecialchars($task->amount)) !!}</p>
        </div>
        <div class="delete">
          <form action="/delete" method="GET">
          @csrf
            <input type="submit" value="削除">
            <input type="hidden" name="taskId" value="{{$task->id}}">
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <footer>
    <small>&copy; 2021 masakimanZ.net</small>
    <small class="es">gmail:huupmasari@gmail.com</small>
  </footer>
</body>

</html>