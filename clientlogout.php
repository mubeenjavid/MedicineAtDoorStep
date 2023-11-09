<!-- Taaky hum log logout krny py login waly pehly pehly page py chaly jayen -->
<?php
session_start();
session_unset();
session_destroy();
header("location: clientslogin.php");
exit;


?>