<?php
class ReferPdoDatabase extends ReferDatabase
{
	private $dsn;
	private $username;
	private $password;
	private $debug;
	private $reconnect;

  public function __construct($dsn, $username, $password, $reconnect = false, $debug=false)
  {
    $ncDnsResolver = new ReferDnsResolver();
		$this->dsn = $ncDnsResolver->resolveDNS($dsn);
		$this->username = $username;
		$this->password = $password;
		$this->debug = $debug;
		$this->reconnect = $reconnect;
	}

  protected function connect()
  {
    try
    {
			$this->connection = new PDO($this->dsn, $this->username, $this->password);
      if($this->reconnect)
      {
				$this->connection = new ReferPdoPersistent($this->connection, $this->dsn, $this->username, $this->password);
			}
      if($this->debug)
      {
				$this->connection = new ReferPdoDebug($this->connection);
			}
    }
    catch(PDOException $e)
    {
			throw new ReferDatabaseException($e->getMessage() . '[dsn: ' . $this->dsn . ']');
		}

	  $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

  public function shutdown()
  {
		$this->connection = null;
  }
}
