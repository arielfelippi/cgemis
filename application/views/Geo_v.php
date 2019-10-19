<title>GEO</title>
<div>
    <h1 style="text-align:center; margin-bottom:20px;">
        GEO
    </h1>
</div>

<h2 style="text-align:center; margin-bottom:15px; font-size:18px;">
    Projetcs of Gene Omnibus Express
</h2>

<div class="form-group">
    <label for="sel1">Select list:</label>
    <select class="form-control" id="sel1">
        <option>GSE54129</option>
        <option>GSE33335</option>
        <option>GSE79973</option>
    </select>
</div>


    <div class="col-xs-12">
        <form asp-action="AddList" class="input-group">
            <input type="text"
                   class="form-control"
                   [(ngModel)]="add"
                   name="addGenes"
                   placeholder="Add genes..."
                   style="text-transform:uppercase"
                   autocomplete="off">

            <span class="input-group-btn" style="margin-left:20px">
                <button class="btn btn-success" type="submit" (click)="addList()">Add gene</button>
            </span>
        </form>
    </div>
   
    
        <h6 style="margin-top:10px">
            or
        </h6>
    
    
    <div class="input-group" style="margin-top:10px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload your list gene file</span>
        </div>
        <div class="custom-file">
            <input type="file" accept=".txt" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

<div class="row p-10" style="margin-top:20px">
    <div class="col-lg-5">
        <table class="table" *ngIf="list">
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>Genes</th>
                </tr>
            </thead>
            <tbody>
                <tr *ngFor="let item of list">
                    <td>
                        <button class="btn btn-danger" (click)="removeList(item)">X</button>
                    </td>
                    <td>{{ item }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-4 text-right" style="margin-left:20px">
        <button class="btn btn-lg btn-info" (click)="analiseGeo()">Run analysis</button>
    </div>
</div>