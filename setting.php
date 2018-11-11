<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "hH9akrBKQFRK5+4znjRhcG6inryOm5mtAxZr7aUgjPMAN6hYTgxBkxHMEIvjQ7ithSekTk4OosxHAxEq5nEaSesZWD5XhtV8q19750Aj9xoLYFhT3PuDV2BHw7Z1zpGf/cQNptm2xhx6Zsfrao3w1gdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "67fd130b457cb839a4f9ad909504dfd4";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}