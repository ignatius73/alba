<?php
// auto-generated by sfPropelAdmin
// date: 2007/07/18 17:55:34
?>
  <th id="sf_admin_list_th_nombre">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/horarioescolar/sort') == 'nombre'): ?>
      <?php echo link_to(__('Nombre'), 'horarioescolar/list?sort=nombre&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Nombre'), 'horarioescolar/list?sort=nombre&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_descripcion">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/horarioescolar/sort') == 'descripcion'): ?>
      <?php echo link_to(__('Descripcion'), 'horarioescolar/list?sort=descripcion&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Descripcion'), 'horarioescolar/list?sort=descripcion&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_dia_evento">
        <?php echo __('Evento') ?>
          </th>
  <th id="sf_admin_list_th_fk_horarioescolartipo_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/horarioescolar/sort') == 'fk_horarioescolartipo_id'): ?>
      <?php echo link_to(__('Tipo Horario Escolar'), 'horarioescolar/list?sort=fk_horarioescolartipo_id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Tipo Horario Escolar'), 'horarioescolar/list?sort=fk_horarioescolartipo_id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_fk_establecimiento_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/horarioescolar/sort') == 'fk_establecimiento_id'): ?>
      <?php echo link_to(__('Establecimiento'), 'horarioescolar/list?sort=fk_establecimiento_id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/horarioescolar/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Establecimiento'), 'horarioescolar/list?sort=fk_establecimiento_id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_turnos_list">
        <?php echo __('Turno') ?>
          </th>
