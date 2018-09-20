$(function() {
    $("#loginForm").bootstrapValidator({
        message: 'This value is not valid',//好像从来没出现过
        feedbackIcons: {//根据验证结果显示的各种图标
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '姓名必须输入'
                    },
                    regexp: {//正则验证
                        regexp: /^[a-zA-Z0-9_-]{2,16}$/,
                        message: '所输入的字符 请在2-16个之间'
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
        const reqUrl="./api/userslogin.php";
        const data=$form.serialize();
        $.post(reqUrl,data, function(result) {
            // console.log("返回的结果：",result);
            if(result.isSuccess){
                alert(result.msg);
                location.href='./person.php';
            }else{
                alert(result.msg)
            }
        }, 'json');
    });
})

