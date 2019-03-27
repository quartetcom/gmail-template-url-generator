<?php include __DIR__ . '/header.php'; ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <b><?php echo $config[$currentId]; ?></b>
        <div class="pull-right"><a id="link" href="" target="_blank"><i class="glyphicon glyphicon-link"></i> テンプレート</a></div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label>Bcc</label>
            <div class="well well-sm"><br></div>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <div class="well well-sm">【カルテット運用チーム】コンバージョンテストのご報告（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。

成果計測の動きが正常かどうかを確認するため、
コンバージョン（お問い合わせ）テストを行わせて頂きます。

テストは目標設定確認書で指定した内容にて行います。

ご不明点などございましたらいつでもご連絡ください。
以上、よろしくお願いいたします。


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━■
　株式会社カルテットコミュニケーションズ　運用チーム
　
　〒460-0003
　愛知県名古屋市中区錦二丁目4番15号 ORE錦二丁目ビル11階

　TEL：052-684-5843(直通) 052-684-5841(代表)
　FAX：052-684-5842
■━━━━━━━━━━━━━━━━━━━━━━━━━━━━■
</pre>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php' ?>
