<?php include("includes/front_end_header.php");?>


<div class="container-fluid next">
  <div class="row switcher">
  <div class="col-md-4 mt-2">
    <a class="btn btn-success" href="<?php echo base_url();  ?>Home"><h5 align="center"><b>Switch to Buyer Dashboard</b></h5></a>
  </div>
    <div class="col-md-8">
   <h1>Good Morning, Hassan</h1>
  </div>
  

</div>
</div>
<div class="container-fluid navigate">
  <div class="row">
    <div class="col-md-3">
      
    </div>
  <div class="col-md-2 mt-2">
   <div class="panel panel-default mycard">
     <div class="panel-body">
      <div class="panel-title">
        <h1 align="center" class="nums">2</h1>
      </div>
      <h3 align="center" class="mt-2">Proposal Credit</h3>

     </div>
   </div>
  </div>
     <div class="col-md-2 mt-2">
   <div class="panel panel-default mycard">
     <div class="panel-body">
      <div class="panel-title">
        <h1 align="center" class="nums">5</h1>
      </div>
      <h3 align="center" class="mt-2">Ongoing Projects</h3>

     </div>
   </div>
  </div>
   <div class="col-md-2 mt-2">
   <div class="panel panel-default mycard">
     <div class="panel-body">
      <div class="panel-title">
        <h1 align="center" class="nums">$7</h1>
      </div>
      <h3 align="center" class="mt-2">Earned this Month</h3>

     </div>
   </div>
  </div>
  <div class="col-md-3">
      
    </div>
  

</div>
</div>
<div class="container-fluid">
  <div class="row post">
  <div class="col-md-4 mt-2 post">
    <a class="btn btn-success" href="#"><h1 align="center" class="project">
      <b>Post a Project</b></h1></a>
  </div>
    <div class="col-md-4 col-md-offset-2">
  <h1 class="earn">INVITE FRIENDS AND EARN UPTO $10 ON HIS FIRST PROJECT</h1>
  </div>
  

</div>
</div>
<div class="container-fluid navigate">
  <div class="row">
  	<div class="col-md-12">
  		<h1 class="rank" align="center">RANKING</h1>
  	</div>
    <div class="col-md-12">
      <div class="table">
      	<table>
      		<?php
      		
        for($i=1;$i<10;$i++){

      		?>
      		<tr>
      			<td><?php echo $i; ?>  <img class="img-circle" src="<?php echo base_url();  ?>assets/images/lockscreen-user.png"><span>Hassan Muhammad</span></td>
      			<td></td>
      		</tr>
      		<?php
      	}
      	?>
      	</table>
      </div>
    </div>

</div>
</div>
<section class="bottom post">
<div class="container">
  <div class="row">
  <div class="col-md-12 Ongoing">
    
      <h1 align="center">ONGOING PROJECTS</h1>
  </div>
</div>
<div class="row post mt-2">
	<div class="col-md-6">
		<h1 >Projects</h1>
		<div class="col-md-12 pros">
			<h2>Social Media Expert</h2>
			<img class="img-circle" src="<?php echo base_url();  ?>assets/images/lockscreen-user.png">
			<span> Khurram Rahim</span>
		</div>
		<div class="col-md-12 pros">
			<h2>Social Media Expert</h2>
			<img class="img-circle" src="<?php echo base_url();  ?>assets/images/lockscreen-user.png">
			<span> Khurram Rahim</span>
		</div>
		<div class="col-md-12 pros">
			<h2>Social Media Expert</h2>
			<img class="img-circle" src="<?php echo base_url();  ?>assets/images/lockscreen-user.png">
			<span> Khurram Rahim</span>
		</div>
	</div>
	<div class="col-md-6 right-project">
		<h1 align="center">Offers</h1>
		<div class="row">
	 <div class="col-md-4">
    <div class="card">
  <img src="<?php echo base_url();  ?>assets/images/client.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="cardtext" >I will play flute for your song</h4>
    <div class="ratings">
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
    </div>
    <h4 class="rate" align="right">$55</h4>
    
    
  </div>
</div>
  </div>

   <div class="col-md-4">
    <div class="card">
  <img src="<?php echo base_url();  ?>assets/images/client.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="cardtext" >I will play flute for your song</h4>
    <div class="ratings">
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
    </div>
    <h4 class="rate" align="right">$55</h4>
    
    
  </div>
</div>
  </div>

 <div class="col-md-4">
    <div class="card">
  <img src="<?php echo base_url();  ?>assets/images/client.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="cardtext" >I will play flute for your song</h4>
    <div class="ratings">
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
      <span class="fa fa-star star checked"></span>
    </div>
    <h4 class="rate" align="right">$55</h4>
    
    
  </div>
</div>
  </div>


		</div>
	</div>
</div>
</div>

</section>
</html>
//footer

<?php include("includes/front_end_footer.php");?>
