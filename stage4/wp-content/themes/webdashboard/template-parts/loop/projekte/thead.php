<?php 
   /**
   * Thead for Projekt Loop
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */
  $isstatus = $args['isstatus'];
  if ($isstatus){
   echo '<thead><tr><th class="overline">Name</th><th class="overline">Kunde</th><th class="overline">Version</th><th class="overline"></th></tr></thead>';
  }else{
   echo '<thead><tr><th class="overline">Name</th><th class="overline">Kunde</th><th class="overline">Status</th><th class="overline"></th></tr></thead>';
  }
