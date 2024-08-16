<?php
include 'head.php';

$host = "localhost";
$user = "root";
$password = "";
$Id=$_GET['email'];
$database = "phd_project";
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM teacher WHERE email='$Id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
}
?>	  <!DOCTYPE html>
	<html>
		<head>
			<style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 20px;
				background-color: #F8F9F9;
			}
			table {
				border-collapse: collapse;
				width: 100%;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color:green;
				color: #ffffff;
				font-weight: bold;
				font-size: 10px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
		</head>
		<body>
		<center>
		<img src="<?=   $val['passport']            ?>" width="100px" height="100px" />
			<ul style="list-style-type:none;">
				
					
				<?php while ($row = $result->fetch_assoc()): ?>
				<div id="page-wrapper">
				<div class="activity_box activity_box1 "  >
					<h3> <i class='fas fa-user-plus'></i>user Details</h3>
				<label> name	<input type="text"value="<?php echo $row['firstname']; ?>" class="form-control py-2 "  ></label>
				<label>	lastname<input value="<?php echo $row['lastname']; ?>" class="form-control py-2 " ></label>
				<label>	Phone<input value="<?php echo $row['phone']; ?>" class="form-control py-2 " ></label>
				<label>	Email<input value="<?php echo $row['email']; ?>" class="form-control py-2 "></label>
				<label>	State of Origin<input value="<?php echo $row['state']; ?>" class="form-control py-2 "></label>
				<label>	LGA<input placeholder="<?php echo $row['lga']; ?>" class="form-control py-2 "></label>
				<label>	Address<input value="<?php echo $row['address']; ?>" class="form-control py-2 "></label>
				<label>	Level<input value="<?php echo $row['grade_level']; ?>" class="form-control py-2 " ></label>
				<label>	Date of Birth<input value="<?php echo $row['DOB']; ?>" class="form-control py-2 " ></label>
				<label>	Account Number<input value="<?php echo $row['account_no']; ?>" class="form-control py-2 "></label>
				<label>	Bank<input value="<?php echo $row['bank']; ?>" class="form-control py-2 "></label>
				<label>	Bank Type<input value="<?php echo $row['bank_type']; ?>" class="form-control py-2 "></label>



					
					
									</div>
			</div>

				<?php endwhile; ?>
			</ul>
			<a href="update.php?staff_id=<?php echo $row['staff_id']; ?> " class='btn btn-primary px-7 py-1'>Update</a>
			</center>
          </div>
        </div>
      </div>
    
   </div>
			


