<html>
<center>
<style>
body {
  background-image: url('https://site-tester.planetred.world/background.png');
}
</style>

<body>
<h1 style="color:#000080;" ><font size="100" face="verdana"> YOUR SCORE IS $SITE_SCORE <br>
<?php 
$url = $_POST["name"]; 
echo $url;
?>
<br></font></h1>

<h1 style="color:#000080;" ><font size="100" face="verdana"><br> VIRUS TOTAL </font></h1>
<!–– writes to domains.txt -->
<?php
$myfile = fopen("domains.txt", "w") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);
?>

<!–– python checks domains.txt and scan in VT-->
<p style="color:red;" ><font face="verdana">
<?php 
$command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/virustotal.py');
$output = shell_exec($command);
echo $output;
?>
</font></p>

<h1 style="color:#000080;" ><font size="100" face="verdana"><br> DNS LOOKUP </font></h1>
<!–– python to do domain whois lookup -->
<p style="color:red;" ><font face="courier new">
<?php 
$command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/domaindns.py' . $url);
$output = shell_exec($command);
echo $output;
?>
</font></p>

<h1 style="color:#000080;" ><font size="100" face="verdana"><br> DOMAIN WHOIS LOOKUP </font></h1>
<!–– bash to do domain whois lookup -->
<p style="color:red;" ><font face="verdana">
<?php
$output = shell_exec('whois' . $url);
echo "<pre>$output</pre>";
?>
</font></p>

<h1 style="color:#000080;" ><font size="100" face="verdana"><br> IP WHOIS LOOKUP </font></h1>
<!–– bash to do ip whois lookup -->
<p style="color:red;" ><font face="verdana">
<?php
$output = shell_exec('whois' . $url);
echo "<pre>$output</pre>";
?>
</font></p>

<h1 style="color:#000080;" ><font size="100" face="verdana"><br> SITE SCREENSHOT </font></h1>
<!–– python to do take screenshot of site -->
<?php 
$command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/sitecapture.py');
$output = shell_exec($command);
echo $output;
?>
  
<h2>HTML Image</h2>
<img src="output.jpg" alt="Trulli" width="500" height="333">


<h1 style="color:#000080;" ><font size="100" face="verdana"><br> SUBLIST3R </font></h1>
<!–– python to do sublister -->
<p style="color:red;" ><font face="courier new">
<?php 
$command = escapeshellcmd('python sublist3r.py -d' . $url);
$output = shell_exec($command);
echo $output;
?>
</font></p>

</body>
</center>
</html>
