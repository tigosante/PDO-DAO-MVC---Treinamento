<?php

namespace src\interfaces\DataDB;

use src\interfaces\Helpers\{
  QueryDataHelper
};

interface CreateDataDBInterface extends QueryDataHelper
{
  /**
   * @return bool
   */
  public function create(array $tableColumns = null): bool;
}
