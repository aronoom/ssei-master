
$(function(){

    $('#indicateurTable').dataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ subdivison",
            "zeroRecords": "Aucune subdivison trouvée - vérifier son numero ou son libellé",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucune subdivison",
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
            "url": Routing.generate('subdivision_listeAjax'),
            "dataSrc": ""
        },
        "columns": [
            { "data":"id" },
            { "data": "libelleSubdivision" },
            { "data": "" },
        ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-default btn-editIndicateur'><span class='glyphicon glyphicon-pencil'></span></button>\n\
            <button class='btn btn-danger btn-sm btn-delAnomalie'><span class='glyphicon glyphicon-trash'></span></button>"
        } ]
    });

    $('#globModal').on('hidden.bs.modal',function(e){
        //mbola ho atao
        /*
         $('#anomalieTable').dataTable().fnReloadAjax();
         $('.modal-body').children().remove();
         $('.modal-dialog').removeClass('modal-lg');
         */
    });


    $("#ajouterIndicateur").click(function(){
        $.ajax({
            type: 'GET',
            url: Routing.generate('subdivision_ajouter'),
            timeout: 3000,
            success: function(data) {
                $('.modal-body').children().remove();
                $('.modal-header h4').text("Ajouter une subdivision");
                $('.modal-body').append(data.form);
                $('#globModal').modal('show');
                $('.modal-dialog').addClass('modal-lg');
            },
            error: function() {
                console.log('La requête n\'a pas abouti');
            }
        });
    });


    $('#indicateurTable tbody').on( 'click', 'button', function () {
            if($(this).is('.btn-editIndicateur'))
            {
                var $id = $(this).parent().parent().children('td:nth(0)');
                $.ajax({
                    type: 'GET',
                    url: Routing.generate('subdivision_modifier',{ id : $id.text()}),
                    timeout: 30000,
                    success: function (response) {
                        $('.modal-dialog').addClass('modal-lg');
                        $('.modal-body').children().remove();
                        $('.modal-body').append(response.form);
                        console.log(response.form);
                        $('.modal-header h4').text("Modifier la subdivision "+$id.text());
                        $('.modal-header').attr('data-id',$id.text());
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
               <div class='modal-header' data-id=''><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\n\
               <h4 class='modal-title' data-noInd='' >Modification</h4>\n\
               </div>\n\
                <div class='modal-body'>\n\
                    <div class='alert alert-danger text-center' stlye='border-radius:10px;'>\n\n\
                        <h5> Valider la suppression de la subdivision "+ $id.text() +"?</h5></div>\n\
                    </div>\n\
                <div class='modal-footer'>\n\
                <button type='button' class='btn btn-default' id='btn-notValider' data-dismiss='modal'>Close</button>\n\
                \n\        <button type='button' id='btn-valider' class='btn btn-danger'>Valider</button>\n\
                </div>\n\
                </div>\n\
                </div>\n\
                </div>");
                $('#supModal .modal-body').append("");
                $('#supModal .modal-header h4').text("Supprimer la subdivision n° "+ $id.text()) ;
                $('#supModal').modal('show');

                $('#btn-valider').click(function(){
                    $.ajax({
                        type: 'POST',
                        url: Routing.generate('subdivision_supprimer'),
                        data : {
                            numeroIndicateur : $id.text()
                        },
                        timeout: 3000,
                        statusCode: {
                            200: function(response) {
                                $('#indicateurTable').dataTable().fnReloadAjax();
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