<html>
  <head><title>Hi!</title></head>
  <body>
      
  	 <?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
    <?php $a = 'kimi'; ?>
    <h2> <?php echo $a; ?> </h2>
    
    
  </body>
</html>
