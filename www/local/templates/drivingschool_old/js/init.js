$(function(){

})
var send_request_callback = false;
$(document).on("click", ".btn_feedback", function(){
    yaCounter44666704.reachGoal('form-active');
    var
        name = $("input[name=your-name]").val(),
        phone = $("input[name=your-phone]").val(),
        email = $("input[name=your-email]").val(),
        comment = $("textarea[name=your-message]").val();

    var Errors = false;
    var ErrorsList = "";
    var namePattern = new RegExp(/[а-яА-Яa-zA-Z\\s]+/);

    if(name=='' || namePattern.test(name)==false){
        Errors=true;
        ErrorsList+='Вы не ввели Имя или ввели Имя некорректно<br/>';
        $("input[name=your-name]").css("border", "1px solid tomato")
    } else {
        $("input[name=your-name]").css("border", "1px solid #b7b7b7");
    }
    if(phone==''){
        Errors=true;
        ErrorsList+='Вы не ввели Контактный телефон!<br/>';
        $("input[name=your-phone]").css("border", "1px solid tomato")
    } else {
        $("input[name=your-phone]").css("border", "1px solid #b7b7b7");
    }
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    if(!pattern.test(email)){
        Errors=true;
        ErrorsList+='Вы не ввели E-mail или ввели его не верно!<br/>';
        $("input[name=your-email]").css("border", "1px solid tomato")
    } else {
        $("input[name=your-email]").css("border", "1px solid #b7b7b7");
    }

    if(Errors){
        $(".error_list").removeClass("dn")
        $(".error_list span").html(ErrorsList)
    }else{
        $(".error_list").addClass("dn")
        $(".error_list span").html("")

        if(!send_request_callback)
        {
            $.ajax({
                url:'/local/ajax/feedback.php', // Куда отсылаем запрос
                data:({ // Что отсылаем
                    NAME:name,
                    PHONE: phone,
                    EMAIL: email,
                    TEXT: comment
                }),
                type:'POST',
                success: function(ResultAjax){
                    var obj = JSON.parse(ResultAjax)
                    if(obj["RESULT"] == "Y"){
                        $(".success_result").removeClass("dn")
                        send_request_callback = true

                        $(".wrap_form_feed_back").addClass("dn")
                    }else{
                        $(".error_list").removeClass("dn")
                        $(".error_list span").html(obj["TEXT"])
                    }
                }
            });
        }
    }


})