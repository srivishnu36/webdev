function formval()
{
  var name=document.getElementById("name").value;
  var age=document.getElementById("age").value;
  var email=document.getElementById("email").value;
  var password=document.getElementById("password").value;
  var confirm=document.getElementById("confirm").value;
  var s=0;
  if(name=="")
  {
    alert("Name field is blank");
    document.getElementById("name").focus()
    return false;
    s=1;
  }
  if(age=="")
  {
    alert("Age field is blank");
    document.getElementById("age").focus()
    return false;
    s=1;
  }
  if(email=="")
  {
    alert("Email field is blank");
    document.getElementById("email").focus()
    return false;
    s=1;
  }
  if(password=="")
  {
    alert("Password field is blank");
    document.getElementById("password").focus()
    return false;
    s=1;
  }
  if(confirm=="")
  {
    alert("Confirm password field is blank");
    document.getElementById("confirm").focus()
    return false;
    s=1;
  }
  if(password!="" && confirm!="" && password!=confirm)
  {
    alert("Passwords do not match");
    document.getElementById("password").focus()
    return false;
    s=1;
  }
  if(s==0)
  {
    return true;
  }
}
