Give me a fun filename :)
<?php
isset($_GET['filename']) && file_exists($_GET['filename']) && shell_exec("rm {$_GET['filename']}");
