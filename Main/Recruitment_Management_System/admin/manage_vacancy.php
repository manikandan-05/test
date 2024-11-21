<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<style>
.img{
		max-width:190px;
		max-height: 150px;
		position: relative;
	}

.fixed-top {

background-color: #1a4592;
color: black;
display: flex;
justify-content: space-between;
align-items: center;
padding: 1rem 15rem;
position: fixed;
width: 1116px;
height: 60px;
left: 250px;
z-index: 1000;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
	

/* Sidebar styling */
#sidebar {
position: fixed;
top: 0px;
left: 0;
height: calc(100% - 60px);
width: 200px;
background-color: #fff;
padding: 1rem;
box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
z-index: 100;
color: white;
}

#sidebar ul {
list-style-type: none;
padding: 0;
}

#sidebar ul li {
margin: 10px 0;
}

#sidebar ul li a {
color: black;
text-decoration: none;
font-size: 1rem;
padding: 10px;
display: flex;
align-items: center; /* Align text and icon vertically */
border-radius: 5px;
transition: background-color 0.3s;
}

#sidebar ul li a i {
margin-right: 10px; /* Space between icon and text */
min-width: 20px; /* Ensure all icons take the same space */
text-align: center;
}

#sidebar ul li a:hover {
background-color: #333;
color: white;
}

/* Main content styling */
#main-content {
margin-left: 220px;
padding: 2rem;
padding-top: 80px;
background-color: #d2d6de;
min-height: 100vh;
}

.container {
width: 1000px;
max-width: 100%;
position: relative;
left: -3px;
top: 6px;
}

h2 {
text-align: center;
font-size: 2rem;
margin-bottom: 1rem;
color: #0A1172;
}

table {
width: 100%;
border-collapse: collapse;
background-color: #d2d6de;
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

th, td {
padding: 1rem;
text-align: center;
border-bottom: 1px solid #ddd;
}

th {
background-color: #1a4592;
color: #fff;
}

tr:hover {
background-color: #f1f1f1;
}

.btn {
display: inline-block;
padding: 0.5rem 1rem;
border: none;
border-radius: 0.25rem;
background-color: #28a745;
color: #fff;
text-decoration: none;
text-align: center;
margin: 1rem auto;
}

.btn:hover {
background-color: black;
color: #fff;
}

.btn-reset {
float: right;
margin-right: 1rem;
}

</style>
<div class="container-fluid">
	<form action="" id="manage-vacancy">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Position Name</label>
				<input type="text" name="position" class="form-control" value="<?php echo isset($position) ? $position:'' ?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Availability</label>
				<input type="number" name="availability" min='1' class="form-control text-right" value="<?php echo isset($availability) ? $availability:'' ?>">
			</div>
		</div>
		<?php if(isset($id)): ?>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Status</label>
				<select name="status" class="browser-default custom-select" id="">
					<option value="1" <?php echo $status == 1 ? "selected" :'' ?>>Active</option>
					<option value="0" <?php echo $status == 0 ? "selected" :'' ?>>Closed</option>
				</select>
			</div>
		</div>
		<?php endif; ?>
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Description</label>
				<textarea name="description" class="text-jqte"><?php echo isset($description) ? $description : '' ?></textarea>
			</div>
		</div>
	</form>
</div>

<script>
	$('.text-jqte').jqte();
	$('#manage-vacancy').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_vacancy',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1){
					alert_toast("Data successfully saved.",'success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})
</script>