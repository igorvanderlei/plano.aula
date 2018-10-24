<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Globo.com Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="igor" >

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./whatsnew.html">O que há de novo?</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.html">Página inicial</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Ponto de partida</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Fundação</a>
              </li>
              <li class="">
                <a href="./base-css.html">CSS Base</a>
              </li>
              <li class="">
                <a href="./components.html">Componentes</a>
              </li>
              <li class="">
                <a href="./javascript.html">JavaScript</a>
              </li>
              <li class="">
                <a href="./customize.html">Customizando</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
  <div class="container">
    <h1>JavaScript</h1>
    <p class="lead">Traga os componentes do Bootstrap a vida, agora com 13 plugins jQuery personalizados
  </div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#overview"><i class="icon-chevron-right"></i> Geral</a></li>
          <li><a href="#transitions"><i class="icon-chevron-right"></i> Transições</a></li>
          <li><a href="#modals"><i class="icon-chevron-right"></i> Modal</a></li>
          <li><a href="#dropdowns"><i class="icon-chevron-right"></i> Dropdown</a></li>
          <li><a href="#scrollspy"><i class="icon-chevron-right"></i> Scrollspy</a></li>
          <li><a href="#tabs"><i class="icon-chevron-right"></i> Tab</a></li>
          <li><a href="#tooltips"><i class="icon-chevron-right"></i> Tooltip</a></li>
          <li><a href="#popovers"><i class="icon-chevron-right"></i> Popover</a></li>
          <li><a href="#balloon"><i class="icon-chevron-right"></i> Balloon <span class="label label-info">Novo!</a></span></li>
          <li><a href="#alerts"><i class="icon-chevron-right"></i> Alertas</a></li>
          <li><a href="#buttons"><i class="icon-chevron-right"></i> Botões</a></li>
          <li><a href="#collapse"><i class="icon-chevron-right"></i> Colapsáveis</a></li>
          <li><a href="#carousel"><i class="icon-chevron-right"></i> Carousel</a></li>
          <li><a href="#typeahead"><i class="icon-chevron-right"></i> Typehead</a></li>
          <li><a href="#affix"><i class="icon-chevron-right"></i> Affix</a></li>
        </ul>
      </div>
      <div class="span9">


        <!-- Overview
        ================================================== -->
        <section id="overview">
          <div class="page-header">
            <h1>Javascript para o Bootstrap</h1>
          </div>

          <h3>Individual ou compilado</h3>
          <p>Plugins podem ser incluídos individualmente (embora alguns tenham depências), ou tudo de uma vez. Ambos <strong>bootstrap.js</strong> e <strong>bootstrap.min.js</strong> contém todos plugins em um único arquivo</p>

          <h3>Atributos Data</h3>
          <p>Você pode usar todos plugins do Bootstrap puramente através da API na marcação sem escrever uma única linha de JavaScript. Isto é a primeira classe de API do Bootstrap e deve ser considerada quando usar um plugin</p>

          <p>Dito isto, em algumas situações pode ser desejável desligar esta funcionalidade. Para isto, nós também provemos a habilidade de destabilitar os atributos data que desanexa todos eventos no corpo com o namespace de `'data-api'`. E ficaria assim:
          <pre class="prettyprint linenums">$('body').off('.data-api')</pre>

          <p>Alternativamente, para obter um plugin específico, nós simplesmente incluímos o nome do plugin como um namespace no data-api assim:</p>
          <pre class="prettyprint linenums">$('body').off('.alert.data-api')</pre>

          <h3>API programática</h3>
          <p>Nós também acreditamos que deveríamos ser capazes de usar todos plugins do Bootstrap através da API Javascript. Todas API's públicas são únicas, com métodos encadeáveis, e retorna a coleção que foi aplicada</p>
          <pre class="prettyprint linenums">$(".btn.danger").button("toggle").addClass("fat")</pre>
          <p>Todos métodos devem aceitar um objeto de opções adicionais, em uma string que direcina a um método particular, ou nada (que inicia com o comportamento padrão):</p>
<pre class="prettyprint linenums">
$("#myModal").modal()                       // initialized with defaults
$("#myModal").modal({ keyboard: false })   // initialized with no keyboard
$("#myModal").modal('show')                // initializes and invokes show immediately</p>
</pre>
          <p>Cada plugin também expõe seu construtor básico como uma porpriedade `Constructor`: <code>$.fn.popover.Constructor</code>. Se você quer ter uma instância particular de um determinado plugin, obtenha diretamente de um elemento: <code>$('[rel=popover]').data('popover')</code>.</p>

          <h3>Eventos</h3>
          <p>O Bootstrap provê eventos customizados para ações únicas dos plugins. Geralmente, estes vêm em uma forma de infinitivo e passado particípio - onde o infinitivo (ex. <code>show</code>) é lançado no começo de um evento, e sua forma no passado particípio (ex. <code>shown</code>) é lançado ao se completar uma ação.</p>
          <p>Todos eventos no infinitivo possuem a funcionalidade do preventDefault. Isto lha dá abilidade de parar a execução de uma ação antes de iniciar</p>
<pre class="prettyprint linenums">
$('#myModal').on('show', function (e) {
    if (!data) return e.preventDefault() // stops modal from being shown
})
</pre>
        </section>



        <!-- Transitions
        ================================================== -->
        <section id="transitions">
          <div class="page-header">
            <h1>Transições <small>bootstrap-transition.js</small></h1>
          </div>
          <h3>Sobre transições</h3>
          <p>Para efeitos simples de transição, inclua bootstrap-transition.js uma vez antes de outros arquivos JS. Se você está usando uma versão minificada do bootstrap.js, não há necessidade de incluir&mdash; já está lá</p>
          <h3>Casos de uso</h3>
          <p>Alguns exemplos do plugin de transição</p>
          <ul>
            <li>Deslizando ou aplicando efeito fade em modais</li>
            <li>Fade out em abas</li>
            <li>Fade out em alertas</li>
            <li>Deslizando por painéis de carousel</li>
          </ul>

        </section>



        <!-- Modal
        ================================================== -->
        <section id="modals">
          <div class="page-header">
            <h1>Modais <small>bootstrap-modal.js</small></h1>
          </div>


          <h2>Exemplos</h2>
          <p>Modais são simplificados, mas flexíveis diálogos que requer o mínimo de funcionalidade e padrões inteligentes</p>

          <h3>Exemplo estático</h3>
          <p>Um modal renderiza um cabeçalho, corpo, e uma coleção de ações no footer</p>
          <div class="bs-docs-example" style="background-color: #f5f5f5;">
            <div class="modal" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabeçalho do modal</h3>
              </div>
              <div class="modal-body">
                <p>Um corpo fino &hellip;</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn">Fechar</a>
                <a href="#" class="btn btn-primary">Salvar mudanças</a>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="modal hide fade"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&amp;times;&lt;/button&gt;
    &lt;h3&gt;Cabeçalho do modal&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;Um corpo fino &hellip;&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn"&gt;Fechar&lt;/a&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Salvar mudanças&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

          <h3>demo ao vivo</h3>
          <p>Alterne um modal via JavaScript clicando no botão abaixo. Isto irá descer deslizando e aparecendo na frente do topo da página</p>
          <!-- sample modal content -->
          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Cabeçalho do modal</h3>
            </div>
            <div class="modal-body">
              <h4>Texto no modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover no modal</h4>
              <p>Este <a href="#" role="button" class="btn popover-test" title="A Title" data-content="aqui está um conteúdo ótimo. Muito engajante. certo?">botão</a></p>

              <h4>Tooltips em um modal</h4>
              <p><a href="#" class="tooltip-test" title="Tooltip">Este link</a> and <a href="#" class="tooltip-test" title="Tooltip">aquele link</a> deve ter tooltips no hover.</p>

              <hr>

              <h4>Sobrescrevendo texto para mostrar scrollbar opcionais</h4>
              <p>Nós setamos um <code>max-height</code> fixo na classe <code>.modal-body</code>. veja ela sobressair com com todos estes textos extras lorem ipsum que nós incluímos.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Fechar</button>
              <button class="btn btn-primary">Salvar mudanças</button>
            </div>
          </div>
          <div class="bs-docs-example" style="padding-bottom: 24px;">
            <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Executar modal de demo</a>
          </div>
<pre class="prettyprint linenums">
&lt!-- Button to trigger modal --&gt;
&lt;a href="#myModal" role="button" class="btn" data-toggle="modal"&gt;Executar modal de demo&lt;/a&gt;

&lt!-- Modal --&gt;
&lt;div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&times;&lt;/button&gt;
    &lt;h3 id="myModalLabel"&gt;Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;Um corpo fino &hellip;&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;button class="btn" data-dismiss="modal" aria-hidden="true"&gt;Fechar&lt;/button&gt;
    &lt;button class="btn btn-primary"&gt;Salvar mudanças&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>


          <hr class="bs-docs-separator">


          <h2>Uso</h2>

          <h3>Via atributos data</h3>
          <p>Ative um modal sem JavaScript. Escolha <code>data-toggle="modal"</code> em um elemento de controle, como um botão, com um <code>data-target="#foo"</code> ou <code>href="#foo"</code> para especificar um modal alternado</p>
          <pre class="prettyprint linenums">&lt;button type="button" data-toggle="modal" data-target="#myModal"&gt;Launch modal&lt;/button&gt;</pre>

          <h3>Via Javascript</h3>
          <p>Chame um modal com id <code>myModal</code> com uma única linha de javascript</p>
          <pre class="prettyprint linenums">$('#myModal').modal(options)</pre>

          <h3>Opções</h3>
          <p>Opções podem ser passadas via atributos data ou JavaScript. Para atributos data, insira o nome da opção para <code>data-</code>, ou como <code>data-backdrop=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Nome</th>
               <th style="width: 50px;">Tipo</th>
               <th style="width: 50px;">Padrão</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>cortina de fundo</td>
               <td>boleano</td>
               <td>true</td>
               <td>Inclui um pano de fundo para o modal, alternativamente, especifique <code>static</code> para não fechar o modal no clique</td>
             </tr>
             <tr>
               <td>Teclado</td>
               <td>boleano</td>
               <td>true</td>
               <td>Fecha o modal quando esc é pressionado</td>
             </tr>
             <tr>
               <td>exibir</td>
               <td>boleano</td>
               <td>true</td>
               <td>mostra o modal quando inicializado</td>
             </tr>
             <tr>
               <td>remote</td>
               <td>path</td>
               <td>false</td>
               <td><p>Se uma url remota é provida, o conteúdo será carregado via jQuery pelo método <code>load</code> e inserido dentro do <code>.modal-body</code>. Se você está usando a api nos atributos data, você pode alternativamente usar o atributo <code>href</code> para especificar uma fonte remota. Um exemplo disto é mostrado abaixo</p>
              <pre class="prettyprint linenums"><code>&lt;a data-toggle="modal" href="remote.html" data-target="#modal"&gt;click me&lt;/a&gt;</code></pre></td>
             </tr>
            </tbody>
          </table>

          <h3>Métodos</h3>
          <h4>.modal(opções)</h4>
          <p>Ativa seu conteúdo como modal. Aceita um objeto de opções <code>object</code></p>
<pre class="prettyprint linenums">
$('#myModal').modal({
  keyboard: false
})
</pre>
          <h4>.modal('toggle')</h4>
          <p>Manualmente alterne em um modal</p>
          <pre class="prettyprint linenums">$('#myModal').modal('toggle')</pre>
          <h4>.modal('show')</h4>
          <p>Manualmente abra um modal</p>
          <pre class="prettyprint linenums">$('#myModal').modal('show')</pre>
          <h4>.modal('hide')</h4>
          <p>Manualmente esconda um modal</p>
          <pre class="prettyprint linenums">$('#myModal').modal('hide')</pre>
          <h3>Eventos</h3>
          <p>A classe do Bootstrap modal expôe alguns eventos para uma funcionalidade de modal</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Evento</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>exibir</td>
               <td>Este evento dispara imediatamente quando o método <code>show</code> é chamado</td>
             </tr>
             <tr>
               <td>shown</td>
               <td>Este evento é acionado quando o modal fica visível para o usuário(espera até a transição css estar completa).</td>
             </tr>
             <tr>
               <td>hide</td>
               <td>Este evento é disparado imediatamente quando o método de instância <code>hide</code> é chamado</td>
             </tr>
             <tr>
               <td>hidden</td>
               <td>Este evento é disparado quando o modal deixou de ficar escondido para o usuário(espera completar a transição css)</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$('#myModal').on('hidden', function () {
  // faça algo
})
</pre>
        </section>



        <!-- Dropdowns
        ================================================== -->
        <section id="dropdowns">
          <div class="page-header">
            <h1>Dropdowns <small>bootstrap-dropdown.js</small></h1>
          </div>


          <h2>Exemplos</h2>
          <p>Adicione menus dropdown em qualquer coisa com este plugin, incluindo barra de navegação, aba e pílulas</p>

          <h3>Dentro de uma barra de navegação</h3>
          <div class="bs-docs-example">
            <div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Nome do projeto</a>
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="http://google.com">Ação</a></li>
                        <li><a tabindex="-1" href="#anotherAction">Outra ação</a></li>
                        <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Link separador</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li><a tabindex="-1" href="#">Ação</a></li>
                        <li><a tabindex="-1" href="#">Outra ação</a></li>
                        <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Link separador</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li><a tabindex="-1" href="#">Ação</a></li>
                        <li><a tabindex="-1" href="#">Outra ação</a></li>
                        <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Link separador</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div> <!-- /navbar-example -->
          </div> 

          <h3>Dentro de abas</h3>
          <div class="bs-docs-example">
            <ul class="nav nav-pills">
              <li class="active"><a href="#">link normal</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                  <li><a tabindex="-1" href="#">Ação</a></li>
                  <li><a tabindex="-1" href="#">Outra ação</a></li>
                  <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="#">Link separador</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li><a tabindex="-1" href="#">Ação</a></li>
                  <li><a tabindex="-1" href="#">Outra ação</a></li>
                  <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="#">Link separador</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
                <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li><a tabindex="-1" href="#">Ação</a></li>
                  <li><a tabindex="-1" href="#">Outra ação</a></li>
                  <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="#">Link separador</a></li>
                </ul>
              </li>
            </ul> <!-- /tabs -->
          </div> 


          <hr class="bs-docs-separator">


          <h2>Uso</h2>

          <h3>Via atributos data</h3>
          <p>Adicione <code>data-toggle="dropdown"</code> para um link ou botão para torná-lo um dropdown</p>
<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
  &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;Dropdown trigger&lt;/a&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
          <p>Para manter as urls intactas, use o atributo <code>data-target</code> ao invés de <code>href="#"</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
  &lt;a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html"&gt;
    Dropdown
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>

          <h3>Via Javascript</h3>
          <p>Chame o dropdown via JavaScript</p>
          <pre class="prettyprint linenums">$('.dropdown-toggle').dropdown()</pre>

          <h3>Opções</h3>
          <p><em>Nenhum</em></p>

          <h3>Métodos</h3>
          <h4>$().dropdown('toggle')</h4>
          <p>Uma api programática para alternar menus em uma barra de navegação ou uma navegação em abas</p>
        </section>



        <!-- ScrollSpy
        ================================================== -->
        <section id="scrollspy">
          <div class="page-header">
            <h1>ScrollSpy <small>bootstrap-scrollspy.js</small></h1>
          </div>


          <h2>Exemplo na barra de navegação</h2>
          <p>O plugin de ScrollSpy é para automaticamente atualizar alvos de navegação baseado na posição do scroll. Realize um scroll na barra de navegação abaixo para ativar a mudança da classe. Os subitens do dropdown serão destacados também.</p>
          <div class="bs-docs-example">
            <div id="navbarExample" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Nome do projeto</a>
                  <ul class="nav">
                    <li><a href="#fat">@fat</a></li>
                    <li><a href="#mdo">@mdo</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#one">um</a></li>
                        <li><a href="#two">dois</a></li>
                        <li class="divider"></li>
                        <li><a href="#three">tres</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
              <h4 id="fat">@fat</h4>
              <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
              <h4 id="mdo">@mdo</h4>
              <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
              <h4 id="one">one</h4>
              <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
              <h4 id="two">two</h4>
              <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
              <h4 id="three">three</h4>
              <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
              <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
              </p>
            </div>
          </div>


          <hr class="bs-docs-separator">


          <h2>Uso</h2>

          <h3>Via atributos data</h3>
          <p>Para facilmente adicionar scrollspy na sua navegação, simplesmente adicione <code>data-spy="scroll"</code> ao elemento que você quer espiar (mais tipicamente seria o corpo) e <code>data-target=".navbar"</code> para selecionar que navegação usar. Você poder usar o scrollspy dentro de um componente <code>.nav</code></p>
          <pre class="prettyprint linenums">&lt;body data-spy="scroll" data-target=".navbar"&gt;...&lt;/body&gt;</pre>

          <h3>Via Javascript</h3>
          <p>Chame o scrollspy via JavaScript:</p>
          <pre class="prettyprint linenums">$('#navbar').scrollspy()</pre>

          <div class="alert alert-info">
            <strong>Atenção!</strong>
            Links de barras de navegação precisam ter ids concisos. Por exemplo, um <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> deve corresponder a algo no dom como <code>&lt;div id="home"&gt;&lt;/div&gt;</code>.
          </div>

          <h3>Métodos</h3>
          <h4>.scrollspy('refresh')</h4>
          <p>Quando usar scrollspy em conjunção adicionando ou removendo elementos no DOM, assim você vai precisar chamar o método refresh assim:</p>
<pre class="prettyprint linenums">
$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
});
</pre>

          <h3>Opções</h3>
          <p>Opções podem ser passadas via atributos data ou por JavaScript. Para atributos data, insira a opção ao <code>data-</code>, assim como <code>data-offset=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Nome</th>
               <th style="width: 100px;">Tipo</th>
               <th style="width: 50px;">Padrão</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>número</td>
               <td>10</td>
               <td>pixels de offset do topo quando calculando posição com scroll</td>
             </tr>
            </tbody>
          </table>

          <h3>Eventos</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Evento</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>ativar</td>
               <td>Este evento dispara enquanto o novo item se torna ativo com o scrollspy</td>
            </tr>
            </tbody>
          </table>
        </section>



        <!-- Tabs
        ================================================== -->
        <section id="tabs">
          <div class="page-header">
            <h1>Tabs alternadas <small>bootstrap-tab.js</small></h1>
          </div>


          <h2>Exemplo de abas</h2>
          <p>Adicione uma rápida e dinâmica navegação em abas para passar através de painéis de um conteúdo local, até mesmo via menus dropdown</p>
          <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Início</a></li>
              <li><a href="#profile" data-toggle="tab">Perfil</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="home">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div>
              <div class="tab-pane fade" id="profile">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              </div>
              <div class="tab-pane fade" id="dropdown1">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div class="tab-pane fade" id="dropdown2">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
            </div>
          </div>


          <hr class="bs-docs-separator">


          <h2>Uso</h2>
          <p>Habilite abas tabeáveis via JavaScript (cada aba precisa ser ativada individualmente):</p>
<pre class="prettyprint linenums">
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})</pre>
          <p>Você pode ativar abas individuais de diferentes formas</p>
<pre class="prettyprint linenums">
$('#myTab a[href="#profile"]').tab('show'); // Select tab by name
$('#myTab a:first').tab('show'); // Select first tab
$('#myTab a:last').tab('show'); // Select last tab
$('#myTab li:eq(2) a').tab('show'); // Select third tab (0-indexed)
</pre>

          <h3>Marcação</h3>
          <p>Você pode ativar uma aba ou uma navegação pílula sem escrever nenhum JavaScript simplesmente especificando um <code>data-toggle="tab"</code> ou <code>data-toggle="pill"</code> em um elemento. Adicionando as classes <code>nav</code> e um <code>nav-tabs</code> para a aba <code>ul</code> irá aplicar o estilo de aba do Bootstrap</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li&gt;&lt;a href="#home" data-toggle="tab"&gt;Início&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile" data-toggle="tab"&gt;Perfil&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages" data-toggle="tab"&gt;Mensagens&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings" data-toggle="tab"&gt;Configurações&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

          <h3>Métodos</h3>
          <h4>$().tab</h4>
          <p>
            Ativar a o elemento aba e container de conteúdo. As abas deveriam ter um <code>data-target</code> ou um atributo <code>href</code> de conteúdo no DOM
          </p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs" id="myTab"&gt;
  &lt;li class="active"&gt;&lt;a href="#home"&gt;Início&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile"&gt;Perfil&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages"&gt;Mensagens&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings"&gt;Configurações&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content"&gt;
  &lt;div class="tab-pane active" id="home"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="profile"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="messages"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="settings"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
  $(function () {
    $('#myTab a:last').tab('show');
  })
&lt;/script&gt;
</pre>

          <h3>Eventos</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Evento</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>exibir</td>
               <td>Este evento é disparado quadno a tab está sendo exibida, mas antes de ser mostrada. Use <code>event.target</code> e <code>event.relatedTarget</code> para a tab ativa e anterior (se disponível) respectivamente.</td>
            </tr>
            <tr>
               <td>shown</td>
               <td>Este evento exibe a tab mas depois dela ter sido toda renderizada. Use <code>event.target</code> e <code>event.relatedTarget</code> para ter a tab ativa e a previamente ativa (se disponível) respectivamente.</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$('a[data-toggle="tab"]').on('shown', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
})
</pre>
        </section>


        <!-- Tooltips
        ================================================== -->
        <section id="tooltips">
          <div class="page-header">
            <h1>Tooltip <small>bootstrap-tooltip.js</small></h1>
          </div>


          <h2>Exemplos</h2>
          <p>Inspirado neste excelente jQuery Tipsy Plugin desenvolvido por Jason Frame; Tooltips é um plugin com versão atualizada, que não conta com imagens, somente com animações css3, e atributos data para armazenamento local.</p>
          <p>Coloque o mouse por cima nos links abaixo para ver os tooltips</p>
          <div class="bs-docs-example tooltip-demo">
            <p class="muted" style="margin-bottom: 0;">Aperte os sintos no próximos níveis <a href="#" rel="tooltip" title="Default tooltip">você provavelmente</a> não ouviu falar deles. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
            </p>
          </div>

          <h3>Quatro direções</h3>
          <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a href="#" rel="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
              <li><a href="#" rel="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
              <li><a href="#" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
              <li><a href="#" rel="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
            </ul>
          </div>


          <hr class="bs-docs-separator">


          <h2>Uso</h2>
          <p>Lance um tooltip via JavaScript</p>
          <pre class="prettyprint linenums">$('#example').tooltip(opções)</pre>

          <h3>Opções</h3>
          <p>Opções podem ser passadas via atributos data ou JavaScript. Para atributos data, insira a opção de nome <code>data-</code>, como em <code>data-animation=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Nome</th>
               <th style="width: 100px;">Tipo</th>
               <th style="width: 50px;">Padrão</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animações</td>
               <td>boleano</td>
               <td>true</td>
               <td>aplicar uma transição de fade css para o tooltip</td>
             </tr>
             <tr>
               <td>html</td>
               <td>boleano</td>
               <td>false</td>
               <td>Insira html no tooltip. Se for escolhido false, o método jQuery <code>text</code> irá usar o conteúdo inserido dentro do dom. Use o texto se você está preocupado com ataques XSS</td>
             </tr>
             <tr>
               <td>localização</td>
               <td>string|function</td>
               <td>'top'</td>
               <td>como posicionar o tooltip - top | bottom | left | right</td>
             </tr>
             <tr>
               <td>seletor</td>
               <td>string</td>
               <td>false</td>
               <td>se um seletor é disponibilizado, os objetos de tooltips serão delegados para os elementos especificados</td>
             </tr>
             <tr>
               <td>título</td>
               <td>string | function</td>
               <td>''</td>
               <td>O título padrão é `title` se a tag title não estiver presente</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td>string</td>
               <td>'hover'</td>
               <td>Como o tooltip é disparado - click | hover | focus | manual</td>
             </tr>
             <tr>
               <td>delay</td>
               <td>number | object</td>
               <td>0</td>
               <td>
                <p>Um intervalo que mostra e esconde o tooltip (ms) - não aplica um tipo de disparo de evento</p>
                <p>Se um número é fornecido, o delay é aplicado no esconder/mostrar</p>
                <p>A estrutura do objeto é: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info">
            <strong>Atenção!</strong>
            Opções para tooltips individuais podem alternativamente ser especificadas usando atributos data
          </div>

          <h3>Marcação</h3>
          <p>Por razões de perfomance, as apis de dados do tooltip e pop over sao opcionais. Para usá-los simplesmente especifique uma opção de seletor</p>
          <pre class="prettyprint linenums">&lt;a href="#" rel="tooltip" title="primeiro tooltip"&gt;passe o mouse em mim&lt;/a&gt;</pre>

          <h3>Métodos</h3>
          <h4>$().tooltip(opções)</h4>
          <p>Anexa um manipulador de tooltip para uma coleção de elementos</p>
          <h4>.tooltip('show')</h4>
          <p>Revela um elemento tooltip</p>
          <pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
          <h4>.tooltip('hide')</h4>
          <p>Esconde um elemento tooltip</p>
          <pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
          <h4>.tooltip('toggle')</h4>
          <p>Alterne um elemento tooltip</p>
          <pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
          <h4>.tooltip('destroy')</h4>
          <p>Esconde e destrói tooltips de elementos</p>
          <pre class="prettyprint linenums">$('#element').tooltip('destroy')</pre>
        </section>



      <!-- Popovers
      ================================================== -->
      <section id="popovers">
        <div class="page-header">
          <h1>Popovers <small>bootstrap-popover.js</small></h1>
        </div>

        <h2>Exemplos</h2>
        <p>Adicione um pequeno overlay de conteúdo, como aqueles do iPad, para qualquer elemento para guardar informação secundária. Passe o mouse no botão para disparar o popover. <strong>Requer que o <a href="#tooltips">Tooltip</a> seja incluído.</strong></p>

        <h3>Popover estático</h3>
        <p>Quatro opções estão disponíveis: top, right, bottom, e alinhado a esquerda com left</p>
        <div class="bs-docs-example bs-docs-example-popover">
          <div class="popover top">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover top</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover right">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover right</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover bottom">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover bottom</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover left">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover left</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="clearfix"></div>
        </div>
        <p>Nenhuma marcação dos popovers são geradas do JavaScript e os conteúdos dentro de um atributo <code>data</code></p>

        <h3>Live demo</h3>
        <div class="bs-docs-example" style="padding-bottom: 24px;">
          <a href="#" class="btn btn-large btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Clicar no popover alternado</a>
        </div>

        <h4>Quatro direções</h4>
        <div class="bs-docs-example tooltip-demo">
          <ul class="bs-docs-tooltip-examples">
            <li><a href="#" class="btn" rel="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on top">Popover no topo</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on right">Popover na direita</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on bottom">Popover embaixo</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on left">Popover na esquerda</a></li>
          </ul>
        </div>


        <hr class="bs-docs-separator">


        <h2>Uso</h2>
        <p>Habilite popover via JavaScript</p>
        <pre class="prettyprint linenums">$('#example').popover(opções)</pre>

        <h3>Opções</h3>
        <p>Opções podem ser passadas via atributos data ou JavaScript. Para atributos data, insira a opção de nome <code>data-</code>, como em <code>data-animation=""</code>.</p>
        <table class="table table-bordered table-striped">
          <thead>
           <tr>
             <th style="width: 100px;">Nome</th>
             <th style="width: 100px;">Tipo</th>
             <th style="width: 50px;">Padrão</th>
             <th>Descrição</th>
           </tr>
          </thead>
          <tbody>
           <tr>
             <td>animações</td>
             <td>boleano</td>
             <td>true</td>
             <td>aplicar uma transição de fade css para o tooltip</td>
           </tr>
           <tr>
             <td>html</td>
             <td>boleano</td>
             <td>false</td>
             <td>Insira html no popover. Se for escolhida a opção false, o método jQuery <code>text</code> será usado para inserir documento no dom. Use o texto se você está preocupado com ataque XSS.</td>
           </tr>
           <tr>
             <td>localização</td>
             <td>string|function</td>
             <td>'right'</td>
             <td>como posicionar o popover - top | bottom | left | right</td>
           </tr>
           <tr>
             <td>seletor</td>
             <td>string</td>
             <td>false</td>
             <td>Se um seletor é disponibilizado, os objetos do tooltip serão delegados para elementos especificados</td>
           </tr>
           <tr>
             <td>trigger</td>
             <td>string</td>
             <td>'click'</td>
             <td>Como popover é disparado - click | hover | focus | manual</td>
           </tr>
           <tr>
             <td>título</td>
             <td>string | function</td>
             <td>''</td>
             <td>o valor padrão do título é `title` se o atributo não estiver presente</td>
           </tr>
           <tr>
             <td>content</td>
             <td>string | function</td>
             <td>''</td>
             <td>o conteudo padrao é `data-content` se o atributo não estiver presente</td>
           </tr>
           <tr>
             <td>delay</td>
             <td>number | object</td>
             <td>0</td>
             <td>
              <p>Intervalo para mostrar e esconder o popover (ms) - não aplica ao uso do evento no modo manual</p>
              <p>Se um número é fornecido, o delay é aplicado no esconder/mostrar</p>
              <p>A estrutura do objeto é: <code>delay: { show: 500, hide: 100 }</code></p>
             </td>
           </tr>
          </tbody>
        </table>
        <div class="alert alert-info">
          <strong>Atenção!</strong>
          Opções para popovers individuais podem ser alternativamente especificada através dos atributos data
        </div>

        <h3>Marcação</h3>
        <p>Por razões de perfomance, as apis de dados do tooltip e pop over sao opcionais. Para usá-los simplesmente especifique uma opção de seletor</p>

        <h3>Métodos</h3>
        <h4>$().popover(opções)</h4>
        <p>Inicializar popovers para uma coleção de elementos</p>
        <h4>.popover('show')</h4>
        <p>Revela um elemento popover</p>
        <pre class="prettyprint linenums">$('#element').popover('show')</pre>
        <h4>.popover('hide')</h4>
        <p>Esconde um elemento popover</p>
        <pre class="prettyprint linenums">$('#element').popover('hide')</pre>
        <h4>.popover('toggle')</h4>
        <p>Alterna um elemento popover</p>
        <pre class="prettyprint linenums">$('#element').popover('toggle')</pre>
        <h4>.popover('destroy')</h4>
        <p>Esconde e destrói um elemento popover</p>
        <pre class="prettyprint linenums">$('#element').popover('destroy')</pre>
      </section>

      <!-- Balloon
      ================================================== -->
      <section id="balloon">
        <div class="page-header">
          <h1>Balloon <small>bootstrap-balloon.js</small></h1>
        </div>

        <p><strong>Requer que o <a href="#tooltips">Tooltip</a> seja incluído.</strong></p>

        <h3>Live demo</h3>
        <div class="bs-docs-example" style="padding-bottom: 24px;">
          <a href="#" class="btn btn-large btn-danger" rel="balloon" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Clique para alternar o Balloon</a>
        </div>
        <h4>Quatro direções</h4>
        <div class="bs-docs-example tooltip-demo">
          <ul class="bs-docs-tooltip-examples">
            <li><a href="#" class="btn" rel="balloon" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Balloon on top">Balloon no topo</a></li>
            <li><a href="#" class="btn" rel="balloon" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Balloon on right">Balloon na direita</a></li>
            <li><a href="#" class="btn" rel="balloon" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Balloon on bottom">Balloon embaixo</a></li>
            <li><a href="#" class="btn" rel="balloon" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Balloon on left">Balloon na esquerda</a></li>
          </ul>
        </div>
<pre class="prettyprint linenums">
//html  
&lt;ul class=&quot;bs-docs-tooltip-examples&quot;&gt;
  &lt;li&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn&quot; rel=&quot;balloon&quot; data-placement=&quot;top&quot; data-content=&quot;sample content.&quot; &gt;Balloon no topo&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn&quot; rel=&quot;balloon&quot; data-placement=&quot;right&quot; data-content=&quot;sample content.&quot; &gt;Balloon na direita&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn&quot; rel=&quot;balloon&quot; data-placement=&quot;bottom&quot; data-content=&quot;sample content.&quot; &gt;Balloon embaixo&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn&quot; rel=&quot;balloon&quot; data-placement=&quot;left&quot; data-content=&quot;sample content.&quot; &gt;Balloon na esquerda&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt; 
</pre>
<pre class="prettyprint linenums">
// javascript
$("a[rel=balloon]")
  .balloon()
  .click(function(e) {
    e.preventDefault()
})
</pre>



        <hr class="bs-docs-separator">


        <h2>Uso</h2>
        <p>habilitar o balloon via javascript</p>
        <pre class="prettyprint linenums">$('#example').balloon(opções)</pre>

        <h3>Opções</h3>
        <p>O Balloon funciona com as mesmas opções e métodos do <a href="#popovers">Popover</a></p>
        
      </section>

      <!-- Alert
      ================================================== -->
      <section id="alerts">
        <div class="page-header">
          <h1>Mensagens de alerta <small>bootstrap-alert.js</small></h1>
        </div>


        <h2>Exemplo de alertas</h2>
        <p>Adicione funcionalidade para todas mensagens de alerta dentro do plugin</p>
        <div class="bs-docs-example">
          <div class="alert fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Sagrado guacamole!</strong> Melhor checar você mesmo, você não está parecendo bem
          </div>
        </div>

        <div class="bs-docs-example">
          <div class="alert alert-block alert-error fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Oh! Você tem um erro!</h4>
            <p>Mude isto e tente novamente. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>
              <a class="btn btn-danger" href="#">Tomar esta ação</a> <a class="btn" href="#">Ou faça isto</a>
            </p>
          </div>
        </div>


        <hr class="bs-docs-separator">


        <h2>Uso</h2>
        <p>Habilite o fechamento de um alerta via JavaScript</p>
        <pre class="prettyprint linenums">$(".alert").alert()</pre>

        <h3>Marcação</h3>
        <p>Simplesmente adicione <code>data-dismiss="alert"</code> para o seu botão de fechar e isto dá ao alerta a opção de fechar.</p>
        <pre class="prettyprint linenums">&lt;a class="close" data-dismiss="alert" href="#"&gt;&amp;times;&lt;/a&gt;</pre>

        <h3>Métodos</h3>
        <h4>$().alert()</h4>
        <p>Coloque todos os alertas com a funcionalidade de fechar. Para ter seus alertas animados quando fechar, verifique se a classe <code>.fade</code> and <code>.in</code> já foram aplicado a eles.</p>
        <h4>.alert('close')</h4>
        <p>Fecha um alerta</p>
        <pre class="prettyprint linenums">$(".alert").alert('close')</pre>


        <h3>Eventos</h3>
        <p>Os Alertas do Bootstrap expões alguns eventos para você modificar a sua funcionalidade</p>
        <table class="table table-bordered table-striped">
          <thead>
           <tr>
             <th style="width: 150px;">Evento</th>
             <th>Descrição</th>
           </tr>
          </thead>
          <tbody>
           <tr>
             <td>close</td>
             <td>Este evento é disparado imediatamente quando o <code>close</code> é chamado</td>
           </tr>
           <tr>
             <td>closed</td>
             <td>Este evento é chamado quando o alerta foi fechado (irá esperar até a transição css estar completa)</td>
           </tr>
          </tbody>
        </table>
<pre class="prettyprint linenums">
$('#my-alert').bind('closed', function () {
  // faça algo
})
</pre>
      </section>



          <!-- Buttons
          ================================================== -->
          <section id="buttons">
            <div class="page-header">
              <h1>Botões <small>bootstrap-button.js</small></h1>
            </div>

            <h2>Exemplos de uso</h2>
            <p>Para mais com botões. Controle estados dos botões para criar grupos de botões para componentes como barra de ferramentas</p>

            <h4>Estagnado</h4>
            <p>Adicione um data-loading-text="Loading..." para usar um estado de carregando em um botão</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <button type="button" id="fat-btn" data-loading-text="loading..." class="btn btn-primary">
                estado de carregando
              </button>
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn btn-primary" data-loading-text="Loading..."&gt;Loading state&lt;/button&gt;</pre>

            <h4>Alternador simples</h4>
            <p>Adicione data-toggle="button" para ativar alternador em um único botão</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <button type="button" class="btn btn-primary" data-toggle="button">Alternador Simples</button>
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-toggle="button"&gt;Single Toggle&lt;/button&gt;</pre>

            <h4>Checkbox</h4>
            <p>Adicione data-toggle="buttons-checkbox" para estilo de checkbox em um btn-group</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <div class="btn-group" data-toggle="buttons-checkbox">
                <button type="button" class="btn btn-primary">Esquerda</button>
                <button type="button" class="btn btn-primary">Meio</button>
                <button type="button" class="btn btn-primary">Direita</button>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group" data-toggle="buttons-checkbox"&gt;
  &lt;button type="button" class="btn"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>

            <h4>Radio</h4>
            <p>Adicione data-toggle="buttons-radio" estilos de botões radio em um btn-group</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" class="btn btn-primary">Esquerda</button>
                <button type="button" class="btn btn-primary">Meio</button>
                <button type="button" class="btn btn-primary">Direita</button>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group" data-toggle="buttons-radio"&gt;
  &lt;button type="button" class="btn"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>


            <hr class="bs-docs-separator">


            <h2>Uso</h2>
            <p>Habilitar botões via JavaScript</p>
            <pre class="prettyprint linenums">$('.nav-tabs').button()</pre>

            <h3>Marcação</h3>
            <p>Atributos data são integrais para plugins de botões. Verifique o exemplo de código abaixo para ver vários tipos de markups</p>

            <h3>Opções</h3>
            <p><em>Nenhum</em></p>

            <h3>Métodos</h3>
            <h4>$().button('toggle')</h4>
            <p>Alternador com estados de apertado. Dá o botão a aparência de que ele foi ativado</p>
            <div class="alert alert-info">
              <strong>Atenção!</strong>
              Você pode habilitar o alternado de um botão com um atributo <code>data-toggle</code>.
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-toggle="button" &gt;…&lt;/button&gt;</pre>
            <h4>$().button('loading')</h4>
            <p>Atribua seus estados de botão para loading - Desabilite os botões e mude o texto para um texto de carregando. Texto de carregando deve ser defiinido pelo atributo <code>data-loading-text</code>.
            </p>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-loading-text="loading stuff..." &gt;...&lt;/button&gt;</pre>
            <div class="alert alert-info">
              <strong>Atenção!</strong>
              <a href="https://github.com/twitter/bootstrap/issues/793">Firefox persiste em deixar com o estado de loading em páginas subsequentes</a>. Uma solução prévia para isto é usar o <code>autocomplete="off"</code>.
            </div>
            <h4>$().button('reset')</h4>
            <p>Reiniciar estados de botão - muda o texto no texto original</p>
            <h4>$().button(string)</h4>
            <p>Reiniciar estados de botão - muda o texto em qualquer dado definido</p>
<pre class="prettyprint linenums">&lt;button type="button" class="btn" data-complete-text="finished!" &gt;...&lt;/button&gt;
&lt;script&gt;
  $('.btn').button('complete')
&lt;/script&gt;
</pre>
          </section>



          <!-- Collapse
          ================================================== -->
          <section id="collapse">
            <div class="page-header">
              <h1>Colapsáveis <small>bootstrap-collapse.js</small></h1>
            </div>

            <h3>Sobre</h3>
            <p>Tenha estilos base e suporte flexível para componentes colapsáveis como acordeões e navegação</p>
            <p class="muted"><strong>*</strong> Requer que o plugin de transição seja incluído</p>

            <h2>Exemplo de accordion</h2>
            <p>Usando o plugin colapsável, nós construímos um widget no estilo accordion</p>

            <div class="bs-docs-example">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Grupo de itens colapsáveis #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Grupo de itens colapsáveis #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Grupo de itens colapsáveis #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="accordion" id="accordion2"&gt;
  &lt;div class="accordion-group"&gt;
    &lt;div class="accordion-heading"&gt;
      &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"&gt;
        Grupo de itens colapsáveis #1
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="collapseOne" class="accordion-body collapse in"&gt;
      &lt;div class="accordion-inner"&gt;
        Anim pariatur cliche...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="accordion-group"&gt;
    &lt;div class="accordion-heading"&gt;
      &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"&gt;
        Grupo de itens colapsáveis #2
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="collapseTwo" class="accordion-body collapse"&gt;
      &lt;div class="accordion-inner"&gt;
        Anim pariatur cliche...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
...
</pre>
            <p>Você pode também usar o plugin sem a marcação de um acordeon. Faça um botão alternado expandindo e colapsando outro elemento</p>
<pre class="prettyprint linenums">
&lt;button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"&gt;
  um item colapsável simples
&lt;/button&gt;

&lt;div id="demo" class="collapse in"&gt; … &lt;/div&gt;
</pre>


            <hr class="bs-docs-separator">


            <h2>Uso</h2>

            <h3>Via atributos data</h3>
            <p>Simplesmente adicione <code>data-toggle="collapse"</code> e um <code>data-target</code> para o elemento automaticamente assumir o controle de um elemento colapsável. O atributo <code>data-target</code> aceita um seletor css para ser aplicado. Tenha certeza de adicionar a classe <code>collapse</code> para um elemento colapsável. Se você gosta de ele vir por padrão aberto, adicione a classe <code>in</code></p>
            <p>para dicionar um gerenciamento de accordion em grupo para um controle de elementos colapsáveis, adicione os atributos data <code>data-parent="#selector"</code>. Verifica a demonstração para vê-lo em ação.</p>

            <h3>Via Javascript</h3>
            <p>Habilitar manualmente com:</p>
            <pre class="prettyprint linenums">$(".collapse").collapse()</pre>

            <h3>Opções</h3>
            <p>Opções podem ser passadas via atributos data ou JavaScript. Para atributos data, adicione a opção de nome <code>data-</code>, como em <code>data-parent=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;">Nome</th>
                 <th style="width: 50px;">Tipo</th>
                 <th style="width: 50px;">Padrão</th>
                 <th>Descrição</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>parent</td>
                 <td>seletor</td>
                 <td>false</td>
                 <td>Se um seletor é dado então todos os elementos colapsáveis abaixo do pai expecificado será fechado quando seu item colapsável é exibido. (similar ao funcionamento tradicional de um accordion)</td>
               </tr>
               <tr>
                 <td>toggle</td>
                 <td>boleano</td>
                 <td>true</td>
                 <td>alterna todos os elementos colapsáveis na sua invocação</td>
               </tr>
              </tbody>
            </table>


            <h3>Métodos</h3>
            <h4>.collapse(opções)</h4>
            <p>Ativar seu conteúdo com um elemento colapsável. Aceita um objeto de opções <code>object</code>
<pre class="prettyprint linenums">
$('#myCollapsible').collapse({
  toggle: false
})
</pre>
            <h4>.collapse('toggle')</h4>
            <p>Alterna todos elementos colapsáveis para mostrar ou esconder</p>
            <h4>.collapse('show')</h4>
            <p>Mostra um elemento colapsável</p>
            <h4>.collapse('hide')</h4>
            <p>Esconde um elemento colapsável</p>

            <h3>Eventos</h3>
            <p>O Boostrap collapse expõe alguns eventos para estender sua funcionalidade</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;">Evento</th>
                 <th>Descrição</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>exibir</td>
                 <td>Este evento dispara imediatamente quando o método <code>show</code> é chamado</td>
               </tr>
               <tr>
                 <td>shown</td>
                 <td>Este evento é disparado quando um elemento colapsável está visível para o usuário(esperar até a transição CSS estar completa).</td>
               </tr>
               <tr>
                 <td>hide</td>
                 <td>
                  Este evento é disparado imediatamente quando o método <code>hide</code> é chamado
                 </td>
               </tr>
               <tr>
                 <td>hidden</td>
                 <td>Este evento é chamado quando um elelmento colapsável ficou escondido para o usuário(Espera até a transição css estar completa)</td>
               </tr>
              </tbody>
            </table>
<pre class="prettyprint linenums">
$('#myCollapsible').on('hidden', function () {
  // faça algo
})</pre>
          </section>



           <!-- Carousel
          ================================================== -->
          <section id="carousel">
            <div class="page-header">
              <h1>Carousel <small>bootstrap-carousel.js</small></h1>
            </div>

            <h2>Exemplo do carousel</h2>
            <p>O slideshow abaixo mostra um plugin genérico e componente de deslizar elementos em ciclo como um carrossel</p>
            <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Primeiro rótulo de miniatura</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Segundo rótulo de miniatura</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Terceiro rótulo de miniatura</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div id="myCarousel" class="carousel slide"&gt;
  &lt;!-- Itens de carousel --&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="active item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Navegador do carousel --&gt;
  &lt;a class="carousel-control left" href="#myCarousel" data-slide="prev"&gt;&amp;lsaquo;&lt;/a&gt;
  &lt;a class="carousel-control right" href="#myCarousel" data-slide="next"&gt;&amp;rsaquo;&lt;/a&gt;
&lt;/div&gt;
</pre>

            <div class="alert alert-warning">
              <strong>Atenção!</strong>
              Quando implementar este carousel, remova as imagens que nós disponibilizamos e coloque a sua
            </div>


            <hr class="bs-docs-separator">


            <h2>Uso</h2>

            <h3>Via atributos data</h3>
            <p>...</p>

            <h3>Via Javascript</h3>
            <p>Chame o carousel manualmente com:</p>
            <pre class="prettyprint linenums">$('.carousel').carousel()</pre>

            <h3>Opções</h3>
            <p>Opções podem ser passadas via atributos data ou por JavaScript. Para atributos data, insira a opção ao <code>data-</code>, assim como <code>data-interval=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;">Nome</th>
                 <th style="width: 50px;">Tipo</th>
                 <th style="width: 50px;">Padrão</th>
                 <th>Descrição</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>intervalo</td>
                 <td>número</td>
                 <td>5000</td>
                 <td>A quantidade de tempo para um intervalo que automaticamente coloca um item em ciclos. Se falso, o carousel irá automaticamente em ciclo</td>
               </tr>
               <tr>
                 <td>pause</td>
                 <td>string</td>
                 <td>"hover"</td>
                 <td>Pausa o carousel no mouseenter e resume no mouseleave</td>
               </tr>
              </tbody>
            </table>

            <h3>Métodos</h3>
            <h4>.carousel(opções)</h4>
            <p>Inicializa o carousel com umas opções e começa a fazer um ciclo entre eles</p>
<pre class="prettyprint linenums">
$('.carousel').carousel({
  interval: 2000
})
</pre>
            <h4>.carousel('cycle')</h4>
            <p>Ciclos através do itens do carousel da esquerda para direita</p>
            <h4>.carousel('pause')</h4>
            <p>Pare o carousel de realizar ciclos através de itens</p>
            <h4>.carousel(number)</h4>
            <p>Os ciclos do carousel de um frame particular(baseado em 0, similar a um array)</p>
            <h4>.carousel('prev')</h4>
            <p>Ciclo para o item anterior</p>
            <h4>.carousel('next')</h4>
            <p>Ciclo para o próximo item</p>

            <h3>Eventos</h3>
            <p>A classe do Boostrap carousel expõe dois eentos para estender sua funcionalidade </p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;">Evento</th>
                 <th>Descrição</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>slide</td>
                 <td>este evento é disparado imediatamente quando a o método da instância <code>slide</code> é chamado.</td>
               </tr>
               <tr>
                 <td>slid</td>
                 <td>Este evento é chamado quando o carousel completou a sua transição de slide</td>
               </tr>
              </tbody>
            </table>
          </section>



          <!-- Typeahead
          ================================================== -->
          <section id="typeahead">
            <div class="page-header">
              <h1>Typehead <small>bootstrap-typeahead.js</small></h1>
            </div>


            <h2>Exemplo</h2>
            <p>Um básico, fácil e extensível plugin para rapidamente criar um cabeçalho elegante para qualquer texto e formulário</p>
            <div class="bs-docs-example" style="background-color: #f5f5f5;">
              <input type="text" class="span3" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
            </div>
            <pre class="prettyprint linenums">&lt;input type="text" data-provide="typeahead"&gt;</pre>


            <hr class="bs-docs-separator">


            <h2>Uso</h2>

            <h3>Via atributos data</h3>
            <p>Adicione atributos data para registrar um elemento com uma funcionalidade do typeahead como mostrado no exemplo abaixo</p>

            <h3>Via Javascript</h3>
            <p>Chame o typeahead manualmente com:</p>
            <pre class="prettyprint linenums">$('.typeahead').typeahead()</pre>

            <h3>Opções</h3>
            <p>Opções podem ser passadas via atributos data ou por JavaScript. Para atributos data, insira a opção ao <code>data-</code>, assim como <code>data-source=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;">Nome</th>
                 <th style="width: 50px;">Tipo</th>
                 <th style="width: 100px;">Padrão</th>
                 <th>Descrição</th>
               </tr>
              </thead>
              <tbody>
                <tr>
                 <td>source</td>
                 <td>array, function</td>
                 <td>[ ]</td>
                 <td>A origem dos dados para verificar. Pode ser um array de strings ou uma função. A função é passada com dois argumentos, o valor da <code>query</code> no campo de inpute e o callback <code>process</code>. A função pode ser usado sincronizando por retornar a fonte de dados diretamente ou de forma assíncrona via o callback <code>process</code> em um único argumento.</td>
               </tr>
               <tr>
                 <td>items</td>
                 <td>número</td>
                 <td>8</td>
                 <td>O número máximo de itens para mostrar no dropdown</td>
               </tr>
               <tr>
                 <td>minLength</td>
                 <td>número</td>
                 <td>1</td>
                 <td>A quantidade mínima de caracteres que precisa ser disparado antes de disparar uma sugestão do autocomplete</td>
               </tr>
               <tr>
                 <td>matcher</td>
                 <td>function</td>
                 <td>case insensitive</td>
                 <td>O método usado para determinar se uma pesquisa acha um item. Aceita um argumento simples, o <code>item</code> contra a sentença de teste. Acesse a atual sentença com <code>this.query</code>. Retorne um um boleano <code>true</code> se a sentença é encontrada</td>
               </tr>
               <tr>
                 <td>sorter</td>
                 <td>function</td>
                 <td>encontro exato,<br> case sensitive, <br>case insensitive</td>
                 <td>O método usado para ordenar os resultados do autocomplete. Aceita um argumento simples <code>items</code> e tem o escopo da instância do typeahead. Referenciando a sentenção atual com <code>this.query</code></td>
               </tr>
               <tr>
                 <td>Atualizador</td>
                 <td>function</td>
                 <td>Retornar itens selecionados</td>
                 <td>O método usado para retornar o item selecionado. Aceita um único argumento o <code>item</code> que tem um escopo da instância do typeahead</td>
               </tr>
               <tr>
                 <td>highlighter</td>
                 <td>function</td>
                 <td>destaque todos os padrões encontrados</td>
                 <td>O método usado para destacar os resultados do automplete. Aceita um único argumento <code>item</code> que tem o escopo da instância do typeahead. Deve retornar html</td>
               </tr>
              </tbody>
            </table>

            <h3>Métodos</h3>
            <h4>.typeahead(opções)</h4>
            <p>Inicializa um input com um typeahead</p>
          </section>



          <!-- Affix
          ================================================== -->
          <section id="affix">
            <div class="page-header">
              <h1>Affix <small>bootstrap-affix.js</small></h1>
            </div>

            <h2>Exemplo</h2>
            <p>A subnavegação na esquerda é um demo ao vivo do plugin affix</p>

            <hr class="bs-docs-separator">

            <h2>Uso</h2>

            <h3>Via atributos data</h3>
            <p>Para facilmente adicoinar um comportamento de affix para qualquer elemento, simplesmente adicione <code>data-spy="affix"</code> para o elemento que você quer espiar. Então use offsets para definir quando alternar os elementos entre ligado e desligado</p>

            <pre class="prettyprint linenums">&lt;div data-spy="affix" data-offset-top="200"&gt;...&lt;/div&gt;</pre>

            <div class="alert alert-info">
              <strong>Atenção!</strong>
              Você deve gerenciar a posição de um elemento fixo e o comportamento do seu pai mais próximo. A posição é controlada por <code>affix</code>, <code>affix-top</code>, e <code>affix-bottom</code>. Lembre-se de checar por um pai colapsado quando o affix remove o conteúdo do fluxo normal da página.
            </div>

            <h3>Via Javascript</h3>
            <p>Chama o plugin affix via JavaScript</p>
            <pre class="prettyprint linenums">$('#navbar').affix()</pre>

            <h3>Métodos</h3>
            <h4>.affix('refresh')</h4>
            <p>Quando usar o affix em conjunção com adicionar ou remover elementos no dom, você irá querer chamar o método refresh</p>
<pre class="prettyprint linenums">
$('[data-spy="affix"]').each(function () {
  $(this).affix('refresh')
});
</pre>
          <h3>Opções</h3>
          <p>Opções podem ser passadas via atributos data ou por JavaScript. Para atributos data, insira a opção ao <code>data-</code>, assim como <code>data-offset-top="200"</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Nome</th>
               <th style="width: 100px;">Tipo</th>
               <th style="width: 50px;">Padrão</th>
               <th>Descrição</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>number | function | object</td>
               <td>10</td>
               <td>Pixel para deslocar da tela quando calculando a posição de um scroll. Se um único número é fornecido, o offset será aplicado em ambos os lados esquerda e direita. Para obter uma direção única, ou múltiplos offsets, você pode usar um <code>offset: { x: 10 }</code>. Use uma função quando você precisar dinamicamente prover um offset (útil para design responsivo)</td>
             </tr>
            </tbody>
          </table>
        </section>



      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Voltar ao topo</a></p>
        <p>Desenhado e construído com todo amor do mundo por <a href="http://twitter.com/mdo" target="_blank">@mdo</a> e <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Este projeto é uma versão do Twitter Bootstrap da globo.com mantido por <a href="http://blog.alexandremagno.net">Alexandre Magno</a>.</p>
        <p>Código licenciado sob <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentação sob <a href="http://creativecommons.org/licenses/by/3.0/">CC 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons grátis</a> licenciado sob <a href="http://creativecommons.org/licenses/by/3.0/">CC 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap e changelog</a></li>
        </ul>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-balloon.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/application.js"></script>



  </body>
</html>
