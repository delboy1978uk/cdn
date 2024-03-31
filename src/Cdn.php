<?php

namespace Del;

class Cdn
{
    public static function angularJavascript(string $version = '1.5.6'): string
    {
        switch($version)
        {
            default:
                return '<script src="//ajax.googleapis.com/ajax/libs/angularjs/'.$version.'/angular.min.js"></script>';
                break;
        }
    }

    public static function bootstrapCssLink(string $version = '4.5.3'): string
    {
        switch($version)
        {
            case '4.5.3':
                return '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">';
                break;
            case '2.3.2':
                return '<link type="text/css" rel="stylesheet" media="screen" href="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">';
                break;
            default:
                return '<link type="text/css" rel="stylesheet" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/css/bootstrap.min.css">';
                break;
        }

    }

    public static function bootstrapJavascript(string $version = '4.5.3'): string
    {
        switch($version)
        {
            case '4.5.3':
                return '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
                break;
            case '2.3.2':
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>';
                break;
            default:
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js"></script>';
                break;
        }

    }

    public static function delCssLink(): string
    {
        return Css::add();
    }

    public static function fontAwesomeCssLink(string $version = '4.3.0'): string
    {
        return Icon::fontAwesomeHeadCssLink($version);
    }

    public static function jQueryJavascript(string $version = '3.5.1'): string
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>';
    }

    public static function jQueryUiCssLink(string $version = '1.12.1'): string
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/smoothness/jquery-ui.css">';
    }

    public static function jQueryUIJavascript(string $version = '1.12.1'): string
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>';
    }

    public static function d3Javascript(string $version = '6.2.0'): string
    {
        return '<script src="https://ajax.googleapis.com/ajax/libs/d3js/'.$version.'/d3.min.js"></script>"></script>';
    }

    public static function dojoJavascript(string $version = '1.13.0'): string
    {
        return '<script src="https://ajax.googleapis.com/ajax/libs/dojo/'.$version.'/dojo/dojo.js"></script>';
    }
}
