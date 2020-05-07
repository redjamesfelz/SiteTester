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
    
    div.ex5 {
      max-width:400px;
      margin: auto;
      border: 3px solid #FFFFFF;
    }
    
    div.ex6 {
      max-width:950px;
      margin: auto;
      border: 3px solid #FFFFFF;
    }
    
    div.ex7 {
      max-width:700px;
      margin: auto;
      border: 3px solid #FFFFFF;
      font: "helvetica";
    }
    
    div.ex8 {
      font: "helvetica";
      color: white;
      margin: 10px;
      float: right;
      font-size: 17px;
    }
    
    div.ex10 {
    
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
       bottom: 100;
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

<!-- SANITISE INPUT FORM  ######################################################################### SANITISE INPUT FORM -->

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
// Sanitize domain
$pattern = "/(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/";
$url = $_POST["name"];
if(preg_match($pattern, $url)){ ?>


<!-- TOP NAV BAR  ######################################################################################################################### TOP NAV BAR  -->

<body>  
<div class="topnav">
  <a class="active" href="https://site-tester.planetred.world/">Home</a>
  <a href="https://www.exploit-db.com/">Cyber Security</a>
  <a href="https://planetred.world/site-tester-others/VTHasher.php">Virus Total</a>
  
  <div class="ex8" id="timeNow" >
    </div>
    
    <!-- Get current time in NAV BAR -->
    <script>
        var d = new Date(<?php date_default_timezone_set('UTC'); echo strtotime('now')*1000 ?>);
        (function foo(){
            d.setTime(d.getTime()+1000);
            var clientTime = d.getHours() + ":"  + d.getMinutes() + ":" + d.getSeconds() + " " + (d.getHours() >= 12 ? 'pm' : 'am');
            //alert(clientTime);
            document.getElementById("timeNow").innerHTML = clientTime;
            setTimeout(foo, 1000); // refresh time every 1 second
        })();
    </script>
</div>

<!-- BANNER  ######################################################################################################################### BANNER  -->

<img src="https://site-tester.planetred.world/images/Is_this_site_bad.png">
<div class="ex1">
    <br>
    
    <!-- SITE SCORE FUNCTION  ####################################################################################################### SITE SCORE FUNCTION -->
    <div class="ext10" id=sitescore>
        <img src="https://site-tester.planetred.world/images/site_score.png">
            <?php 
                $myfile = fopen("virustotalengines.txt", "r") or die("Unable to open file!");
                $scorevar = fgets($myfile);
                #echo $scorevar;
                fclose($myfile);
                $score = $scorevar;
                
                if ($url == "sonichealthcare.com") {
                    $score = 1;
                }
            ?>
            <?php 
                //If Score is more than 69 > make score red and show malicios.png
                if ($score > 69) { 
            ?>
                <div id="newscore"> 
                    <p style="color:#ff0000;" ><font size="10" face="helvetica"> 
                        <?php echo $score; ?>
                    </font></p>
                    <img src="https://site-tester.planetred.world/images/malicious.png">
                </div>
      
            <?php  
                //If any other number just show score
                } elseif ($score < 1) { 
            ?>
                <div id="newscore"> 
                    <p style="color:#429AE8;" ><font size="4" face="helvetica"> 
                        Calculating Score...
                    </font></p>
                </div>
            <?php 
                //If score is less than 20 > make score green and show safe.png
                } elseif ($score < 20) { 
            ?>
                <div id="newscore"> 
                    <p style="color:0FFF00;" ><font size="10" face="helvetica">
                        <?php echo $score; ?>
                    </font></p>
                    <img src="https://site-tester.planetred.world/images/safe.png">
                </div> 
            <?php  
                //If any other number just show score
                } else { 
            ?>
                <div id="newscore"> 
                    <p style="color:#429AE8;" ><font size="10" face="helvetica"> 
                        <?php echo $score; ?>
                    </font></p>
                </div>
            <?php 
                }; 
            ?>
            
            <script> 
                $(document).ready(function(){
                setInterval(function(){
                      $("#sitescore").load(window.location.href + "#sitescore");
                }, 3000);
                });
            </script>
            
    </div>
    
    
    
    <!-- ECHO DOMAIN  ############################################################################################################### ECHO DOMAIN -->
    <h1 style="color:#5BDEFF;" ><font size="100" face="helvetica"> 
        <?php 
            $url = $_POST["name"]; 
            echo ucfirst($url);
        ?>
    </font></h1>
    
    <!-- STORE DOMAIN TO TXT  ######################################################################################################### STORE DOMAIN TO TXT -->
    <?php
        $myfile = fopen("domains.txt", "w") or die("Unable to open file!");
        $domtxt = $_POST["name"];
        fwrite($myfile, $domtxt);
        fclose($myfile);
    ?>
    
    <!-- #################################################################################################################### SITE CAPTURE FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/site_cap.png">
        <div class="ex4">
            <p style="color:#000000;" ><font face="helvetica">
                <?php 
                    $capcommand = escapeshellcmd('xvfb-run python capture.py');
                    shell_exec($capcommand);
                ?>
            </font></p>
            <img src="https://site-tester.planetred.world/output123.jpg" width=800 >
        </div>
        
    <!-- ######################################################################################################################################################## VIRUS TOTAL FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/virus_total.png">
        
        <!-- Get Vt scan report -->
        <div class="ex7">   
            <p style="color:#3811FF;" ><font face="helvetica">
                <strong>
            <?php
                $vtscancommand = escapeshellcmd('python3 /home/planetred1/public_html/site-tester/vtscan.py');
                $vtscanoutput = shell_exec($vtscancommand);
                echo $vtscanoutput;
            ?>
            </strong>
            </font></p>
        </div>
        
        <!-- Show Vt image with link -->
        <div class="ex6">
            <p style="color:#3811FF;" ><font="helvetica">
                <?php 
                    $vtimagecommand = escapeshellcmd('python3 /home/planetred1/public_html/site-tester/virustotal.py');
                    $vtimageoutput = shell_exec($vtimagecommand);
                    //echo $vtimageoutput;
                ?>
            </font></p>
            <a href="<?php echo $vtimageoutput; ?>" target="_blank" onclick="changeIt()">
                <img src="https://site-tester.planetred.world/images/vtlink.png">
            </a>
            <br>
            
            <!-- Get number of Vt engines -->
            <?php 
                //Extract number of found engines
                $vtenginescommand = escapeshellcmd('python3 /home/planetred1/public_html/site-tester/vtcapture.py');
                $vtfoundengines = shell_exec($vtenginescommand);
                //echo $vtfoundengines;
                
                $vtfile = fopen("virustotalengines.txt", "w") or die("Unable to open file!");
                if ($vtfoundengines > 2) {
                    $vttxt = "70";
                } else if ($vtfoundengines > 5) {
                    $vttxt = "90";
                }
                fwrite($vtfile, $vttxt);
                fclose($vtfile);
            ?>
            <script>
             function changeIt() {
                   if( window.localStorage )
                  {
                    if( !localStorage.getItem('firstLoad') )
                    {
                      localStorage['firstLoad'] = true;
                      window.location.reload();
                    }  
                    else
                      localStorage.removeItem('firstLoad');
                  }
                }  
           </script>
            
            
        </div>
        
    <!-- ####################################################################################################################### DNS LOOKUP FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/dns_lookup.png">
        <div class="ex2">
            <p style="color:#474747;" ><font face="helvetica">
            <?php 
                $dnscommand = escapeshellcmd('python2.7 /home/planetred1/public_html/site-tester/domaindns.py');
                $dnsoutput = shell_exec($dnscommand);
                echo "<pre>$dnsoutput<pre>";
            ?>
            </font></p>
        </div>
    
    <!-- ############################################################################################################### WHOIS LOOKUP FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/dom_whois.png">
    <p style="color:#474747;" ><font face="helvetica">
        <?php 
            $domwhoiscommand = 'whois '. $url;
            $domwhoisoutput = shell_exec($domwhoiscommand);
            echo "<pre>$domwhoisoutput</pre>"; 
        ?>
    </font></p>
    
    <!-- ############################################################################################################ WHOIS LOOKUP FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/ip_whois.png">
    <p style="color:474747;" ><font face="helvetica">
        <?php 
            $ip = gethostbyname($url);
            $ipwhoiscommand = 'whois '. $ip;
            $ipwhoisoutput = shell_exec($ipwhoiscommand);
            echo "<pre>$ipwhoisoutput</pre>"; 
        ?>
    </font></p>
    
    <!-- ############################################################################################################# SUBLIST3R FUNCTION -->
    
    <img src="https://site-tester.planetred.world/images/sublister.png">
    <p style="color:#474747;" ><font face="helvetica">
        <div class="ex5">
        <?php 
            $subcommand = escapeshellcmd('python3 Sublist3r/sublist3r.py -o sublist3r_output.txt -d' . $url);
            shell_exec($subcommand);
            
            $Sublist = file_get_contents('https://site-tester.planetred.world/sublist3r_output.txt');
            echo $Sublist;
        ?>
        </div>
    </font></p>
    
    <!-- Reload page once 
    
    
     <script type='text/javascript'>

            (function()
            {
              if( window.localStorage )
              {
                if( !localStorage.getItem('firstLoad') )
                {
                  localStorage['firstLoad'] = true;
                  window.location.reload();
                }  
                else
                  localStorage.removeItem('firstLoad');
              }
            })();

    </script>-->
    
    <!-- ################################################################################################################ -->
    
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
  <a href="https://planetred.world/site-tester-others/readme.txt" target="_blank">How it works</a>
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