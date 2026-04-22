<?php
namespace app\widgets;

use yii\base\Widget;
use app\models\Product;

class ProductsWidget extends Widget
{
    public $limit = 6;
    
    public function run()
    {
        $products = Product::find()
            ->with('category')
            ->limit($this->limit)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
        
        return $this->render('products-widget', [
            'products' => $products,
        ]);
    }
}