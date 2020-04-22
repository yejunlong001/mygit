
<?php
   header("content-type:text/html;charset=utf-8");

    include('simple_html_dom.php');

    $html = new simple_html_dom();
    $dom = new simple_html_dom();

    $html ->  load_file('https://so.gushiwen.org/shiwenv_0581b0ba8bb4.aspx');

    //获取到标题
    $title = $html -> find('h1',0) -> plaintext ;
    echo "标题：".$title;
    echo '<br>' ;

    //获取朝代
    $chaodai = $html -> find('h1',0) -> next_sibling() -> find('a',0) -> plaintext;
    echo "朝代：".$chaodai;
    echo '<br>' ;

    //获取作者
    $chaodai = $html -> find('h1',0) -> next_sibling() -> find('a',1) -> plaintext;
    echo "作者：".$chaodai;
    echo '<br>' ;

   //获取正文
    $content = $html -> find('h1',0) -> next_sibling() -> next_sibling() -> innertext;
    echo "正文：".$content;
    echo '<br>' ;

    //获取类别
    $type = $html -> find('.tag',0) -> plaintext;
    echo "类别：". preg_replace('# #','',$type);  //去空格
    echo '<br>' ;


     //判断哪几个div里面有“展开阅读全文”
    //求得有几个.contyishang的div
     $contyishangArray =  $html -> find('.contyishang'); 
     $divs = count($contyishangArray);


      //开始遍历div
      for($i=0;$i<$divs;$i++){

        //求得在第一个.contyishang的div里面有几个a标签呢？
         $linksArr = $html -> find('.contyishang',$i) -> find('a');
         $links = count($linksArr);

         //判断最后一个a标签里面是否含有这几个字呢？“展开阅读全文”
         $word = $html -> find('.contyishang',$i) -> find('a', $links-1) -> plaintext;   //拿到末尾a这个节点,看看是否含有“展开阅读全文”

         //先判断是否存在这个文本节点
         if($word){
            $mystring =  mb_substr($word, 0 , 6);    //开始截取字符串
             if($mystring == "展开阅读全文"){
                //开始找a标签的href属性值
                   $myHref = $html -> find('.contyishang',$i) -> find('a', $links-1) -> href;
                   $len = strlen($myHref);                                                                        //求得字符串总长度
                   $id   = substr($myHref, $len -18, 16);                                                  //求得截取到的字符串id
                   echo "id：".$id;
                   echo '<br>' ;

                   //开始打开id所在的页面
                    $dom  -> load_file('https://so.gushiwen.org/nocdn/ajaxfanyi.aspx?id='.$id);
                    $flag = $dom -> find('h2',0); //是否存在h2?
                    if($flag){
                         $dom  -> load_file('https://so.gushiwen.org/nocdn/ajaxfanyi.aspx?id='.$id);
                    }else{
                         $dom  -> load_file('https://so.gushiwen.org/nocdn/ajaxshangxi.aspx?id='.$id);
                    };
                    //拿到h2
                    $h2 = $dom -> find('h2',0) -> plaintext;
                    echo '<br>' ;
                    echo '<br>' ;
                    echo '<br>' ;
                    echo "t_".($i+1).":" .$h2;
                     echo '<br>' ;

                     //拿到所有的p
                    $contens = "";
                    $p = $dom -> find('p');
                    for($k=0;$k<count($p)-1;$k++){
                       $str = preg_replace('#</?a[^>]*>#is','',$p[$k]); //删除超链接，只留下文本
                       $contens = $contens.$str;
                    };
                    echo "c_".($i+1).":".$contens;
              };
          };  //word结束
      }; //for结束

     

     


   //热度，keyId,

  

   
?>
