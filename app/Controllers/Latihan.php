<?php 

namespace App\Controllers;

use App\Models\Calculator;

class Latihan extends BaseController
{
  public function latihan1(): void 
  {
        echo"<h1>Perkenalkan Saya</h1>";
        echo"Nama saya Noval Mahardhika Saya tinggal di daerah Tangerang
        olahraga yang saya sukai Futsal dan Bulutangkis
        ";
  }

  public function latihan2(){

    $model = new Calculator();

    $params1 = $this->request->uri->getSegment(3);
    $params2 = $this->request->uri->getSegment(4);


    $result = $model->sum($params1, $params2);
    $result = $params1 + $params2;

    echo "Hasil Penjumlahan dari $params1 + $params2 = $result";
  }

   public function latihan3(){

    $model = new Calculator();

    $params1 = $this->request->uri->getSegment(3);
    $params2 = $this->request->uri->getSegment(4);
    $result = $model->sum($params1, $params2);

    $data['value1'] = $params1;
    $data['value2'] = $params2;
    $data['result'] = $result;

    

    return view('view-latihan', $data);
  }
}