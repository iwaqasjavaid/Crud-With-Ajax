<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  readrecord();

  $('#btn').on('click',function(event){
   event.preventDefault();

  var check="check";
  var name=$('#name').val();
  var age=$('#age').val();

   $.ajax({
    url: "controler.php",
    method: "post",
    data: {nm:name,ag:age,ck:check},
    dataType:"text",
    
     success: function(msg){
      // $('#message').html(msg);
       $('#name').val('');
        $('#age').val('');
      readrecord(); 
      //alert(msg);    
         }
        });
   });


function readrecord()
 {
  // alert("1");
   var read="read";
  $.ajax({

    url:"controler.php",
    type:"post",
    data:{r:read},
    success:function(data)
    {

   // alert(data);
  //$('#show').html(data);

      if(data=="")
      {
        $("#tablebody").html("<tr>No Record Found</tr>"); 
      }else{
        
        $("#tablebody").html(data); 

      }

  }

  });

 }



$("#update").on('click',function(event) {
  event.preventDefault();
  
  var cmpud="check and do update";
  var id=$('#id').val();
  var name=$('#name').val();
  var age=$('#age').val();

   $.ajax({

   url:"controler.php",
   type:"post", 
   data:{ upd:cmpud, id:id, na:name,  ag:age },

  success:function(data) {
   
   readrecord();
   $('#name').val("");
   $('#age').val("");
  
$('#update').hide();

$('#btn').show();
 
}

});




});




});


/////jquery functions here //////
/// mess starts here//////////


function del(id)
{
   // event.preventDefault();
//alert(1);

// var id=$_POST['id'];
// alert(id);
// alert(4);

var chkdel="checkdel";
 
 $.ajax({
 url:"controler.php",
 data:{ick:chkdel,id:id},
 method:"post", 

 success:function(data){

 //$('#delete').html(data);
 // alert("done");
 
//  readrecord();
window.location.href = "index.php";
}

});

}


function update(fid)
{

var myid="get id to display";

$.ajax({ 

 url:"controler.php",
 type:"post",
 dataType:"JSON",
 data:{cid:myid,mid:fid}, 
success:function(data)
{

// alert(data[0].id);


$('#id').val("");
$('#name').val("");
$('#age').val("");
$('#id').val(data[0].id);
$('#name').val(data[0].name);
$('#age').val(data[0].age);



$("#btn").hide();
 

$("#update").show();

 }

});

} 
  
</script>

</head>
<body>
<form method="post" id="form" accept-charset="utf-8">

<label for="id">ID:</label>
<input type="text" name="id" id="id" hidden="hidden">
        <br>
<label for="name">NAME:</label>
<input type="text" name="name" id="name">
        <br>
 <label for="age">AGE:</label>
 <input type="text" id="age" name="age">
        <br>
<input type="submit" name="insert" value="insert" id="btn">
<input type="submit" name="update" value="update" id="update" hidden="hidden">
</form> 
 <br>

<div>
<table border="1px solid black">
<thead>
<tr> 
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th colspan="2">Actions</th>
</tr>
</thead>
<tbody id="tablebody">
</tbody>
</table>

</div>

</body>
</html>