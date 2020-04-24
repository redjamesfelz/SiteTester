<?php
$output = shell_exec('whois' . $url);
echo "<pre>$output</pre>";
?>
