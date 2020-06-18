<?php
include 'DB.php';
$db = new DB();
$tblName = 'users';
$conditions = array();
if(!empty($_POST['type']) && !empty($_POST['val'])){
  if($_POST['type'] == 'search'){
        $conditions['search'] = array('fname'=>$_POST['val'],'email'=>$_POST['val']);
        $conditions['order_by'] = 'id DESC';
    }elseif($_POST['type'] == 'sort'){
        $sortVal = $_POST['val'];
        $sortArr = array(
            'new' => array(
                'order_by' => 'points DESC'
            ),
            'asc'=>array(
                'order_by'=>'fname ASC'
            ),
            'desc'=>array(
                'order_by'=>'fname DESC'
            ),
            'member'=>array(
                'where'=>array('role'=>'Member')
            ),
            'admin'=>array(
                'where'=>array('role'=>'Admin')
            )
        );
        $sortKey = key($sortArr[$sortVal]);
        $conditions[$sortKey] = $sortArr[$sortVal][$sortKey];
    }
}else{
    $conditions['order_by'] = 'id DESC';
}
$users = $db->getRows($tblName,$conditions);
if(!empty($users)){
    $count = 0;
    foreach($users as $user): $count++;
        echo '<tr class="info">';
        echo '<td>'.$user['fname'].'</td>';
        echo '<td>'.$user['lname'].'</td>';
        echo '<td>'.$user['email'].'</td>';
        echo '<td>'.$user['points'].'</td>';
        $status = ($user['role']== Member)?'Member':'Admin';
        echo '<td>'.$status.'</td>';
        echo '</tr>';
    endforeach;
}else{
    echo '<tr><td colspan="6">No user(s) found...</td></tr>';
}
exit;
