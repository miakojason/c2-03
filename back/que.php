<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/que.php" method="post">
        <div style="display: flex;">
            <div class="clo">問卷名稱</div>
            <input type="text" name="subject" id="">
        </div>
        <div class="clo">
            <div class="opt">
                選項<input type="text" name="option[]" id="">
                <input type="button" value="更多" onclick="more()">
            </div>
        </div>
        <div>
            <input type="submit" value="新增">|<input type="reset" value="清空">
        </div>
    </form>
</fieldset>
<script>
    function more() {
        let opt = `<div">
    選項<input type="text" name="option[]" id="">
    </div><br>`
        $(".opt").before(opt)
    }
</script>