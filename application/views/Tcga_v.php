<title>TCGA</title>
<div>
    <h1 style="text-align:center; margin-bottom:20px;">
        TCGA
    </h1>
    <h4 style="text-align:center; margin-bottom:20px;">
        STAD - Stomach Adenocarcinoma
    </h4>
</div>
<div>
    <div class="col-xs-12">
        <form asp-action="AddList" class="input-group">
            <input type="text" id="addGenes" name="addGenes" class="form-control addGenes" placeholder="Add genes..." style="text-transform:uppercase" autocomplete="off">
            <span class="input-group-btn" style="margin-left:20px">
                <button class="btn btn-success addList" type="button">Add gene</button>
            </span>
        </form>
    </div>
<br/>
<table id="listaGenesTBL" class="listaGenesTBL"></table>
<br/>

<div>
    <div class="col-xs-4 text-right" style="margin-left:20px">
        <button class="btn btn-lg btn-info runAnalisys">Run analysis</button>
    </div>
</div>

<div class="text-center">
    <div *ngFor="let image of imagens" class="text-center">
        <button class="btn btn-sm btn-success">Download</button>
    </div>
</div>

<script src="./scripts/dataTables.js"></script>
<script src="./scripts/tcga.js"></script>