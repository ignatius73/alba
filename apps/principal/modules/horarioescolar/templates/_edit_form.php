<?php
// auto-generated by sfPropelAdmin
// date: 2007/07/18 17:55:34
?>
<?php echo form_tag('horarioescolar/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($horarioescolar, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('horarioescolar[nombre]', __($labels['horarioescolar{nombre}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('horarioescolar{nombre}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('horarioescolar{nombre}')): ?>
    <?php echo form_error('horarioescolar{nombre}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($horarioescolar, 'getNombre', array (
  'size' => 64,
  'control_name' => 'horarioescolar[nombre]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('horarioescolar[descripcion]', __($labels['horarioescolar{descripcion}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('horarioescolar{descripcion}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('horarioescolar{descripcion}')): ?>
    <?php echo form_error('horarioescolar{descripcion}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($horarioescolar, 'getDescripcion', array (
  'size' => 64,
  'control_name' => 'horarioescolar[descripcion]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>


<?php include_partial('evento/carga_evento', array('horarioescolar' => $horarioescolar, 'evento' => $evento)) ?>





<div class="form-row">
  <?php echo label_for('horarioescolar[fk_horarioescolartipo_id]', __($labels['horarioescolar{fk_horarioescolartipo_id}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('horarioescolar{fk_horarioescolartipo_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('horarioescolar{fk_horarioescolartipo_id}')): ?>
    <?php echo form_error('horarioescolar{fk_horarioescolartipo_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_select_tag($horarioescolar, 'getFkHorarioescolartipoId', array (
  'related_class' => 'Horarioescolartipo',
  'control_name' => 'horarioescolar[fk_horarioescolartipo_id]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('horarioescolar[fk_turno_id]', __($labels['horarioescolar{fk_turno_id}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('horarioescolar{fk_turno_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('horarioescolar{fk_turno_id}')): ?>
    <?php echo form_error('horarioescolar{fk_turno_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('fk_turno_id', array('type' => 'edit', 'horarioescolar' => $horarioescolar)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('horarioescolar' => $horarioescolar)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($horarioescolar->getId()): ?>
<?php echo button_to(__('delete'), 'horarioescolar/delete?id='.$horarioescolar->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
