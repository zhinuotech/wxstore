<?php

namespace zntech\weshop;

use EasyWeChat\MiniProgram\Application;
use Exception;
use zntech\weshop\Shop\Entity\Entity;
use zntech\weshop\Tools\ObjectToArray;
use zntech\weshop\Tools\RequestUtil;
use zntech\weshop\Tools\Str;

class Base
{
    protected $app;
    protected $baseUrl = 'https://api.weixin.qq.com/';
    protected $url = '';
    protected $specialUrl = [];
    public function __construct($miniConfig=[])
    {
        if (!$miniConfig && function_exists('config')) {
            $miniConfig = config('weshop.');
        }
        if ($miniConfig instanceof Application) {
            $this->app = $miniConfig;
        }else{
            $this->app = \EasyWeChat\Factory::miniProgram($miniConfig);
        }
        $path = explode('\\', static::class);
        $this->url = $this->baseUrl . lcfirst($path[count($path)-2]) .'/'. lcfirst($path[count($path)-1]);
    }

    public function __call($name, $args)
    {
        $method = lcfirst(substr($name,3));
        if (is_callable([$this, $method])) {
            $urlName = Str::snake($method);
            $this->url .= '/' . (key_exists($method, $this->specialUrl) ? $this->specialUrl[$method] : $urlName);
            $data = call_user_func_array([$this, $method], $args);

            if ($data instanceof Entity) {
                $reqData = new ObjectToArray($data);
                $reqData = $reqData->toArray();
            }elseif (is_array($data)) {
                foreach ($data as $key=>$value) {
                    if ($value instanceof Entity) {
                        $obj = new ObjectToArray($value);
                        $data[$key] = $obj->toArray();
                    }
                }
                $reqData = $data;
            }else{
                $reqData = $data;
            }
            return $this->request(array_filter($reqData));
        }
        throw new Exception(__CLASS__.'无此方法'.$name);
    }

    public function request($data)
    {
        $token = $this->app->access_token->getToken();
        $this->url .= '?access_token='.$token['access_token'];
        $req = RequestUtil::post($this->url, 'post', $data, ['Content-Type'=>'application/json']);
        if (is_string($req)) {
            return json_decode($req, true);
        }
        return $req;
    }
}