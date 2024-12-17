
<html>
<!DOCTYPE html>

    <head>
<style >
    .button{
        border-radius: 12px;
        background-color:  bisque; 
        color: black;
        font-size: 16px;
        transition-duration: 0.4s;
}
    .button:hover {
        background-color: lightpink;
        color: black;
}
    .adiv{
          width: 1519px;
            height:150px;
            background-color:darkred;
        position: absolute;
        top: 0px;
        left: 0px;
        
      }
    .bdiv{
          width: 1519px;
            height:40px;
            background-color:firebrick;
        position: absolute;
        top: 150px;
        left: 0px;
      }
    p1{
        float: left;
        color: white;
        position: absolute;
        top:50px;
        text-indent: 30px;
        font-size: 33px; 
    }
     .logout{
       text-decoration: none;
        font-size: 22px;
        color: white;
        position:absolute;
        top: 7px;
        left: 1425px;
    }
    .logout:hover{
        color: black;
    }
    .fa-solid{
       height: 0%;
        width: 100%;
        line-height: 50px;
         cursor: pointer;
        color: white;
        font-size: 20px;
    }
 * {box-sizing: border-box;}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
    border-radius: 10px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 180px;
    height: 50px;
    font-size: 20px;
}
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    p0{
        font-size: 18px;
    }
    input[type=text]{
  width: 160px;
  padding: 4px 4px;
  margin: 4px 0;
 border-radius: 6px;
 border: 2px solid black;
  box-sizing: border-box;
}
        input[type=tel]{
  width: 160px;
  padding: 4px 4px;
  margin: 4px 0;
 border-radius: 6px;
 border: 2px solid black;
  box-sizing: border-box;
}
    .btn1{
        background-color: bisque;
        color: black;
        cursor: pointer;
        height: 25px;
        width: 100px;
        font-size: 18px;
        font-family: sans-serif;
        position: absolute;
        top: 248px;
        left: 210px;
        border-radius: 10px;
       border: 0.5px solid black;
       text-decoration: none;
        text-align: center;
    }
    .btn1:hover{
  background-color: darkgray;
  color: white;
}
</style>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
<script src="https://kit.fontawesome.com/38791557b9.js" crossorigin="anonymous"></script>
</head>
    <body>
<div class="adiv">
<img src="logo.jpg"  align="left" style="margin-left: 30px ;  margin-top: 25px; height: 100px">
<p1>Symbiosis University of Applied Sciences</p1>
    </div>
        <div class="bdiv">
  <i class="fa-solid fa-right-from-bracket" align="right" style="position: absolute; top: 10px; right: 100px; color: white; back"></i>
<a href="2.html" class="logout"><b>Log Out</b></a></div>
   <br>
        <br><br><br><br><br><br><br><br> 
        <br>

<title>REGISTRATION FORM</title>
             
<form action="authenticationstudent.php" onsubmit="return checkBeforeSubmit()" method="post" autocomplete="on" enctype="multipart/form-data">
    
    <b><heading style ="font-size: xx-large;
    font-style:normal;
    font-family: inherit;
        color: darkred;">EMPLOYMENT REGISTRATION AT UNIVERSITY EXIT</heading></b><br><br>
    <p0><b> filled the form already?</b></p0><a href="company_details.html" class="btn1">Next</a>
<p>
  <b>Personal Details</b><br>
  ------------------------------------------------<br><br>

<label>Enrollment Number<span style="color:red">*</span> : 
<input type="text" name="enrollment_no" placeholder="Enter your roll no" required>
</label> 
    <br><br>
<label>First Name<span style="color:red">*</span>&emsp;&emsp;&emsp;&nbsp;&nbsp; : 
<input type="text" name="firstname" placeholder="Enter your first name" required>
</label> 
</p>

  <label>Last Name<span style="color:red">*</span>&emsp;&emsp;&emsp;&nbsp;&nbsp; : 
<input type="text" name="lastname" placeholder="Enter your last name"required>
</label> 
 <br><p>
  <label>Email<span style="color:red">*</span>&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp; : 
<input type="text" name="email" placeholder="Enter your email-id" required>
</label> 
</p><p>
    
  <label>Address<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : 
<input type="text" name="address" placeholder="Enter your address" required>
</label> 
</p>
    
<p>
 <label>City<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : 
<input type="text" name="city" placeholder="Enter your city"  required>
</label> 
</p>
    
<p>
 <label>State<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : 
<input type="text" name="state" placeholder="Enter your state" required>
</label> 
</p>
    
<p>
 <label>Zip<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; : 
<input type="text" name="zip" placeholder="Enter zip" required>
</label> 
</p>

<p>
<label>Phone<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : 
<input type="tel" name="mobile_number" placeholder="Enter your mobile no" required>
</label>
</p>



<legend>Gender<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : </legend>
<label> <input type="radio" name="gender" required value="male"> Male </label><br>
<label> <input type="radio" name="gender" required value="female"> Female </label>
<p>
  
  <p>
<label>DOB<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : 
<input type="date" name="dob" required>
</label>
</p>

    <p>
    <label>Course<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp; :  
<input type="text" name="course" placeholder="Enter your course" required >
</label>
</p>

    <p>
  <label>Branch<span style="color:red">*</span>&emsp;&emsp;&emsp;&emsp;&emsp; :  
<input type="text" name="branch" placeholder="Enter your branch" required > 
</label>
</p>


<legend><b>Area of Interest</b><span style="color:red">*</span> : </legend>
<br><label> <input type="radio" name="interest" required value="software testing"> SOFTWARE TESTING </label>
<br><label> <input type="radio" name="interest" required value="artificial intelligence"> ARTIFICIAL INTELLIGENCE </label>
<br><label> <input type="radio" name="interest" required value="cyber security"> CYBER SECURITY </label>
<br><label> <input type="radio" name="interest" required value="software developing"> SOFTWARE DEVELOPING</label>
<br><label> <input type="radio" name="interest" required value="data scientist"> DATA SCIENTIST</label>
<br><label> <input type="radio" name="interest" required value="debugger"> DEBUGGER</label>
<br><label> <input type="radio" name="interest" required value="web development"> WEB DEVELOPMENT</label>
<br><label> <input type="radio" name="interest" required value="android app">ANDROID APP</label>
<br><label> <input type="radio" name="interest" required value="ms office"> MS OFFICE </label>
<br><label> <input type="radio" name="interest" required value="ms office"> OTHER </label>
<br><br>


<legend><b>Languages good at</b><span style="color:red">*</span> :  </legend>
<p><label> <input type="checkbox" name="languagesgoodat" value="python"> Python </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="java"> JAVA </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="c/c++"> C/C++ </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="ruby"> C# </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="javascript"> JavaScript </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="html/css"> HTML/CSS </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="ruby"> Ruby </label></p>
<p><label> <input type="checkbox" name="languagesgoodat" value="ruby"> PHP </label></p>
<script type="text/javascript">
    function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var placement = document.getElementById("placement");
        placement.style.display = chkYes.checked ? "block" : "none";
    }
    function ShowHideDiv1() {
        var chkYes1 = document.getElementById("chkYes1");
        var furtherstudies = document.getElementById("furtherstudies");
        furtherstudies.style.display = chkYes1.checked ? "block" : "none";
    }
</script>
    <p><b>Did you get your placement by SUAS?</b><span style="color:red">*</span> : </p>
<label for="chkYes">
    <input type="radio" id="chkYes" name="placement" onclick="ShowHideDiv()" />
    Yes
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="placement" onclick="ShowHideDiv()" />
    No
</label>
<div id="placement" style="display: none">
<p><legend><b>In which company did you get placed?</b></legend><br>
<input type="text" name="company_you_get_placed"  >     
</p>
   
<p><legend><b>Where is the company located in which you will work?</b></legend><br>
    <input type="text" name="where_company_is_located"  > 
    </p>
<p>
<legend><b>Did you receive a current job description when you were hired?</b></legend>
<br><label> <input type="radio" name="Did_you_receive_a_current_job_description_when_you_were_hired" > Yes </label>
<label> <input type="radio" name="Did_you_receive_a_current_job_description_when_you_were_hired" > No </label>
</p>

<p>
<legend><b>Were you given proper training and opportunity to learn your job ?</b></legend>
<br><label> <input type="radio" name="training" > Yes </label>
<label> <input type="radio" name="training" > No </label>
<p>
    
<legend><b>Did you receive any information regarding university policies & procedures upon hire ?</b></legend>
<br><label> <input type="radio" name="receive_any_info"> Yes </label>
<label> <input type="radio" name="receive_any_info" > No </label>
<p>
    
    
     <legend><b><br>  Would you recommend employment in your department to a friend or colleague?</b></legend>
    <label> <input type="radio" name="recommend_employment_in_your_department_to_a_friend_or_colleague" > Yes </label>
<label> <input type="radio" name="recommend_employment_in_your_department_to_a_friend_or_colleague" > No </label>
    </div>   

 <p><b>Are you going for any further studies?</b><span style="color:red">*</span> : </p>
<label for="chkYes">
    <input type="radio" id="chkYes1" name="further_studies" onclick="ShowHideDiv1()" />
    Yes
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="further_studies" onclick="ShowHideDiv1()" />
    No
</label> 
<div id="furtherstudies" style="display: none">
<p><legend><b>If yes, then what are you going to study for?</b></legend><br>
<input type="text" name="you_going_to_study_for"  >
</p>
    
<p><legend><b>What is the name of the college?</b></legend><br>
<input type="text" name="name_of_clg_forfurtherstudies"  ></p>
    </div>  
<p> 

<label><b>Preferrable Company</b>
<select id="company" name="Preferrable_Company">
<option value="" selected="selected">Select One</option>
  <option value="MICROSOFT" >MICROSOFT</option>
<option value="TCS" >TCS</option>
<option value="ACCENTURE" >ACCENTURE</option>
 <option value="IMPETUS" >IMPETUS</option> 
  <option value="INFOSYS" >INFOSYS</option>
  <option value="WIPRO" >WIPRO</option>
    <option value="OTHER" >OTHER</option>
</select>
</label> 
</p>


<p>
<label><b>Orientation within your department</b><span style="color:red">*</span> : 
<select id="resources" name="Orientation_within_your_department">
<option value="" selected="selected">Please Select</option>
  <option value="Excellent" >Excellent</option>
<option value="Good" >Good</option>
<option value="Adequate" >Average</option>
 <option value="Poor" >Poor</option> 
  <option value="N/A" >N/A</option>
</select>
</label>     
</p>

    
<p>
   <label><b>How was your experience by getting a placement through SUAS?</b><span style="color:red">*</span> :  <br>
<textarea name=" experience_by_getting_a_placement_through_SUAS" maxlength="700" placeholder="How was your experience by getting a placement through SUAS?"></textarea>
</label>
</p>


<p>
    <label><b>Please add your LinkedIn Profile link here</b><span style="color:red">*</span> :  <br>
<textarea name="LinkedIn_Profile" maxlength="500" placeholder="Please add your LinkedIn Profile link here"> </textarea>
</label>
</p>

<p><button input class="button" type="submit" value="Submit">Submit</button></p>
</form>
<button class="open-button" onclick="openForm()"><b>Chat</b></button>


<div class="chat-popup" id="myForm">
  <form action="chat.php" method="post" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label><br><br>
    Name<span style="color:red">*</span> : &ensp;<input type="text" name="name" placeholder="Enter your name" required>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>