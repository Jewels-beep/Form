<?php
    if(isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
?>
<form action="user_data.php" method="post">
    <input type="text" name="name" id="name" placeholder="Your name"> <br>
    <input type="email" name="email" id="email" placeholder="Your email"><br>
    <select name="gender" id="gender">
        <option value="male">
            male 
        </option>
        <option value="female">
            female
        </option>
    </select>
    <select name="country" id="country">
        <option value="Nigeria">
            Nigeria
        </option>
        <option value="Ghana">
            Ghana
        </option>
    </select>
<button type="submit" name="action" value="jewels">
    submit
</button>
    
</form>



Name 
Email
Date of birth
Gender
Country