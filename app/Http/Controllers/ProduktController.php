<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProduktController extends Controller
{
    private $categories;
    
    public function __construct()
    {
	$this->categories = [
		1 => [
			'name' => 'Категория 1',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '300',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '400',
					'inStock' => true,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '500',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
		2 => [
			'name' => 'Категория 2',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '700',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '800',
					'inStock' => false,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '900',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
	];
}
    public function showProduct($id) {
        return view('produkt',['produkt'=> [ ($this->categories[$id])]]);
    }
}


?>
