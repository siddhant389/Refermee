<?php
class ReferAliasDatabaseFactory implements ReferDatabaseFactory {
  public function createDatabase($params) {
    return new ReferAliasDatabase($params['target']);
  }
}
?>
