<?php
        $sql=mysqli_connect("Localhost","Merouanos","Mergito1000#","MerouaneSchool");

    if($_SERVER["REQUEST_METHOD"]==="GET"){        if(!$sql){
            die("".mysqli_connect_error());
        }
        else 
        {
            $name=$_GET["username"];
            $pass=$_GET["password"];
                $res=$sql->execute_query("SELECT name,pass FROM student WHERE name='$name' AND pass='$pass';");
            if($res->num_rows> 0)
            echo "You are logged in!!";
            else{
                
                echo"Your password is wrong";
                header("Location: http://localhost:8000:5");
                exit();
                
            }
        
    }
}
    else
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $name=$_POST["username"];
            $pass=$_POST["password"];
                $res=$sql->execute_query("SELECT name,pass FROM student WHERE name='$name' AND pass='$pass';");
            if($res->num_rows> 0)
            {
                header("Location: http://localhost:8000");
                exit();
            }
            else{
                
                $sql->execute_query("INSERT INTO student(name,pass) VALUES('$name','$pass');");
                header("Location: http://localhost:8000");
                exit();
                
            }

        }
