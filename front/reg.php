<fieldset>
    <legend>會員註冊</legend>
    <span style="color:red">*請設定您要註冊的帳號及密碼（最長 12 個字元）</span>
    <table>
        <tr>
            <th class="clo">Step1:登入帳號</th>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <th class="clo">Step2:登入密碼</th>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <th class="clo">Step3:再次確認密碼</th>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <th class="clo">Step4:信箱(忘記密碼時使用)</th>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="註冊" onclick="reg()">
                <input type="reset" value="清除" onclick="clean()">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>
<script>
    function clean() {
        $("input[type='text'],input[type='password'],input[type='number'],input[type='radio']").val("");
    }

    function reg() {
        let user = {
            acc: $("#acc").val(),
            pw: $("#pw").val(),
            pw2: $("#pw2").val(),
            email: $("#email").val()
        }
        if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '') {
            if (user.pw == user.pw2) {
             $.post("./api/chk_acc.php",{acc:user.acc},(res)=>{
                if(parseInt(res)==1){
                    alert("帳號重覆")
                }else{
                    $.post("./api/reg.php",user,(res)=>{
                    alert("註冊完成，歡迎加入")
                })
                }
             })
             
            } else {
                alert("密碼錯誤")
            }
        } else {
            alert("不可空白")
        }
    }
</script>