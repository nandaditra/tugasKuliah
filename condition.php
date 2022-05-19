<?php

   if ($_POST['username'] == 'pakdiv' && $_POST['password']=="pakdiv") {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'pakdiv';
         echo 'You have correct username and passsword';
         header("Location:index.php");
   }  else if ($_POST['username'] == 'menteri' && $_POST['password']=="menteri"){  
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'menteri';
         echo 'You have correct username and passsword';
         header("Location:menteri.php");
    } else  {
        echo 'Wrong password';
        echo "
        <form action = 'login.php' method ='post'>
            <input type = 'submit' value= 'try again' name= 'submit'>
        </form>
        ";
   }

?>

