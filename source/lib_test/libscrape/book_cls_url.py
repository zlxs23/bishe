#!/usr/bin/env python
# -*- coding: utf-8 -*-

import requests
from bs4 import BeautifulSoup

# TODO(yes) 实现 不同 分类 对应 集合 の URL 记录(classname, booksum, pagenum)

browseUrl = 'http://202.200.151.19/browse/'


def get_expand_tree(cls=None):
    """
    :params cls: book -> class Ex: 'A', 'A2'
    :return: bs.object
    """
    baseUrl = browseUrl + 'cls_browsing_tree.php'
    if cls:
        lvl = get_cls2level(cls)
    else:
        lvl = None
    pyload = {'s_doctype': 'all', 'cls': cls, 'lvl': lvl}
    response = requests.get(baseUrl, params=pyload)
    bsObj = BeautifulSoup(response.text, 'html.parser')
    return bsObj


def get_expand_book(cls=None, clsname=None, page=None):
    """
    :params cls: book -> class String
    :params clsname: book -> classname String
    :params page: book list -> page
    :return: bsObj
    """
    baseUrl = browseUrl + 'cls_browsing_book.php'
    pyload = {'s_doctype': 'all', 'cls': cls, 'clsname': clsname, 'page': page}
    response = requests.get(baseUrl, params=pyload)
    bsObj = BeautifulSoup(response.text, 'html.parser')
    return bsObj


def get_cls2level(cls_id):
    """
    :params cls_id: book -> class id
    :return: current book cls level
    """
    cls_id = ''.join(cls_id.split('-'))
    level = len(cls_id)
    return level


def is_bottom_lvl(ele_tag):
    """
    :params ele_tag: element Tag object
    :return: TF
    """
    if not ele_tag.get('onclick', None):
        return True
    else:
        return False


def find_stepright_cls(bsObj, lvl):
    """
    :params bsObj: BeautifulSoup object
    :params lvl: current book cls level
    :return: match level Tag
    """
    cls_attr = 'stepright' + str(lvl)
    lvl_tag = bsObj.find_all(class_=cls_attr)
    return lvl_tag

level1 = {}
level2 = {}

tree1 = get_expand_tree()
lvl_tag1 = find_stepright_cls(tree1, 1)

for _ in lvl_tag1:
    level1[_['id']] = _.text
    tree2 = get_expand_tree(_['id'][4:])
    lvl_tag2 = find_stepright_cls(tree2, 2)
    for _ in lvl_tag2:
        if is_bottom_lvl(_):
            # bottom level
            level2[_['id']] = (_.text, _.find('span')['onclick'])
        else:
            # not level = 2 but not bottom
            level2[_['id']] = (_.text, _.find_all('a')[1l]['onclick'])

bookSum = 0
cls_num = {}
for _ in level2:
    cls, clsname = level2[_][1][8:].split(',')
    cls = cls.strip("'")
    clsname = clsname.split(')')[0].strip("'")
    book = get_expand_book(cls=cls, clsname=clsname)
    book_clsname = book.find(id='titlenav').find_all('font')[1].text
    book_cls_num = int(book.find(id='titlenav').find_all('font')[3].text)
    page_num = int(book.find('select', attrs={'name': 'topage'}).children[-1].text)
    cls_num[book_clsname] = (book_cls_num, page_num)
    bookSum += book_cls_num

print cls_num
print bookSum
