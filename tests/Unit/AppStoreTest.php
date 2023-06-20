<?php

namespace Tests\Unit;

use App\Services\AppStoreService;
use PHPUnit\Framework\TestCase;

class AppStoreTest extends TestCase
{
    public function test_example(): void
    {
        $this->assertTrue(is_string(AppStoreService::API_PATH));
    }
}
