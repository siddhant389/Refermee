<?php
class ReferMySqlDatabaseFactory implements ReferDatabaseFactory {
  public function createDatabase($params) {
    //$ncDnsResolver = new ncDnsResolver();
    //$host = $ncDnsResolver->resolveDNS($params['host'], false);
    //$host = trim($host, ";");
    if(array_key_exists('persistent', $params)) {
      return new ReferMySqlDatabase($params['database'], $params['host'], $params['username'], $params['password'], $params['persistent']);
    } else {
      return new ReferMySqlDatabase($params['database'], $params['host'], $params['username'], $params['password']);
    }
  }
}
?>
