#import dnspython as dns
import dns.resolver
import re

file1 = open("domains.txt","r+")  
print file1.read() 
domain = file1.read() 

#domain = 'google.com'
result = dns.resolver.query(domain,'NS')
print('NAMESERVERS')
for server in result:
    print(server.target)
    
result = dns.resolver.query(domain, 'A')
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
for mxval in dns.resolver.query(domain, 'MX'):
   print(mxval.to_text())
