<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    
    $details = [$username, $email, $password];
   
    $f = fopen('../storage/users.csv', 'a');
    
        if(fputcsv($f, $details)){
            echo '<script type="text/javascript"> alert(" You have successfully registered!") </script>';
        }

        else {
            echo '<script type="text/javascript"> alert(" An error occurred!") </script>';

        }
    
    fclose($f);
    // echo "OKAY";
}