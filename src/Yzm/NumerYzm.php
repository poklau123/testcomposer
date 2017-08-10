<?php
namespace Yzm;

require_once __DIR__.'../../vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

class NumberYzm
{
    public function __construct(){

    }

    /**
    * generate number captcha
    */
    public static function generate(){
        header('Content-type: image/jpeg');

        CaptchaBuilder::create()
            ->build()
            ->output();
    }
}