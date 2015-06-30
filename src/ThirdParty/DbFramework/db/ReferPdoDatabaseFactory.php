<?php
class ReferPdoDatabaseFactory implements ReferDatabaseFactory {
  public function createDatabase($params) {
    //$ncDnsResolver = new ncDnsResolver();
    //return new ncPdoDatabase($ncDnsResolver->resolveDNS($params['dsn']), $params['username'], $params['password'], array_key_exists('reconnect', $params) && $params['reconnect'] === true, array_key_exists('debug', $params) && $params['debug'] === true);
    return new ReferPdoDatabase($params['dsn'], $params['username'], $params['password'], array_key_exists('reconnect', $params) && $params['reconnect'] === true, array_key_exists('debug', $params) && $params['debug'] === true);
  }
}
?>
