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
    <div class="col-md-9">
        <div class="row">
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Quantidade SKU's</h5>
                    <p class="">
                        1.253
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>SKU's Sem Estoque</h5>
                    <p class="">
                        502
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Valor Estoque (Pc Custo)</h5>
                    <p class="">
                        R$245,13 Mil
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card_estatistica_menu_dashboard">
                    <h5>Valor Estoque (Pc Venda)</h5>
                    <p class="">
                        R$573,85 Mil
                    </p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <label for="periodo_reposicao_do_estoque w-100 text-center">Período reposição do Estoque
                    <select name="periodo_reposicao_do_estoque w-100" id="periodo_reposicao_do_estoque">
                        <option value="">1 mes</option>
                        <option value="">2 meses</option>
                        <option value="">3 meses</option>
                        <option value="">4 meses</option>
                        <option value="">5 meses</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 px-0">
            <div class="div_containers_itens_dashboard ">
                <div class="tabela_dashboard">
                    <table class="table tabela_marketplace tabela_estoque">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">SKU</th>
                                <th scope="col">Estoque Atual</th>
                                <th scope="col">Mês 3</th>
                                <th scope="col">Mês 2</th>
                                <th scope="col">Mês 1</th>
                                <th scope="col">Mês Atual</th>
                                <th scope="col">Média 3 Meses Completos</th>
                                <th scope="col">Dias em Estoque</th>
                                <th scope="col">Status Estoque (Dias)</th>
                                <th scope="col">Sugestão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>iudy9832hu</td>
                                <td>486</td>
                                <td>341</td>
                                <td>1341</td>
                                <td>746</td>
                                <td>620</td>
                                <td>810</td>
                                <td>18</td>
                                <td>Entre 16 e 30</td>
                                <td>324</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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