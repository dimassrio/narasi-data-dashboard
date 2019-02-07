<?php

use Illuminate\Database\Seeder;
use App\Statistic;
class StatisticSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statistic = new Statistic;
		$statistic->name = "Mata Najwa";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1PuBitvlwve5zc3JL7KDtiF2nbCyk28Cd/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Catatan Najwa";
		$statistic->url = "https://datastudio.google.com/embed/reporting/128nSEia99nnzJyFM2k6zTzWyGIhH87PN/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Shihab & Shihab";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1gcYauvgcg3gO5nkOjb9FYlgJ9Zb79T-Z/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Kejar Tayang";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1MzB21NNqYrj2fNzzJ4-rD9auDF_1zFNs/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Mata Mata";
		$statistic->url = "https://datastudio.google.com/embed/reporting/19YmwBN0t-THgBBdhVJlncjqRklrBWmMe/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Buka Mata";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1qneTr_f7SZ3TC8GrjVDh_1zbubF5sAyf/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Narasi People";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1EeSO0d8SI_JoOB-ilErTXM-6h3rdxfKL/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Buka Data";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1fm_sbvpqcNE8_fuHpHoHF_aSP4Iae8Rl/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Tompi & Glenn";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1nziBPKPr4r000TuXikgOU-DOGZE2wMZX/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Duo Budjang";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1NbVKx3hypeRPv1UNsqYw2EcQMF5vVPvD/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Teppy O Meter";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1t6_9czgSqQ7B49PnOckp2IxUagPSDlgN/page/HgPf";
		$statistic->save();
		$statistic = new Statistic;
		$statistic->name = "Buka Buku";
		$statistic->url = "https://datastudio.google.com/embed/reporting/1pDeMU1wNs_VtVJsW37xK5X16yyAy908r/page/HgPf";
		$statistic->save();
    }
}
