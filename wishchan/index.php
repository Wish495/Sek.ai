<?php include('C:/xampp/htdocs/webassets/default.php');?>
<title>WishDrive > WishChan</title>
<p class="neonoire" style="color:white;font-size:150%;">WishDrive > WishChan</p>
<p>[<a href="/">Return</a>]</p>

<div style="position:fixed;right:11px;background:#2a2c2f;">
  <textarea style="min-height:6em;max-height:24em;min-width:20em;max-width:20em;margin-top:10px;margin-left:11px;margin-right:11px;" placeholder="Comment" form="upload" name="textUpload" id="textUpload"></textarea>
  <form action="submit.php" method="post" enctype="multipart/form-data" style="color:grey;margin-bottom:10px;margin-left:10px;margin-right:10px;" id="upload">
    <input type="file" name="fileUpload" id="fileUpload">
    <br>
    <input style="margin-top:7px;" type="submit" value="Upload File" name="submit">
  </form>
</div>

<p>
  <?php
    $link = mysqli_connect("127.0.0.1","root","nig");
    mysqli_select_db($link,'wishchan');
    $x = $_SESSION["postsshown"];
    $postcount = mysql_query("SELECT * FROM table1", $link);
    $postcount = mysql_num_rows($postcount);
    $postdata = 'SELECT id, name, time, body, filename, filetype, filesize, sticky FROM posts';
    $posts = mysqli_query($link, $postdata);
    $y = 0;
    while($row = mysqli_fetch_array($posts,MYSQLI_ASSOC)) {
      $y += 1;
      $post[$y] = $row;
    }
    mysqli_close($link);
    # Echo post data received.
  ?>
</p>

</body>
</html>
