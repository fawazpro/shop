<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mall extends CI_Controller
{

    public function index()
    {
        $data = ['products' =>
        $this->directus->items('product')];

        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function account()
    {
        $this->load->view('header');
        $this->load->view('account');
        $this->load->view('footer');
    }

    public function signup()
    {
        // $data = [
        //     'customer_first_name' => 'Fawaz',
        //     'customer_last_name' => 'Ibraheem',
        //     'customer_email' => 'fawazpro27@gmail.com',
        //     'customer_password' => 'aais',
        //     'customer_phone' => '08108097322',
        //     'customer_address' => '21, Ajegunle Sagamu',
        //     'customer_landmark' => 'Allahu Akbar Int School'
        // ];

        // var_dump($this->directus->postItem('customers', $data));

        // $data = [
        //     'customer_email' => 'sunkanmi@gmail.com'
        // ];

        // var_dump($this->directus->updItem('customers',1,$data));

        var_dump($this->directus->delItem('customers', 1));
    }

    public function summary()
    {
        $this->load->view('header');
        $this->load->view('summary');
        $this->load->view('footer');
    }

    public function paymentmethod()
    {
        $price = $this->input->post('price');

        $data = [
            'price' => $price
        ];
        $this->load->view('header');
        $this->load->view('paymentmethod', $data);
        $this->load->view('footer');
    }

    public function paymethod()
    {
        $paymethod = $this->input->post('paymethod');

        $data = [
            'paymethod' => $paymethod,
            'price' => $this->input->post('price'),
            'acc' => '2048634157'
        ];

        if($paymethod == 'bankTransfer'){
            $this->load->view('header');
            $this->load->view('banktransfer', $data);
            $this->load->view('footer');
        }elseif($paymethod == 'card'){
            $this->load->view('header');
            $this->load->view('creditcard', $data);
            $this->load->view('footer');
        } elseif ($paymethod == 'POD') {
            $this->load->view('header');
            $this->load->view('pod', $data);
            $this->load->view('footer');
        }
        
    }

    public function store($store)
    {
        $store = urldecode($store);
        $stores = $this->directus->items('store', ['filter' => ['store_name', 'eq', $store]])[0];

        if (!isset($stores)) {
            $this->load->view('errors/html/error_404', ['heading' => 'Not in Existense', 'message' => '<p> The store you are hoping to find does not exist</p>']);
        } else {
            $data = ['products' =>
                $this->directus->items('product', ['filter' => ['product_store', 'eq', $store]]),
                'banner' => $stores->store_banner,
                'banner_d' => $stores->store_banner_desc,
            ];
            $data1 = [
                'heading' => $stores->store_name,
            ];

            $this->load->view('store/header', $data1);
            $this->load->view('store/home', $data);
            $this->load->view('store/footer');
        }
    }

    public function category($cat)
    {
        $cat = urldecode($cat);
        $cats = $this->directus->items('category', ['filter' => ['category_code', 'eq', $cat]])[0];

        if (!isset($cats)) {
            $this->load->view('errors/html/error_404', ['heading' => 'Not in Existense', 'message' => '<p> The store you are hoping to find does not exist</p>']);
        } else {
            $data = [
                'products' => $this->directus->items('product', ['filter' => ['product_type', 'eq', $cat]]),

                'tops' => $this->directus->items('product', ['sort' => ['-product_sales','3', 'product_type', 'eq', $cat]]), 
            ];

            $data1 = [
                'heading' => $cats->category_code,
            ];

            $this->load->view('store/header',$data1);
            $this->load->view('store/category', $data);
            $this->load->view('store/footer');
        }
    }
}

// , ['sort' => ['product_sales'], 'limit' => [3],
//                 'filters' => [
//                     ['field' => 'product_type',
//                     'operation' => 'eq',
//                     'value' => '$cat'],
//                 ]]