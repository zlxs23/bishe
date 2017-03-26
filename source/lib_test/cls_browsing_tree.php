<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link type="text/css" rel="stylesheet" href="../tpl/css/style.css">
<style>
body{
	background-image: none;body{background-color:#fff; font-size:12px;}
}
</style>

<script language="JavaScript" type="text/javascript"> 
	function find(s1, s2)
	{
		var str1 = s1;
		var str2 = s2;
		var len1 = str1.length;
		var len2 = str2.length;
		var i;
		if (len1 < len2)
			return 0;
		else
		{
			for (var i=0;i<len2;i++)
			{
				if (str1.charAt(i) != str2.charAt(i))
				{
					return 0;
				}
			}
		} 
		return 1;
	}
	function test(obj)
	{  
		var objname = obj.id;
		var name;  
		var s = ""; 
		var imgnode =  document.getElementById("img_" + objname);
		var showvalue = ""; 
		if (imgnode.alt == "展开")
		{ 
			imgnode.src = "../tpl/images/close.png";
			imgnode.alt = "缩回";
			showvalue="block";
		}
		else
		{
			imgnode.src = "../tpl/images/open.png";
			imgnode.alt = "展开";
			showvalue="none"; 
		}
		for (var i=0; i<document.all.length; i++)
		{
			name = document.all.item(i).id; 
			if (!((name == "")||(name == null)||(name == objname)))
			{    
				s = name;
				if (find(s,objname))
				{  
					document.all.item(i).style.display = showvalue;
				}
			}
		}    
	}
</script>

<style type="text/css">
	.stepright1{padding-left:5px;}
	.stepright2{padding-left:15px;}
	.stepright3{padding-left:25px;}
	.stepright4{padding-left:35px;}
	.stepright5{padding-left:45px;}
	.stepright6{padding-left:55px;}
	.stepright7{padding-left:65px;}
	div.Leaf { font: bold;}
	body{ background-color:#FFFFFF;}
</style>


<div style="text-align:left;">
<div class="left_content">
                <p><select style="width:98%;" class="option" name="s_doctype" size="1"  id="s_doctype" onchange="changeClick()">
                    <option value="all">所有文献类型</option>
                    <option value=00>规范文档</option><option value=01>中文图书</option><option value=02>西文图书</option><option value=03>日文图书</option><option value=04>俄文图书</option><option value=05>中文光盘</option><option value=06>外文光盘</option><option value=11>中文期刊</option><option value=12>西文期刊</option><option value=13>日文期刊</option><option value=14>俄文期刊</option><option value=29>电子图书</option><option value=30>电子期刊</option><option value=31>中文古籍</option><option value=32>非中文古籍</option><option value=33>乐谱手稿</option><option value=34>印刷乐谱</option><option value=35>计算机文档</option><option value=36>测绘资料</option><option value=37>非音乐录音</option><option value=38>音乐录音</option><option value=39>录像资料</option><option value=40>电影胶片</option><option value=41>投影幻灯</option><option value=42>缩微制品</option><option value=43>手稿</option><option value=44>书法绘画</option><option value=45>金石拓片</option><option value=46>三维制品</option><option value=47>混合型资料</option><option value=99>类型不详</option>                  </select></p>
                  <p class="Opened" style="padding:5px;"><a href="cls_browsing_tree.php"><strong>&#x4e2d;&#x56fe;&#x6cd5;</strong></a>
      <div style="display: block;" class="stepright1"  id="nodeA"  name="nodeA"  onClick="test(this)"  ><a href="javascript:expandTree('A',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeA" name="img_nodeA" /></a>A &#x9a6c;&#x5217;&#x4e3b;&#x4e49;&#x3001;&#x6bdb;&#x6cfd;&#x4e1c;&#x601d;&#x60f3;&#x3001;&#x9093;&#x5c0f;&#x5e73;&#x7406;&#x8bba;</div> <div style="display: block;" class="stepright1"  id="nodeB"  name="nodeB"  onClick="test(this)"  ><a href="javascript:expandTree('B',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeB" name="img_nodeB" /></a>B &#x54f2;&#x5b66;&#x3001;&#x5b97;&#x6559;</div> <div style="display: block;" class="stepright1"  id="nodeC"  name="nodeC"  onClick="test(this)"  ><a href="javascript:expandTree('C',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeC" name="img_nodeC" /></a>C &#x793e;&#x4f1a;&#x79d1;&#x5b66;&#x603b;&#x8bba;</div> <div style="display: block;" class="stepright1"  id="nodeD"  name="nodeD"  onClick="test(this)"  ><a href="javascript:expandTree('D',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeD" name="img_nodeD" /></a>D &#x653f;&#x6cbb;&#x3001;&#x6cd5;&#x5f8b;</div> <div style="display: block;" class="stepright1"  id="nodeE"  name="nodeE"  onClick="test(this)"  ><a href="javascript:expandTree('E',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeE" name="img_nodeE" /></a>E &#x519b;&#x4e8b;</div> <div style="display: block;" class="stepright1"  id="nodeF"  name="nodeF"  onClick="test(this)"  ><a href="javascript:expandTree('F',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeF" name="img_nodeF" /></a>F &#x7ecf;&#x6d4e;</div> <div style="display: block;" class="stepright1"  id="nodeG"  name="nodeG"  onClick="test(this)"  ><a href="javascript:expandTree('G',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeG" name="img_nodeG" /></a>G &#x6587;&#x5316;&#x3001;&#x79d1;&#x5b66;&#x3001;&#x6559;&#x80b2;&#x3001;&#x4f53;&#x80b2;</div> <div style="display: block;" class="stepright1"  id="nodeH"  name="nodeH"  onClick="test(this)"  ><a href="javascript:expandTree('H',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeH" name="img_nodeH" /></a>H &#x8bed;&#x8a00;&#x3001;&#x6587;&#x5b57;</div> <div style="display: block;" class="stepright1"  id="nodeI"  name="nodeI"  onClick="test(this)"  ><a href="javascript:expandTree('I',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeI" name="img_nodeI" /></a>I &#x6587;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeJ"  name="nodeJ"  onClick="test(this)"  ><a href="javascript:expandTree('J',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeJ" name="img_nodeJ" /></a>J &#x827a;&#x672f;</div> <div style="display: block;" class="stepright1"  id="nodeK"  name="nodeK"  onClick="test(this)"  ><a href="javascript:expandTree('K',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeK" name="img_nodeK" /></a>K &#x5386;&#x53f2;&#x3001;&#x5730;&#x7406;</div> <div style="display: block;" class="stepright1"  id="nodeN"  name="nodeN"  onClick="test(this)"  ><a href="javascript:expandTree('N',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeN" name="img_nodeN" /></a>N &#x81ea;&#x7136;&#x79d1;&#x5b66;&#x603b;&#x8bba;</div> <div style="display: block;" class="stepright1"  id="nodeO"  name="nodeO"  onClick="test(this)"  ><a href="javascript:expandTree('O',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeO" name="img_nodeO" /></a>O &#x6570;&#x7406;&#x79d1;&#x5b66;&#x4e0e;&#x5316;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeP"  name="nodeP"  onClick="test(this)"  ><a href="javascript:expandTree('P',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeP" name="img_nodeP" /></a>P &#x5929;&#x6587;&#x5b66;&#x3001;&#x5730;&#x7403;&#x79d1;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeQ"  name="nodeQ"  onClick="test(this)"  ><a href="javascript:expandTree('Q',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeQ" name="img_nodeQ" /></a>Q &#x751f;&#x7269;&#x79d1;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeR"  name="nodeR"  onClick="test(this)"  ><a href="javascript:expandTree('R',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeR" name="img_nodeR" /></a>R &#x533b;&#x836f;&#x3001;&#x536b;&#x751f;</div> <div style="display: block;" class="stepright1"  id="nodeS"  name="nodeS"  onClick="test(this)"  ><a href="javascript:expandTree('S',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeS" name="img_nodeS" /></a>S &#x519c;&#x4e1a;&#x79d1;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeT"  name="nodeT"  onClick="test(this)"  ><a href="javascript:expandTree('T',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeT" name="img_nodeT" /></a>T &#x5de5;&#x4e1a;&#x6280;&#x672f;</div> <div style="display: block;" class="stepright1"  id="nodeU"  name="nodeU"  onClick="test(this)"  ><a href="javascript:expandTree('U',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeU" name="img_nodeU" /></a>U &#x4ea4;&#x901a;&#x8fd0;&#x8f93;</div> <div style="display: block;" class="stepright1"  id="nodeV"  name="nodeV"  onClick="test(this)"  ><a href="javascript:expandTree('V',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeV" name="img_nodeV" /></a>V &#x822a;&#x7a7a;&#x3001;&#x822a;&#x5929;</div> <div style="display: block;" class="stepright1"  id="nodeX"  name="nodeX"  onClick="test(this)"  ><a href="javascript:expandTree('X',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeX" name="img_nodeX" /></a>X &#x73af;&#x5883;&#x79d1;&#x5b66;&#x002c;&#x5b89;&#x5168;&#x79d1;&#x5b66;</div> <div style="display: block;" class="stepright1"  id="nodeZ"  name="nodeZ"  onClick="test(this)"  ><a href="javascript:expandTree('Z',1)"><img border="0" src="../tpl/images/open.png" title="展开" id="img_nodeZ" name="img_nodeZ" /></a>Z &#x7efc;&#x5408;&#x6027;&#x56fe;&#x4e66;</div> </p>
</div>
</div>

<script type="text/javascript">

var clsNo;
var cslNameCurrent;

function expandTree(cls,lvl)
{
    var url = "cls_browsing_tree.php?s_doctype=" + document.getElementById('s_doctype').value + "&cls=" + cls + "&lvl=" + lvl+ "#node" + cls;
	top.window.tree.location.href= url;
}

function searchF(cls,clsName)
{
    clsNo = cls;
    clsNameCurrent = clsName;
    
	var url = "cls_browsing_book.php?s_doctype=" + document.getElementById('s_doctype').value + "&cls=" + cls + "&clsname=" + clsName ;
	top.window.main.location.href = url;
}

function changeClick()
{
    if(clsNo && clsNameCurrent)
    {
        var url = "cls_browsing_book.php?s_doctype=" + document.getElementById('s_doctype').value+ "&cls=" + clsNo + "&clsname=" + clsNameCurrent;
    	top.window.main.location.href = url;
    }
}
</script>
