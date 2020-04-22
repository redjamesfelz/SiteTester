<html>
<center>
<style>
body {
  background-image: url('https://site-tester.planetred.world/wallpaper.jpg');
}
</style>
<body>
<h1 style="color:lime;" ><font size="100" face="courier new"><br> YOUR SCORE IS $SITE_SCORE <br>
<?php echo $_POST["name"]; ?><br></font></h1>

<h1 style="color:lime;" ><font size="100" face="courier new"><br> VIRUS TOTAL </font></h1>

<!–– writes to domains.txt -->
<?php
$myfile = fopen("domains.txt", "w") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);
?>

<!–– python checks domains.txt and scan in VT-->
<p style="color:red;" ><font face="courier new">
<?php 
$command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/virustotal.py');
$output = shell_exec($command);
echo $output;
?>
</font></p>

<h1 style="color:lime;" ><font size="100" face="courier new"><br> DNS LOOKUP </font></h1>

<!–– insert python to do domain whois lookup -->
<p style="color:red;" ><font face="courier new">
<?php 
$command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/domaindns.py');
$output = shell_exec($command);
echo $output;
?>
</font></p>

<h1 style="color:lime;" ><font size="100" face="courier new"><br> DOMAIN WHOIS LOOKUP </font></h1>

<!–– insert python to do domain whois lookup -->





<h1 style="color:lime;" ><font size="100" face="courier new"><br> IP WHOIS LOOKUP </font></h1>

<!–– insert python to do ip whois lookup -->




<h1 style="color:lime;" ><font size="100" face="courier new"><br> SITE SCREENSHOT </font></h1>

<!–– insert python to do take screenshot of site -->




<h1 style="color:lime;" ><font size="100" face="courier new"><br> DIRBUSTER </font></h1>

<!–– insert python to do dirbuster -->




<h1 style="color:lime;" ><font size="100" face="courier new"><br> SUBLIST3R </font></h1>

<!–– insert python to do sublister -->




<h1 style="color:lime;" ><font size="100" face="courier new"><br> RECON </font></h1>

<!–– insert python to do google search-->




</body>
</center>
</html>
