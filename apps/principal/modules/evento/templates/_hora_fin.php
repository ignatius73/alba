<?php use_helper('DateForm') ?>
<?php echo select_time_tag("evento[hora_fin]", $evento->getHoraFin(), array('include_second' => false, '12hour_time' => true ), array('disabled' => true));?>