<?php
/* Esto producirá un error. Fíjese en el html
 * que se muestra antes que la llamada a header() */
header('Location: https://www.google.com/');
exit;
?>