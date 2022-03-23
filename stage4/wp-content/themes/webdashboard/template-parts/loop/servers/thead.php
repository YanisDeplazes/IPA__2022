<?php 
   /**
   * Thead for Server Loop
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

  $isstatus = $args['isstatus'];
  if ($isstatus){
   echo '<thead><tr><th class="overline">Servername</th><th class="overline">Host</th><th class="overline">Projekte</th><th class="overline"></th></tr></thead>';
}else{
   echo '<thead><tr><th class="overline">Servername</th><th class="overline">Host</th><th class="overline">Version</th><th class="overline"></th></tr></thead>';
}

