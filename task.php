<?php
include 'functns.php';
Class persons extends Model {
	public $name;
	public $age;
	public $address;

	public function setName($nme){
		$this->name = $nme;
	}
    public function getName(){
		return $this->name;
	}
	public function setAge($ag){
		$this->age = $ag;
	}
    public function getAge(){
		return $this->age;
	}
	public function setAddress($addrs){
		$this->address = $addrs;
	}
    public function getAddress(){
		return $this->address;
	}

}
       if (isset($_POST["save"])) 
        {
        $pname=new persons;
		
		$pname->setName($_POST['name']);
		echo $pname->getName();
        echo '<br>';
		
		$pname->setAge($_POST['age']);
		echo $pname->getAge();
		echo '<br>';
		

		$pname->setAddress($_POST['adrs']);
		echo $pname->getAddress();
		$pname->save();
	   }
		

		if (isset($_POST["find"])) 
        {
        	$pname=new persons;
        
          $pname->find($_POST["findinput"]);
        }


 
	

?>