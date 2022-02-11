<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="02_08_2022_styles.css">
<title>HTML Forms</title>
<!-- Centering headers, forms, and paragraphs -->
<body>

<form id = "cruise_form" action="handler.php" method="post">
    <h1>Creating forms in HTML</h1>
    <!-- These are the two textbox forms, for First name and Last name -->
      <h2>What's your first name? :</h2>
      <label for="firstname"> First name: </label><br>
      <input type="text" id="firstname" name=firstname reqruired> <br>
      <h2>And your last name?</h2>
      <label for="lastname"> Last name: </label><br>
      <input type="text" id="lastname" name=lastname required> <br>
    
      <!-- The dropdown form for State -->
    
      <h3>What state are you in?</h3>
      <select name="state" id="state" required>
        <option value=""> Please select...</option>
        <option value="ECarib">Eastern Caribbean</option>
        <option value="SCarib">Southern Caribbean</option>
        <option value="WCarib">Western Caribbean</option>
        <option value="BERM">Bermuda</option>
        <option value="BAMA">Bahamas</option>
        </select>

        <h3>What's your preferred destination?</h3>
      <select name="state" id="state" required>
        <option value=""> Please select...</option>
        <option value="ECarib">Eastern Caribbean</option>
        <option value="SCarib">Southern Caribbean</option>
        <option value="WCarib">Western Caribbean</option>
        <option value="BERM">Bermuda</option>
        <option value="BAMA">Bahamas</option>
        </select>

      <!-- adding a textbox form -->
      <p>What city are you in?</p>
      <label for="fname"> City : </label><br>
      <input type="text" id="fname" name=fname> <br>
        
      <!-- adding a radio form -->
      <br><p>Finally, would you like to be on our e-mail list?</p>
        <input type="radio" id="mail_yes" name="mailList" value="mailList" required>
        <label for="mail">Yes, I would.</label><br>
        
        <br>
        
        <input type="radio" id="mail_no" name="mailList" value="mailList" required>
        <label for="mail">No thank you.</label><br>
      
        <!-- adding a checkbox form -->
      <br><input type="checkbox" id=contestTerms name=contestTerms value=contestTerms>
        <label for="contestTerms">I accept the terms of the contest</label>
    
    <!-- submitting your entry through a button-->
    <br><input type="Submit" class="submit" value="Submit your entry"><br>
</form>

<?php echo"<div style='text-align:center'>"; include "include_footer.php"; echo "</div>" ?>
</head>
</html>
</body>