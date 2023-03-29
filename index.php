<?php
include('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>

<script>
 
function addStu() 
{
    var name = document.getElementById('txtname').value;
    var degree = document.getElementById('txtdegree').value;
    var course = document.getElementById('txtcourse').value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","addStudent.php?name="+name+"&degree="+degree+"&course="+course,true);
   // xmlhttp.open("GET","ajax5_php.php?id="+val+"&id2="+val2,true);

    xmlhttp.send();

    xmlhttp.onreadystatechange = function()
                    {
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            document.getElementById('portion1').innerHTML = xmlhttp.responseText;
                            document.getElementById('txtname').value = "";
                            document.getElementById('txtdegree').value = "";
                            document.getElementById('txtcourse').value = "";
                        }
                    }

}

</script>

</head>
<body>
    <div class="container-fluid">
    </br>
    <h2 style="text-align:center">Student Details</h2>
    </br>
    <form>
    

    <div class="form-group" style="text-align:center">
    <label><h4 >Enter Your Name</h4></label>
    <input style="margin-left:80px" type="text" class="" id="txtname" require/>
    </div>

    <div class="form-group" style="text-align:center">
    <label><h4>Enter Degree Program</h4></label>
    <input style="margin-left:20px" type="text" class="" id="txtdegree"/>
    </div>

    <div class="form-group" style="text-align:center">
    <label><h4>Enter Your Course</h4></label>
    <input style="margin-left:70px" type="text" class="" id="txtcourse" required/>
    </div>
    
    <div style="text-align:center; margin-left:90px">
    <input  type="button" name="btnAdd" class="btn btn-primary " value="Submit"   onClick="addStu()"/>
    </div>

    </form>
    </div>

<div id="portion1" style="margin-top:20px">

</div>



</body>
</html>