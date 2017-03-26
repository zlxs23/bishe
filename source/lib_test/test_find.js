// <div style="display: block;" class="stepright1" id="nodeA" name="nodeA" onclick="test(this)">
//     <a href="javascript:expandTree('A',1)">
//     <img src="../tpl/images/open.png" title="展开" id="img_nodeA" name="img_nodeA" border="0">
//     </a>
// A 马列主义、毛泽东思想、邓小平理论</div>

// 反正 test + find 两 function 目的就是 匹配 父级别 与 子级别 之间关系 可由 父 找到 子
// ^^^ 当点击 这个 div 时 触发 js.test function 参数是这个 div 对象

function test(obj)
	{  
		var objname = obj.id; // objname = 'nodeA'
		var name;
		var s = ""; 
		var imgnode =  document.getElementById("img_" + objname); // imgnode 对象 是 img_nodeA
		var showvalue = ""; 
		if (imgnode.alt == "展开") // 若 imgnode 对象显示 是 '展开'
		{ 
			imgnode.src = "../tpl/images/close.png"; // 点击后 提示 '缩回'
			imgnode.alt = "缩回";
			showvalue="block";
		}
		else
		{
			imgnode.src = "../tpl/images/open.png";
			imgnode.alt = "展开";
			showvalue="none"; 
		}
		for (var i=0; i<document.all.length; i++) // 遍历 整个 html 所有 元素 の 集合
		{
			name = document.all.item(i).id;  // 找到其中 一个 元素 id
			if (!((name == "")||(name == null)||(name == objname)))
                // 若 id 不空字符串 不空 不是 当前传入 元素 id
			{    
				s = name;
				if (find(s,objname))
                    // 比较类似 当前 元素 id 匹配 关系 nodeA1, nodeA2 隶属于 nodeA
                    // EX:
                    // this.id == nodeA 点击后会出现 nodeA1, nodeA2 ...
                    //
				{  
					document.all.item(i).style.display = showvalue;
				}
			}
		}    
	}

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
