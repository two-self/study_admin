<?php

namespace App\Http\Controllers;

use App\Libs\Aip\AipBase;
use App\Libs\Aip\AipOcr;
use Illuminate\Http\Request;

class AipOcrController
{
    public function pictureCharacter()
    {
        $client = new AipOcr(env('APP_ID'), env('API_KEY'), env('SECRET_KEY'));
        $image = file_get_contents('/Users/jiangxu/me/timg.jpg');

// 调用通用文字识别, 图片参数为本地图片
        return $client->basicGeneral($image);

// 如果有可选参数
        $options                     = array();
        $options["language_type"]    = "CHN_ENG";
        $options["detect_direction"] = "true";
        $options["detect_language"]  = "true";
        $options["probability"]      = "true";

// 带参数调用通用文字识别, 图片参数为本地图片
        $client->basicGeneral($image, $options);
        $url = "https://image.baidu.com/search/detail?ct=503316480&z=0&ipn=d&word=%E5%B8%A6%E5%AD%97%E5%9B%BE%E7%89%87&hs=2&pn=0&spn=0&di=9609527510&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&ie=utf-8&oe=utf-8&cl=2&lm=-1&cs=1568500443%2C2780230426&os=4264350950%2C2963959705&simid=102423624%2C923122452&adpicid=0&lpn=0&ln=30&fr=ala&fm=&sme=&cg=&bdtype=0&oriquery=%E5%B8%A6%E5%AD%97%E5%9B%BE%E7%89%87&objurl=http%3A%2F%2Ffile03.16sucai.com%2F2015%2F09%2F2015i0yjxufbenr.jpg&fromurl=ippr_z2C%24qAzdH3FAzdH3Fooo_z%26e3B8mf7vwt_z%26e3Bv54AzdH3Fda8cAzdH3F8aa99ad_z%26e3Bip4s&gsm=0";

// 调用通用文字识别, 图片参数为远程url图片
        $client->basicGeneralUrl($url);
// 如果有可选参数
        $options                     = array();
        $options["language_type"]    = "CHN_ENG";
        $options["detect_direction"] = "true";
        $options["detect_language"]  = "true";
        $options["probability"]      = "true";

// 带参数调用通用文字识别, 图片参数为远程url图片
        return $client->basicGeneralUrl($url, $options);

    }
}

