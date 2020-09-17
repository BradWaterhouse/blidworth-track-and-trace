<?php

declare(strict_types=1);

namespace App\Repository;

use Doctrine\DBAL\Driver\Connection;

class Trace
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function insert(string $name, string $contactNumber): void
    {
        $statement = $this->connection->prepare('INSERT INTO visitors (name, contact_number) VALUES (:name, :number)');

        $statement->execute([
            'name' => $name,
            'number' => $contactNumber
        ]);
    }
}
