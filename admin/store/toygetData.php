<?php
include 'DB.php';
$db = new DB();
$tblName = 'store_toys';
$conditions = array();
if(!empty($_POST['type']) && !empty($_POST['val'])){
  if($_POST['type'] == 'search'){
        $conditions['search'] = array('St_code'=>$_POST['val'],'St_name'=>$_POST['val']);
        $conditions['order_by'] = 'St_id DESC';
    }elseif($_POST['type'] == 'sort'){
        $sortVal = $_POST['val'];
        $sortArr = array(
            'new' => array(
                'order_by' => 'St_category ASC'
            ),
            'asc'=>array(
                'order_by'=>'St_name ASC'
            ),
            'desc'=>array(
                'order_by'=>'St_name DESC'
            ),
            'ascc'=>array(
                'order_by'=>'St_code ASC'
            ),
            'descc'=>array(
                'order_by'=>'St_code DESC'
            )

        );
        $sortKey = key($sortArr[$sortVal]);
        $conditions[$sortKey] = $sortArr[$sortVal][$sortKey];
    }
}else{
    $conditions['order_by'] = 'St_id DESC';
}
$users = $db->getRows($tblName,$conditions);
if(!empty($users)){
    $count = 0;
    foreach($users as $user): $count++;
        echo '<tr class="info">';
        echo '<td>'.$user['St_code'].'</td>';
        echo '<td>'.$user['St_name'].'</td>';
        echo '<td>'.$user['St_image'].'</td>';
        echo '<td>'.$user['St_image1'].'</td>';
        echo '<td>'.$user['St_price'].'</td>';
        echo '<td>'.$user['St_category'].'</td>';
        echo '<td>'.$user['St_description'].'</td>';
        echo '</tr>';
    endforeach;
}else{
    echo '<tr class="warning"><td colspan="6">No Product(s) found...</td></tr>';
}
exit;
