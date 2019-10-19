<title>TCGA</title>

<h1 style="text-align:center; margin-bottom:50px;">
   About
</h1>

<h6 style="text-align:justify">
    A interface web do C-Gemis é visível em todos os principais navegadores e sistemas operacionais, incluindo Safari, Internet Explorer, Firefox e Chrome usando Linux, Windows ou Apple iOS. Para realizar o acesso à ferramenta, atualmente, o usuário não necessita realizar nenhum tipo de cadastro. A interface da ferramenta está organizada nos seguintes níveis: (i) a página inicial que apresenta uma visão geral da ferramenta e seus objetivos; (ii) análise da dados obtidos no banco de dados TCGA; (iii) análise de dados obtidos do banco de dados GEO; (iv) uma página de ajuda que apresenta o funcionamento da ferramentas e algumas perguntas frequentes; (v) página de publicações, na qual, contém as publicações referentes à ferramenta e ao grupo de pesquisa que a desenvolve; e (vi) a página de contato que permite ao usuário se comunicar com o administrador do C-Gemis. Para realizar a análise da expressão diferencial por gene, o usuário deverá escolher o banco de dados (TCGA ou GEO) que fornecerá as informações de interesse. Isso é necessário, uma vez que cada banco de dados requer a utilização de pacotes de análises específicos, pois existem diferenças de formato de dados e design de estudos, conforme figura 1 e figura 2.
    <br />
    <br />
    Se os dados forem provenientes do GEO (Figura 1), o usuário necessita digitar o nome do(s) gene(s) de interesse, como pode ser visualizado na Figura 1, sendo que este deve estar no formato mapeado no HUGO Genes. Na sequência, o usuário deve clicar no botão “Run analysis”. Quando todos os scripts forem executados, a interface mostrará todos os resultados obtidos no formato de imagens, com possibilidade de download das mesmas. Os dados do repositório GEO são obtidos, pré-processados e normalizados automaticamente pelo C-Gemis. Após, são realizados as análises estatísticas e o mapeamento das sondas conforme a plataforma para possibilitar a filtragem dos dados de acordo com o gene selecionado pelo usuário do CGemis. Após a execução de todos os processos, o C-Gemis exibe em tela, os gráficos dos testes aplicados, para que o usuário selecione quais ele deseja baixar. Por outro lado, se os dados forem provenientes do TCGA, a etapa de execução permanece a mesma. No entanto, os resultados apresentados são acrescidos das informações de sobrevida e, as análises são realizadas de acordo com as diferentes subclassificações do câncer gástrico.
</h6>

<div style="padding:10px; text-align:center">
    <h4 style="text-align:center">
        Figura 1
    </h4>
    <img src="~/Content/Imagens/Fluxo de Dados Novo GEO.png" />
    
</div>

<div style="padding:10px; text-align:center">
    <h4 style="text-align:center">
        Figura 2
    </h4>
    <img src="~/Content/Imagens/Fluxo de Dados Novo TCGA.png" />
</div>

<div class="row">

</div>
