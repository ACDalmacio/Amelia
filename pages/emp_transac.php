<?php
include'../includes/connection.php';
?>
            <?php
              $fname = $_POST['firstname'];
              $lname = $_POST['lastname'];
              $gen = $_POST['gender'];
              $email = $_POST['email'];
              $phone = $_POST['phonenumber'];
              $jobb = $_POST['jobs'];
              
              mysqli_query($db, "INSERT INTO employee
              (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, GENDER, EMAIL, PHONE_NUMBER, JOB_ID)
              VALUES (Null,'{$fname}','{$lname}','{$gen}','{$email}','{$phone}','{$jobb}')");
              header('location:employee.php');
            ?>