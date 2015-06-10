<?php
Class Model{
public function connection(){

	$conn=mysqli_connect("localhost","root","password","task");
	return $conn;
}
public function save(){
	$result=$this->connection();
	$tablname = get_class($this);

	$id=$this->id;
	if($id==null)
	{
	$column_name = "";
	$column_value = "";
	foreach ($this as $key => $value) {
		$column_name .= $key.',';
		$column_value .= '"'.$value.'",';
	}
	$column_name= chop($column_name,",");
	$column_value= chop($column_value,",");
	// var_dump($column_name);
	// var_dump($column_value);

	$p = 'insert into '.$tablname.' ('.$column_name.') values ('.$column_value.')';
	//echo $p;
	mysqli_query($result,$p);
	echo "Insertion Successfull";
    }
    else
    {
       $newval = "";
       foreach ($this as $key => $value) {
       $newval.= $key. '="'.$value.'",';
   }
   $newval=trim($newval,",");
       $q= 'update '.$tablname.' set ' .$newval.' where id='.$id; 
       
       mysqli_query($result,$q);
       echo "Updation Successfull";
    }
	

}


public function find($id){

$result=$this->connection();
$tablname = get_class($this);
$q = 'select * from '.$tablname.' where id =' .$id;
$rslt=mysqli_query($result,$q);

	while ($rows=$rslt->fetch_assoc())
	{
 	   foreach ($rows as $key => $value) 
 	   {
 		echo $key ." :". $value;
 		echo "<br/>";
       }
    }
}
}
?>