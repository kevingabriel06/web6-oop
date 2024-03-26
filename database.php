<?php
class database {
    public $que;
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'oopB';
    private $result = array();
    private $mysqli = '';

    public function __construct() {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function insert($table, $para = array()) {
        $table_columns = implode(',', array_keys($para));
        $table_values = "'" . implode("','", $para) . "'";
        $sql = "INSERT INTO $table ($table_columns) VALUES ($table_values)";
        $result = $this->mysqli->query($sql);
        if (!$result) {
            echo "Error: " . $this->mysqli->error;
        }
    }

    public function update($table, $para = array(), $id) {
        $args = array();
        foreach ($para as $key => $value) {
            $args[] = "$key = '$value'";
        }
        $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE $id";
        $result = $this->mysqli->query($sql);
        if (!$result) {
            echo "Error: " . $this->mysqli->error;
        }
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE $id";
        $result = $this->mysqli->query($sql);
        if (!$result) {
            echo "Error: " . $this->mysqli->error;
        }
    }

    public $sql;

    public function select($table, $rows = "*", $where = null) {
        if ($where != null) {
            $sql = "SELECT $rows FROM $table WHERE $where";
        } else {
            $sql = "SELECT $rows FROM $table";
        }
        $this->sql = $this->mysqli->query($sql);
        if (!$this->sql) {
            echo "Error: " . $this->mysqli->error;
        }
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
?>
