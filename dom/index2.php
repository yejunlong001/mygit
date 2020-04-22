<script>
function fanyiShow(id,idjm) {
    document.getElementById('fanyi' + id).style.display = 'none';
    document.getElementById('fanyiquan' + id).style.display = 'block';

    var xmlhttp;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "未登录") {
                window.parent.window.location.href = "https://so.gushiwen.org/user/login.aspx";
            }
            else {
                document.getElementById("fanyiquan" + id).innerHTML = xmlhttp.responseText;
                //如果正在播放
                if (document.getElementById('fanyiPlay' + id).style.display == "block") {
                    document.getElementById('speakerimgFanyiquan' + id).src = "https://song.gushiwen.org/siteimg/speakerOk.png";
                }
            }
        }
    }
    xmlhttp.open("GET", "https://so.gushiwen.org/nocdn/ajaxfanyi.aspx?id=434A718242DC5BF8", false);
    xmlhttp.send();
}
</script>


<?php
header("content-type:text/html;charset=utf-8");


 //请参考https://www.jianshu.com/p/bdf934053587文章的用法    //var_dump($b);

 //加载
  
  //echo '<script defer="defer" src="https://so.gushiwen.org/js/skinso20191025.js" type="text/javascript"></script>';






   
   include('simple_html_dom.php');

   $dom = new simple_html_dom();

   $dom -> load_file('https://so.gushiwen.org/mingju/juv_43f5bfba7229.aspx');

   $dom -> load_file('https://so.gushiwen.org/nocdn/ajaxfanyi.aspx?id=434A718242DC5BF8');

   echo $dom;

   //获取标题

   $a =  $dom -> find('h1');    //获取h1标签的结构，数据结构等等    

   $a =  $dom -> find('h1',0);    //获取第一个h1标签的结构，数据结构等等 ,此时只能用var_dump打印而不能用echo
   //var_dump($a);

   $a = $dom -> find('h1',0) -> innertext;  //获取第一个h1标签的文本内容，非纯文本内容里面可能也含有html标签
   echo '<br>==='  .$a. '===';

   $a = $dom -> find('h1',0) -> next_sibling();  //获取第一个h1标签的下一个相邻元素，即相邻的下一个兄弟
   echo '<br>==='  .$a. '===';

   $a = $dom -> find('h1',0) -> next_sibling() -> innertext;  //获取第一个h1标签的下一个相邻元素，非纯文本内容里面可能也含有html标签
   echo '<br>==='  .$a. '===';

   $a = $dom -> find('h1',0) -> next_sibling() -> plaintext;  //获取第一个h1标签的下一个相邻元素，即相邻的下一个兄弟的纯文本，去除了其中的html标签
   echo '<br>==='  .$a. '===';


   //获取译文及注释
   $a =  $dom -> find('h2');    //获取h1标签的结构，数据结构等等    
   //echo '<br>==='  .$a. '===';
   var_dump($a);


   

//   // 返回父元素
// $e->parent; 
// // 返回子元素数组
// $e->children;
//  // 通过索引号返回指定子元素
// $e->children(0);
// // 返回第一个资源速
// $e->first_child (); 
// // 返回最后一个子元素
// $e->last _child (); 
// // 返回上一个相邻元素
// $e->prev_sibling (); 
// //返回下一个相邻元素
// $e->next_sibling ();

// 本例中将$a的锚链接值赋给$link变量
// $link = $a->href;
//$link = $html->find('a',0)->href;

   //给$a的锚链接赋新值
  // $a->href = 'http://www.cnphp.info'; 
  // // 删除锚链接
  // $a->href = null; 
  // // 检测是否存在锚链接
  // if(isset($a->href)) {
  //   //代码
  // }

//    每个对象都有4个基本对象属性:
//    tag – 返回html标签名 innertext – 返回innerHTML outertext – 返回outerHTML plaintext – 返回html标签中的文本
//    // 本例中将$a的锚链接值赋给$link变量
//    $link = $a->href;
//    $link = $html->find('a',0)->href;


//      解析器支持对子元素的查找

// 	<?php 
// 	// 查找 ul列表中所有的li项
// 	$ret = $html->find('ul li');

// 	 //查找 ul 列表指定class=selected的li项
// 	$ret = $html->find('ul li.selected');
// 	 ?>



<?php
// 	 还可以使用类似jQuery的选择器来查找定位元素：
// 	// 查找id='#container'的元素
// 	$ret = $html->find('#container'); 

// 	// 找到所有class=foo的元素
// 	$ret = $html->find('.foo');

// 	 // 查找多个html标签
// 	$ret = $html->find('a, img');

// 	 // 还可以这样用
// 	$ret = $html->find('a[title], img[title]');
// 	?>



<?php

//     查找html元素
// 可以使用find函数来查找html文档中的元素。返回的结果是一个包含了对象的数组。我们使用HTML DOM解析类中的函数来访问这些对象，下面给出几个示例：
// //查找html文档中的超链接元素
// $a = $html->find('a');

//  //查找文档中第(N)个超链接，如果没有找到则返回空数组.
// $a = $html->find('a', 0);

//  // 查找id为main的div元素
// $main = $html->find('div[id=main]',0); 

// // 查找所有包含有id属性的div元素
// $divs = $html->find('div[id]'); 

// // 查找所有包含有id属性的元素
// $divs = $html->find('[id]');
?>
