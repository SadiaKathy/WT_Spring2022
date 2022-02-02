<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <body>
            <h1>Ragistration Form</h1><hr>
            <from>
                <label for="fname">First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="fname" name="fname" ></br><br>
                <label for="lname">Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="lname" name="lname" ><br><br>
                <label for="age">Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="number" id="num" name="num"></input><br><br>
                <label for="des">Designation:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="radio" name="des" id="des" value ="Junior Programmer">Junior Programmer
                <input type="radio" name="des" id="des" value ="Seniorr Programme">Seniorr Programme
                <input type="radio" name="des" id="des" value ="Project Lead">Project Lead <br><br>

                <label for="pre">Preferred Language:</label>
                <input type="checkbox" name="pre" id="pre" value ="pre">Java
                <input type="checkbox" name="pre" id="pre" value ="pre">PHP
                <input type="checkbox" name="pre" id="pre" value ="pre">C++<br><br>

                <label for="email">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="email" id="email" name="email" ></br><br>
                <label for="pass">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="password" id="pass" name="pass" ></br><br>

                <label for="file">Please choose a file:&nbsp</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </from>
        </body>
    </head>
</html>