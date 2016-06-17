<?
    $id = $_POST["id"];
    $password = $_POST["password"];
    
    $conn = mysql_connect("localhost", "root", "songseung151599");
    mysql_select_db("twentyalgorithm", $conn);
    
    $query = "select id, password from user WHERE id = '".$id."' and password = '".$password."'";
    
    $res = mysql_query($query, $conn);
    
    $row = mysql_fetch_array($res);
    
    echo $row[id];
    if ($id == $row[id] && $password == $row[$password]) {
        echo "<script>alert('success login');location.href = \"ground.php\";</script>";
    }
    else if ($id == null && $password == null)
    {
        echo "<script>alert('Fill the blank');history.back();</script>";
    }
    else {
        echo "<script>alert('check your ID or Password');history.back();</script>";
    }
?>
