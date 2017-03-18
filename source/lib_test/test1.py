#_*_coding:utf-8_*_

import requests
import urllib
import urllib2
from bs4 import Beautifulsoup

url = 'http://202.200.151.19/opac/item.php?marc_no=0000512213'

re = urllib.urlopen(url)

html = re.read()
