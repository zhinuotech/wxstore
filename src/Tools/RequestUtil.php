<?php


namespace zntech\weshop\Tools;



use Exception;

class RequestUtil
{
    public static function post($url, $method = 'POST', $post_data = [], $head=[])
    {
        $res = [];
        foreach ($head as $key => $item){
            $res[] = $key.':'.$item;
        }
        if (isset($head['Content-Type']) && strpos($head['Content-Type'], 'json')!==false) {
            $postdata = json_encode($post_data);
        }else{
            $postdata = http_build_query($post_data);       #生成一个经过 URL-encode 的请求字符串
        }
        $options = array(
            'http' => array(
                'method' => $method,
                'header' => implode("\r\n", $res),
                'content' => $postdata,
                'timeout' => 15 * 60 // 超时时间（单位:s）
            ),
            "ssl" => [
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ]
        );
        $context = stream_context_create($options);     #创建资源流上下文
        //https://www.baidu.com/
        #将整个文件读入一个字符串
        try {
            return file_get_contents($url,false,$context);
        }catch (Exception $exception) {
            throw $exception;
        }
    }
}
