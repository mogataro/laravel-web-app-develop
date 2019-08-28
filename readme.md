# PHPフレームワーク Laravel Webアプリケーション開発 7章 7.1の勉強

[implementsについて](http://togattti.hateblo.jp/entry/2013/04/30/062523)  

Connection refused [tcp://127.0.0.1:6379]  
=>redisサーバーを立ち上げてない  
=>そもそもredisをインストールしてないのでインストール  
```$brew install redis```  

=>redisを起動  
```$redis-server```

=>redisに接続  
```$redis-cli```  

=>キューワーカを実行(全てのキューを実行し終わったら終了する)  
```$php artisan queue:work --stop-when-empty```