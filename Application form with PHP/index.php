<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>

    </head>
    <body>
        <form id="form" action="details.php" method="POST">
        <p><h1>JobSearch.</h1>
          <h5>com</h5></p>
            <p><h2>Create Your Account</h2></p>
            <p><h4>*Required Information</h4></p>
            <p><h3>Basic Information</h3></p>
            <div class="required">
              <label>Email</label>
              <input type="email" name="email" id="email">
            </div>
            <div class="required">
               <label>Password</label>
               <input type="password" name="password" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>     
            <div class="required">
            <label>Retype Password</label>
            <input type="password" name="password1" id="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
            <div class="required">
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\')" title="Must contain one uppercase and lowercase letter,apostrophe,hyphen">
                </div>
            <div class="required">
            <label>Last Name</label>
                <input type="text" name="lastname" id="lastname" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\')" title="Must contain one uppercase and lowercase letter,apostrophe,hyphen">
            </div>
            <div class="required">
                <label>Phone Number</label>
                <input type="tell" name="phone" id="phone" placeholder="01XXX-XXX XXX">
            </div>
            <div class="required">
                Address:  <input type="text" name="address" id="address">
            </div>
            <div class="required">City:  <input type="text" name="city" id="city">
            </div>
            <div class="required">
                <label>Province:  </label>
                <select name="province" id="province">
                    <option value="raj">Rajshahi</option>
                    <option value="dha">Dhaka</option>
                    <option value="mym">Mymensingh</option>
                    <option value="ran">Rangpur</option>
                    <option value="khu">Khulna</option>
                    <option value="bar">Barisal</option>
                    <option value="chi">Chittagong</option>
                    <option value="syl">Sylhet</option>
                </select>
            </div>
            <div class="required">
                <label>Country</label>
<input list="countrys" name="country" id="country">

<datalist id="countrys">
  <option value="Bangladesh">
  <option value="India">
  <option value="Japan">
  <option value="Russia">
  <option value="Others">
</datalist>
            </div>
            <p><h3>Education</h3></p>
            <div class="required">
                <label>School</label>
                <input type="text" name="school" id="school">
            </div>
        </div>
        <div class="required">
            <label>Program</label>
            <input type="text" name="program" id="program">
        </div>
        <div class="required">
            <label>Education Level</label>
            <select name="educationlevel" id="educationlevel">
                <option value=" ">-select-</option>
                <option value="technicaldiploma">Technical Diploma</option>
                <option value="collegediploma">College Diploma</option>
                <option value="bachelorsdegree">Bachelor's Degree</option>
                <option value="mastersdegree">Master's Degree</option>
                <option value="others">Others</option>
            </select>
        </div>
        
        <div>
            <fieldset>
            <legend>Education Status:  </legend>
            <input type="radio" name="educationstatus" id="educationstatus" value="graduated">Graduated<br>
            <input type="radio" name="educationstatus" id="educationstatus" value="currentenrolled">Current Enrolled<br>
           <input type="radio" name="educationstatus" id="educationstatus" value="didnotgraduate">Did Not Graduate<br>
           
           </fieldset>
        </div>
        <div class="graduationdate">
            <label for="graduatiodate">Graduation Date</label>
            <input type="text" name="graduationdate" id="graduationdate">
        </div>
    <p><h3>Work Experience:  </h3></p>
    <div>
        <label for="employer">Employer:  </label>
        <input type="text" name="employer" id="employer" optional> 
    </div>
    <div>
        <label for="jobtitle">Job Title:  </label>
        <input type="text" name="jobtitle" id="employer" optional> 
    </div>
    <div>
        <label for="jobduty">Job Duty:  </label>
        <textarea cols="30" rows="5" optional></textarea>
    </div>

    <div>
        <label for="workedyear">Worked Year:  </label>
        <input type="number" name="workedyear" id="workedyear" min="1" max="20" optional>
    </div>
    <p><h3>Attachments:  </h3></p>
    <div>
        <label for="attachments">Attachments:  </label>
        <input type="file" name="attachments" id="attachments" multiple optional>
    </div><br>
    <input type="submit" name="submit" value="Submit">

    <a href="php/update.php" class="btn btn-success">Update</a>
     <a href="php/delete.php" class="btn btn-danger">Delete</a>

</form>
    </body>
    </html>