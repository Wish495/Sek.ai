<?php $time=microtime();$time=explode(' ',$time);$time=$time[1]+$time[0];$start=$time;?>
<!doctype html>
<html>
  <head>
    <title>Wish</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/sawarabigothic.css" type="text/css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" type="image/png" href="assets/favicon/wish/196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="assets/favicon/wish/128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="assets/favicon/wish/96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/favicon/wish/32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/favicon/wish/16.png" sizes="16x16">
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>$(document).ready(function(){$("[data-toggle='tooltip']").tooltip();});</script>
    <script>function showLogin(){document.getElementById("links").style.display="none";document.getElementById("login").style.display="block";} function showLinks(){document.getElementById("links").style.display="block";document.getElementById("login").style.display="none";}</script>
  </head>
  <body>
    <div class="links" id="links">
      <h1>Wish</h1>
      <a href="//twitter.com/Wish495" target="_blank">
        <img class="shadow" src="assets/twitter.svg" data-toggle="tooltip" data-placement="top" title="Twitter">
      </a>
      <a href="//youtube.com/user/wish495" target="_blank">
        <img class="shadow" src="assets/youtube.svg" data-toggle="tooltip" data-placement="top" title="YouTube">
      </a>
      <a href="//twitch.tv/TheRealWish" target="_blank">
        <img class="shadow" src="assets/twitch.svg" data-toggle="tooltip" data-placement="top" title="Twitch.tv">
      </a>
      <a href="//github.com/Wish495" target="_blank">
        <img class="shadow" src="assets/github.svg" data-toggle="tooltip" data-placement="top" title="GitHub">
      </a>
      <a href="//steamcommunity.com/id/sadwish" target="_blank">
        <img class="shadow" src="assets/steam.svg" data-toggle="tooltip" data-placement="top" title="Steam">
      </a>
      <a href="//discord.gg/WFAgUJk" target="_blank">
        <img class="shadow" src="assets/discord.svg" data-toggle="tooltip" data-placement="top" title="Discord">
      </a>
      <a href="//osu.ppy.sh/users/Wishu" target="_blank">
        <img class="shadow" src="assets/osu.svg" data-toggle="tooltip" data-placement="top" title="osu!">
      </a>
      <a href="//last.fm/user/Wish495" target="_blank">
        <img class="shadow" src="assets/lastfm.svg" data-toggle="tooltip" data-placement="top" title="Last.fm">
      </a>
      <a href="//myanimelist.net/profile/Ain" target="_blank">
        <img class="shadow" src="assets/myanimelist.svg" data-toggle="tooltip" data-placement="top" title="MyAnimeList">
      </a>
      <br>
      <button class="btn btn-dark jp" onclick="showLogin()">
        &#x4E16;&#x754C;&#x306B;&#x30ED;&#x30B0;&#x30A4;&#x30F3;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right"></i>
      </button>
    </div>
    <div class="login card bg-dark text-white" id="login">
      <h5 class="card-header jp">&#x4E16;&#x754C;&#x306B;&#x30ED;&#x30B0;&#x30A4;&#x30F3;</h5>
      <form class="card-body" action="php/login.php" method="post">
        <div class="form-group">
          <div class="input-group mb-2 mb-sm-0">
            <div class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i></div>
            <input class="form-control jp" type="text" placeholder="&#x30E6;&#x30FC;&#x30B6;&#x30FC;&#x540D;" name="username" maxlength="16" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2 mb-sm-0">
            <div class="input-group-addon"><i class="fa fa-lock fa-fw"></i></div>
            <input class="form-control jp" type="password" placeholder="&#x30D1;&#x30B9;&#x30EF;&#x30FC;&#x30C9;" name="password" maxlength="16" required>
          </div>
        </div>
        <div class="btn-group">
          <button class="btn btn-secondary jp" type="button" onclick="showLinks()">&#x7D42;&#x4E86;</button>
          <input class="btn btn-primary jp" type="submit" value="&#x30ED;&#x30B0;&#x30A4;&#x30F3;">
        </div>
      </form>
    </div>
    <div class="github">
      <a target="_blank" href="//github.com/Sek-ai/Sek.ai/tree/dev">
        <button class="btn btn-dark"><i class="fa fa-github"></i> D0.7</button>
      </a>
    </div>
    <div class="copyright">
      <button class="btn btn-dark">&copy; Wish 2016-2017</button>
    </div>
    <div class="ms">
      <button class="btn btn-dark"><?php $time=microtime();$time=explode(' ',$time);$time=$time[1]+$time[0];$finish=$time;$total_time=round(($finish-$start),5)*1000;echo("{$total_time}ms");?></button>
    </div>
  </body>
</html>
