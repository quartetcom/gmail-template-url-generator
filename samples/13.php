<?php include __DIR__ . '/header.php'; ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <b><?php echo $config[$currentId]; ?></b>
        <div class="pull-right"><a id="link" href="" target="_blank"><i class="glyphicon glyphicon-link"></i> テンプレート</a></div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label>Bcc</label>
            <div class="well well-sm">shinchoku@quartetcom.co.jp</div>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <div class="well well-sm">【カルテット運用チーム】タグの設置依頼（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。

この成果計測や追跡広告のリスト収集など、様々な用途に使用するため、
GTMのタグを発行しました。

タグファイルを添付しておりますので
お手数をおかけしますがご設置お願い致します。

■■■タグの設置について■■■
こちらはタグマネージャーのタグとなります。
添付のファイル内のスクリプトを
全てのページの<body>タグ直後に設置して下さい。
測定用の設定は弊社にて行わせて頂きます。

■■■注意点■■■
・成果計測地点の判別のため、複数回のテストを
させていただく事がございます、予めご了承ください。

・タグが重複していると計測不備が起きる場合がございますので、
古いタグがある場合、削除して頂くようお願いいたします。

・ホームページのhtml構成が変わるとタグが正しく動作しないことがあります。
ホームページの構成に何かしら変更を加えられた場合には、
お手数ですが、その旨を運用担当者までご連絡下さい。

設置に関してのご不明点がございましたら、お問い合わせ下さい。

以上、よろしくお願いいたします。


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
