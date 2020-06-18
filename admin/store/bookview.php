<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Toy Universe</title>

<style type="text/css">
.form-control{float: left;width: 70%;}
.btn{float: left;margin-left: 5px;}

.container{position: relative;}
.loading-overlay{
	position: absolute;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	z-index: 2;
	background: rgba(255,255,255,0.7);
}
.overlay-content {
	position: absolute;
	transform: translateY(-50%);
	 -webkit-transform: translateY(-50%);
	 -ms-transform: translateY(-50%);
	top: 50%;
	left: 0;
	right: 0;
	text-align: center;
	color: #555;
}
body {
    background-image: url(../images/thumb-1920-320927.jpg);
    background-repeat: no-repeat;

    background-position: top center;
    background-attachment: fixed;
}
</style>

<script>
function getUsers(type,val){
    $.ajax({
        type: 'POST',
        url: 'bookgetData.php',
        data: 'type='+type+'&val='+val,
		beforeSend:function(html){
			$('.loading-overlay').show();
		},
        success:function(html){
			$('.loading-overlay').hide();
            $('#userData').html(html);
        }
    });
}
</script>
</head>
<body >
<div class="container">
	<h1 align="center" style="font-family:Georgia, serif;font-size:60px;"><span class="label label-primary"><u><b>View & Search Books</b></u></span></h1><br>

    <div class="form-group pull-left">
        <input type="text" class="search form-control" id="searchInput" placeholder="By Name or Code">
        <input type="button" class="btn btn-primary" value="Search" onclick="getUsers('search',$('#searchInput').val())"/>

    </div>
    <div class="form-group pull-right">
        <select class="form-control" onchange="getUsers('sort',this.value)">
          <option value="">Sort By</option>
          <option value="new">Age</option>
          <option value="asc">Ascending Name</option>
          <option value="desc">Descending Name</option>
          <option value="ascc">Ascending Code</option>
          <option value="descc">Descending Code</option>
        </select>
    </div>
    <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
    <table class="table table-hover">
        <thead>
            <tr class="success">
				<th>Code</th>
                <th>Name</th>
                <th>Image</th>
                <th>Image1</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody id="userData">
            <?php
                include 'DB.php';
                $db = new DB();
                $users = $db->getRows('store_books',array('order_by'=>'B_id DESC'));
                if(!empty($users)){ $count = 0;
                    foreach($users as $user){ $count++;
            ?>
            <tr class="info">
								<td><?php echo $user['B_code']; ?></td>
                <td><?php echo $user['B_name']; ?></td>
                <td><?php echo $user['B_image']; ?></td>
                <td><?php echo $user['B_image1']; ?></td>
                <td><?php echo $user['B_price']; ?></td>
                <td><?php echo $user['B_category']; ?></td>
                <td><?php echo $user['B_description']; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr class="warning"><td colspan="6">No Book(s) found...</td></tr>
            <?php } ?>
        </tbody>
        <div class="col-md-4 text-center">
        <button  class="btn btn-primary" onclick="window.location='storemgt.php';" style="align:center;">Back
        </div>
    </table>

</div>

</body>
</html>
