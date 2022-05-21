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
                <label for="tipo_do_produto">Tipo do Produto
                    <select name="tipo_do_produto" id="tipo_do_produto">
                        <option value="">Tipo 1</option>
                        <option value="">Tipo 2</option>
                        <option value="">Tipo 3</option>
                        <option value="">Tipo 4</option>
                        <option value="">Tipo 5</option>
                    </select>
                </label>
            </form>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="div_containers_itens_dashboard ">
                    <h5>Análise por Marketplace</h5>
                    <div class="tabela_dashboard table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Estoque(QTD)</th>
                                    <th scope="col">Custo (R$)</th>
                                    <th scope="col">Preço (R$)</th>
                                    <th scope="col">Margem do Cadastro (%)</th>
                                    <th scope="col">Total Venda (Qtd)</th>
                                    <th scope="col">Total Venda (R$)</th>
                                    <th scope="col">Margem Real Venda (R$)</th>
                                    <th scope="col">Estoque R$ (R$)</th>
                                    <th scope="col">Estoque Custo (R$)</th>
                                    <th scope="col">Última Venda</th>
                                    <th scope="col">Curva ABC</th>
                                    <th scope="col">Pareto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>xyz</td>
                                    <td>34</td>
                                    <td>18,20</td>
                                    <td>39,90</td>
                                    <td>36,4%</td>
                                    <td>225</td>
                                    <td>R$2.587,90</td>
                                    <td>48%</td>
                                    <td>R$1.356,60</td>
                                    <td>R$618,80</td>
                                    <td>04/12/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>2 Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>2 xyz</td>
                                    <td>23</td>
                                    <td>17,60</td>
                                    <td>36,90</td>
                                    <td>52,3%</td>
                                    <td>184</td>
                                    <td>R$5.777,91</td>
                                    <td>58,7%</td>
                                    <td>R$848,70</td>
                                    <td>R$404,80</td>
                                    <td>27/11/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>xyz</td>
                                    <td>34</td>
                                    <td>18,20</td>
                                    <td>39,90</td>
                                    <td>36,4%</td>
                                    <td>225</td>
                                    <td>R$2.587,90</td>
                                    <td>48%</td>
                                    <td>R$1.356,60</td>
                                    <td>R$618,80</td>
                                    <td>04/12/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>2 Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>2 xyz</td>
                                    <td>23</td>
                                    <td>17,60</td>
                                    <td>36,90</td>
                                    <td>52,3%</td>
                                    <td>184</td>
                                    <td>R$5.777,91</td>
                                    <td>58,7%</td>
                                    <td>R$848,70</td>
                                    <td>R$404,80</td>
                                    <td>27/11/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>xyz</td>
                                    <td>34</td>
                                    <td>18,20</td>
                                    <td>39,90</td>
                                    <td>36,4%</td>
                                    <td>225</td>
                                    <td>R$2.587,90</td>
                                    <td>48%</td>
                                    <td>R$1.356,60</td>
                                    <td>R$618,80</td>
                                    <td>04/12/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>2 Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>2 xyz</td>
                                    <td>23</td>
                                    <td>17,60</td>
                                    <td>36,90</td>
                                    <td>52,3%</td>
                                    <td>184</td>
                                    <td>R$5.777,91</td>
                                    <td>58,7%</td>
                                    <td>R$848,70</td>
                                    <td>R$404,80</td>
                                    <td>27/11/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>xyz</td>
                                    <td>34</td>
                                    <td>18,20</td>
                                    <td>39,90</td>
                                    <td>36,4%</td>
                                    <td>225</td>
                                    <td>R$2.587,90</td>
                                    <td>48%</td>
                                    <td>R$1.356,60</td>
                                    <td>R$618,80</td>
                                    <td>04/12/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                                <tr>
                                    <td>2 Descrição Lorem ipsum dolor sit amet consectetur adipisicing elit</td>
                                    <td>2 xyz</td>
                                    <td>23</td>
                                    <td>17,60</td>
                                    <td>36,90</td>
                                    <td>52,3%</td>
                                    <td>184</td>
                                    <td>R$5.777,91</td>
                                    <td>58,7%</td>
                                    <td>R$848,70</td>
                                    <td>R$404,80</td>
                                    <td>27/11/20</td>
                                    <td>A</td>
                                    <td>5.74%</td>
                                </tr>
                            </tbody>
                            <tfoot class="thead-light">
                            <tr>
                                <th colspan="2"><b>Total</b></th>
                                <th class="text-center">14.952</th>
                                <th></th>
                                <th></th>
                                <th>57,0%</th>
                                <th>16.025</th>
                                <th>2.069.308,28</th>
                                <th>40,2%</th>
                                <th>573.854,21</th>
                                <th>245.132,21</th>
                                <th>28/08/20</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="div_containers_itens_dashboard ">
                    <h5>Faturamento (R$) por Categoria</h5>
                    <div class="" id="chartBar1">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="div_containers_itens_dashboard ">
                    <h5>Faturamento (R$) e quantidade de Vendas</h5>
                    <div class="" id="chartBar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
     var options = {
          series: [{
          name: 'Faturamento (R$)',
          type: 'column',
          data: [400, 13584, 72250, 68420, 96397, 95172, 93653, 114594, 142070, 113913, 150782, 196642]
        }, {
          name: 'Quantidade',
          type: 'line',
          data: [100, 200, 38, 109, 262, 300, 460, 435, 462, 540, 443, 574]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        colors: ['#18cc7e', '#222'],
        stroke: {
          width: [0, 4]
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [0,1]
        },
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        xaxis: {
          type: 'Data'
        },
        yaxis: [{
          title: {
            text: '',
          },
        
        }, {
          opposite: true,
          title: {
            text: 'Quantidade'
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chartBar1"), options);
        chart.render();
        
</script>
<script>
    var options = {
        series: [{
            name: ["R$"],
            data: [215761.48, 104169.9, 71980.6, 69373.88, 61655.52, 57427.00, 48296.72, 36395, 35676, 30070, 29426, 21287, 28193]
        }],
        chart: {
            type: 'bar',
            height: 350
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
          categories: ['Politriz', 'Gabarito Marcenaria', 'Vulcanizador de P...', 'Laminas de Serra', 'Lixadeiras', 'Alicate Hidráulico', 'Gabarito', 'Fresas',
             'Grampo Sargento', 'Pistole de Pintura', 'Brocas', 'Marteletes', 'Serra Circular',
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartBar"), options);
        chart.render();
</script>
<?php require_once("rodape.php") ?>