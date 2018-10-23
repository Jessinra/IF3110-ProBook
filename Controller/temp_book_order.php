<?php

//decode post data into array, DON'T CHANGE ANY OF THESE
$payload = json_decode($_POST['payload'], true);

//Do something with the payload
echo rand(1, 200);
