The SiteTester Tool analyzes websites in 5 different ways to identify if a site is malicious: 
> Virus Total Scan
> DNS Lookup
> Whois lookup
> Sublister
> Site Screenshot

***FUNCTIONS***
The SiteTester Repo contains the following files:
Index.php > This webpage allows users to input and URL to be analysed by the tool
action_page.php > This page displays the output of the scan
domains.txt > stores scanned URLs
virustotal.py > performs virustotal scan using Vt api
domaindns.py > performs a dns lookup on the domain
whois_function.php > performs whois lookup on the domain
capturesite.py > takes a screenshot of the website
site_scoring.py > assigns the site a score between 1 to 100 according to the scan results

***BUGS***
The following issues requiring some fixing:
> test pass variable from php to py
> site_scoring.py has not been coded yet


