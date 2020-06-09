<?php namespace App\Controllers;
use CodeIgniter\Controller;
//use App\Models\Product_model;
 
class Product extends Controller
{
    public function index()
    {
        /*$model = new Product_model();        
        $data['product'] = $model->getProduct();*/
        $s_query ="select * from product";
        $db = \Config\Database::connect();
        $dt = $db->query($s_query);

        $data['product'] = $dt;
        echo view('product_view',$data);
    }
    
}