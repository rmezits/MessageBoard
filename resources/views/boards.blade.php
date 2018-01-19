<!DOCTYPE html>
<html lang="en">
<link href="/css/app.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <title>Boards</title>
</head>

<body id="boardlist">    
    <p style="text-align:center">Page developed by Renārs Mežīts, rm16042</p>

    <div class="header">
        <h1>Welcome to Message Boards!</h1>        
    </div>
    @if( auth()->check() )
        <p style="text-align: right">Hi {{ auth()->user()->name  }}<br>
        <a class="nav-link" href="/logout">Log Out</a><br></p>        
    @else
        <p style="text-align: right"><a href="/login">Click here to Login!</a><br>
        ...if you haven't got an account, <a href="/register">Click here!</a><br></p>
    @endif
    <span class="menuname">Click a Topic!</span>
    <ul class="topicmenu">
        <li><a href='/songs'>Songs</a></li>
        <li><a href='/games'>Games</a></li>
    </ul>
    <img src="http://moziru.com/images/music-notes-clipart-clear-background-3.gif" alt="http://cliparting.com/wp-content/uploads/2016/11/Sad-face-unhappy-face-clipart-kid.jpeg" height="300" width="600">
    <img class="right" src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c345.png" alt="http://cliparting.com/wp-content/uploads/2016/11/Sad-face-unhappy-face-clipart-kid.jpeg" height="300" width="600">

 
</body>
</html>
