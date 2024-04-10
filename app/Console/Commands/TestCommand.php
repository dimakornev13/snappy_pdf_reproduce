<?php

namespace App\Console\Commands;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Console\Command;
use Illuminate\Support\Benchmark;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $result = Benchmark::measure(function () {
            $pdf = Pdf::loadView('test');

            $pdf->save('barry.pdf');
        });

        dump($result);

        $result = Benchmark::measure(function () {
            $pdf = app('snappy.pdf.wrapper')->loadView('test');

            $pdf->save('snappy.pdf', true);
        });

        dump($result);
    }
}
