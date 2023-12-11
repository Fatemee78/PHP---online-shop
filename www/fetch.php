<?php
require_once("../lib/config.php");

if(isset($_POST['search'])){

$output = '';
$name = $_POST['search'];

$sql = "SELECT * FROM product WHERE title LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($GLOBALS['DB'],  $sql) or die("not executed the search query");
if (mysqli_num_rows($result) > 0) {
	$output .= '<h4 align="center">Search result</h4>';
		$output .= '<div class="table-responsive">
			<table>
				<tr>
					<th>ID</th>
		            <th>Title</th>
		            <th>Category</th>
		            <th>description</th>
		            <th>price</th>
				</tr>';
		while($rows = mysqli_fetch_assoc($result)){
	 		$output .= '
	 		<tr>
		        <td>'.$rows["id"].'</td>
		        <td>'.$rows["title"].'</td>
		        <td>'.$rows["category"].'</td>
		        <td>'.$rows["description"].'</td>
		        <td>'.$rows["price"].'</td>
    	</tr>';
	
		}
		echo $output;
 
	
}else {
	echo "Data not found";


	}	
}


?>