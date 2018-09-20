//3. 初始化echarts对象实例
var mycharts = echarts.init(document.getElementById('mybox'));

//4. 配置报表的选项和数据
var optionObj = {
    title: {
        text: '借款类型的金额统计',
        subtext: '2018-09统计',
        x: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        //图例
        data: []
    },
    toolbox: {
        show: true,
        feature: {
            mark: { show: true },
            dataView: { show: true,readOnly: false },
            magicType: {
                show: true,
                type: ['pie','funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore: { show: true },
            saveAsImage: { show: true }
        }
    },
    //是否可以重新计算
    calculable: true,
    //序列数据
    series: [
        {
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%','60%'],
            //数据
            data: []
        }
    ]
};

//5. 为echarts对象加载数据 
mycharts.setOption(optionObj);


//发起ajax请求去后端api获取报表数据
$.get("./api/borrowpngApi.php",function (result) {
    console.log(result);
    optionObj.legend.data=result.title; //修改统计的图例数据
    optionObj.series[0].data=result.data; //修改统计的序列数据

    mycharts.hideLoading(); //隐藏loading动画
    mycharts.setOption(optionObj); //把新的配置设置到报表中
    
},"json");