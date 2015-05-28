<?php
$items = array();
switch ($view) {
  case 'form':
    $items[] = array('url' => '?display=disa', 'label' => '<i class="fa fa-list"></i> '._("List DISA(s)"));
    if(isset($_REQUEST['destid'])){
      $items[] = array('url' => '?display=disa&view=form', 'label' => '<i class="fa fa-plus"></i> '._("Add DISA"));
    }
  break;

  default:
    # code...
  break;
}

if(!empty($items)){
  echo '<div class="col-sm-3 hidden-xs bootnav">
          <div class="list-group">';
  foreach($items as $item){
    echo '<a href="'.$item['url'].'" class="list-group-item">'.$item['label'].'</a>';
  }
  echo '  </div>
  </div>';
}
