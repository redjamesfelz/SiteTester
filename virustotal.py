#import dnspython as dns
import dns.resolver
import re
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
#print(dom)


import requests

url = 'https://www.virustotal.com/vtapi/v2/url/scan'
params = {'apikey': '859b88dbbd798a5093089e0455a3d44e9fcb411603041f447f1161be3b96fb18', 'url':dom}
response = requests.post(url, data=params)

output = response.json()
responsestring = str(output)
responselist = responsestring.split(", ")
rlist = responselist[0]
vtlink = rlist.split(":", 1)
vturl = vtlink[1]
print(vturl.replace("'",""))
