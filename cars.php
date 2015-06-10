<?php
include 'functns.php';
Class cars extends Model {
	public $brand_name;
	public $color;
	public $id;
	

	public function setBrand_name($brand){
		$this->brand_name = $brand;
	}
    public function getBrand_name(){
		return $this->brand_name;
	}
	public function setColor($color){
		$this->color = $color;
	}
    public function getColor(){
		return $this->color;
	}
	public function setId($id){
		$this->id = $id;
	}
    public function getId(){
		return $this->id;
	}

}

       if (isset($_POST["save"])) 
        {
        $cname=new cars;
		
		$cname->setBrand_name($_POST['name']);
		echo $cname->getBrand_name();
        echo '<br>';
		
		$cname->setColor($_POST['clr']);
		echo $cname->getColor();
		echo '<br>';

		$cname->setId($_POST['findinput1']);
		
		$cname->save();
		}

		if (isset($_POST["find"])) 
        {
        	$cname=new cars;
        
          $cname->find($_POST["findinput1"]);
        }

?>