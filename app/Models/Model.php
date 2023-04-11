<?php

namespace App\Models;

use PDO;

class Model
{
    public function query(string $sql): ?array
    {
        $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=pdo-zezinho', 'root', 'root');
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}