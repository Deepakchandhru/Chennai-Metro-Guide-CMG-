<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CMG - Home page </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="home" content="train route,timing,station">
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <?php
        include 'session.php';
        ?>
        <header>
          <img src="data:image/jpeg;base64,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">
            <h3 abbr title="Find where you are!"><b> &nbsp;&nbsp;&nbsp;&nbsp; CMG (Chennai Metro Guide)</b></h3>
            <a href="logout.php"><button class="logout" id="logout" name="logout"> 
            <?php echo 'User : ',$_SESSION["name"],'<br><br>','LOGOUT'; 
            if($_SESSION["mode"]=="guest"){
               echo"<script> document.getElementById('logout').innerHTML= 'EXIT' </script>";
            }
            ?> 
        </button></a>
            <ul>
              <li>&nbsp;&nbsp;&nbsp; Home &nbsp;&nbsp;&nbsp;</li>
              <li> &nbsp;&nbsp;&nbsp; <a href="map.php"> Map </a> &nbsp;&nbsp;&nbsp;</li>
              <li> &nbsp;&nbsp;&nbsp; <a href="about.php"> About us </a>&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </header> 
        <br><br><br><br><br>
        
        <form action="table.php" method="post">
        <div class="blue">
            <h1> Wimco Nagar - Chennai Airport </h1>
            <ol>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='05';
                document.getElementById('submit').click();"> 5:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='06';
                document.getElementById('submit').click();"> 6:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='07';
                document.getElementById('submit').click();"> 7:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='08';
                document.getElementById('submit').click();"> 8:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='09';
                document.getElementById('submit').click();"> 9:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='10';
                document.getElementById('submit').click();"> 10:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='11';
                document.getElementById('submit').click();"> 11:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='12';
                document.getElementById('submit').click();"> 12:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='13';
                document.getElementById('submit').click();"> 13:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='14';
                document.getElementById('submit').click();"> 14:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='15';
                document.getElementById('submit').click();"> 15:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='16';
                document.getElementById('submit').click();"> 16:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='17';
                document.getElementById('submit').click();"> 17:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='18';
                document.getElementById('submit').click();"> 18:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='19';
                document.getElementById('submit').click();"> 19:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='20';
                document.getElementById('submit').click();"> 20:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='21';
                document.getElementById('submit').click();"> 21:00 </li>
                <li onclick="document.getElementById('schedule').value='1';document.getElementById('time').value='22';
                document.getElementById('submit').click();"> 22:00 </li>
            </ol>
        </div>
        <div class="blue">
            <h1> Chennai Airport - Wimco Nagar </h1>
            <ol> 
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='05';
                document.getElementById('submit').click();"> 5:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='06';
                document.getElementById('submit').click();"> 6:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='07';
                document.getElementById('submit').click();"> 7:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='08';
                document.getElementById('submit').click();"> 8:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='09';
                document.getElementById('submit').click();"> 9:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='10';
                document.getElementById('submit').click();"> 10:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='11';
                document.getElementById('submit').click();"> 11:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='12';
                document.getElementById('submit').click();"> 12:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='13';
                document.getElementById('submit').click();"> 13:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='14';
                document.getElementById('submit').click();"> 14:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='15';
                document.getElementById('submit').click();"> 15:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='16';
                document.getElementById('submit').click();"> 16:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='17';
                document.getElementById('submit').click();"> 17:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='18';
                document.getElementById('submit').click();"> 18:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='19';
                document.getElementById('submit').click();"> 19:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='20';
                document.getElementById('submit').click();"> 20:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='21';
                document.getElementById('submit').click();"> 21:00 </li>
                <li onclick="document.getElementById('schedule').value='2';document.getElementById('time').value='22';
                document.getElementById('submit').click();"> 22:00 </li>
            </ol>
        </div>
        <div class="green">
            <h1> St.Thomas Mount - Chennai Central </h1>
            <ol> 
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='05';
                document.getElementById('submit').click();"> 5:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='06';
                document.getElementById('submit').click();"> 6:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='07';
                document.getElementById('submit').click();"> 7:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='08';
                document.getElementById('submit').click();"> 8:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='09';
                document.getElementById('submit').click();"> 9:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='10';
                document.getElementById('submit').click();"> 10:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='11';
                document.getElementById('submit').click();"> 11:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='12';
                document.getElementById('submit').click();"> 12:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='13';
                document.getElementById('submit').click();"> 13:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='14';
                document.getElementById('submit').click();"> 14:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='15';
                document.getElementById('submit').click();"> 15:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='16';
                document.getElementById('submit').click();"> 16:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='17';
                document.getElementById('submit').click();"> 17:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='18';
                document.getElementById('submit').click();"> 18:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='19';
                document.getElementById('submit').click();"> 19:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='20';
                document.getElementById('submit').click();"> 20:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='21';
                document.getElementById('submit').click();"> 21:10 </li>
                <li onclick="document.getElementById('schedule').value='3';document.getElementById('time').value='22';
                document.getElementById('submit').click();"> 22:10 </li>
            </ol>
        </div>
        <div class="green">
            <h1> Chennai Central - St.Thomas Mount </h1>
            <ol> 
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='05';
                document.getElementById('submit').click();"> 5:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='06';
                document.getElementById('submit').click();"> 6:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='07';
                document.getElementById('submit').click();"> 7:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='08';
                document.getElementById('submit').click();"> 8:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='09';
                document.getElementById('submit').click();"> 9:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='10';
                document.getElementById('submit').click();"> 10:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='11';
                document.getElementById('submit').click();"> 11:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='12';
                document.getElementById('submit').click();"> 12:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='13';
                document.getElementById('submit').click();"> 13:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='14';
                document.getElementById('submit').click();"> 14:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='15';
                document.getElementById('submit').click();"> 15:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='16';
                document.getElementById('submit').click();"> 16:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='17';
                document.getElementById('submit').click();"> 17:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='18';
                document.getElementById('submit').click();"> 18:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='19';
                document.getElementById('submit').click();"> 19:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='20';
                document.getElementById('submit').click();"> 20:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='21';
                document.getElementById('submit').click();"> 21:30 </li>
                <li onclick="document.getElementById('schedule').value='4';document.getElementById('time').value='22';
                document.getElementById('submit').click();"> 22:30 </li>
            </ol>
        </div>
        
        <fieldset style="display:none">
            <label> Train Number : </label>
            <select id="schedule" name="schedule" required>
                <option id="schedule" name="schedule" value="1"> Wimco Nagar - Chennai Airport </option>
                <option id="schedule" name="schedule" value="2"> Chennai Airport - Wimco Nagar </option>
                <option id="schedule" name="schedule" value="3"> St.Thomas Mount - Chennai Central </option>
                <option id="schedule" name="schedule" value="4"> Chennai Central - St.Thomas Mount </option>
            </select>  
        <br><br>
        <label> Time : </label>
            <select id="time" name="time" required>
                <option id="time" name="time" value="05"> 5 </option>
                <option id="time" name="time" value="06"> 6 </option>
                <option id="time" name="time" value="07"> 7 </option>
                <option id="time" name="time" value="08"> 8 </option>
                <option id="time" name="time" value="09"> 9 </option>
                <option id="time" name="time" value="10"> 10 </option>
                <option id="time" name="time" value="11"> 11 </option>
                <option id="time" name="time" value="12"> 12 </option>
                <option id="time" name="time" value="13"> 13 </option>
                <option id="time" name="time" value="14"> 14 </option>
                <option id="time" name="time" value="15"> 15 </option>
                <option id="time" name="time" value="16"> 16 </option>
                <option id="time" name="time" value="17"> 17 </option>
                <option id="time" name="time" value="18"> 18 </option>
                <option id="time" name="time" value="19"> 19 </option>
                <option id="time" name="time" value="20"> 20 </option>
                <option id="time" name="time" value="21"> 21 </option>
                <option id="time" name="time" value="22"> 22 </option>
            </select><br><br>'
            <input class="button" type="submit" value="SUBMIT" id="submit" name="submit" onmouseover="style='background-color: green;'" onmouseout="style='background-color:rgb(117, 45, 183) ;'">
        <br>
        </fieldset>
        <br><br><br><br><br><br><br>
        </form>
        <br><br><br><br><br><br><br>
        <footer>
        <br>
        <p> Courtesy: Chennai Metro Rail Limited </p>        
        </footer>
    </body>
</html>



