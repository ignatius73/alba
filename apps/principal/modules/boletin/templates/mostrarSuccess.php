<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Boletine</title>
</head>
<style>
.etiquetas
{
  color: #000;
  font-family: "Trebuchet MS", Arial, Verdana, sans-serif;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
}
</style>
<body>

<?php if ($sf_flash->has('notice')) { ?>
    <div class="save-ok">
        <h2><?php echo $sf_flash->get('notice')?></h2>
    </div>
<?php } else { ?>



BOLETIN DE CALIFICACIONES PERTENECIENTES A <b><?=$alumno->getNombre()." ".$alumno->getApellido()?></b><br>
GRADO <b><?=$division->getAnio()->getDescripcion()?></b><br>
SECCION <b><?=$division->getDescripcion()?></b><br>
TURNO <b><?=$division->getTurnos()->getDescripcion()?></b><br>
<br>

<table style="text-align: left; width: 766px; height: 143px;" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td colspan="1" rowspan="2"><div class="etiquetas">PERIODO</div></td>
      <td colspan="<?=$cantOptionsActividad?>" rowspan="1"><div class="etiquetas">AREAS FORMATIVAS</div></td>
      <td colspan="<?=$cantOptionsConcepto?>" rowspan="1"><div class="etiquetas">APRECIACION PERSONAL</div></td>
      <td colspan="2" rowspan="1"><div class="etiquetas">CONTROL DE ASISTENCIAS</div></td>
      <td colspan="3" rowspan="1"><div class="etiquetas">FIRMAS</div></td>
    </tr>
    <tr>

      <? foreach($optionsActividad as $actividad) { ?> 
      <td><div class="etiquetas"><?=$actividad?></div></td>
      <? } ?>

      <? foreach($optionsConcepto as $concepto) { ?> 
      <td><div class="etiquetas"><?=$concepto?></div></td>
      <? } ?>

      <? if(count($aAsistencia)>0) { 
            foreach( current($aAsistencia) as $grupo => $valor) { ?> 
      <td><div class="etiquetas"><?=$grupo?></div></td>
      <?
            }
        } ?>

      <td><div class="etiquetas">Maestro</div></td>
      <td><div class="etiquetas">Director</div></td>
    </tr>

<? foreach($optionsPeriodo as $periodo_id => $periodo) { ?>
    <tr>
      <td><div class="etiquetas"><?=$periodo?></div></td>
    <? foreach($optionsActividad as $actividad_id => $actividad) { ?> 
      <td><div style="text-align: center;"><?=(array_key_exists($periodo_id, $notaAlumno) AND array_key_exists($actividad_id, $notaAlumno[$periodo_id]))?$notaAlumno[$periodo_id][$actividad_id]:"";?>
    </div></td>
    <? } ?>      
    <? foreach($optionsConcepto as $concepto_id => $concepto) { ?> 
      <td><div style="text-align: center;"><?=(array_key_exists($periodo_id, $conceptoAlumno) AND array_key_exists($concepto_id, $conceptoAlumno[$periodo_id]))?$conceptoAlumno[$periodo_id][$concepto_id]:"";?></div></td>
    <? } ?>      

<? if(count($aAsistencia)>0) { 
       foreach( $aAsistencia[$periodo_id] as $grupo => $valor) { ?> 
      <td><div style="text-align: center;"><?=$valor?></div></td>
      <?
    }
        } ?>

      <td></td>
      <td></td>
    </tr>
<? } ?>
  </tbody>
</table>

<br>
<?php } ?>
<ul class="sf_admin_actions">
<li><? echo button_to('Ir a la cuenta','cuenta?action=verCompleta&id='.$alumno->getFkCuentaId(),array('class'=>'sf_admin_action_list'))?></li>
</ul>

</body>
</html>