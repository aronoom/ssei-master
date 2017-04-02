$(function(){
    var agentId = 0;
    $('#agentTable').dataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ agents",
            "zeroRecords": "Aucun agent trouvé - vérifier son identifiant ou son nom",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun agent",
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
                    "url": Routing.generate('user_admin_userList'),
                    "dataSrc": ""
                },
        "columns": [
                { "data":"id" },
                { "data": "username" },
                { "data": "contactAgent" },
                { "data": "email" },
                { "data": "adresseAgent" },
                { "data": "service_user" },
                { "data": "fonction_user" },
                { "data": "direction_user" },
                { "data": "" },
                ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-default btn-editAgent'><span class='glyphicon glyphicon-pencil'></span></button>\n\
            <button class='btn btn-default btn-delAgent'><span class='glyphicon glyphicon-remove'></span></button>"
        } ]
    });   
    $('#agenttTable').removeClass( 'display' ).addClass('table table-striped table-bordered');
    $("#ajouterAgent").click(function(){
        $('.modal-dialog').addClass('modal-lg');
        $.ajax({
            type: 'GET',
            url: Routing.generate('user_admin_userAdd'),
            timeout: 3000,
            success: function(data) {
                $('.modal-body').children().remove();
                $('.modal-body').append(data.form);
                $('.modal-header h4').text("Ajouter un agent ");
                $('#globModal').modal('show');
            },
            error: function() {
                console.log('La requête n\'a pas abouti');              
            }
        });
    });  
    $('#globModal').on('hidden.bs.modal',function(e){
        $('#agentTable').dataTable().fnReloadAjax(); 
        $('.modal-body').children().remove();
        $('.modal-dialog').removeClass('modal-lg');
    }); 
   $('#agentTable tbody').on( 'click', 'button', function () {
            if($(this).is('.btn-editAgent '))
            {
             $('.modal-dialog').addClass('modal-lg');   
                var $id = $(this).parent().parent().children('td:nth(0)');
                agentId = $id.text();
                $.ajax({
                    type: 'GET',
                    url: Routing.generate('user_admin_userEdit',{id:$id.text()}),
                    timeout: 3000,
                    success: function(response) {
                        $('.modal-body').children().remove();
                        $('.modal-body').append(response);
                        $('.modal-header h4').text("Modifier les informations concernant l'agent n° "+ $id.text())
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
                 <h5>Valider la suppression de l'agent "+ $id.text() +"</h5>\n\
                </div>\n\
                </div>\n\
                <div class='modal-footer'>\n\
                <button type='button' class='btn btn-default' id='btn-notValider' data-dismiss='modal'>Close</button>\n\
                \n\        <button type='button' id='btn-valider' class='btn btn-danger'>Valider</button>\n\
                </div>\n\
                </div>\n\
                </div>\n\
                </div>");
                $('#supModal .modal-header h4').text("Supprimer l'utilisateur n° "+$id.text()) ;
                $('#supModal').modal('show');       
                $('#btn-valider').click(function(){
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('user_admin_userDel',{id:$id.text()}),
                    timeout: 3000,
                    statusCode: {
                        200: function(response) {     
                            $('#agentTable').dataTable().fnReloadAjax(); 
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
            
    } );          
});