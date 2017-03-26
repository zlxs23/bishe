# _*_coding:utf-8_*_
"""
今天2017年3月23日23:27:03
尝试获取 js
http://202.200.151.19/browse/cls_browsing.php
简单说明下流程:
    1. 在 ./browse/cls_browsing.php 下 点击 中图法 <iframe> "+" 知道什么时候为止呢
    2. 发现右边 iframe 出现 listbook 其实也是一个 iframe 刷新
    3. 找到对应 links 对应 中图法 最后标志
    EX: A26 专题汇编
    /browse/cls_browsing_book.php?s_doctype=all&cls=A26&clsname=%26amp%3B%23x4e13%3B%26amp%3B%23x9898%3B%26amp%3B%23x6c47%3B%26amp%3B%23x7f16%3B&page=3
    其中 %26amp%3B%23x4e13%3B%26amp%3B%23x9898%3B%26amp%3B%23x6c47%3B%26amp%3B%23x7f16%3B
    URL 解码后の unicode 为 &#x4e13;&#x9898;&#x6c47;&#x7f16;
    Unicode 解码中文后 专题汇编
    因为是 iframe 即可以 拿出来 再次 read? 就不理其他 iframe 了
"""
