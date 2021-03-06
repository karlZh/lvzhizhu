<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/23
 * Time: 11:42
 */

class WeChat{

    const APPID = "wx36e0cccb1ce2dff9";
    const APPKEY = "754f0bf956f6cfe3044a384c705e5d18";

    const OAUTH_URL = "https://open.weixin.qq.com/connect/oauth2/authorize";
    const GET_ACCESS_TOKEN_URL = "https://api.weixin.qq.com/sns/oauth2/access_token";
    const GET_USER_INFO = "https://api.weixin.qq.com/sns/userinfo";

    public static function getAccessToken($code){
        $url = self::GET_ACCESS_TOKEN_URL
            ."?appid=".WeChat::APPID
            ."&secret=".WeChat::APPKEY
            ."&code=".$code
            ."&grant_type=authorization_code";
        $output = Yii::app()->curl->get($url);

        return $output;
    }

    public static function getUserInfo($token,$openid){
        $url = self::GET_USER_INFO
            ."?access_token=".$token
            ."&openid=".$openid
            ."&lang=zh_CN";
        $output = Yii::app()->curl->get($url);

        return $output;
    }

}