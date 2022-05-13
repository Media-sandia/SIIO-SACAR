<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte De Servicio</title>
    <link href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: Bold !important;
            src: url('{{ asset('fonts/pill/Pill_Gothic_300mg_Bold.ttf') }}') format('truetype');
        }

        @page {
            margin: 1cm 1cm 0;
            size: 21.59cm 27.94cm;
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
            border-spacing: 4px;
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
            font-size: 30px !important;

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
            font-size: 17px !important;
        }

        .titlesubsection {
            font-family: 'msyh';
            color: #000000;
            font-size: 16px !important;
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
            font-size: 20px !important;
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
            font-size: 15px;
            padding-left: 4px;
            padding-right: 0px;
        }

        td.blankspace {
            background-color: #eae9ef;
            /* padding-left: 20px; */
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
            padding-top: 10px;
            padding-left: 5px;
        }

        .borderR {
            border-right: 1px solid black !important;
        }

        .borderL {
            border-left: 1px solid black !important;
        }

        .tinyText {
            font-size: 16px !important;
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
        .imgEvidence{
            padding: 10px;
            width: 390px;
            height: 320px;
        }
        .imgcenter{
            text-align: center;
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
                    <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logotipo-sacar-vertical.png'))) }}" />
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
                            <td colspan="3" class="blankspace tinyText">{{$seccion1[0]->Folio}}</td>
                            <td colspan="4">
                                <p class="formlabel">ORDEN DE SERVICIO:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText"></td>
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
                            <td style="width: 16%;">
                                <p class="formlabel">MARCA DEL LA GRÚA:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyTex">{{$Gruas->MarcaGrua}}</td>

                            <td colspan="1">
                                <p class="formlabel">RECORRIDO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{$Gruas->MarcaGrua}}</td>

                            <td colspan="0">
                                <p class="formlabel">VOLTAJE:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{$Gruas->Voltaje}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">N° DE SERIE GRÚA:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText">{{$Gruas->NSGrua}}</td>

                            <td colspan="1">
                                <p class="formlabel">CLARO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{$Gruas->Claro}}</td>

                            <td style="width: 20%;">
                                <p class="formlabel">TIPO DE ALIMENTACION:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText">{{$Gruas->TipoAlim}}</td>
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
                            <td style="width: 20%;">
                                <p class="formlabel">MARCA DE POLIPASTO:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"> {{$Gruas->MarcaPolipasto}}</td>

                            <td colspan="1">
                                <p class="formlabel">ALTURA:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText"> {{$Gruas->Altura}}</td>

                            <td style="width: 22%;">
                                <p class="formlabel">UBICACION ALIMENTACION:</p>
                            </td>
                            <td colspan="1" class="blankspace tinyText">{{$Gruas->UbicacionAli}}</td>
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
                            <td style="width: 20%;">
                                <p class="formlabel">MODELO DE POLIPASTO:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText">{{$Gruas->ModeloPoli}}</td>

                            <td colspan="1">
                                <p class="formlabel">CAPACIDAD:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText">{{$Gruas->Capacidad}}</td>

                            <td style="width: 22%;">
                                <p class="formlabel">AREA</p>
                            </td>
                            <td colspan="1" class="blankspace tinyText">{{$Gruas->Area}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="width: 22%;">
                                <p class="formlabel">N° DE SERIE DE POLIPASTO:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText">{{$Gruas->NSPoli}}</td>
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
                            Este reporte aplica para y el equipo descrito en el
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
            <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>1</th>
                    <th COLSPAN=12>PRUEBA INCIAL SIN CARGA</th>
                </tr>
                <tbody class="borde-sep">
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep "> PRUEBA DEL PUENTE</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">COMENTARIOS</td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep "> Recorrido del puente</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                                if($seccion1[0]->data['1_1_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                                }
                            @endphp
                         </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                                if($seccion1[0]->data['1_1_1']==4){
                                    echo "<i class='ni ni-check-bold'>";
                                }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                                if($seccion1[0]->data['1_1_1']==3){
                                    echo "<i class='ni ni-fat-remove'>";
                                }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Frenado del puente </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.3</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del puente</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.4</td>
                        <td style="width: 35%;" class="bodertd borde-sep "> Estado de amortiguadores (Topes de goma) </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.5</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">PRUEBA DEL CARRO</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 10%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Recorrido del carro </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_1_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Frenado del carro</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.3</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del carro</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.4</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.5</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.6</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Recorrido del cable plano</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_6']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_6']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_6']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_2_6']==4){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.3//////////////////////////////////////////////////////////// -->

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">PRUEBA DEL POLIPASTO</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 10%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_4']==3){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_1']==4){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Frenado de izaje</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.3</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.4</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.5</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Límite accionado por gancho (opcional)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.6</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_6']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_6']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_6']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_6']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.7</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_7']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_7']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_7']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_7']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.8</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_8']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_8']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_8']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_8']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.9</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Vueltas de fricción (Parte mas baja gancho <div style="display: inline-block; margin-left: 30px;">N°=</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_9']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_9']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_9']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_9']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.10</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_10']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_10']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_10']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_10']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.11</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Capacidad en puente legible</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_11']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_11']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_11']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion1[0]->data['1_3_11']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 10%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">BOTONERA</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los botones </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_1']==3){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de los botones</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Cable de control</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_6']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_6']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_6']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion2[0]->data['2_6']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 3//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">RADIO-CONTROL</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de botones</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de botones</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion3[0]->data['3_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
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
                    <th COLSPAN=1>4</th>
                    <th COLSPAN=7>MEDICIONES ELÉCTRICAS</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">VOLTAJE DE ALIMENTACIÓN NOMINAL</td>
                        <td style="width: 4%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 10%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                        <td style="width: 10%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                        <td style="width: 10%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"> NA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">COMENTARIOS</td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1.1</td>
                        <td style="width: 25%;" class="bodertd borde-sep ">Voltaje linea-linea</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"> VLL= {{$seccion4[0]->data['VLL']}}</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['4_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['4_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['4_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['4_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.1.2</td>
                        <td style="width: 25%;" class="bodertd borde-sep ">Voltaje línea-tierra</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">VLT= {{$seccion4[0]->data['VLT']}}</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['421']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['421']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['421']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion4[0]->data['421']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 99%; vertical-align:text-bottom;" class="borde-sep">
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">CORRIENTE DE ELEVACIÓN SIN CARGA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">GANCHO PRINCIPAL</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">GANCHO AUXILIAR</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter">COMENTARIOS</td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1 (1ra Velocidad)</td>
                        <td style="width: 17%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GP4_2_1']}}</td>
                        <td style="width: 17%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GA4_2_1']}}</td>
                        <td style="width: 30%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GP4_2_2']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GA4_2_2']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GP4_2_3']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GA4_2_3']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.4</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1 (2ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GP4_2_4']}} </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GA4_2_4']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.5</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2 (2da Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GP4_2_5']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GA4_2_5']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.2.6</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3 (2da Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GP4_2_6']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GA4_2_6']}} </td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">CORRIENTE EN MOTOR DE CARRO</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CARRO PRINCIPAL</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CARRO AUXILIAR</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GP4_3_1']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GA4_3_1']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GP4_3_2']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GP4_3_2']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.3.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GP4_3_3']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GP4_3_3']}}</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"> </td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">CORRIENTE EN MOTOR DE CABEZALES</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.1</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1= {{$seccion4[0]->data['GP4_4_1']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.2</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 2</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL3= {{$seccion4[0]->data['GP4_4_2']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">4.4.3</td>
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 3</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL2= {{$seccion4[0]->data['GP4_4_3']}}</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter bg-sacar"></td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                </tbody>
            </table>
             <!--///////////////////////////////////////////////////////////Seccion 5////////////////////////////////////////////////////////////////// -->
             <table style="width: 99%" class="borde-sep">
                <tr class="textCenter titlesection2">
                    <th COLSPAN=1>5</th>
                    <th COLSPAN=11>POLIPASTO</th>
                </tr>
                <tbody>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">TORNILLERIA DEL POLIPASTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Tornilleria general de polipasto</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general de tapas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">TAMBOR</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Rotación, cojineste</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ranuras</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Posicion de cable en ranuras</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Bloqueo Axial</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Varillas de conexión</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Corona dentada</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_6']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_6']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_6']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_6']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.2.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Abrazadera de cable</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_7']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_7']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_7']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_2_7']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">GUÍA DEL CABLE</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Movimiento</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_3_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">CABLE DE ACERO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general (Izquierdo)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medicion de diametro (Izquierdo)
                            <div style="display: inline-block; margin-left: 30px;">D= {{$seccion5[0]->data['D5_2_2'] ?? ''}}</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general (Derecho)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.4.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición de diámetro (Derecho)
                            <div style="display: inline-block; margin-left: 30px;">D= {{$seccion5[0]->data['D5_4_4']}}</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_4_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">ANCLAJE DE CABLE</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Abrazaderas (tuercas apretadas)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.5.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion de cable de acero dentro del
                            punto fijo</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_5_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
             <div class="page"></div>
             <div class="page"></div>
                <table style="width: 99%" class="borde-sep">
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">PROTECTOR DE SOBRECARGA</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">COMENTARIOS</td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Activación manual</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.6.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tornillo de ajuste</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_6_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">POLEAS SUPERIORES (IGUALADORAS)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion polea</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion rodamientos</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.7.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Eje de soporte de poleas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_7_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">BLOQUE DE GANCHO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Etiquetas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Tapas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dezplazamiento de cable en poleas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Barra transversal</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Seguro de gancho</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Apertura de gancho
                            <div style="display: inline-block; margin-left: 30px;">L=</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_6']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_6']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_6']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_6']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.8.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condicion general del gancho de carga</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_7_']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_7_']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_7_']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_8_7_']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">BLOQUE DE GANCHO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de ventilador</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Guarda</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Conexiones</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.9.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición general</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_9_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">FRENO DE ELEVACIÓN</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Medición del disco de freno
                            <div style="display: inline-block; margin-left: 30px;">G=</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dientes del disco de freno</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dientes del disco de freno</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición del disco de fricción</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.10.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Modelo del freno
                            <div style="display: inline-block; margin-left: 30px;">M=</div>
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_10_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">MOTORREDUCTOR DE ELEVACIÓN</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapa</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de caja reductora</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido/Temp.)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de tapón de respiradero</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">5.11.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Nivel de aceite</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_5']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_5']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_5']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion5[0]->data['5_11_5']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="textCenter titlesection2">
                        <th COLSPAN=1>6</th>
                        <th COLSPAN=12>CARRO</th>
                    </tr>
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">CONDICIÓN GENERAL DEL CARRO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Uniones soldadas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Uniones atornilladas (marca testigo)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_2']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_2']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_2']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_2']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.3</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Esparrago de carro (solo en grúa mono
                            puente)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_3']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_3']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_3']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_3']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.1.4</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Condición general de guardas</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_4']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_4']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_4']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_1_4']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">6.2</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">AMORTIGUADORES (TOPES)</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">Comentarios</td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">6.2.1</td>
                        <td style="width: 35%;" class="bodertd borde-sep ">Condición de los topes de goma</td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_2_1']==1){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_2_1']==2){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 6%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_2_1']==4){
                                echo "<i class='ni ni-check-bold'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 3%;" class="bodertd borde-sep textCenter">
                            @php
                            if($seccion6[0]->data['6_2_1']==3){
                                echo "<i class='ni ni-fat-remove'>";
                            }
                            @endphp
                        </td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                    </tr>


                </table>
                <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
                   <div class="page"></div>
                   <div class="page"></div>

                   <section>
                       <table style="width: 99%" class="borde-sep">
                           <tbody>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.2.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los topes estructurales</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_2_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_2_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_2_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_2_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">6.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">RUEDAS DE CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.3.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condicion general de ruedas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.3.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Alineación</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.3.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Estado de rodamientos (Vibraciones)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_3_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">MOTORES DEL CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Funcionamiento de ventilador</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Fijación del motor</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Guarda</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conexiones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.4.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_6']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_6']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_6']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_4_6']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">6.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">FRENOS DEL CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.5.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Medición de entrehierro
                                    <div style="display: inline-block; margin-left: 30px;">EH=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.5.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Medición del disco de freno
                                    <div style="display: inline-block; margin-left: 30px;">G=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.5.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condicion dientes del disco de freno </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_5_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">MOTORREDUCTORES DEL CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de tapa</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de caja reductora</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Comportamiento (Vibración/Ruido/Temp.)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de tapón de respiradero</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">6.6.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Nivel de aceite</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion6[0]->data['6_6_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="textCenter titlesection2">
                                <th COLSPAN=1>7</th>
                                <th COLSPAN=12>CABEZALES</th>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">CONDICIÓN GENERAL DE LOS CABEZALES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.1.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Placa de amarre soldadas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.1.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Uniones atornilladas (marca testigo) </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_1_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">RIELES DE RODADURA</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.2.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.2.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Alineación de los rieles (visual)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.2.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Uniones de los rieles</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_2_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">AMORTIGUADORES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.3.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los topes de goma </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.3.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los topes estructurales</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_3_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">RUEDAS DE LOS CABEZALES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.4.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condicion general de ruedas </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.4.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Alineación (visual)  </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.4.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Estado de rodamientos (Vibraciones) </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_4_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">MOTOREDUCTORES DE CABEZALES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep "> Comportamiento (Vibración/Ruido)  </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep "> Funcionamiento de ventilador  </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                     @php
                                    if($seccion7[0]->data['7_5_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep "> Fijación de los motores  </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Guarda</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conexiones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.5.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición General</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_6']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_6']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_6']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_5_6']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">7.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">FRENOS DE LOS CABEZALES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"> </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.6.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Medición de entrehierro
                                    <div style="display: inline-block; margin-left: 30px;">EH=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.6.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Medición del disco de freno
                                    <div style="display: inline-block; margin-left: 30px;">G=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">7.6.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición dientes del disco de freno</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion7[0]->data['7_6_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>


                            <tr class="textCenter titlesection2">
                                <th COLSPAN=1>8</th>
                                <th COLSPAN=12>CONTROLADORES</th>
                            </tr>
                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">8.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">CONTACTORES DE MOVIMIENTO DE ELEVACION</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter">Comentarios</td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.1.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general de contactor reversible</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.1.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general de contactor 2da velocidad</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.1.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general de contactor de freno</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.1.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general del rectificador</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_1_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">8.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">VARIADOR DE FRECUENCIA DEL CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.2.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general del variador</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.2.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.2.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conexiones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.2.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Historial de alarmas </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_2_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">8.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">VARIADOR DE FRECUENCIA DE LOS CABEZALES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.3.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general del variador</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.3.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.3.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conexiones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.3.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Historial de alarmas </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_3_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">8.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">DISPOSITIVO DE MONITORIZACIÓN (CID/OWL)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.4.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.4.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Valor real del aparejo en pantalla
                                    <div style="display: inline-block; margin-left: 30px;">M=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.4.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">LED de alarmas apagado</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">8.4.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conexiones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion8[0]->data['8_4_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="textCenter titlesection2">
                                <th COLSPAN=1>9</th>
                                <th COLSPAN=12>ALIMENTACIÓN DE LA GRÚA</th>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">INTERRUPTOR PRINCIPAL DE LA GRÚA</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Identificación del interruptor</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Funcionamiento</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Orificio de bloqueo</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Ausencia de voltaje en posición de apagado</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_1_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">9.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">FUSIBLES</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.2.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de fusibles (continuidad)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.2.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de base de fusibles</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_2_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">ELECTRIFICACION</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Soportería (ducto barra/AKAPP)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Uniones</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los conductores</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los colectores (zapatas/escobillas)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.3.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición del deslizador (brazo/carro)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_3_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
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
                                <td style="width: 4%;" class="bodertd borde-sep">9.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">CABLE FESTOON</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.4.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición general del cable</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.4.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Carretillas para cable</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.4.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Brazo de arrastre</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_4_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.4.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Cable del motorreductor de cabezal</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion9[0]->data['9_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="textCenter titlesection2">
                                <th COLSPAN=1>10</th>
                                <th COLSPAN=12>CONTROL DE LA GRÚA</th>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">TABLERO DE CONTROL</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">CORRECTO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">INCORRECTO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">CORREGIDO</td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter">NA</td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter">COMENTARIOS</td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Tablero de control</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">9.1.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Etiquetas externas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Fijación del tablero</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de puertas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de empaque</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Dispositivos de bloqueo</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_6']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_6']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_6']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_6']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.7</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conectores glándula</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_7']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_7']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_7']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_7']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.8</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Rieles DIN</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_8']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_8']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_8']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_8']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.9</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Ductos/Canaletas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_9']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_9']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_9']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_9']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.10</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Cableado interno</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_10']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_10']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_10']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_10']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.11</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de los contactores</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_11']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_11']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_11']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_11']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.12</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Protecciones térmicas
                                    <div style="display: inline-block; margin-left: 30px;">C=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_12']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_12']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_12']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_12']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.13</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Guardamotores
                                    <div style="display: inline-block; margin-left: 30px;">C=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_13']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_13']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_13']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_13']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.14</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Fusibles
                                    <div style="display: inline-block; margin-left: 30px;">C=</div>
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_14']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_14']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_14']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_1_14']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.15</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Condición de clemas</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_15']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_15']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_15']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_15']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">10.1.16</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Conectores PLUG</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_16']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_16']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_16']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion10[0]->data['10_3_16']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="textCenter titlesection2">
                                <th COLSPAN=1>11</th>
                                <th COLSPAN=12>PRUEBAS FINALES SIN CARGA</th>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">11.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">PRUEBA DEL PUENTE</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.1.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Recorrido del puente</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.1.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Frenado del puente</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.1.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Límite de fin de carrera/anticolisión del puente</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_1_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">11.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">PRUEBA DEL CARRO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.2.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Recorrido del carro</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.2.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Frenado del carro</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.2.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del carro</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_2_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesection2">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">PRUEBA DEL POLIPASTO</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 3%;" class="bodertd borde-sep textCenter"></td>
                                <td style="width: 15%;" class="bodertd borde-sep textCenter"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.1</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_1']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_1']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_1']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_1']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.2</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Frenado de izaje</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_2']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_2']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_2']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_2']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.3</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_3']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_3']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_3']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_3']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.4</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_4']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_4']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_4']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_4']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.5</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_5']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_5']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_5']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_5']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.6</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_6']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_6']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_6']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_6']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.7</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_7']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_7']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_7']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_3_7']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>

                            <tr class="titlesubsection">
                                <td style="width: 4%;" class="bodertd borde-sep">11.3.8</td>
                                <td style="width: 35%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_4_8']==1){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_4_8']==2){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_4_8']==4){
                                        echo "<i class='ni ni-check-bold'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 6%;" class="bodertd borde-sep textCenter">
                                    @php
                                    if($seccion11[0]->data['11_4_8']==3){
                                        echo "<i class='ni ni-fat-remove'>";
                                    }
                                    @endphp
                                </td>
                                <td style="width: 15%;" class="bodertd borde-sep"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>

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
                                Sacar Del Centro Mexico S.A De C.V
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        @for($e=0;$e<count($Files);$e++)
                <!--///////////////////////////////////////////////////////////Salto de pagina////////////////////////////////////////////////////////////////// -->
                <div class="page"></div>
                <div class="page"></div>
                <section>
                    <table style="width: 99%" class="borde-sep">
                        <tr class="textCenter headerText">
                            <th COLSPAN=12>{{\App\Models\items::find($item[$e]->id)->name;}}</th>
                        </tr>
                        <tbody class="borde-sep">
                            <tr class="titlesubsection">
                                <td style="width: 50%;" class="bodertd borde-sep imgcenter">
                                    @if(isset($Files[$e][0]->uri) != false)
                                    <img class="imgEvidence" src="{{Storage::url($Files[$e][0]->uri)}}" />
                                    @endif
                                </td>
                                <td style="width: 49%;" class="bodertd borde-sep imgcenter">
                                    @if(isset($Files[$e][1]->uri) != false)
                                    <img class="imgEvidence" src="{{Storage::url($Files[$e][1]->uri)}}" />
                                    @endif
                                </td>
                            </tr>
                            <tr class="titlesubsection">
                                <td style="width: 50%;" class="bodertd borde-sep imgcenter">
                                    @if(isset($Files[$e][2]->uri) != false)
                                    <img class="imgEvidence" src="{{Storage::url($Files[$e][2]->uri)}}" />
                                    @endif
                                </td>
                                <td style="width: 49%;" class="bodertd borde-sep imgcenter">
                                    @if(isset($Files[$e][3]->uri) != false)
                                        <img class="imgEvidence" src="{{Storage::url($Files[$e][3]->uri)}}" />
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
        @endfor <!--End For-->
    </main>
</body>

</html>
