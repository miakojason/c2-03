<fieldset>
    <legend>目前位置:首頁>最新文章區</legend>
    <table>
        <tr>
            <th>標題</th>
            <th>內容</th>
            <th></th>
        </tr>
        <?php
        $news = $News->all();
        foreach ($news as $new) {
        ?>
            <tr>
                <td class="clo"><?= $new['title']; ?></td>
                <td>
                    <div id="a"><?= mb_substr($new['text'], 0, 25); ?>...</div>
                    <div id="s" style="display: none;"><?= $new['text']; ?></div>
                </td>
                <td>
                    <?php
                    if (isset($_SESSION)) {
                        
                        echo "讚";
                    } else {
                        echo "收回讚";
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</fieldset>