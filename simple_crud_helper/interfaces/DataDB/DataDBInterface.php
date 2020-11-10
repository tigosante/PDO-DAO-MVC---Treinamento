<?php

namespace core\classes\interfaces\DataDB;

use core\classes\interfaces\{
  Helpers\SetDataHelper,
  DataObject\DataObjectInterface,
  QuerySql\QuerySqlStringInterface,
  Repository\RepositoryDataDBInterface,
  TableObject\TableObjectInfoInterface
};

interface DataDBInterface extends SetDataHelper
{
  /**
   * @return self
   */
  public static function config(DataObjectInterface &$dataObject, QuerySqlStringInterface &$querySqlString, TableObjectInfoInterface &$tableObjectInfo, RepositoryDataDBInterface &$repositoryDataDB);

  /**
   * Apaga um registr dentro de uma determinada tabela no DB.
   *
   * @param int $tableIdentifier = null : deve conter um número identificador de um registro no Db.
   *
   * @return bool
   */
  public function delete(int $tableIdentifier = null);

  /**
   * Atualiza um registr dentro de uma determinada tabela no DB.
   *
   * @param array $tableColumns = null : deve conter um array com os nomes das colunas desejadas.
   *
   * @return bool
   */
  public function update(array $tableColumns = null);

  /**
   * @return self
   */
  public function where(string $conditions);
}