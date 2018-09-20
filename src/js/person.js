$(function() {
    //pc端的单击切换
    $("#btnOnOff").on("click",function(){
        //单击按钮时就切换类样式
        //toggleClass("类名称") 对设置或移除被选元素的一个或多个类进行切换。
        $("#perCon").toggleClass("active");

        //如果有active说明已隐藏，文字改为显示
        //hasClass() 方法检查被选元素是否包含指定的 class。
        if($("#perCon").hasClass("active")){
            $(this).text("显示");
        }
        else{
            $(this).text("隐藏");
        }
    });

    //移动端的滑动切换
    //开始触碰屏幕： 手指的开始位置
    var x1,y1; //定义起点的全局变量
    $(window).on("touchstart",function (e) {
        x1=e.originalEvent.changedTouches[0].clientX;
        y1=e.originalEvent.changedTouches[0].clientY;
    });

    //离开屏幕： 滑动到目的地后离开屏幕
    $(window).on("touchend",function (e) {
        var x2=e.originalEvent.changedTouches[0].clientX;
        var y2=e.originalEvent.changedTouches[0].clientY;

        //计算滑动的距离
        var dx=x2-x1;
        
        //不管左滑动还是右滑动，横向距离都有一个值，有效的滑动100
        if(Math.abs(dx)>=100){
            console.log("ok");
            //所做的操作和鼠标点击按钮的操作是一样的： 方法1. 复制代码  方法2. 封装函数，然后分别调用
            //方法3： 触发按钮的单击事件  trigger() 方法触发被选元素的指定事件类型。
            //语法： $(选择器).trigger(事件类型)
            //完整写法  $("#btnOnOff").trigger("click");
            $("#btnOnOff").click(); //简写写法
        }
    });
});