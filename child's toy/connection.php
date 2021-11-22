<?php
    $conn = pg_connect("postgres://crmawpfqfjnwry:93a92834bd701a0b5b83ebb2f0c829daf04d7a8631ebe7740117da47e621bfa8@ec2-34-236-34-103.compute-1.amazonaws.com:5432/dd3cs21cc4f8ov");

    if(!$conn){
        die("Can not connect database");
    } 
?>