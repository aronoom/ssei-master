$(function(){
    var table = $('#pieceTable').DataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ pieces comptables",
            "zeroRecords": "Aucun fichier pdf trouvé - vérifier son identifiant ou son nom",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun fichier pdf",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },        
        "fnPreDrawCallback": function (oSettings) {
            $.blockUI({
                message: '<p class="loading"></p>',
                css: { border: 'none',backgroundColor:'transparent',width:'66px',top:  ($(window).height() -100) /2 + 'px',left: ($(window).width() - 100) /2 + 'px', }
            }); 
        },  
        "fnDrawCallback": function (oSettings) {
            $.unblockUI();
        },       
        "ajax":
                {
                    "url": Routing.generate('sco_listeRepartition_finies'),
                    "dataSrc": ""
                },
        "columns": [
                { "data":"id" },
                { "data":"codeA" },
                { "data": "codeO" },
                { "data": "user" },
                { "data": "name" },
                { "data": "dateRep"},
                { "data": "dateDebut" },
                { "data": "dateFin" },
                { "data": "" },
                ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-default btn-view'><span class='fa fa-upload'></span></button>"
        } ]
    });   

   $('#pieceTable tbody').on( 'click', 'button', function () {
                $('.modal-dialog').addClass('modal-lg');
                var $id = $(this).parent().parent().children('td:nth(0)');
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('sco_pieces_uploader',{id:$id.text()}),
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
            }
            
     );          
    
});