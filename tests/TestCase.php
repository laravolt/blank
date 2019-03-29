<?php

namespace Laravolt\Blank\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    protected function getPackageProviders($app)
    {
        return [
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }

    protected function setUpDatabase()
    {
        $this->loadLaravelMigrations();
        $this->loadMigrationsFrom(realpath(__DIR__.'/../database/migrations'));
    }
}
