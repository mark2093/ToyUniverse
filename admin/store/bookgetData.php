<?php
include 'DB.php';
$db = new DB();
$tblName = 'store_books';
$conditions = array();
if(!empty($_POST['type']) && !empty($_POST['val'])){
  if($_POST['type'] == 'search'){
        $conditions['search'] = array('B_code'=>$_POST['val'],'B_name'=>$_POST['val']);
        $conditions['order_by'] = 'B_id DESC';
    }elseif($_POST['type'] == 'sort'){
        $sortVal = $_POST['val'];
        $sortArr = array(
            'new' => array(
                'order_by' => 'B_category ASC'
            ),
            'asc'=>array(
                'order_by'=>'B_name ASC'
            ),
            'desc'=>array(
                'order_by'=>'B_name DESC'
            ),
            'ascc'=>array(
                'order_by'=>'B_code ASC'
            ),
            'descc'=>array(
                'order_by'=>'B_code DESC'
            )

        );
        $sortKey = key($sortArr[$sortVal]);
        $conditions[$sortKey] = $sortArr[$sortVal][$sortKey];
    }
}else{
    $conditions['order_by'] = 'B_id DESC';
}
$users = $db->getRows($tblName,$conditions);
if(!empty($users)){
    $count = 0;
    foreach($users as $user): $count++;
        echo '<tr class="info">';
        echo '<td>'.$user['B_code'].'</td>';
        echo '<td>'.$user['B_name'].'</td>';
        echo '<td>'.$user['B_image'].'</td>';
        echo '<td>'.$user['B_image1'].'</td>';
        echo '<td>'.$user['B_price'].'</td>';
        echo '<td>'.$user['B_category'].'</td>';
        echo '<td>'.$user['B_description'].'</td>';
        echo '</tr>';
    endforeach;
}else{
    echo '<tr class="warning"><td colspan="6">No Book(s) found...</td></tr>';
}
exit;
