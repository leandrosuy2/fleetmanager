<?php

use App\Model\ExpCats;
use App\Model\IncCats;
use Illuminate\Database\Seeder;

class SampleCategories extends Seeder {

	public function run() {
		$this->import_income_categories();
		$this->import_expense_categories();

	}

	private function import_expense_categories() {
		DB::table('expense_cat')->truncate();
		$data = array(
			array(
				'name' => 'Seguro',
				'user_id' => '1',
				'type' => 'd',
			),

			array(
				'name' => 'Patente',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Mecanica',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Lavagem',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Vignette',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Manutencao',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Estacionamento',
				'user_id' => '1',
				'type' => 'd',
			),
			array(
				'name' => 'Combustivel',
				'user_id' => '1',
				'type' => 'd',

			),
			array(
				'name' => 'Servicos do veiculo',
				'user_id' => '1',
				'type' => 'd',
			),

		);
		foreach ($data as $rec) {
			ExpCats::create($rec);
		}

	}
	private function import_income_categories() {
		DB::table('income_cat')->truncate();
		$data = array(
			array(
				'name' => 'Reserva',
				'user_id' => '1',
				'type' => 'd',
			),
		);
		foreach ($data as $rec) {
			IncCats::create($rec);
		}

	}
}
