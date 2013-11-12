<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jjwg_MapsViewMap_Display extends SugarView {

  function Jjwg_MapsViewMap_Display() {
    parent::SugarView();
  }
  
  function display() {
    
    $url = 'index.php?module='.$GLOBALS['currentModule'].'&action=map_markers';
    foreach (array_keys($_REQUEST) as $key) {
      if (!in_array($key, array('action', 'module', 'entryPoint'))) {
        $url .= '&'.$key.'='.urlencode($_REQUEST[$key]);
      }
    }
    
?>
<iframe src="<?php echo $url; ?>" 
	width="100%" height="900" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"><p>Sorry, 
    your browser does not support iframes.</p></iframe>

<?php
    if (empty($_REQUEST['uid']) && empty($_REQUEST['current_post'])) {
?>
<p>IFrame: <a href="<?php echo htmlspecialchars($url); ?>"><?php echo $GLOBALS['mod_strings']['LBL_MAP']; ?> URL</a></p>
<?php 
    }
?>


<?php

  }
}
