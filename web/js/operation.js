$(function(){
    function notify(type, message){
        $.notify({
            message : message
        },{
            type : type,
            allow_dismiss : true,
        });
    };
    //ajax request before
    var table = $('#datatable-responsive').DataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ opérations",
            "zeroRecords": "Aucune opération ",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucune opération",
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
        "ajax": {
            "url": "liste",
            "dataSrc": ""
        },
        "columns" : [
            { "data" : "codeOperation" },
            { "data" : "libelleOperation" },
            { "data" : "Actions" }
        ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button type=\"button\" aria-label=\"Justify\" class=\"btn btn-default btn-editOp btn-sm\" aria-label=\"Center Align\"> <a href=\"#\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </a> </button> <button type=\"button\" class=\"btn btn-default btn-sm\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modalSupprimer\" data-whatever> <a href=\"#\"> <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> </a> </button>"
        } ]
    });

    table.on('xhr',function (){
        var json = table.ajax.json();
    });
    
    $('#globModal').on('hidden.bs.modal',function(e){
        table.ajax.reload(); 
        $('.modal-body').children().remove();
        $('.modal-dialog').removeClass('modal-lg');
    }); 
    
    $("#ajouterOperation").click(function(){
        $('#globModal .modal-dialog').addClass('modal-lg');
        $.ajax({
            type: 'GET',
            url: Routing.generate('Cem_operation_ajouter'),
            timeout: 3000,
            success: function(data) {
                $('#globModal .modal-body').children().remove();
                $('#globModal .modal-body').append(data.form);
                $('#globModal .modal-header h4').text("Ajouter une opération ");
                $('#globModal').modal('show');
                table.ajax.reload();
            },
            error: function() {
                alert('La requête n\'a pas abouti');              
            }
        });
    });
   $('#datatable-responsive tbody').on( 'click', 'button', function () {            
        if($(this).is('.btn-editOp'))
        {         
            var $id = $(this).parent().parent().children('td:nth(0)');
            console.log($(this).children('td:nth(0)').text());
            $.ajax({
                type: 'GET',
                url: Routing.generate('Cem_operation_modifier',{codeOperation:$id.text()}),
                success: function(response) {
                    $('#globModal .modal-dialog').addClass('modal-lg');
                    $('#globModal .modal-body').children().remove();
                    $('#globModal .modal-body').append(response.form);
                    console.log(response.form)
                    $('#globModal .modal-header h4').text("Modifier l'opération "+$id.text());
                    $('#globModal').modal('show');                             
                    },
                    error: function() {
                        alert('La requête n\'a pas abouti');
                    }
            }); 
        }
        else
        {
            var $id = $(this).parent().parent().children('td:nth(0)');
            $('body').append("<div class='modal' id='supModal' tabindex='-1' role='dialog' aria-labelledby='Supprimer agent'> <div class='modal-dialog modal-sm' role='document' ><div class='modal-content'>\n\
            <div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\n\
            <h4 class='modal-title' >Modification</h4>\n\
            </div>\n\
            <div class='modal-body'>\n\
                <div class='alert alert-danger text-center' stlye='border-radius:10px;'>\n\n\
                    \n\
                    La suppression d'une opération peut entrainer la suppression des fichiers pdf non-downloadé(donc non-controlés)\n\
                    <h5>Etes vous sûr de vouloir supprimer l'opération: "+ $id.text() +"?</h5>    \n\
                    </div>\n\
                </div>\n\
            <div class='modal-footer'>\n\
            <button type='button' class='btn btn-default' id='btn-notValider' data-dismiss='modal'>Close</button>\n\
             \n\        <button type='button' id='btn-valider' class='btn btn-danger'>Valider</button>\n\
            </div>\n\
            </div>\n\
            </div>\n\
            </div>");
            $('#supModal .modal-body').append("");
            $('#supModal .modal-header h4').text("Supprimer l'anomalie n° "+$id.text()) ;
            $('#supModal').modal('show');       
            $('#btn-valider').click(function(){
            $.ajax({
                    type: 'POST',
                    url: Routing.generate('Cem_operation_supprimer',{codeOperation:$id.text()}),
                    timeout: 3000,
                    statusCode: {
                        200: function(response) {     
                            table.ajax.reload(); 
                            $('#supModal').modal('hide'); 
                            $('body #supModal').remove();
                            
                    },
                    }
                  });                    
                });
            $('#btn-notValider').click(function(){
                            $('#supModal').modal('hide'); 
                            $('body #supModal').remove();                    
                });
            $('#supModal').on('hidden.bs.modal',function(e){
                            $('#supModal').modal('hide'); 
                            $('body #supModal').remove(); 
             });                     
        }
     }         
    ); 

});
