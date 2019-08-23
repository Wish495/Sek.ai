<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>世界 &#183; /flac/</title>
    <link rel="stylesheet" href="/css/flac.css" type="text/css">
  </head>
  <body>
    <canvas id="canvas"></canvas>
    <div id="body">
      <h1>/flac/<span><?php echo(urldecode(substr($_SERVER["REQUEST_URI"], 6))); ?></span></h1>
      <p>
        <?php
        $dir = urldecode("." . substr($_SERVER["REQUEST_URI"], 5));
        $list = scandir($dir);
        foreach ($list as $key => $value) {
          $url = str_replace("'", "%27", $value);
          if (in_array($value, array(".", "index.php"))) {
            continue;
          } else {
            if (is_dir("$dir$value")) {
              echo("<a href='$url/'>$value</a><br>");
            } else {
              if (substr($value, -5) == ".flac") {
                echo("<a onclick='play(\"./$url\")'>$value - [Play]</a><br>");
              } else {
                $size = round(filesize($dir . $value) / 1024);
                if ($size > 1024) {
                  $size = round($size / 1024);
                  echo("<a href='$url'>$value - {$size}MB</a><br>");
                } else {
                  echo("<a href='$url'>$value - {$size}KB</a><br>");
                }
              }
            }
          }
        }
        ?>
      </p>
    </div>
    <audio id="player" preload="auto"></audio>
    <script src="/js/flac.js" charset="utf-8"></script>
  </body>
</html>
