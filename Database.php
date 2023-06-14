<?php

class Database
{
  private $conn;

  public function initialize()
  {
    if ($this->conn) {
      return; // Connection already established
    }

    $dsn = 'mysql:host=localhost;dbname=Nadsoft';
    $username = 'root';
    $password = '';

    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    try {
      $this->conn = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
      throw new Exception('Database Connection Error: ' . $e->getMessage());
    }
  }

  public function categoryTree($nameid)
  {
    $sql = "SELECT * FROM Members WHERE ParentId = :nameid";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':nameid', $nameid, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      echo '<ul>';
      while ($row = $stmt->fetch()) {
        echo '<li>' . $row['Name'];
        $this->categoryTree($row['id']);
        echo '</li>';
      }
      echo '</ul>';
    }
  }

  public function insertMember($name, $selname)
  {
    $sql = "INSERT INTO Members (CreatedDate, Name, ParentId) VALUES (CURRENT_TIMESTAMP, :name, :selname)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':selname', $selname, PDO::PARAM_INT);
    return $stmt->execute();
  }

  public function names()
  {
    $sql = "SELECT * FROM Members";
    $stmt = $this->conn->query($sql);
    
    if ($stmt) {
      while ($row = $stmt->fetch()) {
        echo "<option value=". $row['id'] .">" . $row['Name'] . "</option>";
      }
    }
  }
}
