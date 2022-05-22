<?php require_once("topo.php") ?>

<div class="row mt-4">
    <div class="col-md-3">
        <div class="div_containers_itens_dashboard div_container_filtros">
            <form action="">
                <label for="codigo">Código
                    <input type="text" id="codigo" placeholder="Código">
                </label>
                <label for="descricao">Descrição
                    <input type="text" id="descricao" placeholder="Descrição">
                </label>
                <label for="categoria">Categoria
                    <select name="categoria" id="categoria">
                        <option value="">Categoria 1</option>
                        <option value="">Categoria 2</option>
                        <option value="">Categoria 3</option>
                        <option value="">Categoria 4</option>
                        <option value="">Categoria 5</option>
                    </select>
                </label>
                <label for="marca">Marca
                    <select name="marca" id="marca">
                        <option value="">Marca 1</option>
                        <option value="">Marca 2</option>
                        <option value="">Marca 3</option>
                        <option value="">Marca 4</option>
                        <option value="">Marca 5</option>
                    </select>
                </label>
                <label for="fornecedor">Fornecedor
                    <select name="fornecedor" id="fornecedor">
                        <option value="">Fornecedor 1</option>
                        <option value="">Fornecedor 2</option>
                        <option value="">Fornecedor 3</option>
                        <option value="">Fornecedor 4</option>
                        <option value="">Fornecedor 5</option>
                    </select>
                </label>
                <label for="nome_da_loja">Nome da Loja
                    <select name="nome_da_loja" id="nome_da_loja">
                        <option value="">Loja 1</option>
                        <option value="">Loja 2</option>
                        <option value="">Loja 3</option>
                        <option value="">Loja 4</option>
                        <option value="">Loja 5</option>
                    </select>
                </label>
            </form>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Clientes</h5>
                    <p class="">
                        10.00 Mil
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Estados</h5>
                    <p class="">
                        26
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Cidades</h5>
                    <p class="">
                        2052
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 px-0">
                <div class="div_containers_itens_dashboard ">
                    <h5>Receita e Despesas por Mês e Ano</h5>
                    <div class="" id="chartLine">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        <div class="div_containers_itens_dashboard w-100">
                <h5>Despesas por mês (Emissão)</h5>
                <div class="tabela_dashboard">
                    <table class="table tabela_marketplace">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Categoria</th>
                                <th scope="col">Jan-2021</th>
                                <th scope="col">Fev-2021</th>
                                <th scope="col">Mar-2021</th>
                                <th scope="col">Abr-2021</th>
                                <th scope="col">Mai-2021</th>
                                <th scope="col">Jun-2021</th>
                                <th scope="col">Jul-2021</th>
                                <th scope="col">Ago-2021</th>
                                <th scope="col">Set-2021</th>
                                <th scope="col">Out-2021</th>
                                <th scope="col">Nov-2021</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pagamento a Fornecedores</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2.639,93</td>
                                <td>77.100,20</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Imposto Simples</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4.632,47</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Software</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>22.733,00</td>
                                <td>2.300,00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Despesas Administrativas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>467,56</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Energia Elétrica</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>1.197,34</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pagamento a Fornecedores</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2.639,93</td>
                                <td>77.100,20</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Imposto Simples</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4.632,47</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Software</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>22.733,00</td>
                                <td>2.300,00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Despesas Administrativas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>467,56</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Energia Elétrica</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>1.197,34</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pagamento a Fornecedores</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2.639,93</td>
                                <td>77.100,20</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Imposto Simples</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>4.632,47</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Software</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>22.733,00</td>
                                <td>2.300,00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Despesas Administrativas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>467,56</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Energia Elétrica</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>15.952,27</td>
                                <td>1.197,34</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="div_containers_itens_dashboard ">
            <h5>Despesas por Categoria</h5>
            <div class="" id="chartBar">
            </div>
        </div>
    </div>
</div>

  <script> 
    var options = {
          series: [
          {
            name: "",
            data: [3778, 70193, 64948, 68518, 93796, 91366, 146638, 118653, 140231, 116770, 22370, null, null, null, null]
          },
          {
            name: "",
            data: [null, 64948, null, 2912, 7945, null, null, 136819, 83929, 63787, 23980, 26354, 93411, 102383, 18268]
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
        colors: ['#46a6d4', '#cc5974'],
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
                if(val != null){
                    return "R$ " + val.toFixed(2).replace('.', ',')
                }
                return;
          },
          style: {
            colors: ['#46a6d4', '#cc5974'],
        }
        },
        stroke: {
          width: [5,5,4],
          curve: 'straight'
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
          categories: ['Jan-2021', 'Fev-2021', 'Mar-2021', 'Abr-2021', 'Mai-2021', 'Jun-2021', 'Jul-2021', 'Ago-2021', 'Set-2021', 'Out-2021', 'Nov-2021', 'Dez-2021', 'Jan-2022','Fev-2022','Mar-2022'],
          title: {
            text: 'Data'
          }
        },
        yaxis: {
          title: {
            text: 'Despesas (R$)'
          },
          min: 0,
          max:300000
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartLine"), options);
        chart.render();
</script>
<script>
    var options = {
        series: [{
            name: ["R$"],
            data: [240320, 106946, 53736, 40833, 32471, 32154, 23931, 20502, 11100, 1874, 1250, 1224, 916]
        }],
        chart: {
            type: 'bar',
            height: 900
        },
        colors: ['#18cc7e'],
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
          style: {
            colors: ['#000',]
        }
        },
        tooltip: {
            enabled: false
        },
        xaxis: {
          categories: ['Pagamento a..', '(Em Branco)', 'IMposto Si...', 'Software', 'Despesas Ad...', 'Energia Elétrica', 'Trnansportadora', 'Despesas Pe', 'Pró-Labore', 'Materiais de...', 'Imposto - DAE', 'Marketing', 'Imobilizado',
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartBar"), options);
        chart.render();
</script>
<?php require_once("rodape.php") ?>