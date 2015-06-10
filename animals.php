<?php
include 'functns.php';
Class animals extends Model {
	public $name;
	public $color;
	public $id;

	public function setName($name){
		$this->name = $name;
	}
    public function getName(){
		return $this->name;
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
        $aname=new animals;
		
		$aname->setName($_POST['name']);
		echo $aname->getName();
        echo '<br>';
		
		$aname->setColor($_POST['clr']);
		echo $aname->getColor();
		echo '<br>';
		 
		 $aname->setId($_POST['findinput']);

		$aname->save();
		}

		if (isset($_POST["find"])) 
        {
        	$aname=new animals;
        
          $aname->find($_POST["findinput"]);
        }

?>