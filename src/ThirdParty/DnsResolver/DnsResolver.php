<?php

class DnsResolver {
  public function resolveDNS($srvRecord) {
    $srvRecords = $this->getDnsRecord($srvRecord, 'SRV');

    if(count($srvRecords) > 0) {
      $host = $srvRecords[0]['target'];
      $port = $srvRecords[0]['port'];

      $hostIps = $this->getDnsRecord($host, 'A');
      if(count($hostIps) > 0) {
        return array('ip' => $hostIps[0]['ip'], 'port' => $port);
      }
      else {
        throw new DnsResolverException('Not able to find dns record for '. $host);
      }
    }
    else {
      throw new DnsResolverException('Not able to find SRV record for '. $srvRecord);
    }
  }


  private function getDnsRecord($domain, $recordType = DNS_ANY) {
    switch($recordType) {
    case 'SRV':
      $type = DNS_SRV;
      break;
    case 'A':
      $type = DNS_A;
      break;
    default:
      $type = DNS_ANY;
      break;
    }
    $records = dns_get_record($domain, $type);
    if(!$records || count($records) == 0){
       $records = dns_get_record($domain, $type);
    }
    return $records;
    //return dns_get_record($domain, $type);
  }
}
