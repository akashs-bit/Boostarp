<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
    <div class="container-fluid bg-success">
       <ul class="nav nav-tabs bg-danger"> 
        <img src="header.jpg" height="202px" width="1750px">
        <li class="active"><a href="http://127.0.0.1:5500/Dropdown2.html">Home</a></li>
        
        <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/physics.html">Physics</a></li>
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/chemistry.html">Chemistry</a></li>
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/Matheamtics.html">Mathematics</a></li>
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/english.html">English</a></li>
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/kannada.html">Kannada</a></li>
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/hindi.html">Hindi</a></li>
                </ul>
            </li>

                        <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/Academics.html">Admission</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/course.html">Course</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/course%20outcome.html">Course Outcome</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/college%20committee.html">College Committee</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/conferences.html">Conferences/Seminars</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/workshop.html">Workshop/Webinar</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/Result.html">Result</a></li>
                                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/other.html">Other Programs</a></li>

                                </ul>
                            </li>

                            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Facilities<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" style="color: black!important;" href="http://127.0.0.1:5500/lib.html">Library</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Infrastructure.pdf">Infrastructure</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Auditorium-Seminar-Hall%20(1).pdf">Auditorium</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/HOSTEL%20NEW.pdf">Hostel</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Health%20Care%20Center.pdf">Health Center</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Yoga%20for%20website.pdf">Yoga Center</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Parking.pdf">Parking</a></li>
                    <li><a class="dropdown-item" target="_blank" style="color: black!important;" href="https://sharnscience.org/Files/Pdfs/Facilities/Security.pdf">Security</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="http://localhost/InsertDatabase/Insert.php">Insert Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="http://localhost/InsertDatabase/search.php">Search Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="http://localhost/InsertDatabase/View.php"> View Records</a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link text-light" href="http://localhost/InsertDatabase/upadate.php"> Update Records</a>
            </li>
            
            

            <li class="nav-item">
                <a class="nav-link text-light" href="Contact.html">Contact</a>
            </li>
            

               <div class="navbar-collapse navbar-right"  style="height: 0px"> 
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost/InsertDatabase/regUser.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul> 
                     <span class="glyphicn glyphicon-user" style="height: 500px;"></span>
                   </a></li>
                   
                   </ul>




<style>
#hd{border-radius: 10px; background-color: orange;}
#tx{border-radius: 10px; background-color:white; color: black; font-size: 14pt;}
#bt{border-radius: 10px;background-color: red;color: white; font-size:14pt;}
#tab{border-radius: 10px; background-color:white; color: black; font-size: 14pt;}
body{border-radius: 10px; background-color:white;}
</style></head></html>
<center>

<h1 id=''><font size="5 "> <b>Record Delete</h1>


<table id="tab">
	


<?php


$con=mysqli_connect("localhost","root","","zomoto");

if(mysqli_connect_errno())
{ 

echo "Failed to connect to mysql:".mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM std_info" );

echo"<center>";
echo"<h2> </h2>";
echo"<table border='1' id='tab'>";
echo"<tr bgcolor=khaki>";
echo"<th><center>Roll Number</th>";
echo"<th><center>Student</th><br>";
echo"<th><center>Class</th>";
echo"</tr>";

while ($row =mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td><center>".$row['rollno']."</td>";
	echo"<td><center>".$row['sname']."</td>";
	echo"<td><center>".$row['class']."</td>";
}

echo"</table>";
echo"<center>";



?>
<br>
<form name="f1" action="view.php" method="POST">

		<table id="tab" border="0">
			<br><br>

	<font size="5"><b> Which Record You Want to Delete: 
		<td><input type="text" name="t1" id="tx"></td>

		<td><b><input type="submit" name="b1" value="Delete" id="bt"></td></b>
	
		</form>


<?php 

if(isset ($_POST['b1']))
{
$rn=$_POST['t1'];

$con=mysqli_connect("localhost","root","","zomoto");

if(mysqli_connect_errno())
{ 

echo "Failed to connect to mysql:".mysqli_connect_error();
}
$sql=mysqli_query($con,"DELETE FROM std_info where rollno='$rn'");

echo"<center>";
echo"<h1><b>1 Record Deleted</h1>";
echo"</table>";
}
?>



</html>

</form></table><br>

 <td><tr><a href="http://localhost/insertDatabase/Welcome.php"><font size="5"><b>Go to Home Page</b></font></a><br>

</td></tr>
<br><br>
<!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="container-fluid">

    <footer class="text-lg-start text-white" style="background-color: lightblue;">
        <!-- Grid container -->
        <div class="container-fluid p-2">
            <!--Grid row-->
            <div class="row mt-2">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 pe-3 ps-3">
                  <align="left"><h5 class="text-uppercase"><b>Contact Details</b></h5></align>

                    <ul class="list-unstyled mb-0">
                        <li>
                           <li class="fa-solid fa-location-dot text-warning"></li> <a href="#" class="text-white" style="text-decoration:none">&nbsp; <span class="glyphicon">&#xe062;    Sharanabasaveshwar College of Science Vidya Nagar, Kalaburagi – 585103. Karnataka (India) </a></span> <br>
                        </li>
                      </li><br>
                      <div align="Left"><li class="fa-solid fa-phone text-warning"></li><a href="#" class="text-white" style="text-decoration:none" ><span class="glyphicon glyphicon-earphone">  08472-221941<br></a></span> 
                        </li></align></div>
                      </li><br>
                      <div align="left"><li class="fa-solid fa-envelope text-warning"></li><a href="mailto:sbcscg@gmail.com" class="text-white" style="text-decoration:none" >&nbsp;  <span class="glyphicon glyphicon-envelope">    E-mail Id : sbcscg@gmail.com<br></a></span> 
                        </li><br></div>
                      
                    </ul>
                </div>
                
                <!--Grid column-->
                <!--Grid column-->
                <table border="0" align="left
                ">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0  pe-3 ps-3">
                   <tr><td> <h5 class="text-uppercase text-center"><b>Quick Links</h5></td>
                    
                    <ul class="list-unstyled">

                      
                           <tr><td> <i class="fa-solid fa-angle-right text-warning"></i>
                          <br> <a href="http://127.0.0.1:5500/Dropdown2.html" class="text-white  text-left" style="text-decoration: none">&nbsp;  <span class="glyphicon glyphicon-menu-right"> Home</a>
                            </td></span>

                           <tr><td> <i class="fa-solid fa-angle-right text-warning"></i>
                              <br> <a href="http://127.0.0.1:5500/physics.html" class="text-white  text-left" style="text-decoration: none">&nbsp;  <span class="glyphicon glyphicon-menu-right"> Departments</a>
                                </td></span> 
                        
                          <tr><td>  <i class="fa-solid fa-angle-right text-warning"></i>
                            <br><a href="http://127.0.0.1:5500/Academics.html" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right"> Academics</a></span>
                        </td>
                        
                            <tr><td><i class="fa-solid fa-angle-right text-warning"></i>
                              <br><a href="http://127.0.0.1:5500/lib.html" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right"> Facilities</a></span>
                        </td>
                        
                        
                           <tr><td> <i class="fa-solid fa-angle-right text-warning"></i>
                           <br> <a href="http://127.0.0.1:5500/Contact.html" class="text-white  text-left" style="text-decoration: none">&nbsp; <span class="glyphicon glyphicon-menu-right">  Contact<br></a></span
                        </td></tr>
                         
                    </ul>
                </div>
                <!--Grid column-->
                <table border="0" align="center">
                 <div class="col-lg-6 col-md-12 mb-md-0 pe-3 ps-3">
                     <tr><td><iframe  class="Googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15234.976902804401!2d76.8233766!3d17.3278857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfba38b632d8471bd!2sSharnbasveshwar%20College%20of%20Science%2C%20Gulbarga!5e0!3m2!1sen!2sin!4v1672378438976!5m2!1sen!2sin" width="900px" height="380" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </td></tr>    
                  </div>
                 </table></table></div></div> </tr>
            </div>


