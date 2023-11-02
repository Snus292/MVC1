<?php
require 'db_config.php';

class CModel_db {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function GetData() {
        $arrayResult = array();

        $query = "SELECT * FROM hoscon_data"; 

        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $arrayResult[] = array(
                    "TITLE" => $row["title"],
                    "DATE" => $row["date"],
                    "AUTHOR" => $row["author"],
                    "IMAGE" => $row["image"],
                    "TEXT" => $row["text"]
                );
            }
        }

        return $arrayResult;
    }
}
