<?php
session_start();//this should be the first call on the page that's using session

$_SESSION[`loggedInUser`] = array(`userID`=>1, `username`=>`Bill`);

echo "Saved user: " . var_export($_SESSION[`loggedInUser`], true);

?>
