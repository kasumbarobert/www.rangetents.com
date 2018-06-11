// JavaScript Document

function open_popup(){
   var trick="<div id='whole_box'><div id='second_box'><div id='third_box'><h2 style='color:royalBlue; '  >"+ 
   			  "<span style='float:right;'><a href='javascript:close_pop()' style='text-decoration:none;' > <img src='images/close.png'    					                height='50px' width='50px'/></a></span>"+
          "Feel free to contact the developers through their emails</h2>Email Eng Stephen<a href='mailto:byarus45@gmail.com'> click</a><br>"+
			  "Email Eng Robert<a href='mailto:robert@ymail.com'>   click</a>"+
			  "</div></div></div>";
		      
	
document.getElementById("dynamic").innerHTML=trick;





	
	}
	
	
	
function close_pop(){
	document.getElementById("dynamic").innerHTML="";
	
	
	
	}