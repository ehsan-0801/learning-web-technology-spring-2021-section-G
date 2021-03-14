<?php
session_start();
if(isset($_POST['Sign Up']))
    {
        $ID = $_POST['id'];
        $Password =$_POST['pass'];
        $cPassword =$_POST['cpass'];
        $name = $_POST['Name'];
        $User = $_POST['user'];

        if(empty($ID)||empty($Password) || empty($cPassword) || empty($name) || empty($User))
        {
            echo "Null Value found \n";
        }
        else{
            if($Password!=$cPassword)
            {
                echo "Password mismatch";
            }
            else
            {
                $User=['id'=> $ID, 'name'=> $name, 'password'=>$Password,'user'=>$User ];
                        
                    if(filesize('../model/user.json')==0){
                        $json=json_encode($User);
                        $myfile=fopen('../model/user.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/user.json');
                        $tempArray = json_decode($inp);
                        array_push($tempArray, $User);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/user.json', $jsonData);
                    }
                    header('location: ../view/login.html');
            }

        }
    }
?>