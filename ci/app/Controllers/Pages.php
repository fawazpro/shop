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
            'banner_desktop' => $stores[0]->store_desktop_banner,
            'color' => $stores[0]->store_color,
            'banner_d' => $stores[0]->store_banner_desc,
            'banner_desktop_d' => $stores[0]->store_desktop_banner_desc,
        ];
        $data1 = [
            'heading' => $stores[0]->store_name,
            'heading_full' => $stores[0]->store_name,
            'color' => $stores[0]->store_color,
            'logo' => $stores[0]->store_logo,
            'brand' => $stores[0]->store_name,
            'phone' => $stores[0]->store_phone,
        ];

        echo view('header', $data1);
        echo view('home', $data);
        echo view('footer');
    }

    public function admin()
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
            'banner_desktop' => $stores[0]->store_desktop_banner,
            'color' => $stores[0]->store_color,
            'banner_d' => $stores[0]->store_banner_desc,
            'banner_desktop_d' => $stores[0]->store_desktop_banner_desc,
        ];
        $data1 = [
            'heading' => $stores[0]->store_name,
            'heading_full' => $stores[0]->store_name,
            'color' => $stores[0]->store_color,
            'logo' => $stores[0]->store_logo,
            'brand' => $stores[0]->store_name,
            'phone' => $stores[0]->store_phone,
        ];

        echo view('header', $data1);
        echo view('home', $data);
        echo view('footer');
    }

    //--------------------------------------------------------------------

}
