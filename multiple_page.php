<!doctype html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
    $(".more").click(function(){
        $(".table").append("<tr><th  scope='col'><input type='text' name='name[]'  value='<?php // echo $result['name'];?>' placeholder='Name' required></th><th scope='col'> <input type='text' name='mob[]' value='<?php //echo $result['mob'];?>' placeholder='Mobile Number' required></th><th scope='col'><textarea name='add[]' placeholder='Address' value='' cols='22' rows='' required><?php //echo $result['add'];?></textarea></th><th scope='col'><input type='text' placeholder='Business name' name='business_name[]' value='<?php //echo $result['business_name'];?>' required></th></tr>");
    });
});
</script>
</head>
<body>



<form action="" method="post" onSubmit="return valid()"> 
				<i class="fa fa-plus more" style="float: right;">Add more Medicine</i>
                    <table width="100%" border="0" class="table">
                    	  <tr style="float:center;">
                   
                    <td> <input type="submit" class="btn btn-primary" name="submit" value="Submit" > </td>
                    <td></td>
                    </tr>
					<tr>
                   
                    <th scope="col"> name
                       <input type="text"  name="name[]" value="<?php //echo $result['name'];?>" placeholder="Name" required>
                    </th>
                   
                    	    
                    	     <th scope="col"> Mobile
                    	      <input type="text"  name="mob[]" value="<?php //echo $result['mob'];?>" placeholder="Mobile Number" required>
                  	       </th>
                  	     
                    	     <th scope="col"> Adress
                               <textarea  name="add[]" placeholder="Address" value="" cols="22" rows="" required><?php //echo $result['add'];?></textarea>
                  	       </th>
                  	    
                      <th scope="col">
                          <input type="text" placeholder="Business name" name="business_name[]" value="<?php //echo $result['business_name'];?>" required>
                      </th>
                    </tr>
					<div class="modal"><!-- Place at bottom of page --></div>
                    
                    
                    </table>
                       
                        
                        
             </form>
			 
			 </body>
			 </html>