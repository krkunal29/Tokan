<?php

$mobile_number=$_REQUEST['patient_id'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

      <script>
          $(document).ready(function () {

              loadtabledata();

          });

          function loadtabledata(){

            $.ajax({
              url:"fetch_patientmedicalreport",
              type:"POST",
              data:({mobile_number:<?php echo $mobile_number;?>}),
              success:function(data){
                response = JSON.parse(data);
                var count = Object.keys(response).length;

                for(var i=0; i<count;i++){
                  var report_id = parseInt(response[i]['report_id']);
                  var patient_id=parseInt(response[i]['patient_id']);
                  $("#loadtabledata1").append('<tr><td>' +(i + 1) + '</td><td><button data-toggle="tooltip" data-placement="top" title="View Details of patient" class="button btn-link" onClick="get_medicine_detail('+ report_id +');">'+ patient_id +'</button></td><td>'+(response[i]['fname']+' '+response[i]['lname'])+'</td><td>'+response[i]['created_At']+'</td><td>'+response[i]['NextVisitDate']+'</td></tr>');
                }
                  $('#loadtabledata1').dataTable();

              }
            });
          }

          function get_medicine_detail(param)
          {

            $("#hidetabledata").hide();

            $("#loadpatientmedicine").load("loadpatientmedicine?patient_id="+param);
          }
          </script>
  </head>
  <body>

    <div class="row" id="hidetabledata">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                  List of visits of patient
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="loadtabledata1">
                            <thead>
                                <tr>
                                    <th>sr no</th>
                                      <th>Contact Number</th>
                                      <th>Patient Name</th>
                                    <th>Visit Date</th>
                                    <th>Next Visit Date</th>
                                </tr>
                            </thead>
                            <tbody  >

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>


<div id="loadpatientmedicine">
</div>


  </body>
  </html>
