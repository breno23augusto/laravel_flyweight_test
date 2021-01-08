<?php

namespace App\Services\Voucher;

use App\Models\Client;
use App\Models\Shopping;
use DateTimeImmutable;

class UpdateVoucherInfo
{

    public static function run(): void
    {
        $shoppings = Shopping::where('price', '>', 1000)->get();

        foreach ($shoppings as $shopping) {
            self::updateClientInfo($shopping);
        }

        self::showMemoryPeak();
    }

    public static function updateClientInfo(Shopping $shopping): void
    {
        $client = Client::find($shopping->client_id);
        $client->voucher_number_received += 1;
        $client->date_last_voucher = new DateTimeImmutable();
        $client->save();
    }

    public static function showMemoryPeak()
    {
        $memoryInBytes = memory_get_peak_usage();
        $memoryInMegaBytes = round($memoryInBytes / 1024, 2);
        $dateNow = date('d/m/Y H:i:s'); 
        $memoryLog = "[{$dateNow}] UpdateVoucherInfo - " . $memoryInMegaBytes . ' MB' . PHP_EOL;

        file_put_contents(storage_path('logs/myLog.log'), $memoryLog, FILE_APPEND);
    }
}
