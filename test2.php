<?php
session_start();
if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "hi";
}
echo "what";
session_destroy();




?>
