<div class="nav">目前位置:首頁>分類網誌><span class="type">健康新知</span></div>
<fieldset>
    <legend>分類網誌</legend> 
<a class="type-item" data-type="1">健康新知</a>  
<a class="type-item" data-type="2">菸害防治</a>
<a class="type-item" data-type="3">癌症防治</a>
<a class="type-item" data-type="4">慢性病防治</a>
</fieldset>

<fieldset>
    <legend>文章列表</legend>
    <div class="list-items"></div>
    <div class="article"></div>
</fieldset>
<script>
    $(".type-item").on('click',function(){
        $(".type").text($(this).text())
    })
    function getList(){
        $.get("./api/get_list.php",{type},(list)=>{
            $(".list-items").html(list)
            $(".article").hide()
            $(".list-items").show();
        })
    }

</script>