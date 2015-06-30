<?php

class ncYaml {
  public static function load($filename) {

    $filename = realpath($filename);
    if(! file_exists($filename)) {
      return array();
    }

    $cacher = ncYamlFactory::getCacher();
    $cacheKey = self::getCacheKey($filename);
    $data = unserialize($cacher->get($cacheKey));

    if(self::shouldYamlBeParsed($filename, $data)) {
      $data = self::getData($filename);

      $cacher->set($cacheKey, serialize($data));
    }

    return $data['content'];
  }

  private static function getCacheKey($filename) {
    return 'nc'.md5($filename);
  }

  private static function shouldYamlBeParsed($filename, $data) {
    return (! isset($data['content']) || filemtime($filename) > $data['cache_time']);
  }

  private static function getData($filename) {
    return array('content' => sfYaml::load($filename), 'cache_time' => time());
  }
}
