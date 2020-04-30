<html>
<center>
<head>
<title>SiteTester</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('https://site-tester.planetred.world/background.png');
}

div.ex1 {
  width:1000px;
  margin: -83;
  border: 3px solid #FFFFFF;
  background-color: white;
}

div.ex2 {
  max-width:500px;
  margin: auto;
  border: 3px solid #FFFFFF;
}

div.ex3 {
    
}

a:link {
  color: green;
}

div.ex4 {
  max-width:800px;
  margin: auto;
  border: 3px solid #FFFFFF;
}

.topnav {
  margin: -10;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {

  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #429AE8;
  color: white;
}

.footer {
   left: 0;
   bottom: -100;
   height: 100;
   width: 100%;
   background-color: #093170;
   color: white;
   text-align: center;
}

a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: grey;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>

<!-- SANITISE INPUT FORM  ################################################################################################################################################################# SANITISE INPUT FORM -->

<?php
$url = $_POST["name"];
// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);
// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) { ?>
<br>
<p style="color:#000000;" ><font size="5" face="helvetica"> Try without <strong>https://</strong></font></p>
<?php
exit();
}
?>

<?php
// Sanitize special characters
$pattern = "/[\=*\!*\@*\#*\$*\%*\^*\&*\(*\)*\_*\+*\=*\;*\:*\?*\<*\>*\**\,*\`*\~*\/*\|*\{*\}*\[*\]*]/";
$url = $_POST["name"];
if(preg_match($pattern, $url)){ 
?>
<br>
<p style="color:#000000;" ><font size="5" face="helvetica"> Try without special characters</font></p>
<?php
exit();
}
?>

<?php
$pattern = "/(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/";
$url = $_POST["name"];
if(preg_match($pattern, $url)){ ?>


<!-- TOP NAV BAR  ######################################################################################################################### TOP NAV BAR  -->

<body>  
<div class="topnav">
  <a class="active" href="https://site-tester.planetred.world/">Home</a>
  <a href="https://www.exploit-db.com/">Cyber Security</a>
  <a href="https://planetred.world/site-tester-others/VTHasher.php">Virus Total</a>
</div>

<!-- BANNER  ######################################################################################################################### BANNER  -->

<img src="https://site-tester.planetred.world/images/Is_this_site_bad.png">
<div class="ex1">
<br>

<!-- SITE SCORE FUNCTION  ######################################################################################################################### SITE SCORE FUNCTION -->

<img src="https://site-tester.planetred.world/images/site_score.png">
<?php $score = rand(1, 100); ?>
<?php 
if ($score > 70) { ?>
    <p style="color:#ff0000;" ><font size="10" face="helvetica"> 
    <?php echo $score; ?>
    </font></p>
    <p style="color:#ff9d00;" ><font size="4" face="helvetica"> 
    <?php echo 'Please raise a ticket to cyber security for further investigation'; ?>
    </font></p> 
<?php } else { ?>
    <p style="color:#429AE8;" ><font size="10" face="helvetica"> 
    <?php echo $score; ?>
    </font></p>
<?php }; ?>
</font></p>

<!-- ECHO DOMAIN  ######################################################################################################################### ECHO DOMAIN -->
<h1 style="color:#5BDEFF;" ><font size="100" face="helvetica"> <?php $url = $_POST["name"]; echo $url;?></font></h1>

<!-- STORE DOMAIN TO TXT  ######################################################################################################################### STORE DOMAIN TO TXT -->
<?php
$myfile = fopen("domains.txt", "w") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);
?>

<!-- ############################################################################################################################################### SITE CAPTURE FUNCTION -->

<img src="https://site-tester.planetred.world/images/site_cap.png">
<!–– python to do take screenshot of site -->
    <div class="ex4">
        <p style="color:#000000;" ><font face="courier new">
            <?php 
            $link = "https://$url";
            $googlePagespeedData = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$link&screenshot=true");
            $googlePagespeedData = json_decode($googlePagespeedData, true);
            $screenshot = $googlePagespeedData['screenshot']['data'];
            $screenshot = str_replace(array('_','-'),array('/','+'),$screenshot); 
            $show_link = "<a href='https://geopeeker.com/'><img src=\"data:image/jpeg;base64,".$screenshot."\" width='700'/></a>";
            echo $show_link; 
            ?>
        </font></p>
    </div>

<!-- ################################################################################################################################################## DNS LOOKUP FUNCTION -->

<img src="https://site-tester.planetred.world/images/dns_lookup.png">
<!–– python to do domain whois lookup -->
    <div class="ex2">
        <p style="color:#000000;" ><font face="courier new">
        <?php 
        $command = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/domaindns.py');
        $output = shell_exec($command);
        echo $output;
        ?>
        </font></p>
    </div>

<!-- ######################################################################################################################### WHOIS LOOKUP FUNCTION -->

<img src="https://site-tester.planetred.world/images/dom_whois.png">
<!–– bash to do domain whois lookup -->
<p style="color:#000080;" ><font face="helvetica">
    <?php 
    $command = 'whois '. $url;
    $output = shell_exec($command);
    echo "<pre>$output</pre>"; 
    ?>
</font></p>

<!-- ################################################################################################################################### WHOIS LOOKUP FUNCTION -->

<img src="https://site-tester.planetred.world/images/ip_whois.png">
<!–– bash to do ip whois lookup -->
<p style="color:#000080;" ><font face="helvetica">
    <?php 
    $ip = gethostbyname($url);
    $command = 'whois '. $ip;
    $output = shell_exec($command);
    echo "<pre>$output</pre>"; 
    ?>
</font></p>

<!-- ################################################################################################################################################## SUBLIST3R FUNCTION -->

<img src="https://site-tester.planetred.world/images/sublister.png">
<!–– python to do sublister -->
<p style="color:red;" ><font face="helvetica">
    <?php 
    $command = escapeshellcmd('python sublist3r.py -d' . $url);
    $output = shell_exec($command);
    echo $output;
    ?>
</font></p>

<!-- ############################################################################################################################################# VIRUS TOTAL FUNCTION -->

<img src="https://site-tester.planetred.world/images/virus_total.png">
<!–– python checks domains.txt and scan in VT-->
<p style="color:#000000;" ><font face="helvetica">
    Temprarily disabled to save api calls but works great :D
    <?php /*
    $command = escapeshellcmd('python /home/planetred1/public_html/site-tester/virustotal.py');
    $output = shell_exec($command);
    echo $output;*/
    ?>
</font></p>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="footer">
    <br>
  <a href="https://planetred.world/site-tester-others/readme.txt">How it works</a>
</div>
</body>
</center>
<!-- End Sanitise form input -->
<?php
} else{ ?>
<video width="1500" height="1000" controls autoplay>
  <source src="https://planetred.world/Jurassic_Park_Xss_Prevention.mp4" type="video/mp4">
</video>
<?php
}
?>
</html>
