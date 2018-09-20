$(function(){
    $.get('./api/checkState.php',function(result){
    //  console.log(result.username);
        if(result.isSuccess){
            var htmlStr=`<div class="col-sm-6"><p>${result.username}</p></div>`;
            $("#loginname").after(htmlStr);
        }else{
            var htmlStr=`<div class="col-sm-6"><p>undefind</p></div>`;
            $("#loginname").after(htmlStr);
        }
    },'json');
    $("#infobtn").on('click',function(){
        var data=$("#infoForm").serialize();
        $.post('./api/usersinfo.php',data,function(result){
            if(result.isSuccess){
                alert(result.msg);
                location.href='./borrowlist.php';
            }else{
                alert(result.msg)
                location.href='./person.php';
            }
        },'json');
    })
})