<?php
    namespace App\Helpers;

    use Illuminate\Support\Facades\File;
    class Helpers
    {
        public static function seflink($text = null)
        {
            $find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/");
            $replace = array("G","U","S","I","O","C","g","u","s","i","o","c");
            $text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/"," ",$text);
            $text = preg_replace($find,$replace,$text);
            $text = preg_replace("/ +/"," ",$text);
            $text = preg_replace("/ /","_",$text);
            $text = preg_replace("/\s/","",$text);
            $text = strtolower($text);
            $text = preg_replace("/^-/","",$text);
            $text = preg_replace("/-$/","",$text);
            return $text;
        }

        public static function fileDelete($old_image_path)
        {
            if (File::exists($old_image_path)) {
                File::delete($old_image_path);
            }
        }

        public static function youtubeThumbnail($link)
        {
            $video_id = explode("?v=", $link);
            $video_id = $video_id[1];
            return "http://img.youtube.com/vi/".$video_id."/sddefault.jpg";
        }
    }
