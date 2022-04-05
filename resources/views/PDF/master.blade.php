<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reporte De Servicio</title>

    <style>
        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: Bold !important;
            src: url('{{ asset('fonts/pill/Pill_Gothic_300mg_Regular2.ttf') }}') format('truetype');
        }

        body {
            font-family: 'msyh';
            text-transform: uppercase;
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

        td.blankspace {
            background-color: #eae9ef;
            padding-left: 5px;
            /* padding: 9px 0px; */
        }

        p {
            margin: 0;
        }

        .formlabel {
            font-size: 11px;
            padding-left: 4px;
        }

        .bigText {
            font-size: 14px;
        }

        .regularText {
            font-size: 12px;
        }

        .smallText {
            font-size: 10px;
        }

        .tinyText {
            font-size: 9px;
        }

        .formlabel {
            font-family: 'DejaVuSerif';
        }

        .textLeft {
            text-align: left;
        }

        .textRight {
            text-align: right;
        }

        .textCenter {
            text-align: center;
        }

        .headerText {
            font-family: 'Pill-Regular';
            background-color: #061f5c;
            color: #FFF;
            font-size: 16px !important;

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

        header.fixed {
            /* position: fixed; */
        }

        main div.main {
            /* border: 5px solid red; */
            /* position: fixed; */
            /* height: 65% !important; */
            /* padding-top: 25%; */
            /* margin-top: 24%; */
            margin-bottom: 9%;
            /* margin: 9%; */
            /* transform: translateY(35%); */
        }

        /* main div:first-child{
            border: 5px solid red;
            /* margin: 150px; */
        /* }  */
        footer {
            position: fixed;
            bottom: 0;
            height: 10%;
        }

        .footer td {
            width: 20%;
        }

        .footer td p {
            line-height: 1;
            font-size: 9px;
        }

        .lowercase {
            text-transform: lowercase;
        }

        table.outter-border {
            border: 1px solid black;
        }

        table.inner-border {
            border: none;
        }

        table.inner-border td {
            border-right: 1px solid black;
            padding-left: 10px;
        }

        .inner-border tr td:first-child {
            padding-left: 0px;
        }

        .inner-border td:last-child {
            border-right: none !important;
        }

        .borderR {
            border-right: 1px solid black !important;
        }

        .borderL {


            .borderT {
                border-top: 1px solid black !important;
            }

            .borderB {
                border-bottom: 1px solid black !important;
            }

            div.page-break {
                page-break-after: always;
            }

            div.page-break:last-child {
                page-break-after: never;
            }

            div.headerSpacer {
                height: 25%;
            }

            div {
                margin: 4px;
            }

            footer:before {
                /* page-break-after: always;  */
            }

            table.quoteTable,
            table.quoteTable td {
                border: 1px solid #061f5c;
            }

            table.quoteTable tr:first-child {
                background-color: #061f5c;
                color: #FFF;
                font-size: 11px;
                font-family: 'DejaVuSerif';
            }

            table.servicesTable {
                border-bottom: 1px solid #061f5c;
            }

            table.servicesTable tr:first-child {
                color: #061f5c;
                font-size: 13px;
                font-family: 'DejaVuSerif';
            }

            table.quoteTable tr td {
                padding: 4px 10px;
            }

            .subHeaderText {
                background-color: #eae9ef !important;
                color: #061f5c !important;
            }

            h3 {
                font-family: Arial;
                margin: 0;
                font-weight: 800;
                /* margin-top: 3px; */
            }

            .pt-10 {
                padding-top: 10px !important;
            }

            .pt-5 {
                padding-top: 5px !important;
            }

            .pb-10 {
                padding-bottom: 10px !important;
            }

            .pb-5 {
                padding-bottom: 5px !important;
            }

    </style>
</head>

<!--<body>
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
                    <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logotipo-sacar-vertical.png'))) }}"
                        width="100" height="150" />
                </td>
                <td colspan="10" style="vertical-align: top;">
                    <table>
                        <tr class="textCenter headerText">
                            <td>
                                <p>REPORTE DE SERVICIO</p>
                            </td>
                        </tr>
                    </table>
                    <table class="separate outter-border">
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
                            <td>
                                <p class="formlabel">Empresa</p>
                            </td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2">
                                <p class="formlabel">Tel Contacto</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="formlabel">Dirección</p>
                            </td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2">
                                <p class="formlabel">Inicio Servicio</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="formlabel">Cliente</p>
                            </td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2">
                                <p class="formlabel">Fin Servicio</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        <tr>
                            <td>
                                <p class="formlabel">Email</p>
                            </td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2">
                                <p class="formlabel">O.C.</p>
                            </td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </header>
    <br><br>

    <main>

        <table class="separate">
            <tr>
                <th class="textCenter headerText" colspan=6>DATOS DEL EQUIPO</th>
            </tr>
            <tbody style="border: 1px solid #061f5c;">
                <tr>
                    <td>MARCA:</td>
                    <td class="blankspace tinyText"></td>
                    <td>RECORRIDO:</td>
                    <td class="blankspace tinyText"></td>
                    <td>VOLTAJE:</td>
                    <td class="blankspace tinyText"></td>
                </tr>
                <tr>
                    <td>MODELO(s):</td>
                    <td class="blankspace tinyText"></td>
                    <td>CLARO:</td>
                    <td class="blankspace tinyText"></td>
                    <td>RESPONSABLE:</td>
                    <td class="blankspace tinyText"></td>
                </tr>
                <tr>
                    <td>Nº SERIE(s):</td>
                    <td class="blankspace tinyText"></td>
                    <td>ALTURA:</td>
                    <td class="blankspace tinyText"></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td>AREA:</td>
                    <td class="blankspace tinyText"></td>
                    <td>CAPACIDAD:</td>
                    <td class="blankspace tinyText"></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>

        <h3>Hola Mundo</h3>

        <section style="margin-top: 5%">
            <table class="separate">
                <tr>
                    <th> 1.- OBJETIVO</th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            Documentar y reportar todas las actividades realizadas durante el servicio realizado por el
                            personal de SACAR DEL CENTRO MEXICO S.A. DE C.V.
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="separate">
                <tr>
                    <th> 2.-ALCANCE</th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            Este reporte aplica para METRICAN ESTAMPADOS SA DE CV y el equipo descrito en el encabezado.
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="separate">
                <tr>
                    <th> 3.-JUSTIFICACION</th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            Nuestro cliente requiere realizar inspección y mantenimiento preventivo para mantener su
                            equipo funcionando continuamente de manera segura para su operación diaria. </td>
                    </tr>
                </tbody>
            </table>
            <table class="separate">
                <tr>
                    <th>4.-ACTIVIDADES REALIZADAS</th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            Personal de Sacar del Centro México se dio la tarea de realizar las siguientes actividades
                            para el servicio de inspección y mantenimiento preventivo de la grúa viajera identificada
                            como <strong> <u> GV01 15/10 TON Konecranes .</u></strong> </td>
                    </tr>
                </tbody>
            </table>
        </section>

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
    </main>


</body>-->

<body>
    <h1>Reporte de Servicio</h1>
</body>

</html>
