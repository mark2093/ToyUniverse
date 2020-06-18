<?php
include 'DB.php';
$db = new DB();
$tblName = 'lib_products';
$conditions = array();
if(!empty($_POST['type']) && !empty($_POST['val'])){
  if($_POST['type'] == 'search'){
        $conditions['search'] = array('Code'=>$_POST['val'],'Title'=>$_POST['val']);
        $conditions['order_by'] = 'Id DESC';
    }elseif($_POST['type'] == 'sort'){
        $sortVal = $_POST['val'];
        $sortArr = array(
            'new' => array(
                'order_by' => 'Category ASC'
            ),
            'asc'=>array(
                'order_by'=>'Title ASC'
            ),
            'desc'=>array(
                'order_by'=>'Title DESC'
            ),
            'ascc'=>array(
                'order_by'=>'Code ASC'
            ),
            'descc'=>array(
                'order_by'=>'Code DESC'
            ),
            'toy'=>array(
                'where'=>array('Main' => '0')
            ),
            'book'=>array(
                'where'=>array('Main' => '1')
            )

        );
        $sortKey = key($sortArr[$sortVal]);
        $conditions[$sortKey] = $sortArr[$sortVal][$sortKey];
    }
}else{
    $conditions['order_by'] = 'Id DESC';
}
$users = $db->getRows($tblName,$conditions);
if(!empty($users)){
    $count = 0;
    foreach($users as $user): $count++;
        echo '<tr class="info">';
        echo '<td>'.$user['Code'].'</td>';
        echo '<td>'.$user['Title'].'</td>';
        echo '<td>'.$user['Image'].'</td>';
        echo '<td>'.$user['Image1'].'</td>';
        echo '<td>'.$user['Points'].'</td>';

        echo '<td>'.$user['Category'].'</td>';

        echo '<td>'.$user['Description'].'</td>';

        echo '<td>'.$user['Product_keywords'].'</td>';

        echo '<td>'.$user['Main'].'</td>';

        echo '</tr>';
    endforeach;
}else{
    echo '<tr class="warning"><td colspan="9">No Book(s) found...</td></tr>';
}
exit;
