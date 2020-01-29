<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script type="text/javascript">

  $('#btn').click(function(event){
	 event.preventDefault();
     // var check="check";
  // var name=$('#name').val();
  // var age=$('#age').val();
 
  //   $.ajax({
  //  	url: "controler.php",
  //  	method: "post",
  //  	data: {nm:name,ag:age,ck:check},
  //  	dataType:"text",
   	
  //    success: function(msg){
  //     $('#message').html(msg);
  //     $('#name').val('');
  //      $('#age').val('');
     
  //      }
  //         })
   
   })

//  var check="check";
//  var name=$('#name').val();
//  var age=$('#age').val();
// // var name=$('#name').val();
// //var form=$('#form').serialize();
//   $.ajax({

//     url:"controler.php",
//     method:"post",
//     // data:{f:$('form').serialize(),ck:check},
//     data:{nm:name,ag:age,ck:check},     
//     dataType:"text",
//     success: function(msg){
//    $('#message').html(msg)
//       $('#name').val('')
//        $('#age').val('')
//        // readrecord();
//     } 

// })
// })

// function readrecord()
// {
// var read="read";
// $.ajax({

//   url:"controler.php",
//   type:"post",
//   data:{ r:read},
//   success:function(data)
// $('#show').html(data);

// // $('#message').text("successfull");
 
// });
// }
   </script>
</head>
<body>
<form method="post" id="form" accept-charset="utf-8">
   <label for="name">NAME:</label>
 <input type="text" name="name" id="name">
 <br>
    <label for="age">AGE:</label>
 <input type="text" id="age" name="age">
 <br>
<input type="submit" name="insert" value="insert" id="btn">
</form>
<p id="message"></p>
</body>
</html>