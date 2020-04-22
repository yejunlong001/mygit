

<?php
   header("content-type:text/html;charset=utf-8");

 //请参考https://www.jianshu.com/p/bdf934053587文章的用法    //var_dump($b);


    //去除空格
    function trimall($str){
         $qian=array(" ","　","\t","\n","\r");
         return str_replace($qian, '', $str);  
     };
   
    include('simple_html_dom.php');

    $html = new simple_html_dom();

    $html ->  load_file('https://so.gushiwen.org/shiwenv_ee16df5673bc.aspx');

    $arr =  $html -> find('.contyishang');   //找到当前页面含有“.contyishang”的所有div
    $count = count($arr);
    echo $count ;
    echo '<br>' ;

    $brr =  $html -> find('.contyishang',0) -> find('a');    //找到当前页面含有“.contyishang”的所有第一个div 里面所有的“a”标签
    $num = count($brr);
    echo $num ;
    echo '<br>' ;

    $str = $html -> find('.contyishang',0) -> find('a',1) -> href;

    $len = strlen($str);   //求得字符串总长度

    $resString = substr($str, $len -18, 16);  //求得截取到的字符串

    echo $resString;
    echo '<br>' ;



      
     echo $str ;
     var_dump($str);
   
  

   
?>
