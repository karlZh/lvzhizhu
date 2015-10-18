<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:54
 */

class WechatController extends Controller{

    /*
     * actionWeLogin
     * 微信登录操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionWeLogin(){
        $url = WeChat::OAUTH_URL
            ."?appid=".WeChat::APPID
            ."&redirect_uri=".urlencode("http://www.greenspider.cn".$this->createUrl('wechat/auth'))
            ."&response_type=code"
            ."&scope=snsapi_userinfo"
            ."&state=".urlencode($_SERVER['HTTP_REFERER'])
            ."#wechat_redirect";
        header("location:".$url);
    }

    public function actionAuth(){
        $code = $_GET['code'];
        $state = $_GET['state'];
        try {
            if (empty($code)) {
                throw new Exception('授权失败,code错误');
            }
            $json = WeChat::getAccessToken($code);
            $data = json_decode($json,true);
            if(!isset($data['access_token'])){
                throw new Exception('授权失败,access_token错误');
            }

            $openid = $data['openid'];
            if(empty($openid)){
                throw new Exception('授权失败,openid错误');
            }
            $json = WeChat::getUserInfo($data['access_token'],$openid);
            $userinfo = json_decode($json,true);

            if($userinfo['errcode']){
                throw new Exception('获取用户信息失败：'.$userinfo['errcode'].":".$userinfo['errmsg']);
            }



        }catch(Exception $e){
            $this->error('error_params',$e->getMessage(),false);
            echo "<script>";
            echo "alert('授权失败，请重新登录');";
            echo "window.location.href='".$state."'";
            echo "</script>";
            return ;
        }


    }

} 