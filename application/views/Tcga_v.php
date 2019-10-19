<title>TCGA</title>
<div>
    <h1 style="text-align:center; margin-bottom:20px;">
        TCGA
    </h1>
    <h4 style="text-align:center; margin-bottom:20px;">
        STAD - Stomach Adenocarcinoma
    </h4>
</div>
<?php 
    $output = shell_exec('Rscript /var/www//html/teste.r');
    echo "<pre>$output</pre>";
?>
<div>
    <div class="col-xs-12">
        <form asp-action="AddList" class="input-group">
            <input type="text" id="addGenes" name="addGenes" class="form-control addGenes" placeholder="Add genes..." style="text-transform:uppercase" autocomplete="off">
            <span class="input-group-btn" style="margin-left:20px">
                <button class="btn btn-success addList" type="button">Add gene</button>
            </span>
        </form>
    </div>
<!--    
    <h6 hidden style="margin-top:10px"> or</h6>

    <div hidden class="input-group" style="margin-top:10px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload your list gene file</span>
        </div>
        <div class="custom-file">
            <input type="file" accept=".txt" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

</div>-->
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
        <br />
        <br />
        <h4 style="text-align:center"></h4>
        <img class="rounded" src="" alt="teste">
        <button class="btn btn-sm btn-success" (click)="getImage(image)">Download</button>
    </div>
</div>

<environment exclude="Development">
    <script src="./Scripts/dataTables.js"></script>
    <script src="./Scripts/tcga.js"></script>
</environment>