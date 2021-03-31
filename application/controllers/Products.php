<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        $this->load->model('user');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();

        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);

            $this->load->view('products/nav1');
            $this->load->view('products/index', $data);
            $this->load->view('includes/footer');
        }
        else{
        // Load the product list view
            $this->load->view('home/nav2');
            $this->load->view('products/index', $data);
            $this->load->view('includes/footer');
        }
        
    }

    function about(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();

        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);

            $this->load->view('products/nav1');
            $this->load->view('products/about', $data);
            $this->load->view('includes/footer');
        }
        else{
        // Load the product list view
            $this->load->view('home/nav2');
            $this->load->view('products/about', $data);
            $this->load->view('includes/footer');
        }
    }

    function contact(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();

        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);

            $this->load->view('products/nav1');
            $this->load->view('products/contact', $data);
            $this->load->view('includes/footer');
        }
        else{
        // Load the product list view
            $this->load->view('home/nav2');
            $this->load->view('products/contact', $data);
            $this->load->view('includes/footer');
        }
    }
    
    function addToCart($proID){
        if($this->isUserLoggedIn){
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['name'],
            'image' => $product['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
        }
        else{
            redirect('users/login');
        }
    }

    
    
}