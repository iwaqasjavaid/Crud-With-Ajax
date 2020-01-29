<?php

include('dal.php');

$obj=new haris();


if(isset($_POST['ck']))
{

// print_r($_POST)."<br>";

// $chk=$_POST['ck'];


// echo "Checking is".$chk."<br>";

// echo "name is".$name."<br>";

// echo "Age is".$age;         

// echo "chek is".$_POST['chk'];
$name=$_POST['nm'];
$age=$_POST['ag'];
$res=$obj->insert($name,$age);
if ($res>0) 
{
	echo "Data Inserted successfully";
}else{

echo "Error";
}

}

if (isset($_POST['ick'])) 
{
	
$idte=$_POST['id'];

// print_r($_POST);

// echo "<br>"."id is".$idte;

// echo "<br>"."ichecking is".$_POST['ick'];

$res=$obj->iddelete($idte);

if($res>0) {
	
echo "Delete succesfullyyyyy";
}else{

	echo "rrroorr deleting";
}


}


if (isset($_POST['r']))
{
$data="";

$res=$obj->show();
while($row = mysqli_fetch_assoc($res))
{
				$data .= '<tr>  
				
				<td>'.$row['id'].'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['age'].'</td>
				<td>
				<button onclick="update('.$row['id'].')">EDIT</button>
				</td>
				 <td>
				 <button onclick="del('.$row['id'].')" >Delete</button>
				</td>
    		</tr>';

}

echo $data;

}


// <button class="del'.$row['id'].'">Delete</button>


//<button  onclick="del('.$row['id'].')">Delete</button>

//<button  onclick="window.location.href=\'controler.php?id=".$row['id']."\'>Delete</button>

if(isset($_POST['cid']))
{
    $id=$_POST['mid'];

 $res=$obj->viewspecificid($id);
 $row = mysqli_fetch_assoc($res);
 $id = $row['id']; 
 $name = $row['name']; 
 $age = $row['age'];

 $arr[] = array('id' => $id ,'name' => $name ,'age' => $age ); 
  echo json_encode($arr);

}




if(isset($_POST['upd'])) {
	
$id=$_POST['id'];
$name=$_POST['na'];
$age=$_POST['ag'];

$res= $obj->update($id,$name,$age);

echo $res;

}





?>