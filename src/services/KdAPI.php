<?php
define("KEY", "djfmjgTV6339");
define("CALLBACK_URL", "http://{$_SERVER['HTTP_HOST']}/api/callback");

class Service_KdAPI {
    // 订阅请求
    public function Subscription_request($company, $number, $from, $to) {
        $post_data = array();
        $post_data["schema"] = 'json';
        $post_data["param"] = json_encode(array(
            'company' => $company == null ? '' : $company,
            'number' => $number,
            'from' => $from == null ? '' : $from,
            'to' => $to == null ? '' : $to,
            'key' => KEY,

            'parameters' => array(
                'autoCom' => 1,
                'interCom' => 1,
                'callbackurl' => CALLBACK_URL
            )
        ));
        $url = 'http://www.kuaidi100.com/poll';
        $o = "";
        foreach ($post_data as $k => $v) {
            $o .= "$k=" . urlencode($v) . "&";        //默认UTF-8编码格式
        }
        $post_data = substr($o, 0, -1);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $result = curl_exec($ch);        //返回提交结果，格式与指定的格式一致（result=true代表成功）
        return json_decode($result, true);
    }
}

