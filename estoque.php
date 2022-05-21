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
                <label for="faixa_de_estoque">Faixa de Estoque
                    <select name="faixa_de_estoque" id="faixa_de_estoque">
                        <option value="">Faixa 1</option>
                        <option value="">Faixa 2</option>
                        <option value="">Faixa 3</option>
                        <option value="">Faixa 4</option>
                        <option value="">Faixa 5</option>
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
                    <h5>Faturamento (R$) por Região</h5>
                    <div class="" id="chartBar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    <div class="div_containers_itens_dashboard ">
                <h5>Top 10 Clientes (Por Faturamento)</h5>
                <div class="tabela_dashboard">
                    <table class="table tabela_marketplace">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">Faturamento</th>
                                <th scope="col">Vendas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cliente 1</td>
                                <td>R$1,119,73</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Cliente 2</td>
                                <td>R$1,118,80</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Cliente 3</td>
                                <td>R$1,121,18</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cliente 4</td>
                                <td>R$1,049,10</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cliente 5</td>
                                <td>R$929,70</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cliente 6</td>
                                <td>R$891,96</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cliente 7</td>
                                <td>R$1.549,40</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Cliente 8</td>
                                <td>R$1.399,90</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Cliente 9</td>
                                <td>R$1.022,72</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Cliente 10</td>
                                <td>R$899,73</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    <div class="div_containers_itens_dashboard ">
                <h5>Top 10 Cidades (Por Faturamento)</h5>
                <div class="tabela_dashboard">
                    <table class="table tabela_marketplace">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Cidade</th>
                                <th scope="col">Faturamento</th>
                                <th scope="col">Vendas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Belo Horizonte - MG</td>
                                <td>R$10,317,59</td>
                                <td>41</td>
                            </tr>
                            <tr>
                                <td>São Paulo - SP</td>
                                <td>R$9.525,02</td>
                                <td>44</td>
                            </tr>
                            <tr>
                                <td>Rio de Janeiro - RJ</td>
                                <td>R$3.867,40</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>Contagem - MG</td>
                                <td>R$2.112,69</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Brasilia - DF</td>
                                <td>R$1.867,81</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Tocantins - MG</td>
                                <td>R$1.539,40</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Barueri - SP</td>
                                <td>R$1.255,42</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Maringá - PR</td>
                                <td>R$1.232,42</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Florianópolis - SC</td>
                                <td>R$1.052,31</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Nova Alvorada do Sul - MS</td>
                                <td>R$1.049,10</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Blumenau - SC</td>
                                <td>R$1.034,12</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Osasco - SP</td>
                                <td>R$1.018,28</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var options = {
          series: [{
          name: "",
          data: [{
            x: 'Sudeste',
            y: 1200000
          }, {
            x: 'Sul',
            y: 1000000
          }, {
            x: 'Centro Oeste',
            y: 300000
          }, {
            x: 'Norte',
            y: 200000
          }, {
            x: 'Nordeste',
            y: 100000
          }]
        }],
          chart: {
          type: 'bar',
          height: 380
        },
        colors: ['#4eeead'],
        dataLabels: {
            enabled: true,
          style: {
            colors: ['#222']
        }
        },
        xaxis: {
          type: 'category',
          group: {
            style: {
              fontSize: '10px',
              fontWeight: 700
            }
          }
        },
        };
        
        var chart = new ApexCharts(document.querySelector("#chartBar"), options);
        chart.render();
</script>
<?php require_once("rodape.php") ?>