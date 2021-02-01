<?php

class Site{
    var $url;
    var $title;

    function __construct($par1,$par2){
        $this->url = $par1;
        $this->title = $par2;
    }

    function setUrl($par2){
        $this->url = $par2;
    }


    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par2){
        $this->title = $par2;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }

}


$taobao = new Site("www.taobao.com","淘宝");
$runoo = new Site("www.runoo.com","菜鸟教程");

$taobao->getTitle();
$runoo->getTitle();

$taobao->getUrl();
$runoo->getUrl();

?>