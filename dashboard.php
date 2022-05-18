<?php require_once("topo.php") ?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            </div>
        </div>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
</body>
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