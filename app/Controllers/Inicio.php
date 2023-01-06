<?php namespace App\Controllers;

use App\Models\ProductosModel;
use App\Models\VentasModel;
class Inicio extends BaseController
{
    protected $productoModel,$ventasModel;

    public function __construct(){
        $this->productoModel = new ProductosModel();
        $this->ventasModel = new VentasModel();
    }
    public function index()
    {
        $total = $this->productoModel->totalProductos();
        $minimos = $this->productoModel->productosMinimo();
        $hoy = date('Y-m-d');
        $totalVentas = $this->ventasModel->totalDia($hoy); //2022-12-12
        $datos = ['total'=> $total,'totalVentas' => $totalVentas,'minimos'=>$minimos];

        echo view('header');
        echo view('inicio',$datos);
        echo view('footer');
    }
}
