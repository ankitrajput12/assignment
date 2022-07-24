<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	

<div style="position:relative">

<img src="tree-736885__480.jpg"      alt="tree" name="tree2"  >
<button  type="submit" >PUBLISH</button>
    <button type="submit" >UNPUBLISH </button>
    </div>
<div>
<img src="images.jpg" name="tree" alt="" >

</div>


    



<div>

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">


        
           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
    
     </form>
</div>
</body>
</html>