<?php

class haris{

public $hostname="localhost";
public $root="root";
public $pswd="";
public $dbn="haris";
public $con="";

public function MakeConnection()
{

$this->con=mysqli_connect($this->hostname,$this->root,$this->pswd,$this->dbn);

return $this->con;
}


public function insert($name,$age)

{

$con =$this->MakeConnection();

$query="insert into hraj(name,age) values('$name',$age)";

$res=mysqli_query($con,$query);

return $res;
}



public function show()
{

$con=$this->MakeConnection();


$query="select * from hraj";

$res=mysqli_query($con,$query);

return $res;

}


 public function iddelete($id)
{

$con=$this->MakeConnection();

$query="delete from hraj where id=$id";

$res=mysqli_query($con,$query);

return $res;

}

public function update($id,$name,$age)
{

$con=$this->MakeConnection();

$query="update hraj set name='$name', age=$age where id=$id";

$res=mysqli_query($con,$query);

return $res;

}



public function viewspecificid($id)
{

$con=$this->MakeConnection();

$query="select * from hraj where id=$id";

$res=mysqli_query($con,$query);

return $res;

}



}

?>