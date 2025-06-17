<?php
namespace App\Admin\Widgets;

use App\Models\Category;
use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

/**
 * 
 */
class CategoriesWidget  extends AbstractWidget
{
	protected $config = [];

	public function run()
	{
		$count = Category::count();

		return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-receipt',
			'title' => 'Счетчик категорий',
			'text' => 'Кол-во категорий: ' . $count,
			'button' => [
				'text' => 'Перейти к списку',
				'link' => '',
			],
            'image' => '',
		]));
	}
	
	// function __construct(argument)
	// {
		
	// }

	public function shouldBeDisplayed()
	{
		return true;
	}
}
