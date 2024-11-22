<html>
    <head>
        <style>
    div{
                background-color:rgb(5, 61, 28);
                padding:15px;
                border-radius: 20px;
                width:500px;
            }
            body{
                background-color:rgb(173, 144, 101);
                background-image: url('form background.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                margin-left:400px;
                margin-top: 0px;

    justify-content:center;
    height:100vh;
    align-items:center;
            }
            .p{
                padding:15px;
                color:rgb(173, 144, 101);
            }
            .q{
                padding:15px;
                color:rgb(173, 144, 101);
            }
            .r{
                padding:15px;
                color:rgb(173, 144, 101);
            }
            .t{
                padding:15px;
                color:rgb(173, 144, 101);
            }
            input[type=text], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
    
            }
            input[type=number], select{
                width:350px;
                height:35px;
                border-radius:10px; 
                border:none;
            }
            input[type=date], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=email], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=password], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=reset], select{
                width:250px;
                height:35px;
                border-radius:10px;
                border:none;
                margin-top:10px;
                margin-left:60px;
                color:rgb(173, 144, 101);
                background-color: black;
            }
            input[type=tel], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=url], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=file], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=search], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            input[type=submit], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
                color:rgb(173, 144, 101);
                background-color: black;
            }
            input[type=time], select{
                width:350px;
                height:35px;
                border-radius:10px;
                border:none;
            }
            #nation{
                margin:5px;
            }

        </style>
</head>
<body>
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $text=$_POST['text'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $date=$_POST['date'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $tel=$_POST['tel'];
                $URL=$_POST['URL'];
                $file=$_POST['file'];
                $search=$_POST['search'];
                $range=$_POST['range'];
                $time=$_POST['time'];
                $color=$_POST['color'];
                $cars=$_POST['car'];
                $nation=$_POST['nation'];
            }
            ?>
            <form action method="POST">
<h1>ALL INPUT TYPE ATTRIBUTE VALUES</h1>
        <div>
            <fieldset class="p">
                <legend>Personal Information</legend>
                <label for="text">Enter your name</label><br>
        <input type="text" id="text" name="text"><br>
        <label for="age">Enter your  age</label><br>
        <input type="number" id="age"  name="age"><br>
        <label for="date">Enter your date of birth</label><br>
        <input type="date" name="date" id="date"><br>
        <label>
            <input type="radio" name="gender" value="male" checked> Male
        </label><br>
        <label>
            <input type="radio" name="gender" value="female"checked> Female
        </label><br>
        <label>
            <input type="radio" name="gender" value="other"checked> Other
        </label><br>
            </fieldset>
            <fieldset class="q">
                <legend>Address data</legend>
                <label for="email">Enter your email</label> <br>
        <input type="email" id="email" name="email"><br>
        <label for="password" >Enter your password</label><br>
        <input type="password" id="password" name="password"><input type="reset"><br><br>
</select>
        <label type="tel">Enter telephone number</label><br>   
        <input type="tel" name="tel" id="tel"><br>
            </fieldset>
        <fieldset class="r">
            <legend>Extra services</legend>
            <label for="URL">Enter URL</label><br>
            <input type="URL" name="URL" id="URL"><br>
            <label for="file">Upload a file</label>
        <input type="file" name="file" id="file"><br>
        <label for="search">Search google</label>
        <input type="search" name="search" id="search">
        </fieldset>
        <fieldset class="t">
            <legend>Extra questions(optional)</legend>
            <label for="range">Range for numbers</label>
            <input type="range" name="range" id="range" min="0" max="100"><br>
            <label for="time">Enter the  time you were born</label>
            <input type="time" name="time" id="time"><br>
            <label type="color">Choose the color</label>
            <input type="color" name="color" id="color" value="#00ffff"><br>
            <h3>What is your favorite car</h3>
            <label>
                <input type="checkbox" name="car" value="toyota"> Toyota
            </label>
            <label>
                <input type="checkbox" name="car" value="mercedes"> Mercedes
            </label>
            <label>
                <input type="checkbox" name="car" value="volkswagen"> Volkswagen
            </label>
<select id="nation" name="nation">
  <option value="Rwandan">Rwandan</option>
  <option value="Ugandan">Ugandan</option>
  <option value="Tanzanian">Tanzanian</option>
  <option value="Kenyan">Kenyan</option>
</select><br>
            <input type="submit" value="Submit">
            </div>

        </fieldset>
      </div>
            </form>
             <table border="1px" style="border-collapse:collapse">
            <tr>
                <th>name</th>
                <th>age</th>
                <th>dob</th>
                <th>gender</th>
                <th>email</th>
                <th>password</th>
                <th>tel</th>
                <th>URL</th>
                <th>file</th>
                <th>search</th>
                <th>range</th>
                <th>time</th>
                <th>color</th>
                <th>favorite car</th>
                <th>nation</th>
            </tr>
            <tr>
<td><?php echo $text ;?></td>
<td><?php echo $age ;?></td>
<td><?php echo $date ;?></td>
<td><?php echo $gender;?></td>
<td><?php echo $email ;?></td>
<td><?php echo $password ;?></td>
<td><?php echo $tel ;?></td>
<td><?php echo $URL ;?></td>
<td><?php echo $file ;?></td>
<td><?php echo $search ;?></td>
<td><?php echo $range ; ?></td>
<td><?php echo $time ;?></td>
<td><?php echo $color;?></td>
<td><?php echo $cars ;?></td>
<td><?php echo $nation;?></td>
            </tr>
        </table>
</body>
</html>