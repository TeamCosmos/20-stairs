<?
  $email = $_POST["email"];
  $name = $_POST["name"];

  $conn = mysql_connect("localhost", "root", "songseung151599");
  mysql_select_db("twentyalgorithm", $conn);

  $query_name = "select id, email, name from user WHERE name = '".$name."' and email = '".$email."'";

  $res = mysql_query($query_name, $conn);
  
  $row = mysql_fetch_array($res);

  

  if ($name == $row[name] && $email == $row[email]) {
    echo "<script>alert('".$row[id]."');location.href = \"loginpage.html\";</script>";
  }
  else if ($name == "" || $email == "")
  {
    echo "<script>alert('Fill the blank');history.back();</script>";
  }
  else {
    echo "<script>alert('cannot find ID : ".$name."');history.back();</script>";
  }
?>