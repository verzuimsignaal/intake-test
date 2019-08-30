<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function testCarCanGetNumberOfTasks(): void
    {
        // Create a stub for the SomeClass class.
        $stubbedDatabase = $this->createMock(Database::class);

        // Configure the stub.
        $stubbedDatabase->method('getAllRows')
            ->willReturn([1]);

        $car = new Car();

        $car->setDb($stubbedDatabase);
        $car->setCustomerId(1);
        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertSame(1, $car->getNumberOfTasksOfCar());
    }
}
