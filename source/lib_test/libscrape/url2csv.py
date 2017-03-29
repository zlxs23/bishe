#!/usr/bin/env python
# -*- coding: utf-8 -*-

import csv

# TODO(mzc) 将 level = 2 对应 book set URL 记录 到 csv 中

def read_record(cls_id=None, clsname=None, baseUrl=None, max_page_num=None):
    with open('./level2url.csv', 'r') as csvfile:
        reader = csv.DictReader(csvfile)
        for row in reader:
            pass


def write_record(cls_id=None, clsname=None, baseUrl=None, max_page_num=None):
    with open('./level2url.csv', 'a') as csvfile:
        fieldnames = ['cls_id', 'clsname', 'baseUrl', 'max_page_num']
        writer = csv.DictWriter(csvfile, fieldnames=fieldnames)
        writer.writerow()
        #  writer.writerows()
