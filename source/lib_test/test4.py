# -*- coding: utf-8 -*-
#  利用 phantomjs 来模拟 点击 div(left-content) node

import sys
import time
from selenium import webdriver
reload(sys)
sys.setdefaultencoding('utf-8')

#  PhantomjsPath = 'phantomjs'
url = 'http://202.200.151.19/browse/cls_browsing.php'
driver = webdriver.PhantomJS()
driver.get(url)

#  print driver.find_element_by_id('nodeA')
#  print driver.page_source

#  print driver.find_element_by_xpath('/html/body/div/div/div[1]')
driver.switch_to_frame('tree')  # 切换到 tree frame 中

nodeA = driver.find_element_by_id('nodeA').text
print nodeA
driver.find_element_by_id('img_nodeA').click()
time.sleep(2)
print '\nclick success!'
print driver.find_element_by_id('nodeA1').text

driver.quit()
"""
for _ in range(65, 91):
    print(chr(_))  # [A-Z]
"""
