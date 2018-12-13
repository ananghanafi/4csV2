
<?php 
	$judul = "Team | ";
	include 'head.php';
?>

<?php include 'navbar.php' ?>

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.posisi {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>



<br>



<div class="container">
	<div class="row">

		<!-- section title -->
		<div class="col-md-12">
			<div class="section-title">
				<h3 class="title">Team</h3>
			</div>
		</div>
		<!-- /section title -->

	  <div class="column">
	    <div class="card">
	      <img src="<?php echo base_url(); ?>assets/img/Anang.jpg" alt="Jane" style="width:100%">
	      <div class="container">
	        <h2>Anang</h2>
	        <p class="posisi">Programmer</p>
	      </div>
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <img src="<?php echo base_url(); ?>assets/img/Angga.jpg" alt="Mike" style="width:100%">
	      <div class="container">
	        <h2>Angga</h2>
	        <p class="posisi">Hokage</p>
	      </div>
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <img src="<?php echo base_url(); ?>assets/img/Ria.jpeg" alt="John" style="width:100%">
	      <div class="container">
	        <h2>Ria</h2>
	        <p class="posisi">Admin dan Telemarketing</p>
	      </div>
	    </div>
	  </div>


	  <div class="column">
	    <div class="card">
	      <img src="<?php echo base_url(); ?>assets/img/Rizki.jpg" alt="John" style="width:100%">
	      <div class="container">
	        <h2>Rizki</h2>
	        <p class="posisi">Programmer</p>
	      </div>
	    </div>
	  </div>

	</div>
	
</div>

<br>
<br>

 
<?php include 'footer.php' ?>


