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
print(dom)

result = dns.resolver.query(dom,'NS')
print('NAMESERVERS')
for server in result:
    print(server.target)
    
result = dns.resolver.query(dom, 'A')
print('A RECORD')
for ipval in result:
    print(ipval.to_text())

'''
result = dns.resolver.query('mail.google.com', 'CNAME')
print('CNAME RECORD')
for cnameval in result:
    CNvalue = cnameval.to_text()
    isip = re.search("^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$", CNvalue)
    if (isip):
      print("this is an ip address")
    else:
      print(CNvalue)
'''
    
print('MX RECORD')
for mxval in dns.resolver.query(dom, 'MX'):
   print(mxval.to_text())