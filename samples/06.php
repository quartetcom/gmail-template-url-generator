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
            <div class="well well-sm">【カルテット運用チーム】コンバージョンタグ設置依頼（　様）</div>
        </div>
        <div class="form-group">
            <label>Body</label>
<pre class="well">
○○様

いつもお世話になっております。
カルテット運用チーム○○です。


リスティング広告のコンバージョンタグを発行しました。

目標設定確認書の『コンバージョン計測を行うメールフォーム』の
送信完了ページに設置をお願いいたします。

■■■コンバージョンタグの設置について■■■

本メールに添付されているタグを、
コンバージョンページ（問い合わせ完了、決済完了ページ等）
の&lt;body&gt;タグと&lt;/body&gt;タグの間に設置して下さい。

■■■コンバージョンタグ設置の際のご注意点■■■

リスティング広告のコンバージョン測定は、
『タグを埋め込んだページの表示回数』で計測します。

そのため、入力ページや、入力確認ページにタグを設置してしまった場合
・１件のお問い合わせが、管理画面上で複数回カウントされてしまう
・メールフォームの入力ページを見ただけの人が、コンバージョンとして計測されてしまう
上記のような計測ミスが発生し、月次レポート等で正しい数値をご報告できなくなってしまいます。
タグの設置は必ず
『送信完了ページ（サンクスページ）のみ』にお願いいたします。

また、タグが重複していると計測で問題が起こる場合がございますので、
古いタグがある場合、削除して頂くようお願いいたします。
設置に関してのご不明点がございましたら、お問い合わせ下さい。


ご不明点などございましたらいつでもご連絡ください。
以上、よろしくお願いいたします。
</pre>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php' ?>
