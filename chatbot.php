<?php
if (!isset($_SESSION)) {
    session_start();
}
// select logged in users detail
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<?php
  include("header.php");
  include("library.php");
  noAccessForAdmin();

  noAccessForClerk();
  noAccessForAdmin();

  
    include("nav-bar.php");
  
?>

<div class="container">
  <h2>Welcome, "name"!</h2>
      <div class='alert alert-info'>
            
      </div>

    
<body>

<div class="container">
    <!-- Jumbotron-->
    <div class="jumbotron">
        <h3>Hello user </h3>
        <p>Hi! Our coronavirus disease self assessment scan has been developed on the basis of guidelines from the WHO and MHFW, Government of India. This interaction should not be taken as expert medical advice. Any information you share with us will be kept strictly confidential.</p>
        <p><b>Please take the below assessment</b></p>
    </div>
    <div class="questions">
        <style>
        #rcorners2 
        {
            border-radius: 25px;
            background: #286086;
            color: white;
            size: 10px;
            padding: 20px; 
            width: 500px;
            height: 80px;  
        }
        </style>
        <div align="center">
        <p id="rcorners2">Please enter your age in years.</p>
        <form action="chatbot.php" method="post">
        <input type="number" id="age" name="age" min="1" max="100" required>
        <p id="rcorners2">Please select your gender.</p>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other" required>
        <label for="other">Other</label><br>
        <p id="rcorners2">Please let us know your current body temperature in degree Fahrenheit (Normal body temperature is 98.6°F):</p>
        <input type="radio" id="normal" name="temp" value="normal" required>
        <label for="normal">Normal (96°F-98.6°F)</label><br>
        <input type="radio" id="fever" name="temp" value="fever" required>
        <label for="fever">Fever (98.6°F-102°F)</label><br>
        <input type="radio" id="high fever" name="temp" value="high fever" required>
        <label for="high fever">High Fever (>102°F)</label><br>
        <p id="rcorners2">Are you experiencing any of the symptoms below (mark all those applicable)</p>
        <input type="checkbox" id="s1" name="s1" value="Dry Cough">
        <label for="Dry Cough">Dry Cough</label><br>
        <input type="checkbox" id="s2" name="s2" value="Loss or diminished sense of smell">
        <label for="Loss or diminished sense of smell">Loss or diminished sense of smell</label><br>
        <input type="checkbox" id="s3" name="s3" value="Sore Throat">
        <label for="Sore Throat">Sore Throat</label><br>
        <input type="checkbox" id="s4" name="s4" value="Weakness">
        <label for="Weakness">Weakness</label><br>
        <input type="checkbox" id="s5" name="s5" value="Change in appetite">
        <label for="Change in appetite">Change in appetite</label><br>
        <input type="checkbox" id="s6" name="s6" value="None">
        <label for="None">None of these</label><br>
        <p id="rcorners2">Additionally, please verify if you are experiencing any of the symptoms below (mark all those applicable)</p>
        <input type="checkbox" id="s7" name="s7" value="Moderate to severe cough">
        <label for="Moderate to severe cough">Moderate to severe cough</label><br>
        <input type="checkbox" id="s8" name="s8" value="Feeling breathless">
        <label for="Feeling breathless">Feeling breathless</label><br>
        <input type="checkbox" id="s9" name="s9" value="Difficulty in breathing">
        <label for="Difficulty in breathing">Difficulty in breathing</label><br>
        <input type="checkbox" id="s10" name="s10" value="Drowsiness">
        <label for="Drowsiness">Drowsiness</label><br>
        <input type="checkbox" id="s11" name="s11" value="Persistent pain and pressure in chest">
        <label for="Persistent pain and pressure in chest">Persistent pain and pressure in chest</label><br>
        <input type="checkbox" id="s12" name="s12" value="Severe Weakness">
        <label for="Severe Weakness">Severe Weakness</label><br>
        <input type="checkbox" id="s13" name="s13" value="None">
        <label for="None">None of these</label><br>
        <p id="rcorners2">Please select your travel and exposure details.</p>
        <input type="radio" id="no" name="travel" value="no" required>
        <label for="no">No Travel History</label><br>
        <input type="radio" id="nocont" name="travel" value="nocont" required>
        <label for="nocont">No contact with anyone with symptoms above</label><br>
        <input type="radio" id="cont" name="travel" value="cont" required>
        <label for="cont">History of travel or meeting in affected geographical area in last 14 days</label><br>
        <input type="radio" id="clcont" name="travel" value="clcont" required>
        <label for="clcont">Close contact with confirmed Covid-19 patient recently</label><br>
        <p id="rcorners2">Do you have a history of any of these conditions (mark all those applicable)</p>
        <input type="checkbox" id="h1" name="med_his" value="diabetes">
        <label for="diabetes">Diabetes</label><br>
        <input type="checkbox" id="h2" name="med_his" value="high blood pressure">
        <label for="high blood pressure">High Blood Pressure</label><br>
        <input type="checkbox" id="h3" name="med_his" value="heart disease">
        <label for="heart disease">Heart Disease</label><br>
        <input type="checkbox" id="h4" name="med_his" value="kidney disease">
        <label for="kidney disease">Kidney Disease</label><br>
        <input type="checkbox" id="h5" name="med_his" value="lung disease">
        <label for="lung disease">Lung Disease</label><br>
        <input type="checkbox" id="h6" name="med_his" value="stroke">
        <label for="stroke">Stroke</label><br>
        <input type="checkbox" id="h7" name="med_his" value="reduced immunity">
        <label for="reduced immunity">Reduced Immunity</label><br>
        <input type="checkbox" id="h8" name="med_his" value="None of these">
        <label for="None of these">None of these</label><br>
        <p id="rcorners2">How have your symptoms progressed over the last 48 hrs?</p>
        <input type="radio" id="imp" name="cur_cond" value="imp" required>
        <label for="imp">Improved</label><br>
        <input type="radio" id="no" name="cur_cond" value="no" required>
        <label for="no">No change</label><br>
        <input type="radio" id="wor" name="cur_cond" value="wor" required>
        <label for="wor">Worsened</label><br>
        <input type="radio" id="worcl" name="cur_cond" value="worcl" required>
        <label for="worcl">Worsened Considerably</label>
        <br>
        <input class="submit" name="submit" type="submit" style="background-color:black;color:white;width:150px;height:40px;" value="Submit Test">
        </form>
        </div>
        

</body>
</html>