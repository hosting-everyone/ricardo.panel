<?php

return [
    'key' => [
        'warning' => 'アプリケーションの暗号化キーがすでに設定されているようです。この処理を続行してそのキーを上書きすると、既存の暗号化されたデータが破損します。自分が何をしているのか分からない限り、続行しないでください。',
        'confirm' => '私はこのコマンドの結果を理解し、暗号化されたデータの損失に対するすべての責任を負います。',
        'final_confirm' => '続行してもよろしいですか？アプリケーションの暗号化キーを変更すると、データが失われます。',
    ],
    'location' => [
        'no_location_found' => '指定されたショートコードに一致するレコードが見つかりませんでした。',
        'ask_short' => 'ロケーションショートコード',
        'ask_long' => 'ロケーション説明',
        'created' => 'IDが:idの新しいロケーションを正常に作成しました。',
        'deleted' => 'リクエストされたロケーションを削除しました。',
    ],
    'user' => [
        'search_users' => 'ユーザー名、UUIDまたはメールアドレスを入力',
        'select_search_user' => '削除するユーザーのID(「0」を入力して再検索)',
        'deleted' => 'ユーザーがコントロールパネルから正常に削除されました。',
        'confirm_delete' => 'コントロールパネルからこのユーザーを削除してもよろしいですか？',
        'no_users_found' => '検索されたユーザーは見つかりませんでした。',
        'multiple_found' => '指定されたユーザーの複数のアカウントが見つかりましたが、--no-interactionフラグが指定されているためユーザーを削除できませんでした。',
        'ask_admin' => 'このユーザーは管理者ですか？',
        'ask_email' => 'メールアドレス',
        'ask_username' => 'ユーザー名',
        'ask_name_first' => '姓',
        'ask_name_last' => '名',
        'ask_password' => 'パスワード',
        'ask_password_tip' => 'ユーザーにランダムに送信されるパスワードを使用してアカウントを作成する場合は、このコマンド(Ctrl+C)を再実行し、--no-passwordフラグを指定します。',
        'ask_password_help' => 'パスワードは8文字以上で、1つの大文字と数字を含む必要があります。',
        '2fa_help_text' => [
            'これを有効にすると、アカウントの2FA認証が無効になります。これは、アカウントにログインできなくなっている場合にのみ、アカウントを復元するために使用する必要があります。',
            'これが希望通りでない場合は、Ctrl+Cキーを押してこの処理を終了します。',
        ],
        '2fa_disabled' => ':emailの2FA認証が無効になりました。',
    ],
    'schedule' => [
        'output_line' => '`:schedule`(:hash)の最初のタスクジョブを実行しました。',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'サービスのバックアップファイル:fileを削除しました。',
    ],
    'server' => [
        'rebuild_failed' => 'ノード":node"での":name"(#:id)の再構築要求は次のエラーにより失敗しました。:message',
        'power' => [
            'confirm' => ':countサーバーに対して:actionを実行しようとしています。続行しますか？',
            'action_failed' => 'ノード":node"での":name"(#:id)の電源動作要求は次のエラーにより失敗しました。:message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTPホスト(例えば、smtp.gmail.com)',
            'ask_smtp_port' => 'SMTPポート',
            'ask_smtp_username' => 'SMTPユーザー名',
            'ask_smtp_password' => 'SMTPパスワード',
            'ask_mailgun_domain' => 'Mailgunドメイン',
            'ask_mailgun_secret' => 'Mailgunシークレット',
            'ask_mandrill_secret' => 'Mandrillシークレット',
            'ask_postmark_username' => 'PostmarkAPIキー',
            'ask_driver' => 'メールの送信にどのドライバーを使用しますか？',
            'ask_mail_from' => 'メールアドレスの送信元',
            'ask_mail_name' => 'メールに表示される名前',
            'ask_encryption' => '使用する暗号化方式',
        ],
        'database' => [
            'host_warning' => 'ソケット接続の問題が頻繁に発生するため、データベースホストとして「localhost」を使用しないことを強くお勧めします。ローカル接続を使用する場合は、「127.0.0.1」を使用する必要があります。',
            'host' => 'データベースホスト',
            'port' => 'データベースポート',
            'database' => 'データベース名',
            'username_warning' => 'MySQL接続に「root」アカウントを使用することは、非常に不適切であるだけでなく、このアプリケーションでは許可されていません。このアプリケーション用のMySQLユーザーを作成しておく必要があります。',
            'username' => 'データベースユーザー名',
            'password_defined' => 'すでにMySQL接続パスワードが設定されているようですが、変更しますか？',
            'password' => 'データベースパスワード',
            'connection_error' => '指定されたログイン情報を使用してMySQLサーバーに接続できませんでした。エラー":error"が返されました。',
            'creds_not_saved' => 'ログイン情報は保存されていません。有効なログイン情報を指定する必要があります。',
            'try_again' => '戻って再試行しますか？',
        ],
        'app' => [
            'settings' => 'UIベースの設定エディターを有効にしますか？',
            'author' => 'エッグ作成者のメールアドレス',
            'author_help' => 'このコントロールパネルからエクスポートされたエッグの送信元のメールアドレスを入力してください。これは有効なメールアドレスである必要があります。',
            'app_url_help' => 'アプリケーションURLは、SSLを使用しているかどうかに応じて、https://またはhttp://から始まる必要があります。スキームを含めないと、メールやその他のコンテンツが間違った場所に接続されます。',
            'app_url' => 'アプリケーションURL',
            //This URL is the Japanese version. Depending on the language file policy, this can be "https://www.php.net/manual/en/timezones.php".
            'timezone_help' => 'タイムゾーンは、PHPで使用できるタイムゾーンのいずれかである必要があります。不明な場合は、https://www.php.net/manual/ja/timezones.phpを参照してください。',
            'timezone' => 'アプリケーションタイムゾーン',
            'cache_driver' => 'キャッシュドライバー',
            'session_driver' => 'セッションドライバー',
            'queue_driver' => 'キュードライバー',
            'using_redis' => '1つ以上のオプションでRedisドライバーを選択しました。以下に有効な接続情報を入力してください。設定を変更しない限り、ほとんどの場合は指定されているデフォルトを使用できます。',
            'redis_host' => 'Redisホスト',
            'redis_password' => 'Redisパスワード',
            'redis_pass_help' => 'Redisサーバーインスタンスはローカルで実行されており、外部からはアクセスできないため、デフォルトではパスワードは存在しません。その場合、値を入力せずにそのままEnterキーを押してください。',
            'redis_port' => 'Redisポート',
            'redis_pass_defined' => 'パスワードはすでにRedisに設定されているようですが、変更しますか？',
        ],
    ],
];
