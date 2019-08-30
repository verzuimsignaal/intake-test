<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function testCarCanGetNumberOfTasks(): void
    {
        $stubbedDatabase = $this->createMock(Database::class);
        $stubbedDatabase->method('getAllRows')
            ->willReturn([1]);

        $car = new Car();

        $car->setDb($stubbedDatabase);
        $car->setCustomerId(1);

        $this->assertSame(1, $car->getNumberOfTasksOfCar());
    }
}
