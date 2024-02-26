<fieldset>
    <legend>目前位置:首頁>最新文章區</legend>
    <table>
        <tr>
            <th>標題</th>
            <th>內容</th>
            <th></th>
        </tr>
        <?php
        $total = $News->count(['sh' => 1]);
        $div = 5;
        $pages = ceil($total / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;
        $news = $News->all(" limit $start,$div");
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
    <div>
        <?php
        if ($now > 1) {
            $prev = $now - 1;
            echo "<a href='?do=$do&p=$prev'><</a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $fontsize = ($now == $i) ? '24px' : '16px';
            echo "<a href='?do=$do&p=$i'style='font-size:$fontsize'>$i</a>";
        }
        if ($now < $pages) {
            $next = $now + 1;
            echo "<a href='?do=$do&p=$next'>></a>";
        }
        ?>
    </div>
</fieldset>
<script>
    
</script>