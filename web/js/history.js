$(function(){

   var oTable = $('#pieceTable').DataTable({
        "language": {
            "lengthMenu": "Afficher _MENU_ pieces comptables",
            "zeroRecords": "Aucun fichier pdf trouvé",
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
                    "url": Routing.generate('sco_piece_history'),
                    "dataSrc": ""
                },
        "columns": [
                { "data":"nomA" },
                { "data": "nomO" },
                { "data": "user" },
                { "data": "name" },
                { "data": "dateDebut" },
                { "data": "dateFin" },
                ]
    }); 

        var cb = function(start, end, label) {
          var s = moment(start.toISOString());
          var e = moment(end.toISOString());
          startdate = s.format("YYYY-MM-DD");
          enddate = e.format("YYYY-MM-DD");                
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(s.format('D MMMM, YYYY') + ' - ' + e.format('D MMMM, YYYY'));      
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2020',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Aujourd\'hui': [moment(), moment()],
            'Hier': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '7 derniers jours': [moment().subtract(6, 'days'), moment()],
            '30 derniers jours': [moment().subtract(29, 'days'), moment()],
            'Ce mois ci': [moment().startOf('month'), moment().endOf('month')],
            'Le mois dernier': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-success',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Valider',
            cancelLabel: 'Effacer',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Personnaliser',
            daysOfWeek: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
            monthNames: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('D MMMM, YYYY') + ' - ' + moment().format('D MMMM, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });

        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
          console.log("options1");
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });

    var startdate;
    var enddate;
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        startdate=picker.startDate.format('MM-DD-YYYY');
        enddate=picker.endDate.format("MM-DD-YYYY");        
        for(var i=0;i< $.fn.dataTableExt.afnFiltering.length;i++)
        {
            console.log(i);
            $.fn.dataTableExt.afnFiltering.splice(i,1);
        }
    $.fn.dataTableExt.afnFiltering.push(
        function( oSettings, aData, iDataIndex ) {
        if(startdate!=undefined){

        var coldate = aData[5].split('-');
        var date = new Date(coldate[2], coldate[1]-1 , coldate[0]);
        console.log(date);
        //var date = moment(d.toISOString());
        //date =    date.format("MM-DD-YYYY");
        console.log("start "+startdate);
        console.log("end "+enddate);
        dateMin= new Date(startdate.replace(/-/g, "/"));
        dateMax= new Date(enddate.replace(/-/g, "/"));
        //date=date.replace(/\//g, "");

            // 0 here is the column where my dates are.
            //Convert to YYYY-MM-DD format from DD/MM/YYYY
            var coldate2 = aData[6].split('-');
            var date2 = new Date(coldate2[2], coldate2[1]-1 , coldate2[0]);
            console.log(date2);
            //var date2 = moment(d2.toISOString());
            //date2 =    date2.format("DD-MM-YYYY");

            //Remove hyphens from dates
            dateMin2= new Date(startdate.replace(/-/g, "/"));
            dateMax2= new Date(enddate.replace(/-/g, "/"));
            //date2=date2.replace(/\//g, "");
            
        if ( dateMin  <= date && dateMax >= date &&  dateMin <= date2 && dateMax >= date2){
            console.log("date :"+date+" date2 :"+date2);
            //console.log(dateMax >= date);
            var de = new Date("12/31/2016");
            var a = new Date("01/02/2017");
            console.log(de>=a);
            console.log(de+" et "+a);
            console.log("4 :"+ dateMin + " dtMax" + dateMax);
        return true;
        }  
            console.log("date :"+date+" date2 :"+date2);
            //console.log(dateMax >= date);
            console.log("4 :"+ dateMin + " dtMax" + dateMax);        
        return false;
        }
    }
    );           
        oTable.draw();
    });
});