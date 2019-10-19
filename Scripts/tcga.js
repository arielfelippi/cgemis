var baseUrl = "http://localhost/CGemis/";
var listGenes = JSON.parse(localStorage.getItem('genesStorage')) || [];
var editor;
$(document).ready(function() {

    var dataTableJS = $("#listaGenesTBL").DataTable({
        "columns": [
            { "data": "Gene" },
            { "data": "Action" }
        ]
    });

    $(".runAnalisys").on("click", function() {

        $.post("analisystcga", {
                listGenesJS: JSON.parse(localStorage.getItem('genesStorage'))
            },
            function(data, status) {
                // console.log(listGenes);
                // console.log(status);
                // console.log(data);
                if (data) {
                    alert(data);
                }
            });
    });

    $(".addList").on("click", function() {

        var gene = $("#addGenes").val().trim();
        gene = gene.toUpperCase().trim();

        if (listGenes.length > 0) // Verificar se a lista nao esta vazia
        {
            // procura Genes repetidos na lista
            var found = listGenes.find(function(element) {
                return element == gene;
            });
        }

        if (found) {
            alert("ja ta na lista");
        } else {
            $.getJSON("http://rest.genenames.org/search/symbol:" + gene,
                function(data) {
                    if (!data.response.numFound == 1) {
                        alert("Gene Invalid!\nEnter HUGO Gene Symbols!");
                    } else {
                        listGenes.push(gene);
                        localStorage.setItem('genesStorage', JSON.stringify(listGenes));
                        dataTableJS.row.add({
                            "Gene": gene,
                            "Action": "<button class='btn btn-danger btnDelete' value='" + gene + "' >Delete</button>"
                        }).draw();
                        $("#addGenes").val("");
                    }
                });
        }
    });

    $("#listaGenesTBL").on("click", ".btnDelete", function() {
        var position = listGenes.indexOf($(this).val());
        listGenes.splice(position, 1);
        dataTableJS.row($(this).parents('tr')).remove().draw();
        console.log(position);
        localStorage.removeItem(position);
    });

    listar(dataTableJS);
});

function listar(dataTableJS) {
    var vet = [];
    listGenes.forEach(function(item, indice) {
        dataTableJS.row.add({
            "Gene": item,
            "Action": "<button class='btn btn-danger btnDelete' value='" + item + "' >Delete</button>"
        }).draw();
        //  vet.push({ "Gene": item, "Action": "<button class='btn btn-danger btnDelete' value='" + item + "'> Delete</button>" });
    });
    //return JSON.stringify(vet);
}