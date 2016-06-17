<?
  $name = $_POST["name"];
  $id = $_POST["id"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];
  $repwd = $_POST["repwd"];


  //echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
  if ($name == "" && $id = "" && $pwd = "" && $eamil == "" && $repassword == "" ){
    echo "<script>alert('fill the blank!!');history.back();</script>";
  }
  else if ($pwd == $repwd){
    $sqlServer = mysql_connect("localhost", "root", "songseung151599");
    mysql_select_db("twentyalgorithm", $sqlServer);

    $query = "insert into user (name, id, email, password) values ( \"$name\", \"$id\", \"$email\", \"$pwd\");";

    mysql_query ($query, $sqlServer);

    echo "<script>alert('sign up success');location.href = \"loginpage.html\";</script>";
  }
  else {
    echo "<script>alert('input password again');history.back();</script>";
  }
?>
