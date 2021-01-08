<?php

namespace App\Services\Voucher;

use App\Models\Client;
use App\Models\Shopping;
use DateTimeImmutable;

class UpdateVoucherInfoTwo
{

    public static function run(): void
    {
        $shoppings = Shopping::select('client_id')->where('price', '>', 1000)->get();
        $dateNow = new DateTimeImmutable();

        foreach ($shoppings as $shopping) {
            
            if (!isset($clientFactory[$shopping->client_id])) {
                $clientFactory[$shopping->client_id] = Client::find($shopping->client_id);
            }

            self::updateClientInfo($dateNow, $clientFactory[$shopping->client_id]);
        }

        self::showMemoryPeak();
    }

    public static function updateClientInfo(DateTimeImmutable $dateNow, Client $client): void
    {
        $client->voucher_number_received += 1;
        $client->date_last_voucher = $dateNow;
        $client->save();
    }

    public static function showMemoryPeak()
    {
        $memoryInBytes = memory_get_peak_usage();
        $memoryInMegaBytes = round($memoryInBytes / 1024, 2);
        $dateNow = date('d/m/Y H:i:s');
        $memoryLog = "[{$dateNow}] UpdateVoucherInfoTwo - " . $memoryInMegaBytes . ' MB' . PHP_EOL;

        file_put_contents(storage_path('logs/myLog2.log'), $memoryLog, FILE_APPEND);
    }
}
