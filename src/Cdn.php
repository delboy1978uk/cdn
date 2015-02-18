<?php

namespace Del;


class Cdn
{
    public static function fontAwesomeCssLink()
    {
        return Icon::fontAwesomeHeadCssLink();
    }

    public static function bootstrapCssLink()
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">';
    }

    public static function jQueryUiCssLink($version = '1.11.3')
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/smoothness/jquery-ui.css">';
    }

    public static function delCssLink()
    {
        return Css::add();
    }

    public static function bootstrapJavascript()
    {
        return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>';
    }

    public static function jQueryJavascript($version = '2.1.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>';
    }

    public static function jQueryUIJavascript($version = '1.11.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>';
    }
}
