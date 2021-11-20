function formChecker()
{
    var username = document.getElementById("username").value;
    if(username.length == 0 || username.indexOf("@", 0) == -1 || username.indexOf(".",0) == -1) //check for email address
    {alert("Incorrect email address!"); return false;}

    var password = document.getElementById("password").value;
    if(password.length == 0) //check for password
    {alert("password field cannot be blank!");return false;}

    var value1 = document.getElementById("item1Value").value;
    var value2 = document.getElementById("item2Value").value;
    var value3 = document.getElementById("item3Value").value;
    if(value1<0 || value2<0 || value3<0 ||value1.length == 0 || value2.length == 0 || value2.length == 0 || value3.length == 0)//check for values of products
    {alert("Quantities cannot be blank or negative!");return false;}
    if(value1 == 0 && value2 == 0 && value3 == 0)
    {alert("You did not choose anything to shop!");return false;}

    var shipchoice = document.getElementsByName("shipchoice");
    for(let i = 0; i<shipchoice.length; i++)
    {
        if (shipchoice[i].checked)
        {
            return true;
        }
    }
    alert ("You must pick a shipping option!")
    return false;

}