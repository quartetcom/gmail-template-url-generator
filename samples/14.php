<?php include __DIR__ . '/header.php'; ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <b><?php echo $config[$currentId]; ?></b>
        <div class="pull-right"><a id="link" href="" target="_blank"><i class="glyphicon glyphicon-link"></i> テンプレート</a></div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label>Bcc</label>
            <div class="well well-sm">eigyo@quartetcom.co.jp</div>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <div class="well well-sm">【カルテット運用チーム】増額／減額／予算変更の内容確認について</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。

掲題の件につきまして、以下の内容でお間違いが無ければ、
大変お手数ですが以下の「同意しない」を削除したうえで本メールにご返信下さい。

==========================================
増額／減額／予算変更のご確認事項

１．変更適用月
　　YYYY年MM月

２．変更対象
　　アカウント名　：　XXXXXXXXXXXXXXX

３．変更内容
　　変更前予算　：　XXX万円　（媒体：Yahoo／Google）
　　変更後予算　：　ZZZ万円　（媒体：Yahoo／Google）

上記変更を行うことを　同意する／同意しない
==========================================

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
