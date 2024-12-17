<html>
<head>
<style>
   *{
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: sans-serif;
        
    }

    body{
        background-color: white; 
    }
    .adiv{
          width: 1989px;
            height:150px;
            background-color:darkred;
        
      }
    .bdiv{
          width: 1989px;
            height:50px;
            background-color:firebrick;
      }
    
     a{
        position: relative;
        color:  rgb(85,83,83);
        font-size: 14px;
        display: table;
        width: 280px;
        padding: 10px;
    }
    a:hover{
        background: #eee;
    }
    .nav ul li:hover,
    .nav ul li.active{
        background: #eee;
        color: #e8f5f1;
    }
    
    .nav ul li:hover:before,
    .nav ul li.active:before{
        opacity: 1;
    }
    p{
        float: left;
        color: white;
        text-indent: 30px;
        font-size: 33px;
        position: absolute;
        top:50px;
        left: 120px;
    }
    
    nav{
        position: relative;
        top: 0;
        bottom: 0;
        height: 544px;;
        left: 0;
        background: lightgray;
        width: 280px;
        overflow: hidden;
        box-shadow: 0 20px 35px rgba(0,0,0,0.1);
        
    }
    
    p1{
        font-size: 24px;
        text-align: left;
        color: white;
        position: absolute;
        top: 160px;
        left: 75px;
    }
    .tab-content{
        width: 1709px;
        height: 544px;
         position: absolute;
        top: 200px;
        left: 280px;
        background: white;
        border: 1px solid #dddddd;
        border-radius: 5px;
        padding: 20px;
        font-family: sans-serif;
        text-decoration: none;
        font-size: 14px;
        line-height: 22px;
    }
    input{
  width: 140px;
  padding: 4px 4px;
  margin: 4px 0;
 border-radius: 6px;
 border: 2px solid black;
  box-sizing: border-box;
}
    .rollno{
        width: 190px;
  padding: 4px 4px;
  margin: 4px 0;
 border-radius: 6px;
 border: 2px solid black;
  box-sizing: border-box;
    }
    .button{
        border-radius: 6px;
        background-color:  lightgoldenrodyellow; 
        color: black;
        position: absolute;
        top: 330px;
        left: 590px;
        font-size: 16px;
        width: 60px;
        transition-duration: 0.4s;
        border: 2px solid firebrick;
}
    .button:hover {
        background-color: lightgoldenrodyellow;
        color: lightcoral;
}
.button2{
        border-radius: 6px;
        background-color:  lightgoldenrodyellow; 
        color: black;
        position: absolute;
        top: 360px;
        left: 590px;
        font-size: 16px;
        width: 60px;
        transition-duration: 0.4s;
        border: 2px solid firebrick;
}
    .button2:hover {
        background-color: lightgoldenrodyellow;
        color: lightcoral;
}
    .button1{
        border-radius: 6px;
        background-color:  lightgoldenrodyellow; 
        color: black;
        position: absolute;
        top: 150px;;
        left: 590px;
        font-size: 16px;
        width: 70px;
        transition-duration: 0.4s;
        border: 2px solid firebrick;
}
    .button1:hover {
        background-color: lightgoldenrodyellow;
        color: lightcoral;
}
    h2{
        text-align: center;
    }
    table td {
    border: 1px solid black ;    
border-collapse: collapse;
width: 50%;
color: black;
font-family: monospace;
font-size: 12px;
text-align: left;
background-color: antiquewhite;
}
    th {
background-color: #588c7e;
font-family: monospace;
font-size: 12px;
color: black;
border: 1px solid;
}
    .nav-item{
        display: block;
        height: 60%;
        width: 80%;
        text-align: center;
        line-height: 30px;
        cursor: pointer;
        color: black;
        font-size: 17px;
        position: relative;
        z-index: 1;
    }
    .fa-solid{
       height: 0%;
        width: 100%;
        line-height: 50px;
         cursor: pointer;
        color: black;
        font-size: 17px;
        position: absolute;
        margin-top: 8px;
    }
    [data-tab-content]{
        display: none;
    }
    .active[data-tab-content]{
        display: block;
     }
    .logout{
        position: absolute;
        bottom: 0;
    }
     .rectangle {
height: 150px;
width: 240px;
background-color:firebrick;
float: left;
border-radius: 25px;  
padding: 20px;  
text-align: center;
color: white;
font-size: 16px;
}
    
    .rectangle1 {
height: 150px;
width: 240px;
background-color:#F5F5F5;
margin-left: 13%;
float: left;
text-align: center;
color: black;
font-size: 16px; 
border-radius: 25px;
padding: 20px;
    }
     .rectangle2 {
  height: 150px;
  width: 240px;
  background-color:darkred; 
  margin-left: 15%;
 float: left;
  border-radius: 25px;
  padding: 20px;
         text-align: center;
color: white;
         font-size: 16px; 
    }
    .rectangle3 {
  height: 300px;
  width: 550px;
  background-color:white; 
float: left;
     
        color: white;
         font-size: 18px;
        
    }
    .rectangle4 {
  height: 300px;
  width: 400px;
  background-color:darkred;
float: left;
border-radius: 25px;
  padding: 20px;
     margin-left: 15%; 
        color: white;
        font-size: 23px;
        text-align: center;
    }
    
    p9{
        font-size: 23px;
    }
    p10{
        font-size: 23px;
    }
    p11{
        font-size: 23px;
    }
    .graph{
        height: 300px;
        width: 550px;
        border-radius: 25px;
  
    }
    p15{
        font-size: 15px;
        text-align: left;
    }
    p16{
        font-size: 15px;
        text-align: left;
    }
   
</style>
<script src="admin.js" defer></script>
<script src="https://kit.fontawesome.com/38791557b9.js" crossorigin="anonymous"></script>
<title>Admin</title>
    </head>
<body>
    <img src="logo.jpg"  align="left" style="margin-left: 30px ;  margin-top: 25px; height: 100px">
<p>Symbiosis University of Applied Sciences</p>
    
<div class="adiv"></div>
<div class="bdiv">
    <i class="fa-solid fa-house-chimney" align="left" style="margin-left: 20px; margin-top: 15px; background-color: firebrick; color: white; back"></i>
<p1>Home</p1></div>
<nav>
<ul>
<li data-tab-target="#dashboard">
 <a href="#">
  <i class="fa-solid fa-chart-line" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Dashboard</span>
    </a>
</li>
<li data-tab-target="#addstudent" >
    
<a href="#">
   <i class="fa-solid fa-user" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
   <i class="fa-solid fa-plus" align="left" style="margin-left: 1px; margin-top: 6px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Add Student</span>
    </a>
</li>
<li data-tab-target="#removestudent" ><a href="#">
  <i class="fa-solid fa-user" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
    <i class="fa-solid fa-minus" align="left" style="margin-left: 1px; margin-top: 6px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Remove Student</span>
    </a>
</li>
<li data-tab-target="#searchstudent" >
    
<a href="#">
   <i class="fa-solid fa-user" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
   <i class="fa-solid fa-magnifying-glass" align="left" style="margin-left: -4px; margin-top: 6px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Search Student</span>
    </a>
</li>
<li data-tab-target="#updatestudent" >
<a href="#">
      <i class="fa-solid fa-user" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
<i class="fa-solid fa-gear" align="left" style="margin-left: 1px; margin-top: 6px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Update Student</span>
    </a>
</li>
<li data-tab-target="#formresponse" >
<a href="#">
   <i class="fa-solid fa-align-justify" align="left" style="margin-left: 9px; margin-top: -5
                                                            px; background-color: lightgray; color: black; back"></i>
<span class="nav-item" >Form Response</span>
    </a>
    </li>
<li data-tab-target="#chat">
 <a href="#">
<i class="fa-solid fa-comment-dots" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Chat</span>
    </a>
</li>
<li><a href="1.html" class="logout">
      <i class="fa-solid fa-right-from-bracket" align="left" style="margin-left: 9px; margin-top: 8px; background-color: lightgray; color: black; back"></i>
<span class="nav-item">Log Out</span>
</a></li>
</ul>
</nav>
<div class="tab-content">
<div id="dashboard" data-tab-content  class="active">
<div class="rectangle"><span class="icon"><img src="student.png"></span><br>Number of students placed till now<br><p9><b>120</b></p9></div>
<div class="rectangle1"><span class="icon"><img src="admin.png"></span><br>Number of students added by Admin<br><p10><b>35</b></p10></div>
<div class="rectangle2"><span class="icon"><img src="form.png"></span><br>Number of students who filled the form<br><p11><b>2</b></p11></div><br><br><br><br><br><br><br><br>
<div class="rectangle3"><span class="icon"><img class="graph" src="graph.png"></span>  
</div>
<div class="rectangle4">Courses Offered<br><br><p15>B. Tech<br><ul><li>Computer Science and Information Technology</li><li>Mechatronics</li></ul></p15><br><p16>BBA<br><ul><li>Banking,Financial Services and Insurance</li><li>Digital Media & Marketing</li><li>Retail & E-commerce Management</li><li>Logistics & Supply Chain Management</li></ul></p16></div>


</div>
<div id="addstudent" data-tab-content >
<form action="authenticationaddstd.php" onsubmit="return validation()" method="post" >
    
    <b><h1 style ="font-size: x-large;
    font-style:normal;
    font-family: inherit;
        color: darkred; margin-left: 530px;">ADD STUDENT</h1></b>
<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Enrollment Number : &nbsp;<input type="text" name="enrollment_no" placeholder="Enter roll no">&emsp;&nbsp;&nbsp;&nbsp;
Name &emsp;&emsp;&emsp;&emsp;&emsp;: &nbsp;<input type="text" name="name" placeholder="Enter name">
<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="email" placeholder="Enter Email id">&emsp;&nbsp;&nbsp;&nbsp;
Mobile Number&emsp;&nbsp;&nbsp;: &nbsp;<input type="tel" name="mobile_no" placeholder="Enter mobile no">
<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Address&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="address" placeholder="Enter address" >&emsp;&nbsp;&nbsp;&nbsp;
Program&emsp;&emsp;&emsp;&emsp;&nbsp;: &nbsp;<input type="text" name="program" placeholder="Enter program">
<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Branch&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: &nbsp;<input type="text" name="branch" placeholder="Enter branch" >&emsp;&nbsp;&nbsp;&nbsp;
Year/Sem&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="year_sem" placeholder="Enter year/sem">

<br><br>
<button input class="button" type="submit" value="Submit">Submit</button>
</form>
</div>
<div id="removestudent" data-tab-content>
<form action="authenticationremovestd.php" onsubmit="return validation()" method="post">
<b><h1 style ="font-size: x-large;
    font-style:normal;
    font-family: inherit;
        color: darkred;margin-left: 530px;">REMOVE STUDENT</h1></b>
<br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Enrollment Number : &nbsp;<input type="text" name="enrollment_no" placeholder="Enter roll no"></b>
<br><br>
<button class="button1" value="remove">Remove</button>
</form></div>
<div id="searchstudent" data-tab-content>
<?php
$conn = mysqli_connect("localhost", "root", "", "user");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM list";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "Enrollment no : " . $row["enrollment_no"]." - Name :  " . $row["name"]. " - Email : " . $row["email"] . " - Mobile no : " . $row["mobile_no"] . " - Address :  " . $row["address"]. " - Program : " . $row["program"] . " - Branch : " . $row["branch"]. " - Year/Sem : " . $row["year_sem"]."<br>";
}
echo " ";
} else { echo "no results"; }
$conn->close();
?> 

    
</div>
<div id="updatestudent" data-tab-content>
<form action="update.php" onsubmit="return validation()" method="post" >
<b><h1 style ="font-size: x-large;
    font-style:normal;
    font-family: inherit;
        color: darkred; margin-left: 530px;">UPDATE STUDENT</h1></b>
<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Enrollment Number : &nbsp;<input type="text" name="enrollment_no" class="rollno" placeholder="rollno whose info to be update"><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; &nbsp;: &nbsp;<input type="text" name="name" placeholder="Enter name">
&emsp;&nbsp;&nbsp;&nbsp;Email&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="email" placeholder="Enter Email id"><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mobile Number&emsp;&nbsp;&nbsp;: &nbsp;<input type="tel" name="mobile_no" placeholder="Enter mobile no">
&emsp;&nbsp;&nbsp;&nbsp;
Address&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="address" placeholder="Enter address" ><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Program&emsp;&emsp;&emsp;&emsp;&nbsp;: &nbsp;<input type="text" name="program" placeholder="Enter program">
&emsp;&nbsp;&nbsp;&nbsp;
Branch&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: &nbsp;<input type="text" name="branch" placeholder="Enter branch" ><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Year/Sem&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="year_sem" placeholder="Enter year/sem">
<br><br>
<button input class="button2" type="submit" value="update">Update</button>
</form></div>
<div id="formresponse" data-tab-content>
<h2>FORM RESPONSE</h2>
<br>
<table>
<tr>
<th>Enrollment Number</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Phone</th>
<th>Gender</th>
<th>DOB</th>
<th>Course </th>
<th>Branch </th>
<th>Area of Interest</th>
<th>Languages good at</th>
<th>Did you get your placement by SUAS?</th>
<th>Preferrable Company</th>
<th>Orientation within your department</th>
<th>Did you receive a current job description when you were hired?</th>
<th>Were you given proper training and opportunity to learn your job ?</th>
<th>receive any information regarding university policies & procedures upon hire ?</th>
<th>recommend employment in your department to a friend or colleague?</th>
<th>experience by getting a placement through SUAS?</th>
<th>LinkedIn Profile link</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3306", "root", "", "user");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM form";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["enrollment_no"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>"  . $row["address"] . "</td><td>"  . $row["city"] . "</td><td>"  . $row["state"] . "</td><td>"  . $row["zip"] . "</td><td>"  . $row["mobile_number"] . "</td><td>"  . $row["gender"] . "</td><td>"  . $row["dob"] . "</td><td>"  . $row["course"] . "</td><td>"  . $row["branch"] . "</td><td>"  . $row["interest"] . "</td><td>"  . $row["languagesgoodat"] . "</td><td>"  . $row["placement"] . "</td><td>"  . $row["Preferrable_Company"] . "</td><td>"  . $row["Orientation_within_your_department"] . "</td><td>"  . $row["Did_you_receive_a_current_job_description_when_you_were_hired"] . "</td><td>"  . $row["training"] . "</td><td>"  . $row["receive_any_info"] . "</td><td>"  . $row["recommend_employment_in_your_department_to_a_friend_or_colleague"] . "</td><td>"  . $row["experience_by_getting_a_placement_through_SUAS"] . "</td><td>"    
. $row["LinkedIn_Profile"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<div id="chat" data-tab-content>
<?php
$conn = mysqli_connect("localhost", "root", "", "user");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM chat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "Name = " . $row["name"]." , " ." Msg = " . $row["msg"] ."<br>";
}
echo " ";
} else { echo "no results"; }
$conn->close();
?>    
</div>
</div>
</body>
</html>