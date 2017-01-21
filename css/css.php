<?php
    /* Dynamic CSS v0.1 by djphil (CC-BY-NC-SA 4.0) */
?>
<style>
@CHARSET "UTF-8";
.informations,
.gridstatus, 
.regionlist,
.flashinfo,
.eventlist,
.userlist,
.logo
{
    background:rgba(47,79,79, <?php echo $transparency; ?>);
    filter: alpha(opacity = <?php echo ($transparency * 100.0); ?>);
    -moz-opacity: <?php echo $transparency; ?>;
    opacity: <?php echo $transparency; ?>;
}
</style>
