<?php require_once("topo.php") ?>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="row">
        <div class="col-md-2 div_imagem_logotipo">
            <a href="#" class="text-dark">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img class="img-fluid" src="https://img.freepik.com/vetores-gratis/modelo-de-logotipo-da-marca-coyote_23-2149207680.jpg?w=740" alt="">
                    </div>
                    <div class="col-md-7">
                        <p class="m-0"><b>blingers</b><br />analytics</p>
                    </div>
                </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-5 pl-0">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav menu_dashboards">
                    <li class="nav-item px-2 botao_verde_contorno mr-1 rounded active">
                        <a class="nav-link p-0" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2 botao_verde_contorno mx-1 rounded">
                        <a class="nav-link p-0" href="#">Marketplace</a>
                    </li>
                    <li class="nav-item px-2 botao_verde_contorno mx-1 rounded">
                        <a class="nav-link p-0" href="#">Vendas</a>
                    </li>
                    <li class="nav-item px-2 botao_verde_contorno mx-1 rounded">
                        <a class="nav-link p-0" href="#">Clientes</a>
                    </li>
                    <li class="nav-item px-2 botao_verde_contorno mx-1 rounded">
                        <a class="nav-link p-0" href="#">Estoque</a>
                    </li>
                    <li class="nav-item px-2 botao_verde_contorno mx-1 rounded">
                        <a class="nav-link p-0" href="#">Financeiro</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <span class="">
                    <i class="fa-solid fa-arrows-rotate icone_atualizado_menu_dashboards"></i>
                    11/05/2022 01:37:31
                </span>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-3">
                    <label for="status">Status</label>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxes(1)">
                            <select>
                                <option>Selecionar</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes" id="checkboxes1">
                            <label ><input type="checkbox" value="1"/>Status 1</label>
                            <label ><input type="checkbox" value="2"/>Status 2</label>
                            <label ><input type="checkbox" value="3"/>Status 3</label>
                            <label ><input type="checkbox" value="4"/>Status 4</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="status">Ano</label>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxes(2)">
                            <select>
                                <option>Selecionar</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes" id="checkboxes2">
                            <label ><input type="checkbox" value="1"/>2018</label>
                            <label ><input type="checkbox" value="2"/>2019</label>
                            <label ><input type="checkbox" value="3"/>2020</label>
                            <label ><input type="checkbox" value="4"/>2021</label>
                            <label ><input type="checkbox" value="5"/>2022</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="status">Mês</label>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxes(3)">
                            <select>
                                <option>Selecionar</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes" id="checkboxes3">
                            <label ><input type="checkbox" value="1"/>Janeiro</label>
                            <label ><input type="checkbox" value="2"/>Fevereiro</label>
                            <label ><input type="checkbox" value="3"/>Março</label>
                            <label ><input type="checkbox" value="4"/>Abril</label>
                            <label ><input type="checkbox" value="5"/>Maio</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="amount">Dia: </label>
	                <input type="text" class="text-left" id="amount" readonly style="border:0; background: transparent; max-width: 60px;">
                    <div id="slider-range" class="mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Faturamento</h5>
                <p class="">
                    R$2,10 Mi
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>N° de vendas</h5>
                <p class="">
                    13 Mil
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Custo</h5>
                <p class="">
                    R$1,22 Mi
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Frete</h5>
                <p class="">
                    R$45,72 Mil
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Margem</h5>
                <p class="">
                    R$845,19 Mil
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Margem</h5>
                <p class="">
                    40,2%
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Total Médio</h5>
                <p class="">
                    R$160,51
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Itens Vendidos</h5>
                <p class="">
                    16 Mil
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card_estatistica_menu_dashboard">
                <h5>Itens/ Pedido</h5>
                <p class="">
                    1,2
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-5">
            <div class="div_containers_itens_dashboard ">
                <h5>Análise por Marketplace</h5>
                <div class="tabela_dashboard">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Loja</th>
                            <th scope="col">Faturamento</th>
                            <th scope="col">Vendas</th>
                            <th scope="col">Ticket Medio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mercado Livre</td>
                                <td>R$1.094.320,22</td>
                                <td>5.204</td>
                                <td>R$210,28</td>
                            </tr>
                            <tr>
                                <td>Shopee</td>
                                <td>R$248.966,88</td>
                                <td>3.435</td>
                                <td>R$72,48</td>
                            </tr>
                            <tr>
                                <td>Olist</td>
                                <td>R$233.909,28</td>
                                <td>1.651</td>
                                <td>R$141,68</td>
                            </tr>
                            <tr>
                                <td>B2W</td>
                                <td>R$157.974,24</td>
                                <td>765</td>
                                <td>R$206,50</td>
                            </tr>
                            <tr>
                                <td>Magalu</td>
                                <td>R$135.081,92</td>
                                <td>663</td>
                                <td>R$203,74</td>
                            </tr>
                            <tr>
                                <td>Tray</td>
                                <td>R$59.354,15</td>
                                <td>349</td>
                                <td>R$170,07</td>
                            </tr>
                            <tr>
                                <td>Amazon</td>
                                <td>R$56.730,96</td>
                                <td>381</td>
                                <td>R$148,90</td>
                            </tr>
                            <tr>
                                <td>Mercado Livre</td>
                                <td>R$1.094.320,22</td>
                                <td>5.204</td>
                                <td>R$210,28</td>
                            </tr>
                            <tr>
                                <td>Shopee</td>
                                <td>R$248.966,88</td>
                                <td>3.435</td>
                                <td>R$72,48</td>
                            </tr>
                            <tr>
                                <td>Olist</td>
                                <td>R$233.909,28</td>
                                <td>1.651</td>
                                <td>R$141,68</td>
                            </tr>
                            <tr>
                                <td>B2W</td>
                                <td>R$157.974,24</td>
                                <td>765</td>
                                <td>R$206,50</td>
                            </tr>
                            <tr>
                                <td>Magalu</td>
                                <td>R$135.081,92</td>
                                <td>663</td>
                                <td>R$203,74</td>
                            </tr>
                            <tr>
                                <td>Tray</td>
                                <td>R$59.354,15</td>
                                <td>349</td>
                                <td>R$170,07</td>
                            </tr>
                            <tr>
                                <td>Amazon</td>
                                <td>R$56.730,96</td>
                                <td>381</td>
                                <td>R$148,90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="div_containers_itens_dashboard ">
                <h5>Faturamento (R$) por Ano e Mês</h5>
                <div class="" id="chart">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="div_containers_itens_dashboard ">
                <h5>Faturamento (R$) por Categoria</h5>
                <div class="" id="chartBar">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="div_containers_itens_dashboard ">
                <h5>Faturamento (R$) por Loja</h5>
                <div class="" id="chartPie">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/apexcharts.js"></script>
<script>    
    var options = {
          series: [
          {
            name: "Mercado Livre",
            data: [13584, 72250, 66591, 96397, 142070, 113913, 70299]
          },
          {
            name: "Shopee",
            data: [5152, 22669, 52139, 76300, 100239, 98302, 140321]
          }
        ],
          chart: {
          height: 350,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 0,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: true
          }
        },
        colors: ['#77B6EA', '#18cc7e'],
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
            return "R$ " + val.toFixed(2).replace('.', ',')
          },
        },
        stroke: {
          curve: 'smooth'
        },  
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul'],
          title: {
            text: 'Mês'
          }
        },
        yaxis: {
          title: {
            text: 'Faturamento (R$)'
          },
          min: 0,
          max: 200000
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
<script>
    var options = {
        series: [{
            name: ["R$"],
            data: [371930, 184715, 161485, 106444, 102924, 100877, 98721, 76395, 75676, 70070]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        colors: ['#18cc7e', '#18cc7e', '#18cc7e', '#18cc7e', '#18cc7e', '#18cc7e', '#18cc7e', '#18cc7e',
        '#18cc7e', '#18cc7e'
        ],
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
            return "R$ " + val.toFixed(2).replace('.', ',')
          },
        },
        tooltip: {
            enabled: false
        },
        xaxis: {
          categories: ['Politriz', 'Gabarito Marcenaria', 'Lixadeiras', 'Disco de Lixa', 'Gabarito', 'Laminas de Serra', 'Vulcanizador de P...',
            'Alicate Hidráulico', 'Grampo Sargento', 'Fresas'
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartBar"), options);
        chart.render();
</script>
<script>
     var options = {
        labels: ['AliExpress', 'Loja Integrada', 'Magalu', 'Mercado Livre', 'Mercado Shops', 'Olist', 'Shopee', 'Tray'],
            series: [.75, 2.49, 6.42, 52, .23, 11.11, 11.83, 15.17],
            chart: {
            type: 'donut',
            height: 363
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val.toFixed(2).replace('.', ',') + "%"
            },
        },
        tooltip: {
            enabled: true,
            formatter: function (val) {
                return val.toFixed(2).replace('.', ',') + "%"
            },
        },
        colors:['#ff0000', '#9999ff', '#0000ff', '#ffff00', '#00ffff', '#00ff00', '#000000', '#ff00ff'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chartPie"), options);
        chart.render();

</script>
<script>
var expanded = false;
function showCheckboxes(numero)
{
 var checkboxes = document.getElementById("checkboxes"+numero);
 if(!expanded)
 {
  checkboxes.style.display = "block";
  expanded = true;
 }
 else
 {
  checkboxes.style.display = "none";
  expanded = false;
 }
}

</script>
<?php require_once("rodape.php") ?>