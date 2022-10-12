<?php
            $con =mysqli_connect('localhost', 'root', '', 'portfilo');
            if(isset($_POST['sb']))
            {
                $name = $_POST['nm'];
                $email = $_POST['em'];
                $subject = $_POST['sub'];
                $describe = $_POST['des'];

                $query ="INSERT INTO form4(NAME,EMAIL,SUBJECT,DESCRIBE_PRO) VALUES('$name','$email','$subject','$describe')";

                $run = mysqli_query($con,$query);

                
            }

            header("location: index.php");

    ?>