<?php
$link=mysqli_connect('localhost','root','vishnu','users');
if(mysqli_connect_error())
{
  die("Error in connecting")
}

$username=mysqli_real_esacpe_string($link,$_POST['name']);
$age=mysqli_real_esacpe_string($link,$_POST['age']);
$email=mysqli_real_esacpe_string($link,$_POST['email']);
$password=mysqli_real_esacpe_string($link,$_POST['password']);
$confirm=mysqli_real_esacpe_string($link,$_POST['confirm']);

$query=" SELECT * FROM info WHERE name='$username' ";
$querynext=" SELECT * FROM info WHERE email='$email' ";
$res=mysqli_query($link,$query);
$result=mysqli_query($link,$querynext);

$count=0;

if(mysqli_num_rows($res)>0)
{
  echo "<p>Username already exists!<p>";
  $count=1;
}
if(mysqli_num_rows($result)>0)
{
  echo "<p>Email id already exists!</p>";
  $count=1;
}
if($count==0)
{
  $query=" INSERT into info (name,age,email,password) VALUES ('$username','$age','$email',$password) ";
  $res=mysqli_query($link,$query);

  if($res)
  {
    echo "Registration Successful";
  }
  else
  {
        echo "Sorry...Error in registration. Try again";
  }
}

?>
