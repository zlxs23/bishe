# -*- coding: utf-8 -*-

import urllib
#  import requests
from bs4 import BeautifulSoup

url = 'http://202.200.151.19/browse/cls_browsing_tree.php'

re = urllib.urlopen(url)

html = re.read()

bsobj = BeautifulSoup(html, 'html.parser')

print bsobj.find(id='nodeA').get_text()

#  这 解码 在 编码 很重要啊
#  print html.decode('utf-8').encode('gbk')
#  with open('./cls_browsing_tree.php', 'w+') as php:
#      php.write(html)
