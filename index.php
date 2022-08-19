<?php
header('Content-Type: application/json');
require_once 'modelo/datosOperacion.php';
require_once 'modelo/persona.php';
require_once 'modelo/oportunidad.php';
require_once 'modelo/respuestaOportunidad.php';


$d = new DatosOperacion();
$d->montoSolicitado = 500000;
$d->linea = '504';
$d->cantidadCuotas = 12;
$d->tasaEfectivaMensual = 2.9589;
$d->coutaPromedio = 53503.08;
$d->tasaNominalAnual = 36;
$d->costoFinancieroTotal = 56.55;

$p = new Persona();
$p->nombres = 'Pedro Rodriguez';
$p->sexo = 'F';
$p->documento = '123123';
$p->email = 'aaaa@aaaa.com.ar';
$p->celular = '123456';
$p->telefonoAlternativo = '123456';

$o = new Oportunidad();
$o->persona = $p;
$o->datosOperacion = $d;
$o->smsConsultaId = '17654293 - 27258197726';
$o->idValidatorId = 893;
$o->motorSolaFirmaId = 8870;

$r = new respuestaOportunidad();
$r->oportunidad = $o;
$r->isOk = true;

echo json_encode($r);
