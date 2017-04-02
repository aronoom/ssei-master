$(function(){
    table = $('#pieceTable').DataTable({
        "aLengthMenu": [[5,10,25, 50, 75, -1], [5,10,25, 50, 75, "All"]],
        "iDisplayLength": 5,        
        "language": {
            "processing": "Veuillez patienter...",
            "lengthMenu": "Afficher _MENU_ pieces comptables",
            "zeroRecords": "Aucun fichier pdf ",
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
        processing: true,
        "ajax":
                {
                    "url": Routing.generate('sco_ajaxPCListe'),
                    "dataSrc": ""
                },
        "columns": [
                { "data":"CodeAgence" },
                { "data":"nomA" },
                { "data": "operation" },
                { "data": "pdf" },
                { "data": "" },
                ],
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-default btn-view'><span class='glyphicon glyphicon-eye-open'></span></button>"
        } ]
    });   
    table.on('xhr',function (){
        var json = table.ajax.json();
    });    
    $('#selectAgence').on('change', function (){
        table.ajax.url( Routing.generate('sco_ajaxPCListe',{codeAgence:this.value}) ).load();
    });    
    $('#selectOperation').on('change', function (){
                $('#pieceTable').DataTable().columns(2).search(this.value).draw();
    });    
    /*
    $("#ajouterAgent").click(function(){
        $.ajax({
            type: 'GET',
            url: Routing.generate('sco_admin_userAdd'),
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
    */
    $('#globModal').on('hidden.bs.modal',function(e){
        table.$('tr.selected').removeClass('selected');        
        $('.modal-body').children().remove();
        $('.modal-dialog').removeClass('modal-lg');
    }); 

   $('#pieceTable tbody').on( 'click', 'button', function () {
                console.log($(this).parent().parent().addClass('selected'));
                $('.modal-dialog').addClass('modal-lg');
                var $id = $(this).parent().parent().children('td:nth(0)');
                var $op = $(this).parent().parent().children('td:nth(2)');
                var $name = $(this).parent().parent().children('td:nth(3)');
                $.ajax({
                    type: 'GET',
                    url: Routing.generate('sco_pieceNbOp',{agence:$id.text(),operation:$op.text(),name:$name.text()}),
                    timeout: 300000,
                    beforeSend: function(){
                      $.blockUI({
                        message: '<p class="loading"></p>',
                        css: { border: 'none',backgroundColor:'transparent',width:'66px',top:  ($(window).height() -100) /2 + 'px',left: ($(window).width() - 100) /2 + 'px', }
                    });
                    },
                    success: function(response) {
                        $('.modal-body').children().remove();
                        $('.modal-body').append(response.form);
                        console.log(response.form)
                        $('.modal-header h4').text("Information sur le fichier pdf");
                        $('#globModal').modal('show');   
                        $(this).parent().parent().addClass('selected');
                    },
                    error: function() {
                        alert('La requête n\'a pas abouti');
                    }
                });            
            }
            
     );          
    
});