<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Report</title>
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>all.min.css">

</head>
<body>
	<style>
		.fa{
			margin-right: 4px;
		}

		a{
			text-decoration:  none;
		}
	</style>
<div style="min-width:350px;">
<div class="container-fluid">

		<form method="post" action="<?= base_url('report'); ?>">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 700px;">
			<h3 class="text-center">Department of Wildlife/Forest Conservation</h3>
			<br>

			<img src="<?=base_url('assets/logo/wildlife.jpg');?>" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;height:150px">
			
			<br>
			<h4>Submit New Report</h>

			<input class="my-2 form-control"  type="title" name="title" placeholder="Report Title" >
			<input class="my-2 form-control"  type="description" name="description" placeholder="Description" >
			<input class="my-2 form-control"  type="location" name="location" placeholder="Location" >


			<select class="my-2 form-control" name="district">
				<option  value="">--Select the District--</option>
				<option  value="Colombo">Colombo</option>
				<option  value="Gampaha">Gampaha</option>
				<option  value="Kalutara">Kalutara</option>
				<option  value="Kandy">Kandy</option>
				<option  value="Matale">Matale</option>
				<option  value="Nuwara Eliya">Nuwara Eliya</option>
				<option  value="Galle">Galle</option>
				<option  value="Matara">Matara</option>
				<option  value="Hambantota">Hambantota</option>
				<option  value="Jaffna">Jaffna</option>
				<option  value="Kilinochchi">Kilinochchi</option>
				<option  value="Mannar">Mannar</option>
				<option  value="Vavuniya">Vavuniya</option>
				<option  value="Mullaitivu">Mullaitivu</option>
				<option  value="Batticaloa">Batticaloa</option>
				<option  value="Ampara">Ampara</option>
				<option  value="Trincomalee">Trincomalee</option>
				<option  value="Anuradhapura">Anuradhapura</option>
				<option  value="Polonnaruwa">Polonnaruwa</option>
				<option  value="Badulla">Badulla</option>
				<option  value="Monaragala">Monaragala</option>
				<option  value="Kegalle">Kegalle</option>
				<option  value="Ratnapura">Ratnapura</option>
				<option  value="Kurunegala">Kurunegala</option>
				<option  value="Puttalam">Puttalam</option>
			</select>

			<input class="my-2 form-control"  type="contact" name="contact" placeholder="How to Contact" >
			<input class="my-2 form-control"  type="date" name="date" placeholder="date" >

			<label for="time" style="font-size: x-small;">Time of the Incident</label>
			<input class="my-2 form-control" type="time" name="time" placeholder="Time">

			<select class="my-2 form-control" name="office">
				<option  value="">--Select the Nearest Office--</option>
				<option  value="Dehiwala">Battaramulla (Head Quarters)</option>
				<option  value="Weragantota">Weragantota</option>
				<option  value="Gampaha (Western Regional Office)">Gampaha (Western Regional Office)</option>
				<option  value="Minipe (Central Regional Office)">Minipe (Central Regional Office)</option>
				<option  value="Kataragama">Kataragama</option>
				<option  value="Uraniya">Uraniya</option>
				<option  value="Mirissa">Mirissa</option>
				<option  value="Sri Palabaddala">Sri Palabaddala</option>
				<option  value="Nuwara Eliya">Nuwara Eliya</option>
				<option  value="Hikkaduwa">Hikkaduwa</option>
				<option  value="Nallathanniya">Nallathanniya</option>
				<option  value="Ampara">Ampara</option>
				<option  value="Monaragala">Monaragala</option>
				<option  value="Lahugala">Lahugala</option>
				<option  value="Nilgala">Nilgala</option>
				<option  value="Kurunegala">Kurunegala</option>
				<option  value="Nikawerwetiya">Nikawerwetiya</option>
				<option  value="Galgamuwa">Galgamuwa</option>
				<option  value="Kalawewa">Kalawewa</option>
				<option  value="Thabuttegama">Thabuttegama</option>
				<option  value="Meegalewa">Meegalewa</option>
				<option  value="Herathgama">Herathgama</option>
				<option  value="Ritigala">Ritigala</option>
				<option  value="Minneriya">Minneriya</option>
				<option  value="Diyabeduma">Diyabeduma</option>
				<option  value="Weheragala">Weheragala</option>
				<option  value="Welikanda">Welikanda</option>
				<option  value="Padaviya">Padaviya</option>
				<option  value="Kilinochchi">Kilinochchi</option>
			</select>

		
			<br>
			<input class="btn btn-primary float-end" type="submit" name="btn" value="Report!" />
			
			<a href="">
				<button type="button" class="btn btn-danger">Cancel</button>
			</a>
			
			
		</div>
		</form>
	</div>

    <script src="<?=base_url('assets/');?>bootstrap.min.js"></script>
</div>

</body>
</html>