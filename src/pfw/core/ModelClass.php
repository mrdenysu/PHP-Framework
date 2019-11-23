<?php

class ModelClass
{
  private $database;

  // DB start
  public function DB_init()
  {
    $database       = require_once 'core/database.php';
    $this->database = new PDO('mysql:host=' . $database['host'] . ';dbname=' . $database['database'] . '', $database['user'], $database['password']);
  }

  public function DB_query(string $sql, array $params = [])
  {
    $stmt = $this->database->prepare($sql);
    if (!empty($params)) {
      foreach ($params as $key => $val) {
        $stmt->bindValue(':' . $key, $val);
      }
    }
    $stmt->execute();
    return $stmt;
  }

  public function DB_row(string $sql, array $params = [])
  {
    $result = $this->DB_query($sql, $params);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function DB_column(string $sql, array $params = [])
  {
    $result = $this->DB_query($sql, $params);
    return $result->fetchColumn();
  }
  // DB end
}
