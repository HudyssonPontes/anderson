<?php require_once("topo.php") ?>

<div class="row mt-4">
    <div class="col-md-3">
        <div class="div_containers_itens_dashboard div_container_filtros">
            <form action="">
                <label for="nome_do_cliente">Nome do Cliente
                    <input type="text" id="nome_do_cliente" placeholder="Nome do Cliente">
                </label>
                <label for="cidade_uf">Cidade - UF
                    <select name="cidade_uf" id="cidade_uf">
                        <option value="">Cidade 1</option>
                        <option value="">Cidade 2</option>
                        <option value="">Cidade 3</option>
                        <option value="">Cidade 4</option>
                        <option value="">Cidade 5</option>
                    </select>
                </label>
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
                    <h5>Faturamento (R$) por Região</h5>
                    <div class="" id="chartBar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
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