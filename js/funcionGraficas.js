$(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column',
                    margin: 75,
                    options3d: {
                        enabled: true,
                        alpha: 10,
                        beta: 25,
                        depth: 70
                    }
                },
                title: {
                    text: '3D chart with null values'
                },
                subtitle: {
                    text: 'Notice the difference between a 0 value and a null point'
                },
                plotOptions: {
                    column: {
                        depth: 25
                    }
                },
                xAxis: {
                    categories: [{
                            section name = nombreMeses loop = "$meses"
                            }
                        {
                            $meses[nombreMeses].MESES
                            }
                        {
                            /section}
                            ]
                    },
                    yAxis: {
                        title: {
                            text: null
                        }
                    },
                    series: [{
                            name: 'Sales',
                            data: [{
                                    section name = datosVentas loop = "$ventas"
                            }
                                {
                                    $ventas[datosVentas].VENTAS
                            }
                                {
                                    /section}
                                    ]
                                //CONSULTA PARA ORACLE OBTENER EL NOMBRE DE LOS MESES EN ESPAÑOL
                                //select to_char(to_date(to_char(extract(month from ventas.fecha_venta)),'mm'),'Month','NLS_DATE_LANGUAGE = SPANISH') from ventas group by extract(month from ventas.fecha_venta) ORDER BY extract(month from ventas.fecha_venta) ASC;
                            }]
                    });
            });