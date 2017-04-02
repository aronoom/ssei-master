/**
 * Created by root on 28/12/16.
 */
$(function(){
    var table = $('#anomalieTable').DataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ pieces comptables",
            "zeroRecords": "Aucune anomalie n'est encore signalée - continuer à controller si possible",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucune anomalie",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "ajax":
        {
            "url": Routing.generate('CemControle_anomalies'),
            "dataSrc": ""
        },
        "columns": [
            { "data":"id" },
            { "data":"agence" },
            { "data":"operation" },
            { "data": "pieceComptable" },
            { "data": "page" },
            { "data": "codeAnomalie_libelle" },
            { "data": "controlleur" },
            { "data": "" },
        ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-warning btn-view'><span class='fa fa-adjust'></span></button>"
        } ]
    });

    $('#anomalieTable tbody').on( 'click', 'button', function () {

        var $id = $(this).parent().parent().children('td:nth(0)');

         $.ajax({
             type: 'POST',
             url: Routing.generate('CemControle_reglerAnomalie',{controleId :$id.text()}),
             timeout: 300000,
             beforeSend: function(){
                 $.blockUI({
                 message: '<p class="loading"></p>',
                 css: { border: 'none',backgroundColor:'transparent',width:'120px',top:  ($(window).height() -100) /2 + 'px',left: ($(window).width() - 100) /2 + 'px', }
                 });
             },
             success: function(response) {
                 console.log(response);
                 table.ajax.reload();
             },
             error: function() {
                alert('La requête n\'a pas abouti');
             }
         });

    });
});
