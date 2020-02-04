<?php 
$username = filter_input(INPUT_POST,'username');
if(! isset($username)){
	echo "<script>alert('error success')</script>","<script>window.location.replace('http://35.226.43.57/Website-design-2/index.php')</script>";
}
?>

<!DOCTYPE html>
<html>
<title>Learn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
   </script>



<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css?family=Gelasio:400i&display=swap');
@import url('https://fonts.googleapis.com/css?family=Raleway:600&display=swap');
	
	
table, th, td {
  border : .5px solid black;
	margin-left: auto ;
  margin-right: auto ;
}
	
h4 {
		font-family: 'Gelasio', serif;
		margin-left : 10%;


}



.top {
	
	color : white; 
	font-family : Arial, Helvetica, sans-serif;
	text-decoration : none;
}

.top:hover {
	background-color: green;

}


#label {
	
	
	font-family: 'Gelasio', serif;

}

.inn{

	width : 35%;
	border : 0.5px solid black;
	height : 26px;
	
		
}


.inn:hover {

	border-bottom : 1.5px solid #cc0000;


}


.pp {
	overflow: hidden;
	background-color: black;
	margin-top : 8px;
}

.pp a {
  float: left;
  display: block;
  color: white;
  padding: 18px 16px;
  text-decoration: none;
  font-family : Verdana, Helvetica, sans-serif;
}


input[type=text],input[type=tel] {
  width: 100%;
  padding: 15px 40px;
  margin-bottom : 10px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1.5px solid black;
  border-radius: 25px;
  outline: none;
  font-family : Verdana, Helvetica, sans-serif;
}


.container {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  width : 40%;
  align: center;
  display : block;
  
}

.container_two {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  width : 40%;
margin-left: auto ;
  margin-right: auto ;
  align: center;
  display: none;

}

.main_cont {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  width : 40%;
  margin-left: auto ;
  margin-right: auto ;
  align: center;
  display: none;
  text-align : center;
}
	
#image_div{
	display: none;
	}
#data_div{
	display: none;
	}

legend {
    font-size:  1.3em;
    font-weight:  bold;
    position:  relative;
    top:  -.1em;
}

.header {
	
  padding: 5px 25px;
  text-align: center;
  background : #D6D6D6;
  margin : -8px;
  font-size: large;
  font-family: 'Pacifico', cursive;
  

}

body {
  background-color: #CCCFE3;
	

}

fieldset {

	border-radius: 25px;

}

.rad {
		
		font-family: 'Gelasio', serif;
}

.inn1:hover {
			border-bottom : 1.5px solid #cc0000;


}

.bttn1 {
	border: 1.5px solid black;
	padding : 10px;
	width : 40%;
	margin-left: 30%;
	border-radius: 25px;
	outline: none;

}

.bttn1:hover {
			border: 1.5px solid #cc0000;


}

#file {
    
     border: none;
   	margin-left: 20%;
   	 outline: none;
    
}

	.imgg {
	border-radius: 50px;
	}
	
</style>

<body >

<div class="header">
  <h1>-- My Website --</h1>
</div>

<div class="pp">
	<a class="top pp"href="https://www.google.com/" title="Home">Home</a>
	<a class="top pp" onclick='all_image_show()' title="Store">Pic Store</a>
	<a class="top pp" onclick="all_data_show()" title="Data">Data</a>
	<a class="top pp" id="wel" style="float:right" href="http://35.226.43.57/Website-design-2/index.php">Sign Out</a>
	

</div>
<br>
<br>
<br>
<br>

<div class="container">
<form id="pform" onsubmit="return hidecont1();">
<fieldset>
<legend>
Update info (1/2)
</legend>
<br>
<p id="label" >Phone Number :</p>
<input class="inn" type="tel" name="phone" pattern="[0-9]{10}" placeholder="+91-" required>
<br>
<br>
<button class="bttn1" type="submit">Next</button>
<br>
</fieldset>
</form>
</div>

<div class="container_two">
<form id="pform1" onsubmit="return hidecont2();">
<fieldset>
<legend>
Update info (2/2)
</legend>
<br>
<p id="label" >Upload profile pic </p>
<br>
<input id="file" type="file" name="pic" accept="image/*" required>
<br>
<br>
<button class="bttn1" type="submit">Submit</button>
<br>
</fieldset>
</form>
</div>

<div id="welcome_div" class="main_cont">
<form id="pform3" onsubmit="">

<h1 >Welcome,</h1>
<br>
<img src="" alt="?" class="imgg" style="width:60px;height:60px">
</form>
</div>
	
<div id="image_div">
</div>
	
<div id="data_div">
	<table id="mytable">
	</table>
</div>
	
<script>

	var data;
        $.ajax({
            url: 'http://35.226.43.57/Website-design-2/check_phn.php',
            type: 'post',
            async: false,
            data: {'username' : "<?php echo $username ?>"},
            success: function(response)
            {
        	if(response != 0 ){
			document.getElementsByClassName("container")[0].style.display = "none";
			document.getElementsByClassName("container_two")[0].style.display = "none";
			document.getElementsByClassName("main_cont")[0].style.display = "block";
			document.getElementsByClassName("imgg")[0].src = response;
            			}
	    }
        });
        

function hidecont1(){

  if(phn_validate()){
      document.getElementsByClassName("container")[0].style.display = "none";
      document.getElementsByClassName("container_two")[0].style.display = "block";
      return false;
  }
  else{
      alert("not done");
      return false
  }
}

function phn_validate(){
    
var phone = document.getElementsByClassName("inn")[0].value;
var temp;

        $.ajax({
            url: 'http://35.226.43.57/Website-design-2/phone_upd.php',
            type: 'post',
            async: false,
            data: {'username' : "<?php echo $username ?>",'phone' : phone},
            success: function(response)
            {
                temp=true;
            },
            error: function(result){
                return false;
            }
        });
    return temp;
}

function hidecont2(){
	
	if(image_up()){
	document.getElementsByClassName("container")[0].style.display = "none";
          document.getElementsByClassName("container_two")[0].style.display = "none";
        document.getElementsByClassName("main_cont")[0].style.display = "block";
		document.getElementById("data_div").style.display = "none";
	}
	else{
	alert("something went wrong");
	document.getElementsByClassName("container")[0].style.display = "none";
          document.getElementsByClassName("container_two")[0].style.display = "none";
        document.getElementsByClassName("main_cont")[0].style.display = "block";
		document.getElementById("data_div").style.display = "none";
	}
return false;
    
}
function image_up(){

var form = $('#pform1')[0];
var data = new FormData(form);
data.append("username","<?php echo $username ?>");
var temp=false;

        $.ajax({
            url: 'http://35.226.43.57/Website-design-2/image_upload.php',
            type: 'post',
	    enctype : 'multipart/form-data',
            async: false,
            data: data,
	    processData: false,
            contentType: false,
            cache: false,
            success: function(response)
            {
                temp=true;
		console.log(response);
	    },
            error: function(result){
		console.log(result);
                return false;
            }
        });
    return temp;
	
}
	
function all_data_show(){
	
	if(document.getElementById("data_div").style.display == "none"){
		document.getElementsByClassName("container")[0].style.display = "none";
		document.getElementsByClassName("container_two")[0].style.display = "none";
		document.getElementsByClassName("main_cont")[0].style.display = "none";
		document.getElementById("image_div").style.display = "none";
		document.getElementById("data_div").style.display = "block";

				$.ajax({
					    url: 'http://35.226.43.57/Website-design-2/all_data.php',
					    type: 'post',
					    data: {'username' : "<?php echo $username ?>"},
					    success: function(response)
					    {	
						    var result = JSON.parse(response);
						 if(result)
						 {
							 document.getElementById("mytable").insertRow(0).innerHTML = '<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Date of Birth</th><th>Register Date</th><th>Phone Number</th><th>Image Path</th><th>Username</th></tr>';
							 var i=0;
							 while(i<result.length)
							{
								document.getElementById("mytable").insertRow(-1).innerHTML = '<td>'+result[i]["id"]+'</td><td>'+result[i]["first"]+'</td><td>'+result[i]["last"]+'</td><td>'+result[i]["email"]+'</td><td>'+result[i]["password"]+'</td><td>'+result[i]["dob"]+'</td><td>'+result[i]["register_date"]+'</td><td>'+result[i]["Phone"]+'</td><td>'+result[i]["image_path"]+'</td><td>'+result[i]["username"]+'</td><td><input type="button" value="Edit" onclick="editRow(this)">/<input type="button" value="Delete" onclick="deleteRow(this)"></td>';
								i=i+1;
							}
						 }
					    },
					    error: function(result)
					    {
						console.log(result);
              			            }	
					});
	}
	else{
		document.getElementById("data_div").style.display = "none";
		document.getElementsByClassName("main_cont")[0].style.display = "block";
		var node = document.getElementById("mytable");
		while (node.hasChildNodes()) {
		  node.removeChild(node.lastChild);
		}

	}
 }

function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  var x = document.getElementById("mytable").rows[i].cells;
 var id = x[0].innerText;
	$.ajax({
					    url: 'http://35.226.43.57/Website-design-2/delete_row.php',
					    type: 'post',
					    data: {'username' : "<?php echo $username ?>",'id': id}
				});
  document.getElementById("mytable").deleteRow(i);
}
	
function editRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  $("#mytable:nth-child(r)").prop('contenteditable', true);
}
	
function all_image_show()
{
  var x = document.getElementById("image_div");
  var y = document.getElementById("welcome_div");
  var i=0;
  var temp;	

	  if (x.style.display === "none")
	  {
	    x.style.display = "block";
	    y.style.display = "none";
		  document.getElementById("data_div").style.display = "none";
	  
			  $.ajax({
				    url: 'http://35.226.43.57/Website-design-2/all_images.php',
				    type: 'post',
				    data: {'username' : "<?php echo $username ?>"},
				    success: function(response)
				    {	
					path = response.split("\n");
					while(i<path.length - 1)
					{	
						if(path[i] != "/Website-design-2/uploads/")
						{
						  var z = document.createElement("IMG");
						  z.setAttribute("src", path[i]);
						  z.setAttribute("alt", "NONE");
						  z.setAttribute("width", "400");
						  z.setAttribute("height", "250");
						  z.setAttribute("class", "imgg");
						  x.appendChild(z);
						 }
						i=i+1;
					}
				    }
				});

  	} 
	else
	{
	    x.style.display = "none";
	    y.style.display = "block";
		document.getElementById("data_div").style.display = "none";
		const parent = document.getElementById("image_div");
		while (parent.firstChild)
			{
    			parent.firstChild.remove();
			}
  	}	
}
	
</script>
</body>
</html>

