<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $product = new \App\Models\Products();
        $products = $product->findAll();
        $store = new \App\Models\Store();
        $stores = $store->findAll();

        // var_dump($products);
        // var_dump($stores[0]);

        $data = [
            'products' => $products,
            'banner' => $stores[0]->store_banner,
            'banner_d' => $stores[0]->store_banner_desc,
        ];
        $data1 = [
            'heading' => $stores[0]->store_name,
        ];

        echo view('header', $data1);
        echo view('home', $data);
        echo view('footer');
    }

    //--------------------------------------------------------------------

}
