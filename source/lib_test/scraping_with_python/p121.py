# _*_coding:utf-8_*_

import requests

html = """
    <form method="post", action="processing.php">
    First Name: <input type="text", name="firstname"><br>
    Last Name: <input type="text", name="lastname"><br>
    <input type="submit" value="Submit">
    </form>
"""
url = 'http://pythonscraping.com/files/procession.php'

params = {'firstname': 'Ma', 'lastname': 'Zhicheng'}

r = requests.post(url, data=params)

#  print r.text

params = {'email__addr': 'Ma@qq.com'}
r = requests.post('http://post.oreilly.com/client/o/oreilly/forms/quitcksignup \
                  .cgi', data=params)
print r.text


def a(si):
    pass
