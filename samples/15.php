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
            <div class="well well-sm">【カルテット運用チーム】GoogleAnalyticsの閲覧権限設定依頼（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。

GoogleAnalyticsの情報を閲覧させて頂く件につきまして、弊社所定のメールアドレスを御社のGoogleAnalyticsに紐付けて頂く必要がございます。
お手数おかけしますが、以下の手順に従って、ご対応をお願い申し上げます。

■■■権限を付与いただくメールアドレス■■■
qcga04@gmail.com

■■■権限を付与する方法■■■
1. GoogleAnalyticsにログインします。
2. [管理] タブをクリックします。
3. [アカウント] 列で [ユーザー管理] をクリックします。
4. [権限を付与するユーザー] で、上記のメールアドレスを入力します。
5. 権限タイプ「表示と分析」を選択します。
6. [このユーザーにメールで通知] をオンにします
7. [追加] をクリックし、付与完了となります。

※説明では手順３で[アカウント]列としていますが、御社のご都合に合わせて[プロパティ]、[ビュー]単位での[ユーザー管理]で操作を行って頂いても構いません。

GoogleAnalytics公式ヘルプ
https://support.google.com/analytics/answer/1009702?hl=ja

■■■注意点・備考■■■
GoogleAnalyticsはデータの閲覧を目的として利用致します。
GoogleAnalyticsの設定を弊社が無断で行うことはございません。
閲覧時に取得した情報は責任を持って弊社内のみで管理・完結させて頂きます。


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
