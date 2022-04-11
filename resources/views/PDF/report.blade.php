<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte De Servicio</title>

    <style>
        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: Bold !important;
            src: url('{{ asset('fonts/pill/Pill_Gothic_300mg_Bold.ttf') }}') format('truetype');
        }

        body {
            font-family: 'msyh';
            color: #242b52;
            line-height: 1;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 4px;
            margin-top: 0;
        }

        table.separate {
            border-collapse: separate;
            border-spacing: 5px;
        }

        td {
            width: 8.333333%;
        }



        p {
            margin: 0;
        }

        .textCenter {
            text-align: center;
        }

        .textLeft {
            text-align: left;
        }

        .textRight {
            text-align: right;
        }

        .headerText {
            font-family: 'msyh';
            background-color: #001f5b;
            color: #FFF;
            font-size: 35px !important;

        }

        .titlesection {
            font-family: 'msyh';
            background-color: #001f5b;
            color: #FFF;
            font-size: 25px !important;
        }

        .titlesection2 {
            font-family: 'msyh';
            background-color: #001f5b;
            color: #FFF;
            font-size: 18px !important;
        }

        .titlesubsection {
            font-family: 'msyh';
            color: #000000;
            font-size: 18px !important;
        }

        .titlesacar {
            font-family: 'msyh';
            color: #001f5b;
            font-size: 35px !important;
        }

        .titlesacarbody {
            font-family: 'msyh';
            color: #000000;
            font-size: 25px !important;
        }

        .EquipoText {
            font-family: 'msyh';
            background-color: #001f5b;
            color: #FFF;
            font-size: 28px !important;
        }

        tr.grid td {
            visibility: hidden;
            height: 0px !important;
            padding: 0;
        }

        .header {
            font-size: 9px !important;
            margin: 0;
            padding: 0;
        }

        header {
            /* position: fixed; */
            top: 0;
            height: 12.5%;
        }

        table.outter-border {
            border: 1px solid black;
        }

        .borde-sep {
            border: 1px solid black;
        }

        table.separate {
            border-collapse: separate;
            border-spacing: 5px;
        }

        .formlabel {
            font-size: 25px;
            padding-left: 4px;
        }

        td.blankspace {
            background-color: #eae9ef;
            padding-left: 20px;
            /* padding: 9px 0px; */
        }

        td.blankdata {
            background-color: #eae9ef;
            padding-left: 10px;
        }

        div.page {
            page-break-after: always;
            page-break-inside: avoid;
        }

        tbody tr td.bodertd {
            padding-top: 12px;
        }

        .borderR {
            border-right: 1px solid black !important;
        }

        .borderL {
            border-left: 1px solid black !important;
        }

        .tinyText {
            font-size: 20px !important;
            font-family: 'msyh';
            color: #000000;
            border: 0px !important;
            margin: 0px !important;
        }

        .tinyTex {
            font-size: 18px !important;
            font-family: 'msyh';
            color: #000000;
            border: 0px !important;
            margin: 0px !important;
        }

    </style>
</head>

<body>
    <header>
        <table class="header">
            <tr class="grid">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="1" class="textCenter">
                    <img
                        src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logotipo-sacar-vertical.png'))) }}" />
                </td>
                <td colspan="11" style="vertical-align: top;">
                    <table>
                        <tr class="textCenter headerText">
                            <td>
                                REPORTE DE ACTIVIDADES DE SERVICIO
                            </td>
                        </tr>
                    </table>

                    <table class="separate ">
                        <tr class="grid">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">EMPRESA:</p>
                            </td>
                            <td colspan="11" class="blankspace tinyText">{{ $customer->Nom_empresa }}</td>

                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">DIRECCION:</p>
                            </td>
                            <td colspan="11" class="blankspace tinyText">{{ $customer->Direccion }}</td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">CONTACTO:</p>
                            </td>
                            <td colspan="11" class="blankspace tinyText">{{ $customer->Contacto }}</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="formlabel">FECHA:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText">{{ $seccion1[0]->Fecha }}</td>
                            <td colspan="4">
                                <p class="formlabel">ORDEN DE SERVICIO:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText">{{ $seccion1[0]->Folio }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </header>


    <main>
        <table class="separate">
            <tr class="grid">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="12" style="vertical-align: top;">
                    <table>
                        <tr class="textCenter EquipoText">
                            <td>
                                DATOS DEL EQUIPO
                            </td>
                        </tr>
                    </table>

                    <table class="separate outter-border">

                        <tr>
                            <td colspan="1">
                                <p class="formlabel">MARCA:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyTex">{{ $Grua->Marca }} </td>

                            <td colspan="1">
                                <p class="formlabel">RECORRIDO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{ $Grua->Recorrido }}</td>

                            <td colspan="1">
                                <p class="formlabel">VOLTAJE:</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText">{{ $Grua->Voltaje }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">MODELO(s):</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{ $Grua->Modelo }}</td>

                            <td colspan="1">
                                <p class="formlabel">CLARO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{ $Grua->Claro }}</td>

                            <td colspan="1">
                                <p class="formlabel">RESPONSABLE:</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText">{{ $Grua->Responsable }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <p class="formlabel">N°SERIE(s):</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText">{{ $Grua->N_serie }}</td>

                            <td colspan="1">
                                <p class="formlabel">ALTURA:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText">{{ $Grua->Altura }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">AREA:</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText">{{ $Grua->Area }}</td>

                            <td colspan="1">
                                <p class="formlabel">CAPACIDAD:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText">{{ $Grua->Capacidad }}</td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
        <!--end tabledata-->

        <section style="margin-top: 5%">
            <table class="separate">
                <tr>
                    <td class="titlesacar"> 1.- OBJETIVO</td>
                </tr>
                <tbody>
                    <tr>
                        <td class="titlesacarbody">
                            Documentar y reportar todas las actividades realizadas durante el servicio realizado por el
                            personal de SACAR DEL CENTRO MEXICO S.A. DE C.V.
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="separate">
                <tr>
                    <td class="titlesacar">2.-ALCANCE</td>
                </tr>
                <tbody>
                    <tr>
                        <td class="titlesacarbody">
                            Este reporte aplica para {{ $customer->Nom_empresa }} y el equipo descrito en el
                            encabezado.
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="separate">
                <tr>
                    <td class="titlesacar">3.-JUSTIFICACION</td>
                </tr>
                <tbody>
                    <tr>
                        <td class="titlesacarbody">
                            Nuestro cliente requiere realizar inspección y mantenimiento preventivo para mantener su
                            equipo funcionando
                            continuamente de manera segura para su operación diaria.
                        </td>
                    </tr>
                </tbody>
            </table>


            <table class="separate">
                <tr>
                    <td class="titlesacar">4.-ACTIVIDADES REALIZADAS</td>
                </tr>
                <tbody>
                    <tr>
                        <td class="titlesacarbody">
                            Personal de Sacar del Centro México se dio la tarea de realizar las siguientes actividades
                            para el servicio de
                            inspección y mantenimiento preventivo de la grúa viajera identificada como GV01 15/10 TON
                            Konecranes .
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
        <div class="page"></div>
        <div class="page"></div>

        <section>
            <!--///////////////////////////////////////////////////////////Subseccion 1.1//////////////////////////////////////////////////////////////// -->
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>1</th>
                    <th COLSPAN=5>Prueba inicial(sin carga)</th>
                </tr>
                <tbody class="borde-sep">
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep "> Prueba del puente</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>

                    @switch($seccion1[0]->data['1_1_1'])
                        @case(1)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del puente</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 30%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del puente</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 30%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del puente</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 30%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_1_2'])
                        @case(1)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep">NA</td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_1_3'])
                        @case(1)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del
                                    puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del
                                    puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection ">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del
                                    puente
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_1_4'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep "></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep "></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep "></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_1_5'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd  borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd  borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.1.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd  borde-sep"></td>
                            </tr>
                        @break
                    @endswitch
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    @switch($seccion1[0]->data['1_2_1'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class=" bodertd borde-sep">1.2.1</td>
                                <td style="width: 40%;" class=" bodertd borde-sep ">Recorrido del carro</td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class=" bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class=" bodertd borde-sep">1.2.1</td>
                                <td style="width: 40%;" class=" bodertd borde-sep ">Recorrido del carro</td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class=" bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class=" bodertd borde-sep">1.2.1</td>
                                <td style="width: 40%;" class=" bodertd borde-sep ">Recorrido del carro</td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class=" bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class=" bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_2_2'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del carro</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del carro</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado del carro</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep">NA</td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_2_3'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.3</td>
                                <td style="width: 40%;" class="borde-sep ">Limite de fin de carrera/anticolisión del carro
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.3</td>
                                <td style="width: 40%;" class="borde-sep ">Limite de fin de carrera/anticolisión del carro
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.3</td>
                                <td style="width: 40%;" class="borde-sep ">Limite de fin de carrera/anticolisión del carro
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_2_4'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_2_5'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_2_6'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del cable plano</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del cable plano</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del cable plano</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.3//////////////////////////////////////////////////////////// -->

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Prueba del polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    @switch($seccion1[0]->data['1_3_1'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_2'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Frenado de izaje</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_3'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_4'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_5'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite accionado por gancho (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite accionado por gancho (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite accionado por gancho (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_6'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_7'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.7</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.7</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.7</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_8'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.8</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.8</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.8</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_9'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.9</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Vueltas de fricción (Parte mas baja gancho)
                                    <div style="display: inline-block; margin-left: 30px;">N°=</div>
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.9</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Vueltas de fricción (Parte mas baja gancho)
                                    <div style="display: inline-block; margin-left: 30px;">N°=</div>
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.9</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Vueltas de fricción (Parte mas baja gancho)
                                    <div style="display: inline-block; margin-left: 30px;">N°=</div>
                                </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_10'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.10</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.10</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.10</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion1[0]->data['1_3_1'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.11</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Capacidad en puente legible</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.11</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Capacidad en puente legible</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">1.3.11</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Capacidad en puente legible</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Botonera</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                    @switch($seccion2[0]->data['2_1'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion2[0]->data['2_2'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de los botones </td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion2[0]->data['2_3'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion2[0]->data['2_4'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion2[0]->data['2_5'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion2[0]->data['2_6'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Cable de control</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Cable de control</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">2.6</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Cable de control</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 3//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Radio-control</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    @switch($seccion3[0]->data['3_1'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.1</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Condición de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion3[0]->data['3_2'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.2</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de botones</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion3[0]->data['3_3'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="borde-sep">3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="borde-sep">3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="borde-sep">3.3</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (opcional)</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion3[0]->data['3_4'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.4</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch

                    @switch($seccion3[0]->data['3_5'])
                        @case(1)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(2)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break

                        @case(3)
                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">3.5</td>
                                <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 33%;" class="bodertd borde-sep"></td>
                            </tr>
                        @break
                    @endswitch
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
        <div class="page"></div>
        <div class="page"></div>
        <section>
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>4</th>
                    <th COLSPAN=7>Mediciones eléctricas</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1</td>
                        <td style="width: 26%;" class="bodertd borde-sep "> Voltaje de alimentación nominal</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 25%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1.1</td>
                        <td style="width: 26%;" class="bodertd borde-sep ">Voltaje linea-linea </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"> VLL=</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 25%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1.2</td>
                        <td style="width: 26%;" class="bodertd borde-sep ">Voltaje línea-tierra </td>
                        <td style="width: 25%;" class="bodertd borde-sep textCenter"> VLL=</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 25%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 99%; vertical-align:text-bottom;" class="borde-sep">
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente de elevación sin carga</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Gancho principal</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Gancho Auxiliar</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.4</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1 (2ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.5</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2 (2da Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.6</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3 (2da Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente de motor de carro</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Carro principal</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Carro Auxiliar</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter" </td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente de motor de cabezales</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                </tbody>
            </table>
            <!--///////////////////////////////////////////////////////////Seccion 5////////////////////////////////////////////////////////////////// -->
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>5</th>
                    <th COLSPAN=5>Polipasto</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5</td>
                        <td style="width: 30%;" class="bodertd borde-sep "> Tornilleria del Polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Tornilleria general de polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de tapas </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Tambor</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Rotación, cojineste</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ranuras</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Posicion de cable den ranuras</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Bloqueo Axial</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Varillas de conexión</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Corona dentada</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Abrazadera de cable</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Guía del cable</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Movimiento</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Cable de acero</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general (Izquierdo)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medicion de diametro (Izquierdo)
                            <div style="display: inline-block; margin-left: 30px;">D=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general (Derecho)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición de diámetro (Derecho)
                            <div style="display: inline-block; margin-left: 30px;">D=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
        <div class="page"></div>
        <div class="page"></div>
        <section>
            <table style="width: 99%" class="borde-sep">
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Anclaje de cable</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Abrazaderas (tuercas apretadas)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion de cable de acero dentro del
                            punto
                            fijo</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Protector de sobrecarga</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Activación manual</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tornillo de ajuste</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Poleas superiores (Igualadoras)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion polea</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion rodamientos</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Eje de soporte de poleas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Bloque de gancho</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Etiquetas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Tapas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dezplazamiento de cable en poleas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Barra tranversal</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Seguro de gancho</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Apertura de gancho
                            <div style="display: inline-block; margin-left: 30px;">L=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general del gancho de carga</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Motor elevación</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de ventilador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Fijación del motor</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Guarda</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Freno de elevación</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición del disco de freno
                            <div style="display: inline-block; margin-left: 30px;">G=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dientes del disco de freno</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición del disco de fricción</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Modelo del freno
                            <div style="display: inline-block; margin-left: 30px;">M=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Motor reductor de elevación</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapa</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de caja reductora</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido/Temp.)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapón de respiradero</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.12.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Nivel de aceite</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
        <div class="page"></div>
        <div class="page"></div>
        <section>
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>6</th>
                    <th COLSPAN=5>Carro</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Condición general del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Uniones soldadas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Uniones atornilladas (marca testigo)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Esparrago de carro (solo en grúa mono
                            puente)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general de guardas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Amortiguadores (Topes)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los topes de goma</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los topes estructurales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ruedas de carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.4.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de ruedas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.4.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Alineación </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.4.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Estado de rodamientos (Vibraciones)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Motores del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de ventilador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Fijación del motor</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Guarda</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.5.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Frenos del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.6.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición de entrehierro
                            <div style="display: inline-block; margin-left: 30px;">EH=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.6.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición del disco de freno
                            <div style="display: inline-block; margin-left: 30px;">G=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.6.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion dientes del disco de freno </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Motorreductores del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapa</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de caja reductora</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido/Temp.)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapón de respiradero</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.7.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Nivel de aceite</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>

            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>7</th>
                    <th COLSPAN=5>Cabezales</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Cabezales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Placa de amarre soldadas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Uniones atornilladas (marca testigo)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Rieles de rodadura</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.2.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Alineación de los rieles (visual)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.2.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Uniones de los rieles</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Amortiguadores</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.4.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los topes de goma</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.4.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los topes estructurales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
        <div class="page"></div>
        <div class="page"></div>
        <section>
            <table style="width: 99%" class="borde-sep">
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ruedas de los cabezales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.5.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de ruedas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.5.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Alineación (visual)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.5.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Estado de rodamientos (Vibraciones)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Motoreductores de cabezales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de ventilador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Fijación de los motores</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Guarda</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.6.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">7.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Frenos de los cabezales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.7.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición de entrehierro
                            <div style="display: inline-block; margin-left: 30px;">EH=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.7.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición del disco de freno
                            <div style="display: inline-block; margin-left: 30px;">G=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">7.7.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion dientes del disco de freno</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>8</th>
                    <th COLSPAN=5>Controladores</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">8.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Contactores de movimiento de elevacion</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de contactor reversible
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de contactor 2da
                            velocidad</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.1.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de contactor de freno
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.1.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de rectificador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">8.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Variador de frecuencia del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.2.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general del variador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.2.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.2.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Historial de alarmas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">8.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Variador de frecuencia de los cabezales
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general del variador</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.3.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.3.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Historial de alarmas</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">8.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dispositivo de monitorización (CID/OWL)
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.4.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.4.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Valor real del aparejo en pantalla
                            <div style="display: inline-block; margin-left: 30px;">M=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.4.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">8.4.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
            <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
            <div class="page"></div>
            <div class="page"></div>
            <section>
                <table style="width: 99%" class="borde-sep">
                    <tr class="textCenter titlesection2">
                        <th COLSPAN=1>9</th>
                        <th COLSPAN=5>Alimentación de la grúa</th>
                    </tr>
                    <tbody>
                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">9.1</td>
                            <td style="width: 30%;" class="bodertd borde-sep ">Interruptor principal de la grúa</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                            <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                        </tr>
                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.1.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Identificación del interruptor</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.1.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.1.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Orificio de bloqueo</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.1.4</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de voltaje en posición de
                                apagado
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">9.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Fusibles</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.2.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de fusibles (continuidad)
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.2.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de base de fusibles</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Electrificacion</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Soportería (ducto barra/AKAPP)</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Uniones</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de los conductores</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3.4</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de los colectores
                                (zapatas/escobillas)</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.3.5</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición del deslizador (brazo/carro)
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">9.5</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Cable FESTOON</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.5.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición general del cable</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.5.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Carretillas para cable</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.5.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Brazo de arrastre</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">9.6</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Cable del motorreductor de cabezal</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                    </tbody>
                </table>

                <table style="width: 99%" class="borde-sep">
                    <tr class="textCenter titlesection2">
                        <th COLSPAN=1>10</th>
                        <th COLSPAN=5>Control de la grúa</th>
                    </tr>
                    <tbody>
                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1</td>
                            <td style="width: 30%;" class="bodertd borde-sep ">Tablero de control</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                            <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                        </tr>
                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición del tablero</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Etiquetas externas</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Fijación del tablero</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.4</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de puertas</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.5</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de empaque</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.6</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Dispositivos de bloqueo</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.7</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Conectores glándula</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.8</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Rieles DIN</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.10</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Ductos/Canaletas</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.11</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Cableado interno</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.12</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de los contactores</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.13</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Protecciones térmicas
                                <div style="display: inline-block; margin-left: 30px;">C=</div>
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.14</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Guardamotores
                                <div style="display: inline-block; margin-left: 30px;">C=</div>
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.15</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Fusibles
                                <div style="display: inline-block; margin-left: 30px;">C=</div>
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.16</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Condición de clemas</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">10.1.17</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Conectores PLUG</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                    </tbody>
                </table>
            </section>
            <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
            <div class="page"></div>
            <div class="page"></div>
            <section>
                <table style="width: 99%" class="borde-sep">
                    <tr class="textCenter titlesection2">
                        <th COLSPAN=1>11</th>
                        <th COLSPAN=5>Pruebas finales (sin carga)</th>
                    </tr>
                    <tbody>
                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">11.1</td>
                            <td style="width: 30%;" class="bodertd borde-sep ">Prueba del puente</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                            <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.1.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del puente</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.1.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Frenado del puente</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.1.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Límite de fin de carrera/anticolisión
                                del
                                puente</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">11.2</td>
                            <td style="width: 30%;" class="bodertd borde-sep ">Prueba del carro</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                            <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.2.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del carro</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.2.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Frenado del carro</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.2.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión
                                del
                                carro</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesection2">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3</td>
                            <td style="width: 30%;" class="bodertd borde-sep ">Prueba del polipasto</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">OK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NOK</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter">NA</td>
                            <td style="width: 30%;" class="bodertd borde-sep textCenter">Comentarios</td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.1</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.2</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Frenado de izaje</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.3</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.4</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.6</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto
                            </td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.7</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.8</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>

                        <tr class="titlesubsection">
                            <td style="width: 4%;" class="bodertd borde-sep">11.3.9</td>
                            <td style="width: 40%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                            <td style="width: 33%;" class="bodertd borde-sep"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
            <div class="page"></div>
            <div class="page"></div>

            <section style="margin-top: 5%">
                <table class="separate">
                    <tr>
                        <td class="titlesacar"> 6.- EQUIPO DE TRABAJO </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="titlesacarbody">

                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="separate">
                    <tr>
                        <td class="titlesacar">7.- RECOMENDACIONES Y SUGERENCIAS</td>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="titlesacarbody">
                                Se deben realizar inspecciones frecuentes, periódicas y mantenimientos preventivos de
                                acuerdo
                                con el manual de fabricante para asegurar el correcto funcionamiento.
                                <br><br>
                                AQUÍ SE DEBE DEJAR UN ESPACIO POR SI SE QUIERE REALIZAR COMENTARIOS ADICIONALES
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="separate">
                    <tr>
                        <td class="titlesacar">8.- CONCLUCION</td>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="titlesacarbody">
                                El equipo se encuentra funcionando correctamente, se recomienda realizar el cambio de lo
                                que
                                se detectó para mantener el equipo funcionando correctamente.
                                <br><br>
                                Sin más por el momento esperamos que esta información le sea la adecuada, sin embargo,
                                si
                                usted requiere información adicional no dude en contactarnos, con mucho gusto le
                                atenderemos.
                                <br><br>
                                Sin más por el momento quedamos en espera de sus noticias.
                            </td>
                        </tr>
                    </tbody>
                </table>

                <br><br><br><br><br><br>

                <table class="separate">
                    <tr>
                        <td class="titlesacar textCenter">ATENTAMENTE</td>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="titlesacarbody textCenter">
                                Ing. Alejandro Acosta
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
    </main>

</body>

</html>
