<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $header_data = [
            'title' => 'Welcome on board'
        ];

        $footer_data = [
            'message' => 'Welcome on board'
        ];
        echo view('admin/sign/header', $header_data);
        echo view('admin/sign/login');
        echo view('admin/sign/footer', $footer_data);
    }

    public function product()
    {
        $product = new \App\Models\Products();
        $products = $product->findAll();
        $store = new \App\Models\Store();
        $stores = $store->findAll()[0];

        $header_data = [
            'title' => 'Welcome on board'
        ];

        $data = [
            'name' => $stores->store_name,
            'products' => $products,
        ];

        $footer_data = [
            'message' => 'Welcome on board'
        ];
        echo view('admin/header', $header_data);
        echo view('admin/products', $data);
        echo view('admin/footer', $footer_data);
    }

    public function newproduct()
    {
        $product = new \App\Models\Products();
        $data = $this->request->getVar();
        $upload = $this->request->getFile('product_image');
        $img_name = $upload->getName();
        $uploaded = $upload->store('assets/prods/', $img_name);
        if ($uploaded) {
            // var_dump($data);
            $id = $product->insert($data);
            $product->update($id, ['product_image' => base_url('ci/writable/uploads/assets/prods/'). '/' . $img_name]);
            $this->product();
        }
    }

    public function delproduct()
    {
        $product = new \App\Models\Products();
        $data = $this->request->getVar();
        $prod_id = $data['pid'];
        $result = $product->delete($prod_id);
        $this->product();
    }

    public function order()
    {
        $store = new \App\Models\Store();
        $stores = $store->findAll()[0];
        $order = new \App\Models\Order();
        $orders = $order->findAll();
        $header_data = [
            'title' => 'Welcome on board'
        ];
        $data = [
            'name' => $stores->store_name,
            'orders' => $orders
        ];
        $footer_data = [
            'message' => 'Welcome on board'
        ];
        echo view('admin/header', $header_data);
        echo view('admin/orders', $data);
        echo view('admin/footer', $footer_data);
    }

    public function pref()
    {
        $store = new \App\Models\Store();
        $stores = $store->findAll()[0];

        $header_data = [
            'store' => $stores,
            'title' => 'Welcome on board'

        ];
        $data = [
            'name' => $stores->store_name,
            'store' => $stores,
        ];
        $footer_data = [
            'message' => 'Welcome on board'
        ];
        echo view('admin/header', $header_data);
        echo view('admin/pref', $data);
        echo view('admin/footer', $footer_data);
    }

    public function prefBasicInfo()
    {
        $store = new \App\Models\Store();
        // $stores = $store->findAll()[0];

        $data = $this->request->getPost();
        $result = $store->update(1, $data);
        $this->pref();
    }

    public function prefBankInfo()
    {
        $store = new \App\Models\Store();
        // $stores = $store->findAll()[0];

        $data = $this->request->getPost();
        $result = $store->update(1, $data);
        $this->pref();
    }

    public function prefMbanner()
    {
        $store = new \App\Models\Store();

        $data = $this->request->getPost();
        $upload = $this->request->getFile('store_banner');
        if ($upload->getName() != '') {
            $img_name = $upload->getName();
            $uploaded = $upload->store('assets/banner/', $img_name);
            if ($uploaded) {
                $store->update(1, ['store_banner_desc' => $data['store_banner_desc'], 'store_banner' => base_url('ci/writable/uploads/assets/banner/') . '/' . $img_name,]);
                $this->pref();
            }
        } else {
            $store->update(1, ['store_banner_desc' => $data['store_banner_desc']]);
            $this->pref();
        }
        
    }

    public function prefDbanner()
    {
        $store = new \App\Models\Store();

        $data = $this->request->getPost();
        $upload = $this->request->getFile('store_desktop_banner');
        if ($upload->getName() != '') {
            $img_name = $upload->getName();
            $uploaded = $upload->store('assets/banner/', $img_name);
            if ($uploaded) {
                $store->update(1, ['store_desktop_banner_desc' => $data['store_desktop_banner_desc'], 'store_desktop_banner' => base_url('ci/writable/uploads/assets/banner/') . '/' . $img_name,]);
                $this->pref();
            }
        } else {
            $store->update(1, ['store_desktop_banner_desc' => $data['store_desktop_banner_desc']]);
            $this->pref();
        }
        
    }

    public function dash()
    {
        $product = new \App\Models\Products();
        $products = $product->findAll();
        $store = new \App\Models\Store();
        $stores = $store->findAll()[0];

        $header_data = [
            'title' => 'Welcome on board'
        ];

        $data = [
            'name' => $stores->store_name,
            'products' => $products,
        ];

        $footer_data = [
            'message' => 'Welcome on board'
        ];
        echo view('admin/header', $header_data);
        echo view('admin/home', $data);
        echo view('admin/footer', $footer_data);
    }

    public function tabledit()
    {
        $productModel = new \App\Models\Products();
        $input = filter_input_array(INPUT_POST);
        $data = [];


        if ($input['action'] === 'edit') {
            $id = $input['id'];
            $data = [];


            if (isset($input['SKU'])) {
                $SKU = $input['SKU'];
                $this->data = [
                    'product_code' => $SKU,
                ];
            } else if (isset($input['Product'])) {
                $product = $input['Product'];
                $this->data = [
                    'product_name' => $product,
                ];
            } else if (isset($input['Price'])) {
                $Price = $input['Price'];
                $this->data = [

                    'product_price' => $Price,
                ];
            } else if (isset($input['Image'])) {
                $Image = $input['Image'];
                $this->data = [

                    'product_image' => $Image,
                ];
            } else if (isset($input['Description'])) {
                $Description = $input['Description'];
                $this->data = [

                    'product_description' => $Description,
                ];
            }
            $products = $productModel->update($id, $this->data);
            if ($products) {
                return true;
            } else {
                return false;
            }

            // $mysqli->query("UPDATE users SET username='" . $input['username'] . "', email='" . $input['email'] . "', avatar='" . $input['avatar'] . "' WHERE id='" . $input['id'] . "'");
        }

        // } else if ($input['action'] === 'delete') {
        //     $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
        // } else if ($input['action'] === 'restore') {
        //     $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
        // };

        //     $product = new \App\Models\Products();
        //     $products = $product->findAll();
        //     $store = new \App\Models\Store();
        //     $stores = $store->findAll()[0];

        //     $header_data = [
        //         'title' => 'Welcome on board'
        //     ];

        //     $data = [
        //         'name' => $stores->store_name,
        //     ];

        //     $footer_data = [
        //         'message' => 'Welcome on board'
        //     ];
        //     echo view('admin/header', $header_data);
        //     echo view('admin/home', $data);
        //     echo view('admin/footer', $footer_data);
    }

    //--------------------------------------------------------------------

}
