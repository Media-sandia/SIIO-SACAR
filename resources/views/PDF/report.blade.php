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
                            <td colspan="11" class="blankspace tinyText"></td>

                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">DIRECCION:</p>
                            </td>
                            <td colspan="11" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="formlabel">CONTACTO:</p>
                            </td>
                            <td colspan="11" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="formlabel">FECHA:</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"></td>
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
                            <td colspan="1">
                                <p class="formlabel">MARCA:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">RECORRIDO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">VOLTAJE:</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText"></td>
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
                            <td colspan="2" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">CLARO:</p>
                            </td>
                            <td colspan="2" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">RESPONSABLE:</p>
                            </td>
                            <td colspan="4" class="blankspace tinyText"></td>
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
                            <td colspan="4" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">ALTURA:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText"></td>
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
                            <td colspan="4" class="blankspace tinyText"></td>

                            <td colspan="1">
                                <p class="formlabel">CAPACIDAD:</p>
                            </td>
                            <td colspan="5" class="blankspace tinyText"></td>
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
                            Este reporte aplica para METRICAN ESTAMPADOS SA DE CV y el equipo descrito en el encabezado.
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
                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Frenado del puente</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 30%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection ">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Limite de fin de carrera/anticolisión del
                            puente
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep "></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.1.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd  borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class=" bodertd borde-sep">1.2.1</td>
                        <td style="width: 40%;" class=" bodertd borde-sep ">Recorrido del carro</td>
                        <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class=" bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class=" bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Frenado del carro</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.3</td>
                        <td style="width: 40%;" class="borde-sep ">Limite de fin de carrera/anticolisión del carro
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Estado de amortiguadores (Topes de goma)
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.2.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Recorrido del cable plano</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Subseccion 1.3//////////////////////////////////////////////////////////// -->

                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Prueba del polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Recorrido de izaje</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Frenado de izaje</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Movimiento del bloque de gancho</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Límite superior del polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Límite accionado por gancho (opcional)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Límites de desaceleración del polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.7</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Límite inferior del polipasto</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.8</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Ausencia de ruidos inusuales</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.9</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Vueltas de fricción (Parte mas baja gancho)
                            <div style="display: inline-block; margin-left: 30px;">N°=</div>
                        </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.10</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Paro de emergencia (Accionar)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">1.3.11</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Capacidad en puente legible</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 2//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Botonera</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de los botones </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de los botones </td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (Opcional)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">2.6</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Cable de control</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <!--///////////////////////////////////////////////////////////////////////////////Seccion 3//////////////////////////////////////////////////////////// -->
                    <tr class="titlesection2">
                        <td style="width: 4%;" class="bodertd borde-sep">3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Radio-control</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.1</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Condición de botones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>
                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.2</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Funcionamiento de botones</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="borde-sep">3.3</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Selector de polipasto (opcional)</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.4</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Dirección de movimientos</td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 5%;" class="bodertd borde-sep textCenter"></td>
                        <td style="width: 33%;" class="bodertd borde-sep"></td>
                    </tr>

                    <tr class="titlesubsection">
                        <td style="width: 4%;" class="bodertd borde-sep">3.5</td>
                        <td style="width: 40%;" class="bodertd borde-sep ">Carcasa</td>
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
                        <td style="width: 30%;" class="bodertd borde-sep ">Corriente línea 1 (1ra Velocidad)</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 15%;" class="bodertd borde-sep textCenter">CL1=</td>
                        <td style="width: 35%;" class="bodertd borde-sep textCenter"></td>
                    </tr>
                </tbody>
            </table>

        </section>

    </main>





    <!--<main>



        <section style="margin-top: 5%">
            <table BORDER>
                <tr class="textCenter headerText">
                    <th COLSPAN=1>1</th>
                    <th COLSPAN=5>Prueba inicial(sin carga)</th>
                </tr>
                <tbody style="border: 1px solid  black; font-family: 'Roboto', sans-serif;font-size:100%;">
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>1.1.1</td>
                        <td style="width: 100%;">Prueba del puente</td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>1.2</td>
                        <td style="width: 100%;">Prueba del carro</td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>1.3</td>
                        <td style="width: 100%;">Prueba del polipasto</td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>2</td>
                        <td style="width: 100%;">Batorena</td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>3</td>
                        <td style="width: 100%;">Radio control</td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.1.1</td>
                        <td>Recorrido del puente</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section style="margin-top: 15%">
            <table BORDER>
                <tr class="textCenter headerText">
                    <th COLSPAN=1>4</th>
                    <th COLSPAN=6>Mediciones electricas</th>
                </tr>
                <tbody style="border: 1px solid  black; font-family: 'Roboto', sans-serif;font-size:100%;">
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>4.1</td>
                        <td style="width: 100%;">Voltaje de alimentacion nominal</td>
                        <td></td>
                        <td>OK</td>
                        <td>NOK</td>
                        <td>NA</td>
                        <td>COMENTARIOS</td>
                    </tr>
                    <tr>
                        <td>4.1</td>
                        <td>Voltaje linea-linea</td>
                        <td>VLL=_________</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.1</td>
                        <td>Voltaje linea-linea</td>
                        <td>VLL=_________</td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td style="background-color: rgb(211,211,211);"></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>4.2</td>
                        <td style="width: 100%;">Corriente de elevacion de carro</td>
                        <td COLSPAN=2>Carro principal</td>
                        <td COLSPAN=2>Carro auxiliar</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td></td>

                    </tr>

                    <tr style="background-color: #061f5c;color: #FFF">
                        <td>4.4</td>
                        <td style="width: 100%;">Corriente en motor de cabezales</td>
                        <td COLSPAN=2> </td>
                        <td COLSPAN=2> </td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2 style="background-color: #061f5c;color"></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2 style="background-color: #061f5c;color"></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4.2.1</td>
                        <td>Corriente línea 1 (1ra Velocidad)/td>
                        <td COLSPAN=2>CL1= ________</td>
                        <td COLSPAN=2 style="background-color: #061f5c;color"></td>
                        <td></td>
                        <td></td>

                    </tr>
                </tbody>
            </table>
        </section>
    </main>-->


</body>

</html>
