<?php
if(isset($_FILES["fileUpload"])) {
  session_start();
  $link = mysqli_connect("127.0.0.1","root","nig","wishchan");
  $disallowed = array("bat","bin","cmd","cpl","gadget","inf","ins","inx","isu",
  "job","jse","lnk","msc","msi","msp","mst","paf","pif","ps1","reg","sct","sh",
  "shb","u3p","vb","vbe","vbs","vbscript","ws","wsf");
  $err = $_FILES["fileUpload"]["error"];
  $temp = $_FILES["fileUpload"]["tmp_name"];
  $upload_ip = $_SERVER["REMOTE_ADDR"];
  $upload_name = $_FILES["fileUpload"]["name"];
  $upload_user = $_SESSION['username'];
  $upload_body = $_POST["textUpload"];
  $upload_size = $_FILES["fileUpload"]["size"];
  $upload_type = explode(".",$upload_name);
  $upload_type = end($upload_type);
  if($upload_size > 1000000000) {
    echo "ERROR: File cannot be larger than one gibibyte.";
    exit();
  }
  if(in_array($upload_type,$disallowed)) {
    echo ("ERROR: Specific executable filetypes and scripts are not allowed.");
    exit();
  }
  $lastpostnumber = "SELECT id FROM posts ORDER BY id DESC LIMIT 1";
  $lastpostnumber = mysqli_query($link,$lastpostnumber);
  $lastpostnumber = mysqli_fetch_array($lastpostnumber,MYSQLI_ASSOC);
  $newpostnumber = $lastpostnumber["id"] + 1;
  $submit = "INSERT INTO posts (op, ip, name, body, filename, filetype, filesize)
  VALUES ('1', '$upload_ip', '$upload_user', '$upload_body', '$upload_name', '$upload_type', '$upload_size')";
  if(mysqli_query($link,$submit)) {
    mysqli_close($link);
    if(move_uploaded_file($temp,"files/".$newpostnumber."."."$upload_type")) {
      header("Location: /wishchan");
      # Remove redirect and generate thumb here.
    } else {
      echo("ERROR: Your upload was interrupted.<br>ERROR CODE: ".$err);
    }
  } else {
    echo("ERROR: ".mysqli_error($link));
    exit();
  }
}
?>
