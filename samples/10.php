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
            <div class="well well-sm">【カルテット運用チーム】ダッシュボード閲覧権限の発行について（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。

リスティング広告の進捗確認用のダッシュボード閲覧権限情報を送付させて頂きます。
以下IDパスワードでログイン頂き、状況に応じてご覧下さい。
※権限などの仕様の関係で原則ID、パスワードの変更は出来ませんので予めご了承下さいませ。


ログインURL　https://app.lisket.jp/client/guest/XXXXXXXXXXXXXXXXXXXXXXX/login
パスワード　　●●


ご不明点などございましたらいつでもご連絡ください。
以上、ご確認よろしくお願いいたします。


■━━━━━━━━━━━━━━━━━━━━━━━━━━━━■
　株式会社カルテットコミュニケーションズ　運用チーム
　
　〒460-0008
　愛知県名古屋市中区栄2-2-23　アーク白川公園ビルディング5階

　TEL：052-684-5843(直通) 052-684-5841(代表)
　FAX：052-684-5842
■━━━━━━━━━━━━━━━━━━━━━━━━━━━━■
</pre>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php' ?>
