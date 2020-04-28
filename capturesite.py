#Install python imgkit
#sudo apt-get install imgkit

#https://stackoverflow.com/questions/12197815/how-can-i-pass-variable-from-php-to-python
#import sys
#domain = sys.argv[1]

import imgkit

imgkit.from_url('https://planetred.world', 'output.jpg')
#imgkit.from_url(domain, 'output.jpg')
