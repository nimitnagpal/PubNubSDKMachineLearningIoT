<html>
<body>
<?php
include('_con.php');
if (isset($_POST['submit'])){
$sql = "SELECT * FROM login WHERE UserName='$_POST[UserName]' AND Password='$_POST[Password]'";
$res = mysqli_query($dbcon, $sql) or die('error');
if(mysqli_num_rows($res)==1)
{
echo "<form action='Third.php' method='post'>";
echo "<div class=loginBox>";
echo "<h2>Please Select:</h2>";
echo "<br/><br/>";

echo "Credits:<input type='radio' name='Select' value='Credits' /><br/>";
echo "History:<input type='radio' name='Select' value='History' /><br/>";
echo "<button type='submit' name='submit' >Submit</button>";
echo "</div>";
echo "</form>"; 
}
else
{
echo "Wrong information";
} 
}
else
{
echo" sorry";
}
mysqli_close($dbcon);
?>
</body>
</html>