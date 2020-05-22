<?php include __DIR__ . '/header.php'; ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <b><?php echo $config[$currentId]; ?></b>
        <div class="pull-right"><a id="link" href="" target="_blank"><i class="glyphicon glyphicon-link"></i> テンプレート</a></div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label>Cc</label>
            <div class="well well-sm">&nbsp;</div>
        </div>
        <div class="form-group">
            <label>Bcc</label>
            <div class="well well-sm">&nbsp;</div>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <div class="well well-sm">【カルテット運用チーム】ご請求書の送付及びご入金依頼（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チームの○○です。


本日は、リスティング広告運用の請求書を添付させて頂きました。
後ほど経理の者より、原本も郵送で送らせて頂きます。
内容をご確認いただき、ご入金をお願いいたします。

開始予定日までにご入金が確認できないと広告配信ができない旨、ご了承ください。

また、口座へのご入金が支払い期日の夕方などで、
着金反映が期日を過ぎそうな場合などは、
メールで構いませんのでご一報いただけると大変助かります。

ご不明点などございましたらいつでもご連絡ください。
以上、よろしくお願いいたします。
</pre>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php' ?>
