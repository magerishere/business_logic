<?php

namespace Tests\Unit;

use App\Services\PlayStoreService;
use PHPUnit\Framework\TestCase;

class PlayStoreTest extends TestCase
{
    public function test_play_store_service_must_have_api_path_const(): void
    {
        $this->assertTrue(is_string(PlayStoreService::API_PATH));
    }
}
