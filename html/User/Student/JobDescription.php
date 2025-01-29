<?php
$path = "../..";
$user = "Student";

require_once "$path/Function/Basic.php";
if(!isset($_SESSION["Userid"])) $basic->alert("First Logined In",$path);
startContainer($path, $user);
?>
<main>

<div id="jobDescription" style="display: block;">
    <?php include "$path/Component/JobDescription.php"; ?>
</div>

</main>
<?php endContainer($path); ?>
