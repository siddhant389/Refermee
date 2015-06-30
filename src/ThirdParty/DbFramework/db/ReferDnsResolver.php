<?php
class ReferDnsResolver
{
  public function resolveDNS($dsn, $pdoDb = true)
  {
    $pattern = "/\{([^\}]*)\}/";
    preg_match_all($pattern, $dsn, $matches);
   // print_r($matches);
    
    if(count($matches) > 0)
    {
      foreach($matches[1] as $match)
      {
     
        $resolvedAddr = $this->getIpAddress($match, $pdoDb);
        $dsn = preg_replace("/\{".$match."\}/", $resolvedAddr, $dsn);
      } 
    }
    return $dsn;
  }

  private function getIpAddress($match, $pdoDb = true)
  {
      
    $srvRecords = $this->getDnsRecord("_db._tcp.".$match.".", "SRV");
    print_r($srvRecords);
    if(count($srvRecords) > 0)
    {
      $host = trim($srvRecords[0]["host"]);
      $port = trim($srvRecords[0]["port"]);

      if($port && $host){  
        $hostIps = $this->getDnsRecord($host, "A");
      } else if($port && !$host) {
          $hostIps = $this->getDnsRecord($match, "A");
      } else {
        throw new ReferDatabaseException("Not able to find dns record for 1: ". $match);
      }
      
      if(count($hostIps) > 0)
      {
        if($port)
        {
          if($pdoDb)
            return $hostIps[0]["ip"].";port=".$port;
          else
            return $hostIps[0]["ip"].":".$port;
        }
        else
          return $hostIps[0]["ip"];
      }
      else
        throw new ReferDatabaseException("Not able to find dns record for 2: ". $match);
    
      return "";
    }
    else
      throw new ReferDatabaseException("Not able to find dns record for 3: ". $match); 
    
    return "";

  }

  private function getDnsRecord($domain, $recordType)
  {
     print_r($domain);
      echo "hi         ";
    switch($recordType)
    {
      case "SRV":
        $type = DNS_SRV;
        break;
      case "A":
        $type = DNS_A;
        break;
      default:
        $type = DNS_ANY;        $type = DNS_ANY;

        break;
    }
 
   $records = dns_get_record("google.com", DNS_A);
   print_r($records); 
    if(!$records || count($records) == 0){
        $records = dns_get_record($domain, $type);
    }
    return $records;
  }
}
