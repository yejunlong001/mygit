

<?php
header("content-type:text/html;charset=utf-8");


 //请参考https://www.jianshu.com/p/bdf934053587文章的用法    //var_dump($b);

 //加载
  
   
   include('simple_html_dom.php');

    $html = new simple_html_dom();

    $html ->  load_file('https://so.gushiwen.org/shiwenv_ee16df5673bc.aspx');



    $arr =  $html -> find('.contyishang');
    $count = count($arr);
    echo $count ;
    echo '<br>' ;


    $brr =  $html -> find('.contyishang',0) -> find('a');
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
