<?php
require_once __DIR__ . '/../autoload.php';


class Pagination
{
    private $size;
    private $limit = 10;
    private $offset;

    public function getSize()
    {
        return $this->size;
    }

    public function getQueryPart()
    {
        return "LIMIT $this->limit OFFSET $this->offset";
    }

    public function __construct($table)
    {
        $pageNumber = $_GET["numerStrony"];
        $this->offset = $pageNumber * $this->limit;

        global $dbh;
        $stmt = $dbh->prepare("SELECT COUNT(*) FROM $table");
        $stmt->execute();
        $this->size = $stmt->fetch()[0];
    }
}