    <?php
        $servername="localhost";
        $username="postgres";
        $password='5112';
        $dbname = "train";
        $user= $_GET['uname'];
        $pass= $_GET['pass'];
        
        $conn= pg_connect("host=$servername dbname=$dbname user=$username password=$password");
        
        if(!$conn){
            die("connection error".pg_connect_error($conn));
        }
    
        $sql="INSERT INTO login(username,pass) VALUES('$user','$pass') ;";
        $result = pg_query($conn,$sql);
        echo "<script> window.location.href='index.html'; </script> ";
        
        pg_close($conn);
    ?>