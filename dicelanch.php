<?php
    $servername = "167.172.139.2";
    $username = "db_user3";
    $password = "TSTHnJmHsbIqaq1U";
    $dbname = "db_dice_briyani";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
	$message = "";
    if(isset($_POST['SubmitButton'])){
        $fullname =  $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender =  $_POST['gender'];
        $uae_location = $_POST['uae_location'];
        $sql = "INSERT INTO  `users` (fullname, email, phone, gender, uae_location, status)  VALUES ('$fullname', '$email', '$phone','$gender','$uae_location', 1)";
        if(mysqli_query($conn, $sql)){
            $message = "Thank you, Will notify you with exciting offers soon..!";
        }else{
            $message = "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
            
        // Close connection
        mysqli_close($conn);
    }
?>

<html>
<head>
<title>Dice biriyani lanching</title>

<style>
.text_align_cntr{
	text-align:center
}
.bg_dark{
	background-color: #403e3e;
}

.bg_light{
	background-color: #53b568;
}
.height_100{
	height: 100%;
}
.padd_0_10{
	padding: 0px 10px;
}
.padd_r0_l0{
	padding: 0px !important;
}
.leb_font_stl{
	color: #fff;
    font-size: 16px;
}
.styl_h2{
	color: #fff;
  font-size: 25px;
  font-weight: 600;
  font-family: system-ui;
}
.styl_p{
	color: #fff;
	font-size: 16px;
  font-weight: 300;
  letter-spacing: .5;
  font-family: system-ui;
}
.input_datas{
	padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}
.slct_gender{
	display: flex;
}
.gendr_cat{
	font-weight: 300;
    color: #5acf73;
    letter-spacing: .5px;
}
.sub_btn{
	color: #fff !important;
    background-color: #5f5f5f !important;
    border-color: #ccc !important;
    margin: 10px 0px !important;
}
.sub_btn:hover{
	background-color: #53b568 !important;
}
.form-control {
    height: 55px !important;
    padding: 6px 40px !important;
    font-size: 14px !important;
}
.wlcm_msg{
	color: #c7c7c7;
}
/*.bg_img_contr{
	  background-image: url(./images/diceopening.jpeg);
    width: 100%;
    height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}*/

.cmp_bg_img{
	width: 100%;
	height: 100%;
}
.form-control:focus{
	box-shadow: none !important;
	border-color: #5acf73 !important;
}

input#radio1 {
   transform: scale(1.3);
}

@media (min-width: 1200px)
{
.container {
    width: 100% !important;
}
}

</style>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>

<div class="container">
         
	<div class="row">
	    <div class="col-sm-6 bg_light height_100 padd_r0_l0">
	      <div class="bg_img_contr">
	      	<img class="cmp_bg_img" src="./image/diceopening.jpeg">
	      </div>
	    </div>
	    <div class="col-sm-6 bg_dark height_100">

		    <div class="input_datas">



				<form action="" method="post">

					<h2 class="styl_h2">Share your </h2>
					<p class="styl_p">Personal info</p>
				    
				    <div class="form-group">
				      <!-- <label for="pwd">Name:</label> -->
				      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="fullname" autocomplete="off" required>
				    </div>

				    <div class="form-group">
				      <!-- <label for="email">Email:</label> -->
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autocomplete="off" >
				    </div>

				    <div class="form-group">
				      <!-- <label for="pwd">Phone Number:</label> -->
				      <input type="text" class="form-control" id="pwd" placeholder="Phone number" name="phone" required autocomplete="off" >
				    </div>

				    <div class="form-group">
				    	<label for="sel1" class="leb_font_stl">Gender</label>
				    	<div class="slct_gender">
						    <div class="form-check-inline padd_0_10">
						      <label class="form-check-label" for="radio1">
						        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked required> 
						        <span class="gendr_cat">Male</span>
						      </label>
						    </div>
						    <div class="form-check-inline padd_0_10">
						      <label class="form-check-label" for="radio2">
						        <input type="radio" class="form-check-input" id="radio1" name="gender" value="female" required>
						        <span class="gendr_cat"> Female</span>
						      </label>
							</div>
						</div>
				    </div>

				    <div class="form-group">
						  <label for="sel1" class="leb_font_stl">Location</label>
					    <select class="form-control" id="sel1" name="uae_location" required>
					      	<option value="Abu Hail">Abu Hail</option>
					        <option value="Al Awir First">Al Awir First</option>
							<option value="Al Awir Second">Al Awir Second</option>
							<option value="Aleyas">Aleyas</option>
							<option value="Al Bada'a">Al Bada'a</option>
							<option value="Al Baraha">Al Baraha</option>
							<option value="Al Barsha First">Al Barsha First</option>
							<option value="Al Barsha Second">Al Barsha Second</option>
							<option value="Al Barsha Third">Al Barsha Third</option>
							<option value="Al Barsha South First">Al Barsha Third</option>
							<option value="Al Barsha South Second">Al Barsha South Second</option>
							<option value="Al Barsha South Third">Al Barsha South Third</option>
							<option value="Al Barsha South Fourth">Al Barsha South Fourth</option>
							<option value="Al Barsha South Fifth">Al Barsha South Fifth</option>
							<option value="Al Buteen">Al Buteen</option>
							<option value="Al Corniche">Al Corniche</option>
							<option value="Al Dhagaya">Al Dhagaya</option>
							<option value="Al Faqa">Al Faqa</option>
							<option value="Al Garhoud">Al Garhoud</option>
							<option value="Al Hamriya, Dubai">Al Hamriya, Dubai</option>
							<option value="Al Hamriya Port">Al Hamriya Port</option>
							<option value="Al Hathmah">Al Hathmah</option>
							<option value="Al Hebiah First">Al Hebiah First</option>
							<option value="Al Hebiah Fourth">Al Hebiah Fourth</option>
							<option value="Al Hebiah Fifth">Al Hebiah Fifth</option>
							<option value="Al Hebiah Second">Al Hebiah Second</option>
							<option value="Al Hebiah Sixth">Al Hebiah Sixth</option>
							<option value="Al Hebiah Third">Al Hebiah Third</option>
							<option value="Al Hudaiba">Al Hudaiba</option>
							<option value="Al Jaddaf">Al Jaddaf</option>
							<option value="Al Jafiliya">Al Jafiliya</option>
							<option value="Al Karama, Dubai">Al Karama, Dubai</option>
							<option value="Al Khabisi">Al Khabisi</option>
							<option value="Al Khawaneej First">Al Khawaneej First</option>
							<option value="Al Khawaneej Second">Al Khawaneej Second</option>
							<option value="Al Kifaf">Al Kifaf</option>
							<option value="Al Mamzar">Al Mamzar</option>
							<option value="Al Manara, Dubai">Al Manara, Dubai</option>
							<option value="Al Mankhool">Al Mankhool</option>
							<option value="Al Mina">Al Mina</option>
							<option value="Al Mizhar First">Al Mizhar First</option>
							<option value="Al Mizhar Second">Al Mizhar Second</option>
							<option value="Al Muraqqabat">Al Muraqqabat</option>
							<option value="Al Murar">Al Murar</option>
							<option value="Al Mushrif" >Al Mushrif</option> 
							<option value="Al Muteena">Al Muteena</option>
							<option value="Al Nahda First">Al Nahda First</option>
							<option value="Al Nahda Second">Al Nahda Second</option>
							<option value="Al Nasr, Dubai">Al Nasr, Dubai</option>
							<option value="Al Quoz First">Al Quoz First</option>
							<option value="Al Quoz Industrial First">Al Quoz Industrial First</option>
							<option value="Al Quoz Industrial Fourth">Al Quoz Industrial Fourth</option>
							<option value="Al Quoz Industrial Second">Al Quoz Industrial Second</option>
							<option value="Al Quoz Industrial Third">Al Quoz Industrial Third</option>
							<option value="Al Quoz Second">Al Quoz Second</option>
							<option value="Al Quoz Third">Al Quoz Third</option>
							<option value="Al Quoz Fourth">Al Quoz Fourth</option>
							<option value="Al Qusais First">Al Qusais First</option>
							<option value="Al Qusais Industrial Fifth">Al Qusais Industrial Fifth</option>
							<option value="Al Qusais Industrial First">Al Qusais Industrial First</option>
							<option value="Al Qusais Industrial Fourth">Al Qusais Industrial Fourth</option>
							<option value="Al Qusais Industrial Second">Al Qusais Industrial Second</option>
							<option value="Al Qusais Industrial Third">Al Qusais Industrial Third</option>
							<option value="Al Qusais Second">Al Qusais Second</option>
							<option value="Al Qusais Third">Al Qusais Third</option>
							<option value="Al Raffa">Al Raffa</option>
							<option value="Al Ras">Al Ras</option>
							<option value="Al Rashidiya">Al Rashidiya</option>
							<option value="Al Rigga">Al Rigga</option>
							<option value="Al Sabkha">Al Sabkha</option>
							<option value="Al Safa First">Al Safa First</option>
							<option value="Al Safa Second">Al Safa Second</option>
							<option value="Al Safouh First">Al Safouh First</option>
							<option value="Al Safouh Second">Al Safouh Second</option>
							<option value="Al Satwa">Al Satwa</option>
							<option value="Al Shindagha">Al Shindagha</option>
							<option value="Al Souq Al Kabeer">Al Souq Al Kabeer</option>
							<option value="Al Twar First">Al Twar First</option>
							<option value="Al Twar Second">Al Twar Second</option>
							<option value="Al Twar Third">Al Twar Third</option>
							<option value="Al Warqa'a Fifth">Al Warqa'a Fifth</option>
							<option value="Al Warqa'a First">Al Warqa'a First</option>
							<option value="Al Warqa'a Fourth">Al Warqa'a Fourth</option>
							<option value="Al Warqa'a Second">Al Warqa'a Second</option>
							<option value="Al Warqa'a Third">Al Warqa'a Third</option>
							<option value="Al Wasl">Al Wasl</option>
							<option value="Al Waheda">Al Waheda</option>
							<option value="Ayal Nasir">Ayal Nasir</option>
							<option value="Business Bay">Business Bay</option>
							<option value="Bu Kadra">Bu Kadra</option>
							<option value="Downtown Dubai">Downtown Dubai</option>
							<option value="Dubai Investment Park First">Dubai Investment Park First</option>
							<option value="Dubai Investment Park Second">Dubai Investment Park Second</option>
							<option value="Emirates Hill First">Emirates Hill First</option>
							<option value="Emirates Hill Second">Emirates Hill Second</option>
							<option value="Emirates Hill Third">Emirates Hill Third</option>
							<option value="Enkhali">Enkhali</option>
							<option value="Hatta">Hatta</option>
							<option value="Hor Al Anz">Hor Al Anz</option>
							<option value="Hor Al Anz East">Hor Al Anz East</option>
							<option value="Jebel Ali 1">Jebel Ali 1</option>
							<option value="Jebel Ali 2">Jebel Ali 2</option>
							<option value="Jebel Ali Industrial">Jebel Ali Industrial</option>
							<option value="Jebel Ali Palm">Jebel Ali Palm</option>
							<option value="Jumeira First">Jumeira First</option>
							<option value="Palm Jumeira">Palm Jumeira</option>
							<option value="Jumeira Second">Jumeira Second</option>
							<option value="Jumeira Third">Jumeira Third</option>
							<option value="Marsa Dubai">Marsa Dubai</option>
							<option value="Me'aisem First">Me'aisem First</option>
							<option value="Me'aisem Second">Me'aisem Second</option>
							<option value="Mirdif">Mirdif</option>
							<option value="Muhaisanah Fourth">Muhaisanah Fourth</option>
							<option value="Muhaisanah Second">Muhaisanah Second</option>
							<option value="Muhaisanah Third">Muhaisanah Third</option>
							<option value="Muhaisnah First">Muhaisnah First</option>
							<option value="Nad Al Hammar">Nad Al Hammar</option>
							<option value="Nadd Al Shiba Fourth">Nadd Al Shiba Fourth</option>
							<option value="Nadd Al Shiba Second">Nadd Al Shiba Second</option>
							<option value="Nadd Al Shiba Third">Nadd Al Shiba Third</option>
							<option value="Nad Shamma">Nad Shamma</option>
							<option value="Naif">Naif</option>
							<option value="Port Saeed">Port Saeed</option>
							<option value="Arabian Ranches">Arabian Ranches</option>
							<option value="Oud Al Muteena Third">Oud Al Muteena Third</option>
							<option value="Ras Al Khor">Ras Al Khor</option>
							<option value="Ras Al Khor Industrial First">Ras Al Khor Industrial First</option>
							<option value="Ras Al Khor Industrial Second">Ras Al Khor Industrial Second</option>
							<option value="Ras Al Khor Industrial Third">Ras Al Khor Industrial Third</option>
							<option value="Rigga Al Buteen">Rigga Al Buteen</option>
							<option value="Trade Centre 1">Trade Centre 1</option>
							<option value="Trade Centre 2">Trade Centre 2</option>
							<option value="Umm Al Sheif">Umm Al Sheif</option>
							<option value="Umm Hurair First">Umm Hurair First</option>
							<option value="Umm Hurair Second">Umm Hurair Second</option>
							<option value="Umm Ramool">Umm Ramool</option>
							<option value="Umm Suqeim First">Umm Suqeim First</option>
							<option value="Umm Suqeim Second">Umm Suqeim Second</option>
							<option value="Umm Suqeim Third">Umm Suqeim Third</option>
							<option value="Wadi Alamardi">Wadi Alamardi</option>
							<option value="Warsan First">Warsan First</option>
							<option value="Warsan Second">Warsan Second</option>
							<option value="Yaraah">Yaraah</option>
							<option value="Za'abeel First">Za'abeel First</option>
							<option value="Za'abeel Second">Za'abeel Second</option>
							<option value="Margham">Margham</option>
							<option value="Umm Nahad First">Umm Nahad First</option>
							<option value="Umm Nahad Second">Umm Nahad Second</option>
							<option value="Umm Nahad Third">Umm Nahad Third</option>
							<option value="Umm Nahad Fourth">Umm Nahad Fourth</option>
							<option value="Saih Al-Dahal">Saih Al-Dahal</option>
							<option value="Saih Al Salam">Saih Al Salam</option>
							<option value="Al Lisaili">Al Lisaili</option>
							<option value="Lehbab First">Lehbab First</option>
					     </select>
				    </div>
				    
				    <span class="wlcm_msg"><?php echo $message; ?></span>

				    <div class="form-group text_align_cntr">
				    	<button type="submit" name="SubmitButton" class="btn btn-default sub_btn">Submit</button>
				    </div>

				</form>
			</div>

		</div>


	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(".wlcm_msg").show();
    setTimeout(function() {
        $(".wlcm_msg").hide();
    }, 7000);
</script>
    
</body>



<html>

   