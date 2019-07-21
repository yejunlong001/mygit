
//第一步：给js文件配置路径
require.config({ 
    paths:{
        "jquery":'jquery-1.9.1.min',                 //这是插件模块，不需要加后缀.js,不然报错
        "faxingdaoModel":'../smallJs/faxingdao',     //这是模块1，不需要加后缀.js,不然报错
        "qudapeiModel":'../smallJs/qudapei',         //这是模块2，不需要加后缀.js,不然报错
        "wencaidaoModel":'../smallJs/wencaidao'      //这是模块3，不需要加后缀.js,不然报错
    }
});



//第二步：管理模块
//jquery插件不能取别名，只能用jquery这个单词来做模块的名字
//需要使用的别名放到数组,别名有先后顺序之分，放前面就先加载，放后面就后加载
//当数组里面的别名模块js加载完成之后，再加载数组后面的function回调函数里面的js代码。
require(['jquery','qudapeiModel','wencaidaoModel','faxingdaoModel'],function($){  

       //接下来正常写代码就好
       console.log('---------');
       console.log(name);
       console.log(age);
       console.log(address);


});




