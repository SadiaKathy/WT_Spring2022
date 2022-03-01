 <?php
 include "Control/result.php"
 ?>
<html>
<head>
</head>
<body>
    <form action="" method="post">
    <label for="fname">First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="fname" name="fname" > <?php echo $ff;?> </br><br> 
                <label for="lname">Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="lname" name="lname" > <?php echo $ll;?><br><br>
                <label for="age">Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="number" id="num" name="num"> <?php echo $ag;?></input><br><br>

                <label for="des">Designation:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="radio" name="des" id="des" value ="Junior Programmer">Junior Programmer
                <input type="radio" name="des" id="des" value ="Seniorr Programme">Seniorr Programme
                <input type="radio" name="des" id="des" value ="Project Lead">Project Lead  <?php echo $D;?><br><br>

                <label for="pre">Preferred Language:</label>
                <input type="checkbox" name="pre1" id="pre1" value ="Java">Java
                <input type="checkbox" name="pre2" id="pre2" value ="PHP">PHP
                <input type="checkbox" name="pre3" id="pre3" value ="C++">C++ <?php echo $P;?><br><br>

                <label for="email">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="email" id="email" name="email" ></br><br>
                <label for="pass">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="password" id="pass" name="pass" ></br><br>

                <label for="file">Please choose a file:&nbsp</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name= "submit" value="submit">
                <input type="reset" value="Reset">
</form> 
</body>
</html>