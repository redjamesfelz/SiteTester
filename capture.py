#Install python imgkit
#sudo apt-get install imgkit

#!/usr/bin/python2
import re
import imgkit

# Python program to convert a list to string 
# Function to convert 
def listToString(s): 
	
	# initialize an empty string 
	str1 = "" 
	
	# traverse in the string 
	for ele in s: 
		str1 += ele 
	
	# return string 
	return str1 
		

f = open("domains.txt", "r")
domain = f.readline()
domain = re.findall("(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]", domain)
dom = listToString(domain)
url = "https://" + dom
imgkit.from_url(url, 'output123.jpg')