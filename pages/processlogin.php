<?php

require('../includes/connection.php');
require('session.php');
if (isset($_POST['btnlogin'])) {
    $users = trim($_POST['user']);
    $upass = trim($_POST['password']);
    $h_upass = sha1($upass);
    if ($upass == '') {
        echo '<script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>';
    } else {
        //create some sql statement
        $sql = "SELECT u.ID,e.FIRST_NAME,e.LAST_NAME,e.GENDER,e.EMAIL,e.PHONE_NUMBER,j.JOB_TITLE,t.TYPE_ID
          FROM  `users` u
          join `employee` e on e.EMPLOYEE_ID=u.EMPLOYEE_ID
          join `job` j on e.JOB_ID=j.JOB_ID
          join  `type` t on t.TYPE_ID=u.TYPE_ID
          WHERE  `USERNAME` ='" . $users . "' AND  `PASSWORD` =  '" . $h_upass . "'";
        $result = $db->query($sql);
        if ($result) {
            //get the number of results based n the sql statement
            //check the number of result, if equal to one
            //IF theres a result
            if ($result->num_rows > 0) {
                //store the result to a array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);
                //fill the result to session variable
                $_SESSION['MEMBER_ID']  = $found_user['ID'];
                $_SESSION['FIRST_NAME'] = $found_user['FIRST_NAME'];
                $_SESSION['LAST_NAME']  =  $found_user['LAST_NAME'];
                $_SESSION['GENDER']  =  $found_user['GENDER'];
                $_SESSION['EMAIL']  =  $found_user['EMAIL'];
                $_SESSION['PHONE_NUMBER']  =  $found_user['PHONE_NUMBER'];
                $_SESSION['JOB_TITLE']  =  $found_user['JOB_TITLE'];
                $AAA = $_SESSION['MEMBER_ID'];
                $_SESSION['TYPE_ID'] = $found_user['TYPE_ID'];
                //this part is the verification if admin or user ka
                switch ($_SESSION['TYPE_ID']) {
                    case '1':
                        # code...
                        echo '<script type="text/javascript">
                                   //then it will be redirected to index.php
                                   window.location = "index.php";
                              </script>';
                        break;
                    case '2':
                        # code...

                        if ($bid == '20') {
                            echo '<script type="text/javascript">
                                   //then it will be redirected to index.php
                                   window.location = "pos_pburgos.php";
                              </script>';
                        } else {
                            echo '<script type="text/javascript">
                            //then it will be redirected to index.php
                            window.location = "pos.php";
                       </script>';
                        }

                        break;
                    default:
                        # code...
                        echo '<script type="text/javascript">
                                   alert("Username or Password Not Registered! Contact Your administrator.");
                                   window.location = "index.php";
                                   </script>';
                        break;
                }
            } else {
                echo '<script type="text/javascript">
               alert("Access Denied !");
               window.location = "login.php";
               </script>';
            }
        } else {
            # code...
            echo '<script type="text/javascript">
            alert("Password is missing!");
            window.location = "login.php";
            </script>';
        }
    }
}
$db->close();
