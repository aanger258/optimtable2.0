<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertPdfDataInDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pdf:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from pdf and insert in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile('/Applications/MAMP/htdocs/OptimTable/2.0/optimtable2.0/storage/CTI_PI.pdf');
         
        // Retrieve all pages from the pdf file.
        $pages  = $pdf->getPages();
        $info = array();
        // Loop over each page to extract text.
        $cnt = 1;
        foreach ($pages as $page) {
            $info['year_' . $cnt] = $page->getText();
            $info['year_' . $cnt] = explode("UNIVERSITATEA POLITEHNICA DIN BUCUREŞTIFACULTATEA DE INGINERIE IN LIMBI STRAINEDEPARTAMENTUL DE INGINERIE IN LIMBI STRAINE",$info['year_' . $cnt]);
            $cnt++;
        }
        var_dump($info);
    }
}
