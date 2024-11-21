<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-status-cat">
				<div class="card">
					<div class="card-header">
						  Status Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Status</label>
								<textarea name="status_label" id="" cols="30" rows="2" class="form-control"></textarea>
							</div>
							
							<style>
								.fixed-top {

background-color: #1a4592;
color: black;
display: flex;
justify-content: space-between;
align-items: center;
padding: 1rem 15rem;
position: fixed;
width: 1116px;
height:60px;
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
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Status Category</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$types = $conn->query("SELECT * FROM recruitment_status where status = 1 order by id asc");
								while($row=$types->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									
									<td class="">
										 <p> <b><?php echo $row['status_label'] ?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_scat" type="button" data-id="<?php echo $row['id'] ?>" data-status_label="<?php echo $row['status_label'] ?>"  >Edit</button>
										<button class="btn btn-sm btn-danger delete_scat" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:190px;
		max-height: :150px;
		position: relative;
	}
</style>
<script>
	function _reset(){
		$('[name="id"]').val('');
		$('#manage-status-cat').get(0).reset();
	}
	
	$('#manage-status-cat').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_recruitment_status',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_scat').click(function(){
		start_load()
		var cat = $('#manage-status-cat')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='status_label']").val($(this).attr('data-status_label'))
		end_load()
	})
	$('.delete_scat').click(function(){
		_conf("Are you sure to delete this recruitment status category","delete_scat",[$(this).attr('data-id')])
	})
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
	function delete_scat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_recruitment_status',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>