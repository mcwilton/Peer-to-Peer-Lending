$(function() {
    $("#registerForm").bootstrapValidator({
        message: 'This value is not valid',//好像从来没出现过
        feedbackIcons: {//根据验证结果显示的各种图标
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                message:'请输入正确的邮箱',
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '邮箱必须输入'
                    },
                    emailAddress: {//验证email地址
                        message: '不是正确的email地址'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '姓名必须输入'
                    },
                    regexp: {//正则验证
                        regexp: /^[a-zA-Z0-9_-]{2,16}$/,
                        message: '所输入的字符请在2-16个之间'
                    }
                }
            },
            pwd: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '密码必须输入'
                    },
                    regexp: {//正则验证
                        regexp: /^(?![A-Z]+$)(?![a-z]+$)(?!\d+$)\S{8,}$/,
                        message: '密码必须符合由数字,大写字母,小写字母,至少其中两种组成，且长度不小于8，同时第一位不能为数字'
                    }
                }
            },
            checkpwd: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请输入相同密码'
                    },
                    identical: {//与指定控件内容比较是否相同，比如两次密码不一致
                        field: 'pwd',//指定控件name
                        message: '输入的内容不一致'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请输入相同密码'
                    },
                    regexp: {//正则验证
                        regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                        message: '请输入手机号'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        const reqUrl="./api/userreg.php";
        const data=$form.serialize();
        $.post(reqUrl,data,function(result) {
            if(result.isSuccess){
                $("#msgShowTitle").text("登录成功")  
                //2. 设置蒙层的内容
                $("#msgShowContent").html(`<span class='glyphicon glyphicon-ok'></span> ${result.msg}，等待<span id
                ='num'>5</span>秒后跳转到个人中心`);
                let num=6;
                var timesID=setInterval(()=>{
                   num--;
                   $("#num").text(num);
                   if(num==0){
                       clearInterval(timesID);
                       location.href="./login.php";//跳转到登录页面
                   }
                },1000);
                // alert(result.msg);
            }else{
                alert(result.msg);
            }
            $('#msgShowModal').modal('show');
        }, 'json');
    });
})
