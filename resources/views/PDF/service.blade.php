<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orden de Servicio</title>
    <style>
        @font-face {
            font-family: "RobotoCondensed-Regular"; 
            src: url({{storage_path('fonts/RobotoCondensed-Regular.ttf')}})  format('truetype');
        }
        @page { 
            margin: 1cm 1cm 0;
            size: 21.59cm 27.94cm;
        }
        body {
            font-family: "RobotoCondensed-Regular";
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
        table.separate{
            border-collapse: separate;
            border-spacing: 0 2px;
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
            font-size: 10px;
            padding-left: 5px;
        }
        .bigText {
            font-size: 14px;
        }
        .regularText{
            font-size: 12px;
        }
        .smallText {
            font-size: 10px;
        }
        .tinyText {
            font-size: 9px;            
        }
        .formlabel{
            font-family: "RobotoCondensed-Bold";
        }
        .textLeft{
            text-align: left;
        }
        .textRight{
            text-align: right;
        }
        .textCenter{
            text-align: center;
        }
        .headerText{
            font-family: "RobotoCondensed-Bold";
            background-color: #061f5c;
            color: #FFF;
            font-size: 16px !important;
        }
        tr.grid td{
            visibility: hidden;
            height: 0px !important;
            padding: 0;
        }
        .header{
            font-size: 9px !important;
            margin:0; 
            padding: 0;
        }
        header{
            /* position: fixed; */
            top: 0;
            height: 12.5%;
        }
        header.fixed{
            /* position: fixed; */
        }
        main div.main{
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
        footer{
            position: fixed;
            bottom: 0;
            height: 10%;
        }
        .footer td{
            width: 20%;
        }
        .footer td p{
            line-height: 1;
            font-size: 9px;
        }
        .lowercase{
            text-transform: lowercase;
        }
        table.outter-border{
            border: 1px solid black;
        }
        table.inner-border{
            border: none ;
        }
        table.inner-border td{
            border-right: 1px solid black;
            padding-left: 10px;
        }
        .inner-border tr td:first-child{
            padding-left: 0px;
        } 
        .inner-border td:last-child{
            border-right: none !important;
        } 
        .borderR{
            border-right: 1px solid black !important;
        }
        .borderL{
            border-left: 1px solid black !important;
        }
        .borderT{
            border-top: 1px solid black !important;
        }
        .borderB{
            border-bottom: 1px solid black !important;
        }
        div.page-break{
            page-break-after: always; 
        }
        div.page-break:last-child { 
            page-break-after: never; 
        }
        div.headerSpacer{
            height: 25%;
        }
        div{
            margin: 4px;
        }
        footer:before{
            /* page-break-after: always;  */
        }
        table.quoteTable, table.quoteTable td{
            border: 1px solid #061f5c; 
        }
        table.quoteTable tr:first-child{
            background-color: #061f5c;
            color: #FFF;
            font-size: 11px;
            font-family: "RobotoCondensed-Bold";
        }
        table.servicesTable{
            border-bottom: 1px solid #061f5c;
        }
        table.servicesTable tr:first-child{
            color: #061f5c;
            font-size: 13px;
            font-family: "RobotoCondensed-Bold";
        }
        table.quoteTable tr td{
            padding: 4px 10px;
        }
        .subHeaderText{
            background-color: #eae9ef !important;
            color: #061f5c !important;
        }
        h3{
            font-family: "RobotoCondensed-Bold";
            margin: 0;
            /* margin-top: 3px; */
        }
        .pt-10{
            padding-top: 10px !important;
        }
        .pt-5{
            padding-top: 5px !important;
        }
        .pb-10{
            padding-bottom: 10px !important;
        }
        .pb-5{
            padding-bottom: 5px !important;
        }
    </style>
</head>
<body>
    <header>
        <table class="header">
            <tr class="grid">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td colspan="1" class="textCenter">
                    <img src="" width="80px" style="vertical-align: middle;">
                </td>
                <td colspan="11" style="vertical-align: top;">
                    <table>
                        <tr class="textCenter headerText"><td><p>Orden de servicio</p></td></tr>
                    </table>

                    <table class="separate" style="border-spacing: 0;">
                        <tr class="grid">
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2" class="borderL borderT"><p class="formlabel textRight">Fecha</p></td>
                            <td colspan="4" align="center" class="blankspace borderT borderR"></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="6" class="borderL borderR"></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2" class="borderL borderB"><p class="formlabel textRight">Referencia</p></td>
                            <td colspan="4" align="center" class="blankspace borderB borderR"></td>
                        </tr>
                    </table>
                    
                    <table class="separate outter-border">
                        <tr class="grid">
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td><p class="formlabel">Empresa</p></td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2"><p class="formlabel">Tel Contacto</p></td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td><p class="formlabel">Dirección</p></td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2"><p class="formlabel">Inicio Servicio</p></td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                        <tr>
                            <td><p class="formlabel">Cliente</p></td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2"><p class="formlabel">Fin Servicio</p></td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        <tr>
                            <td><p class="formlabel">Email</p></td>
                            <td colspan="6" class="blankspace tinyText"></td>
                            <td colspan="2"><p class="formlabel">O.C.</p></td>
                            <td colspan="3" class="blankspace tinyText"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </header>
    <br><br>
    <!-- <div class="headerSpacer"></div> -->
    <footer>
        <table class="separate footer inner-border" >
            <tr class="grid">
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td valign="top">
                    <span class="formlabel">San Luis Potosí</span>
                    <p>
                        Matriz, Yugoslavia #130 <br>
                        Col. Las Mercedes <br>
                        San Luis Potosí, S.L.P. C.P. 78394 <br>
                        T: (444) 816 4251<br>
                        &nbsp;
                    </p>
                </td>
                <td valign="top">
                    <span class="formlabel">Querétaro</span>
                    <p>
                        Sucursal Marques de Caja <br>
                        Fuerte #208 Col. Lomas del Marques, <br>
                        C.P.76146, Querétaro, Qro. <br>
                        T: (442) 245 6469
                    </p>
                </td>
                <td valign="top">
                    <span class="formlabel">Aguascalientes</span>
                    <p>
                        Sucursal Monte Albán <br>
                        #167, Col. Pirámides, <br>
                        Aguascalientes, Ags. C.P. 20277 <br>
                        T: (449) 917 0956
                    </p>
                </td>
                <td valign="top">
                    <span class="formlabel">León</span>
                    <p>
                        Sucursal Blvd. Delta #801-A <br>
                        Col. León de los Aldama, C.P.37297, <br>
                        León, Gto <br>
                        T: (447) 741 0472
                    </p>
                </td>
                <td valign="top">
                    <span class="formlabel">Hermosillo</span>
                    <p>
                        T: (662) 352 3586
                    </p> 
                    <span class="formlabel">Puebla</span>
                    <p>
                        T: (222) 257 9606
                    </p> 
                    <div class="textRight">
                        <span class="formlabel lowercase">sacardelcentro.com</span>
                    </div>
                </td>
            </tr>
        </table>
    </footer>

    <main class="pt-5">
        <div class="main">
            <table class="separate">
                <tr class="grid">
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td><p class="formlabel">Marca</p></td>
                    <td colspan="3" class="blankspace tinyText"></td>
                    <td colspan="2"><p class="formlabel">Modelo</p></td>
                    <td colspan="2" class="blankspace tinyText"></td>
                    <td colspan="2"><p class="formlabel" style="padding-left: 1px">No. Serie</p></td>
                    <td colspan="2" class="blankspace tinyText"></td>
                </tr>
                <tr>
                    <td><p class="formlabel">Capacidad</p></td>
                    <td colspan="3" class="blankspace tinyText"></td>
                    <td colspan="2"><p class="formlabel">Área que se encuentra</p></td>
                    <td colspan="2" class="blankspace tinyText"></td>
                    <td colspan="2"><p class="formlabel" style="padding-left: 1px">Responsable de servicio</p></td>
                    <td colspan="2" class="blankspace tinyText"></td>
                </tr>
                    <tr>
                        <td><p class="formlabel">Voltaje</p></td>
                        <td colspan="3" class="blankspace tinyText"></td>
                        <td colspan="2"><p class="formlabel">Altura del polipasto</p></td>
                        <td colspan="2" class="blankspace tinyText"></td>
                        <td colspan="4"></td>
                    </tr>
            </table>
    
            <table class="tinyText">
                <tr class="grid">
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <span class="formlabel">Firmo:</span>  <br><br>
                    </td>
                </tr>
                
                        <tr>
                            <td colspan="12" class="formlabel">
                                Comentarios generales:
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12" class="tinyText">
                                <span style="padding-left: 5px;"></span> <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <table class="separate outter-border regularText">
                                    <tr>
                                        <td>Resumen del reporte</td>
                                        <td> Total</td>
                                        <td> OK</td>
                                        <td> Not OK</td>
                                        <td>No aplica</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <span class="bigText">Actividades a realizar</span>
                            </td>
                        </tr>
    
                            <tr>
                                <td colspan="4" class="borderB"><h3>/h3></td>
                                <td colspan="4" class="borderB"><h3>Estado</h3></td>
                                <td colspan="4" class="borderB"><h3>Comentarios</h3></td>
                            </tr>
                            
                        <tr>
                            <td colspan="12">
                                <h3 class="bigText">Diágnostico</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <p></p>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td colspan="12">
                                <h3 class="bigText">Actividades a realizar</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <p></p>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td colspan="12">
                                <h3 class="bigText">Observaciones / Recomendaciones</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <p></p>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
  
            </table>

        </div>
    </main>
</body>
</html>