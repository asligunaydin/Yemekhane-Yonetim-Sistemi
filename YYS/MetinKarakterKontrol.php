<?php


function Replace_EN($text): array|string
{
    $text = trim($text);
    $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','Y','Z');
    $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','y','z');
    return str_replace($search,$replace,$text);
}


function Replace_TR($text): array|string
{
    $text = trim($text);
    $search = array('C','c','G','g','i','I','O','o','S','s','U','u',' ');
    $replace = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
    return str_replace($search,$replace,$text);
}


function KarakterTip($metin): bool
{
    $pattern ="/^[-a-zA-Z_\x {ÖÇŞİĞÜöçşğüı}\s]*$/u";
    $metin =   htmlspecialchars(stripslashes(trim("$metin")));

    if (preg_match($pattern, $metin)) {
        return true;
    } else {
        return false;
    }
}
