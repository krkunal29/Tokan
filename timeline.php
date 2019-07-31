<?php
session_start();
if(isset($_SESSION['admin_id'])){
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <link href="assets/plugins/timeline/timeline.css" rel="stylesheet" />
    <style>
    .timeline-title{
      margin-top: 0;
      color: brown;
      font-weight: bolder;
    }
    </style>
</head>

<body>
    <div >

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Patient Details <button class="btn btn-success" onclick="loadpage();" id="newbutton" style="float: right;background-color: black;">NEW</button>
                      <button class="btn btn-success" onclick="view_histoy();" id="view_histoy" style="float: right;background-color: black;">View History</button>

                    </h1>
                </div>

            </div>
            <div class="row">
              <div class="col-lg-2">

              </div>
            </div>
            <div class="row" id="loadsyntumpage" style="display:none;" >
             <div id="loaddata"></div>
              <div id="view_history"></div>
            </div>
               <div class="row" id="showpatientdetail" style="display:show;">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i>Timeline
                        </div>

                        <div class="panel-body">

                                       <div class="" style="border-bottom: 3px solid black;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><span id="fontcolor">Basic Detail</span></h4>
                                        </div>

                                        <div class="row">
                                        <span id="fname"></span>
                                        <span id="lname"></span>
                                        <span id="bdate"></span>
                                        </div>
                                        <div class="row">
                                        <span id="address"></span>
                                        <span id="education"></span>
                                        </div>
                                        <div class="row">
                                        <span id="email"></span>
                                        <span id="sex"></span>
                                        <span id="mobileno"></span>
                                        <span id="daytime"></span>
                                        <span id="nighttime"></span>
                                        <span id="remarkbydoctor"></span>
                                        </div>


                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Detail History</h4>
                                        </div>
                                          <div class="row">
                                          <span id="noofchildren"></span>
                                          <span id="firstchildrenage"></span>
                                          <span id="secondchildrenage"></span>
                                          <span id="thirdchildrenage"></span>
                                          <span id="fourthchildrenage"></span>
                                          <span id="fifthchildrenage"></span>
                                          </div>
                                          <div class="row">
                                          <span id="ageofmarriage"></span>
                                          <span id="familyplanningtablets"></span>
                                          <span id="familyplanningoperation"></span>
                                          <span id="remarkdetailhistory"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading" style="overflow: auto;">
                                            <!-- <div class="row"> -->
                                              <table border="1" style="width: 100%;">
                                               <thead>
                                              <tr><td>
                                            <div class="col-sm-4">
                                            <div class="form-group">
                                            <h4 class="timeline-title">Heriditory</h4>
                                            </div>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="col-sm-2">
                                            <div class="form-group">
                                              <label>Brother</label>
                                            </div>
                                            </div>
                                            </td>
                                            <td>
                                              <div class="col-sm-2">
                                              <div class="form-group">
                                                <label>Sister</label>
                                              </div>
                                              </div>
                                              </td>
                                              <td>
                                                <div class="col-sm-2">
                                                <div class="form-group">
                                                  <label>Father</label>
                                                </div>
                                                </div>
                                                </td>
                                                <td>
                                                  <div class="col-sm-2">
                                                  <div class="form-group">
                                                    <label>Mother</label>
                                                  </div>
                                                  </div>
                                                  </td>
                                                </tr>
                                            </thead>
                                          <tbody>
                                            <tr>
                                            <td>
                                          <span id="labelhairstatus"></span></td>
                                          <td><span id="brotherhairstatus"></span></td>
                                          <td><span id="sisterhairstatus"></span></td>
                                          <td><span id="fatherhairstatus"></span></td>
                                          <td><span id="motherhairstatus"></span></td>
                                        </tr>
                                          <tr>
                                          <td><span id="labeldensitystatus"></span></td>
                                          <td><span id="brotherdensity"></span></td>
                                          <td><span id="sisterdensity"></span></td>
                                          <td><span id="fatherdensity"></span></td>
                                          <td><span id="motherdensity"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelbaldnessstatus"></span></td>
                                          <td><span id="brotherbaldness"></span></td>
                                          <td><span id="sisterbaldness"></span></td>
                                          <td><span id="fatherbaldness"></span></td>
                                          <td><span id="motherbaldness"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelcolourstatus"></span></td>
                                          <td><span id="brothercolour"></span></td>
                                          <td><span id="sistercolour"></span></td>
                                          <td><span id="fathercolour"></span></td>
                                          <td><span id="mothercolour"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labeldiabeticsstatus"></span></td>
                                          <td><span id="brotherdiabetics"></span></td>
                                          <td><span id="sisterdiabetics"></span></td>
                                          <td><span id="fatherdiabetics"></span></td>
                                          <td><span id="motherdiabetics"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelbloodpressurestatus"></span></td>
                                          <td><span id="brotherbloodpressure"></span></td>
                                          <td><span id="sisterbloodpressure"></span></td>
                                          <td><span id="fatherbloodpressure"></span></td>
                                          <td><span id="motherbloodpressure"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelmajordiseasesstatus"></span></td>
                                          <td><span id="brothermajordiseases"></span></td>
                                          <td><span id="sistermajordiseases"></span></td>
                                          <td><span id="fathermajordiseases"></span></td>
                                          <td><span id="mothermajordiseases"></span></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Home</h4>
                                        </div>

                                          <div class="row">
                                          <span id="afternoonsleeptime"></span>
                                          <span id="wakeuptime"></span>
                                          <span id="timeofsleeping"></span>
                                          <span id="sleepingcondition"></span>
                                          </div>
                                          <div class="row">
                                          <span id="teatimequantity"></span>
                                          <span id="morningteatimequantity"></span>
                                          <span id="eveningteatimequantity"></span>
                                          <span id="selectmilkwithoutmilk"></span>
                                          <span id="selectmilk"></span>
                                          <span id="propationateoftea"></span>
                                          </div>
                                          <div class="row">
                                          <span id="teawithbread"></span>
                                          <span id="teawithbreadquantity"></span>
                                          <span id="teawithbiscuits"></span>
                                          <span id="teawithbiscuitsquantity"></span>
                                          </div>
                                          <div class="row">
                                          <span id="teawithtoast"></span>
                                          <span id="teawithtoastquantity"></span>
                                          <span id="teawithkhari"></span>
                                          <span id="teawithkhariquantity"></span>
                                          </div>

                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading" style="overflow: auto;">
                                          <table border="1" style="width: 100%;">
                                           <thead>
                                             <tr>
                                              <td>
                                          <div class="col-sm-4">
                                            <div class="form-group">
                                            <h4 class="timeline-title"><label>Break Fast Detail</label></h4>
                                          </div>
                                        </div></td>
                                        <td>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>Daily Item</label>
                                          </div>
                                        </div></td>
                                        <td>
                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label>Time</label>
                                              </div>
                                            </div>
                                          </td></tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                          <td><span id="labelsunday"></span></td>
                                          <td><span id="dailyitemsunday"></span></td>
                                          <td><span id="dailyitemsundaytime"></span>  </td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelmonday"></span>  </td>
                                          <td><span id="dailyitemmonday"></span>  </td>
                                          <td><span id="dailyitemmondaytime"></span>  </td>
                                          </tr>
                                          <tr>
                                          <td><span id="labeltuesday"></span>  </td>
                                          <td><span id="dailyitemtuesday"></span>  </td>
                                          <td><span id="dailyitemtuesdaytime"></span>  </td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelwednesday"></span></td>
                                          <td><span id="dailyitemwednesday"></span></td>
                                          <td><span id="dailyitemwednesdaytime"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelthursday"></span>  </td>
                                          <td><span id="dailyitemthursday"></span>  </td>
                                          <td><span id="dailyitemthursdaytime"></span>  </td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelfriday"></span>  </td>
                                          <td><span id="dailyitemfriday"></span>  </td>
                                          <td><span id="dailyitemfridaytime"></span>  </td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelsaturday"></span></td>
                                          <td><span id="dailyitemsaturday"></span></td>
                                          <td><span id="dailyitemsaturdaytime"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="fruits"></span></td>
                                          <td colspan="2"><span id="dryfruits"></span></td>
                                          </tr>
                                        </tbody>
                                      </table>

                                    </div>
                                    </div>
                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lunch Time</h4>
                                        </div>
                                          <div class="row">
                                          <span id="lunchtime"></span>
                                          <span id="typeoflunch"></span>
                                          </div>
                                          <div class="row">
                                          <span id="oilusedplamoil"></span>
                                          <span id="oilusedrefined"></span>
                                          <span id="oilusedmongafali"></span>
                                          <span id="oilusedotheroil"></span>
                                          </div>
                                          <div class="row">
                                          <span id="ricetype"></span>
                                          <span id="daltype"></span>
                                          <span id="chapatitype"></span>
                                          <span id="gheetype"></span>
                                          </div>
                                          <div class="row">
                                          <span id="gheemake"></span>
                                          <span id="saladtype"></span>
                                          <span id="pickletype"></span>
                                          <span id="papadtype"></span>
                                          </div>
                                          <div class="row">
                                          <span id="curd"></span>
                                          <span id="buttermilktype"></span>
                                          <span id="paneertype"></span>
                                          <span id="chuntneytype"></span>
                                          </div>
                                          <div class="row">
                                          <span id="dinnertype"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Dinner Time</h4>
                                        </div>
                                          <div class="row">
                                          <span id="dinnertime"></span>
                                          <span id="typeofdinner"></span>
                                          </div>
                                          <div class="row">
                                          <span id="dinnerricetype"></span>
                                          <span id="dinnerdaltype"></span>
                                          <span id="dinnerchapatitype"></span>
                                          <span id="dinnergheetype"></span>
                                          </div>
                                          <div class="row">
                                          <span id="dinnergheemake"></span>
                                          <span id="dinnersaladtype"></span>
                                          <span id="dinnerpickletype"></span>
                                          <span id="dinnerpapadtype"></span>
                                          </div>
                                          <div class="row">
                                          <span id="dinnercurd"></span>
                                          <span id="dinnerbuttermilktype"></span>
                                          <span id="dinnerpaneertype"></span>
                                          <span id="dinnervegetabletype"></span>
                                          </div>

                                          <div class="row">
                                          <span id="dinnerhotelling"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Detail taken for lunch / Dinner</h4>
                                        </div>
                                          <div class="row">
                                          <span id="howmuchtimeeatperday"></span>
                                          <span id="simplevegatableeating"></span>
                                          </div>
                                          <div class="row">
                                          <span id="nonvegpercentage"></span>
                                          <span id="nonvegitems"></span>
                                          </div>
                                          <div class="row">
                                          <span id="percentageeatingofeggs"></span>
                                          <span id="percentageeatingoffish"></span>
                                          </div>
                                          <div class="row">
                                          <span id="percentageeatingofchicken"></span>
                                          <span id="percentageeatingofmutton"></span>
                                          </div>
                                          <div class="row">
                                          <span id="percentageeatingofpron"></span>
                                          <span id="percentageeatingofdryfish"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading" style="overflow:auto;">
                                          <table border="1" style="width: 100%;">
                                           <thead>
                                             <tr>
                                              <td>
                                          <div class="col-sm-4">
                                            <div class="form-group">
                                            <h4 class="timeline-title"><label>Habits</label></h4>
                                          </div>
                                        </div></td>
                                        <td>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>Brand</label>
                                          </div>
                                        </div></td>
                                        <td>
                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label>Frequency</label>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                          </thead>
                                          <tbody>
                                          <tr>

                                          <td><span id="labelalcohol"></span></td>
                                          <td><span id="brandhabitalcohol"></span></td>
                                          <td><span id="frequencyhabitalcohol"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelcigarate"></span></td>
                                          <td><span id="brandhabitcigarate"></span></td>
                                          <td><span id="frequencyhabitcigarate"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labeltobacco"></span></td>
                                          <td><span id="brandhabittobacco"></span></td>
                                          <td><span id="frequencyhabittobacco"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelguthka"></span></td>
                                          <td><span id="brandhabitguthka"></span></td>
                                          <td><span id="frequencyhabitguthka"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labeldrugs"></span></td>
                                          <td><span id="brandhabitdrugs"></span></td>
                                          <td><span id="frequencyhabitdrugs"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelbrownsug"></span></td>
                                          <td><span id="brandhabitbrownsug"></span></td>
                                          <td><span id="frequencyhabitbrownsug"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelcockane"></span></td>
                                          <td><span id="brandhabitcockane"></span></td>
                                          <td><span id="frequencyhabitcockane"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelsupari"></span></td>
                                          <td><span id="brandhabitsupari"></span></td>
                                          <td><span id="frequencyhabitsupari"></span></td>
                                          </tr>
                                          <tr>
                                          <td><span id="labelpan"></span></td>
                                          <td><span id="brandhabitpan"></span></td>
                                          <td><span id="frequencyhabitpan"></span></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Hair Care Treatment</h4>
                                        </div>
                                          <div class="row">
                                          <span id="hairmassage"></span>
                                          <span id="soap"></span>
                                          <span id="shampoo"></span>
                                          </div>
                                          <div class="row">
                                          <span id="hairpacks"></span>
                                          <span id="bryalcream"></span>
                                          <span id="mehandi"></span>
                                          </div>
                                          <div class="row">
                                          <span id="labelhairwashingmaterial"></span>
                                          <span id="watertype"></span>
                                          <span id="watertemperature"></span>
                                          </div>
                                          <div class="row">
                                          <span id="labelstataus"></span>
                                          <span id="drandrdufff"></span>
                                          <span id="hairlossfrequency"></span>
                                          <span id="baldnessgap"></span>
                                          <span id="howmanyyear"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Sexsual History</h4>
                                        </div>
                                          <div class="row">
                                          <span id="sexsualhistorybluefilms"></span>
                                          <span id="sexsualhistoryfirstsource"></span>
                                          <span id="sexsualhistoryage"></span>
                                          </div>
                                          <div class="row">
                                          <span id="sexsualhistoryfriendrelative"></span>
                                          <span id="sexsualhistoryplace"></span>
                                          <span id="sexsualhistoryrecurrance"></span>
                                          </div>
                                          <div class="row">
                                          <span id="sexsualhistorysexualbookreading"></span>
                                          <span id="sexsualhistorymobile"></span>
                                          <span id="sexsualhistoryinternet"></span>
                                          </div>
                                          <div class="row">
                                          <span id="sexsualhistoryfriend"></span>
                                          <span id="sexsualhistorygirlfriend"></span>
                                          <span id="sexsualhistorywife"></span>
                                          </div>
                                          <div class="row">
                                          <span id="sexsualhistoryprostitution"></span>
                                          <span id="sexsualhistoryweekness"></span>
                                          <span id="sexsualhistorylastestfrequency"></span>
                                          </div>

                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">General History</h4>
                                        </div>
                                          <div class="row">
                                          <span id="generalhistoryacidity"></span>
                                          <span id="generalhistorygases"></span>
                                          <span id="generalhistoryconstraption"></span>
                                          </div>
                                          <div class="row">
                                          <span id="generalhistorypiles"></span>
                                          <span id="generalhistorybleeding"></span>
                                          <span id="generalhistorypain"></span>
                                          </div>
                                          <div class="row">
                                          <span id="generalhistoryhardstrokes"></span>
                                          <span id="generalhistorystcickyliquid"></span>
                                          <span id="generalhistorycolor"></span>
                                          </div>
                                    </div>

                                    <div class="" style="border-bottom: 3px solid black;padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Past History</h4>
                                        </div>
                                          <div class="row">
                                          <span id="majordiseases"></span>
                                          <span id="admit"></span>
                                          </div>
                                    </div>

                                    <div class="" style="padding-top: 5px;">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Personality</h4>
                                        </div>
                                        <div class="">
                                          <div class="row">
                                          <span id="personalitybuiltup"></span>
                                          <span id="personalityweight"></span>
                                          <span id="personalityheight"></span>
                                          </div>
                                          <div class="row">
                                          <span id="personalityeyes"></span>
                                          <span id="personalitytongue"></span>
                                          <span id="personalitynails"></span>
                                          </div>
                                          <div class="row">
                                          <span id="personalitybp"></span>
                                          <span id="personalitypulses"></span>
                                          <span id="personalityresprate"></span>
                                          <span id="personalityheartrate"></span>
                                          </div>


                                        </div>

                                      </div>

                    </div>
                </div>
            </div>

    </div>
    <script>
    $( document ).ready(function() {
      patient_a();
      patient_b();
      patient_c();
      patient_d();
      patient_e();
      patient_f();
      patient_g();
      patient_h();
      patient_i();
      patient_j();
      patient_k();
      patient_L();
      patient_M();
      patient_N();
  });
    function patient_a(){
      $.ajax({
        url:"fetch_patient_basic_profile_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){
          response = JSON.parse(data);
          $("#fname").html("<div class='col-sm-4'><div class='form-group'><label>First Name</label> "+response['fname']+"</div></div>");
          $("#lname").html("<div class='col-sm-4'><div class='form-group'><label>Surname</label> "+response['lname']+"</div></div>");
          $("#bdate").html("<div class='col-sm-4'><div class='form-group'><label>BOD</label> "+response['birth_date']+"</div></div>");
          $("#address").html("<div class='col-sm-8'><div class='form-group'><label>Address</label> "+response['address']+"</div></div>");
          $("#education").html("<div class='col-sm-4'><div class='form-group'><label>Education</label> "+ response['education']+"</div></div>");
          $("#email").html("<div class='col-sm-2'><div class='form-group'><label>Email ID</label> "+response['email']+"</div></div>");
          $("#sex").html("<div class='col-sm-2'><div class='form-group'><label>Sex</label> "+response['sex']+"</div></div>");
          $("#mobileno").html("<div class='col-sm-2'><div class='form-group'><label>Mobile No</label> "+response['contact_no']+"</div></div>");
          $("#daytime").html("<div class='col-sm-2'><div class='form-group'><label>Day Time</label> "+response['daytime']+"</div></div>");
          $("#nighttime").html("<div class='col-sm-2'><div class='form-group'><label>Night Time</label> "+response['nighttime']+"</div></div>");
          $("#remarkbydoctor").html("<div class='col-sm-2'><div class='form-group'><label>Remark</label> "+response['remark']+"</div></div>");

        }
      });
    }
    function patient_b(){
      $.ajax({
        url:"fetch_patient_Heriditory_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){
          response = JSON.parse(data);
          $("#labelhairstatus").html("<div class='col-sm-4'><div class='form-group'><label>Hair Status</label></div></div>");
          $("#brotherhairstatus").html("<div class='col-sm-2'><div class='form-group'> "+response['brotherhairstatus']+"</div></div>");
          $("#sisterhairstatus").html("<div class='col-sm-2'><div class='form-group'> "+response['sisterhairstatus']+"</div></div>");
          $("#fatherhairstatus").html("<div class='col-sm-2'><div class='form-group'> "+response['fatherhairstatus']+"</div></div>");
          $("#motherhairstatus").html("<div class='col-sm-2'><div class='form-group'> "+response['motherhairstatus']+"</div></div>");
          $("#labeldensitystatus").html("<div class='col-sm-4'><div class='form-group'><label>Density</label></div></div>");
          $("#brotherdensity").html("<div class='col-sm-2'><div class='form-group'> "+response['brotherdensity']+"</div></div>");
          $("#sisterdensity").html("<div class='col-sm-2'><div class='form-group'> "+response['sisterdensity']+"</div></div>");
          $("#fatherdensity").html("<div class='col-sm-2'><div class='form-group'> "+response['fatherdensity']+"</div></div>");
          $("#motherdensity").html("<div class='col-sm-2'><div class='form-group'> "+response['motherdensity']+"</div></div>");
          $("#labelbaldnessstatus").html("<div class='col-sm-4'><div class='form-group'><label>Baldness</label></div></div>");
          $("#brotherbaldness").html("<div class='col-sm-2'><div class='form-group'> "+response['brotherbaldness']+"</div></div>");
          $("#sisterbaldness").html("<div class='col-sm-2'><div class='form-group'> "+response['sisterbaldness']+"</div></div>");
          $("#fatherbaldness").html("<div class='col-sm-2'><div class='form-group'> "+response['fatherbaldness']+"</div></div>");
          $("#motherbaldness").html("<div class='col-sm-2'><div class='form-group'> "+response['motherbaldness']+"</div></div>");
          $("#labelcolourstatus").html("<div class='col-sm-4'><div class='form-group'><label>Colour</label></div></div>");
          $("#brothercolour").html("<div class='col-sm-2'><div class='form-group'> "+response['brothercolour']+"</div></div>");
          $("#sistercolour").html("<div class='col-sm-2'><div class='form-group'> "+response['sistercolour']+"</div></div>");
          $("#fathercolour").html("<div class='col-sm-2'><div class='form-group'> "+response['fathercolour']+"</div></div>");
          $("#mothercolour").html("<div class='col-sm-2'><div class='form-group'> "+response['mothercolour']+"</div></div>");
          $("#labeldiabeticsstatus").html("<div class='col-sm-4'><div class='form-group'><label>Diabetics</label></div></div>");
          $("#brotherdiabetics").html("<div class='col-sm-2'><div class='form-group'> "+response['brotherdiabetics']+"</div></div>");
          $("#sisterdiabetics").html("<div class='col-sm-2'><div class='form-group'> "+response['sisterdiabetics']+"</div></div>");
          $("#fatherdiabetics").html("<div class='col-sm-2'><div class='form-group'> "+response['fatherdiabetics']+"</div></div>");
          $("#motherdiabetics").html("<div class='col-sm-2'><div class='form-group'> "+response['motherdiabetics']+"</div></div>");
          $("#labelbloodpressurestatus").html("<div class='col-sm-4'><div class='form-group'><label>Blood pressure</label></div></div>");
          $("#brotherbloodpressure").html("<div class='col-sm-2'><div class='form-group'> "+response['brotherbloodpressure']+"</div></div>");
          $("#sisterbloodpressure").html("<div class='col-sm-2'><div class='form-group'> "+response['sisterbloodpressure']+"</div></div>");
          $("#fatherbloodpressure").html("<div class='col-sm-2'><div class='form-group'> "+response['fatherbloodpressure']+"</div></div>");
          $("#motherbloodpressure").html("<div class='col-sm-2'><div class='form-group'> "+response['motherbloodpressure']+"</div></div>");
          $("#labelmajordiseasesstatus").html("<div class='col-sm-4'><div class='form-group'><label>Major diseases</label></div></div>");
          $("#brothermajordiseases").html("<div class='col-sm-2'><div class='form-group'> "+response['brothermajordiseases']+"</div></div>");
          $("#sistermajordiseases").html("<div class='col-sm-2'><div class='form-group'> "+response['sistermajordiseases']+"</div></div>");
          $("#fathermajordiseases").html("<div class='col-sm-2'><div class='form-group'> "+response['fathermajordiseases']+"</div></div>");
          $("#mothermajordiseases").html("<div class='col-sm-2'><div class='form-group'> "+response['mothermajordiseases']+"</div></div>");

        }
      });
    }
    function patient_c(){
      $.ajax({
        url:"fetch_patient_time_informationof_breakfast_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){
          response = JSON.parse(data);
          $("#afternoonsleeptime").html("<div class='col-sm-3'><div class='form-group'><label>Afternoon sleep</label> "+response['afternoonsleeptime']+"</div></div>");
          $("#wakeuptime").html("<div class='col-sm-3'><div class='form-group'><label>Wake Up Time</label> "+response['wakeuptime']+"</div></div>");
          $("#timeofsleeping").html("<div class='col-sm-3'><div class='form-group'><label>Time of Sleeping</label> "+response['timeofsleeping']+"</div></div>");
          $("#sleepingcondition").html("<div class='col-sm-3'><div class='form-group'><label>Sleeping Conditions</label> "+response['sleepingcondition']+"</div></div>");
          $("#teatimequantity").html("<div class='col-sm-2'><div class='form-group'><label>Tea</label> "+response['teatimequantity']+"</div></div>");
          $("#morningteatimequantity").html("<div class='col-sm-2'><div class='form-group'><label>Morning Time</label> "+response['morningteatimequantity']+"</div></div>");
          $("#eveningteatimequantity").html("<div class='col-sm-2'><div class='form-group'><label>Evening Time</label> "+response['eveningteatimequantity']+"</div></div>");
          $("#selectmilkwithoutmilk").html("<div class='col-sm-2'><div class='form-group'><label>Milk / Without Milk</label> "+response['selectmilkwithoutmilk']+"</div></div>");
          $("#selectmilk").html("<div class='col-sm-2'><div class='form-group'><label>Milk</label> "+response['selectmilk']+"</div></div>");
          $("#propationateoftea").html("<div class='col-sm-2'><div class='form-group'><label>Propationate of Tea</label> "+response['propationateoftea']+"</div></div>");
          $("#teawithbread").html("<div class='col-sm-3'><div class='form-group'><label>Tea With Bread</label> "+response['teawithbread']+"</div></div>");
          $("#teawithbreadquantity").html("<div class='col-sm-3'><div class='form-group'><label>Bread Quantity</label> "+response['teawithbreadquantity']+"</div></div>");
          $("#teawithbiscuits").html("<div class='col-sm-3'><div class='form-group'><label>Tea With Biscuits</label> "+response['teawithbiscuits']+"</div></div>");
          $("#teawithbiscuitsquantity").html("<div class='col-sm-3'><div class='form-group'><label>Biscuits Quantity</label> "+response['teawithbiscuitsquantity']+"</div></div>");
          $("#teawithtoast").html("<div class='col-sm-3'><div class='form-group'><label>Tea With Toast</label> "+response['teawithtoast']+"</div></div>");
          $("#teawithtoastquantity").html("<div class='col-sm-3'><div class='form-group'><label>Toast Quantity</label> "+response['teawithtoastquantity']+"</div></div>");
          $("#teawithkhari").html("<div class='col-sm-3'><div class='form-group'><label>Tea With Khari</label> "+response['teawithkhari']+"</div></div>");
          $("#teawithkhariquantity").html("<div class='col-sm-3'><div class='form-group'><label>Khari Quantity</label> "+response['teawithkhariquantity']+"</div></div>");

        }
      });
    }
    function patient_d(){
      $.ajax({
        url:"fetch_patient_weekly_breakfast_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
          //Break Fast Detail
          $("#labelsunday").html("<div class='col-sm-4'><div class='form-group'><label>Sunday</label></div></div>");
          $("#dailyitemsunday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemsunday']+"</div></div>");
          $("#dailyitemsundaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemsundaytime']+"</div></div>");
          $("#labelmonday").html("<div class='col-sm-4'><div class='form-group'><label>Monday</label> </div></div>");
          $("#dailyitemmonday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemmonday']+"</div></div>");
          $("#dailyitemmondaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemmondaytime']+"</div></div>");
          $("#labeltuesday").html("<div class='col-sm-4'><div class='form-group'><label>Tuesday</label></div></div>");
          $("#dailyitemtuesday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemtuesday']+"</div></div>");
          $("#dailyitemtuesdaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemtuesdaytime']+"</div></div>");
          $("#labelwednesday").html("<div class='col-sm-4'><div class='form-group'><label>Wednesday</label></div></div>");
          $("#dailyitemwednesday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemwednesday']+"</div></div>");
          $("#dailyitemwednesdaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemwednesdaytime']+"</div></div>");
          $("#labelthursday").html("<div class='col-sm-4'><div class='form-group'><label>Thursday</label></div></div>");
          $("#dailyitemthursday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemthursday']+"</div></div>");
          $("#dailyitemthursdaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemthursdaytime']+"</div></div>");
          $("#labelfriday").html("<div class='col-sm-4'><div class='form-group'><label>Friday</label></div></div>");
          $("#dailyitemfriday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemfriday']+"</div></div>");
          $("#dailyitemfridaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemfridaytime']+"</div></div>");
          $("#labelsaturday").html("<div class='col-sm-4'><div class='form-group'><label>Saturday</label></div></div>");
          $("#dailyitemsaturday").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemsaturday']+"</div></div>");
          $("#dailyitemsaturdaytime").html("<div class='col-sm-4'><div class='form-group'> "+response['dailyitemsaturdaytime']+"</div></div>");
          $("#fruits").html("<div class='col-sm-6'><div class='form-group'><label>Fruits Section</label> "+response['fruits']+"</div></div>");
          $("#dryfruits").html("<div class='col-sm-6'><div class='form-group'><label>Dry-Fruits Section</label> "+response['dryfruits']+"</div></div>");

        }
      });
    }
    function patient_e(){
      $.ajax({
        url:"fetch_patient_lunch_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
                          //Lunch Time
          $("#lunchtime").html("<div class='col-sm-3'><div class='form-group'><label>Lunch Time</label> "+response['lunchtime']+"</div></div>");
          $("#typeoflunch").html("<div class='col-sm-3'><div class='form-group'><label>Type Of Lunch</label> "+response['typeoflunch']+"</div></div>");
          $("#oilusedplamoil").html("<div class='col-sm-3'><div class='form-group'><label>Oil Used Plam Oil</label> "+response['oilusedplamoil']+"</div></div>");
          $("#oilusedrefined").html("<div class='col-sm-3'><div class='form-group'><label>Oil Used Refined</label> "+response['oilusedrefined']+"</div></div>");
          $("#oilusedmongafali").html("<div class='col-sm-3'><div class='form-group'><label>Oil Used Mongafali</label> "+response['oilusedmongafali']+"</div></div>");
          $("#oilusedotheroil").html("<div class='col-sm-3'><div class='form-group'><label>Oil Used Other Oil</label> "+response['oilusedotheroil']+"</div></div>");
          $("#ricetype").html("<div class='col-sm-3'><div class='form-group'><label>Ricetype</label> "+response['ricetype']+"</div></div>");
          $("#daltype").html("<div class='col-sm-3'><div class='form-group'><label>Daltype</label> "+response['daltype']+"</div></div>");
          $("#chapatitype").html("<div class='col-sm-3'><div class='form-group'><label>Chapati Type</label> "+response['chapatitype']+"</div></div>");
          $("#gheetype").html("<div class='col-sm-3'><div class='form-group'><label>Ghee Type</label> "+response['gheetype']+"</div></div>");
          $("#gheemake").html("<div class='col-sm-3'><div class='form-group'><label>Ghee Make</label> "+response['gheemake']+"</div></div>");
          $("#saladtype").html("<div class='col-sm-3'><div class='form-group'><label>Salad Type</label> "+response['saladtype']+"</div></div>");
          $("#pickletype").html("<div class='col-sm-3'><div class='form-group'><label>Pickle Type</label> "+response['pickletype']+"</div></div>");
          $("#papadtype").html("<div class='col-sm-3'><div class='form-group'><label>Papad Type</label> "+response['papadtype']+"</div></div>");
          $("#curd").html("<div class='col-sm-3'><div class='form-group'><label>Curd</label> "+response['curd']+"</div></div>");
          $("#buttermilktype").html("<div class='col-sm-3'><div class='form-group'><label>Butter Milk Type</label> "+response['buttermilktype']+"</div></div>");
          $("#paneertype").html("<div class='col-sm-3'><div class='form-group'><label>Paneer Type</label> "+response['paneertype']+"</div></div>");
          $("#chuntneytype").html("<div class='col-sm-3'><div class='form-group'><label>Chuntney Type</label> "+response['chuntneytype']+"</div></div>");
          $("#dinnertype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Type</label> "+response['dinnertype']+"</div></div>");

        }
      });
    }
    function patient_f(){
      $.ajax({
        url:"fetch_patient_dinner_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
                $("#dinnertime").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Time</label> "+response['dinnertime']+"</div></div>");
                $("#typeofdinner").html("<div class='col-sm-3'><div class='form-group'><label>Type Of Dinner</label> "+response['typeofdinner']+"</div></div>");
                $("#dinnerricetype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Rice Type</label> "+response['dinnerricetype']+"</div></div>");
                $("#dinnerdaltype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Dal Type</label> "+response['dinnerdaltype']+"</div></div>");
                $("#dinnerchapatitype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Chapati Type</label> "+response['dinnerchapatitype']+"</div></div>");
                $("#dinnergheetype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Ghee Type</label> "+response['dinnergheetype']+"</div></div>");
                $("#dinnergheemake").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Ghee Make</label> "+response['dinnergheemake']+"</div></div>");
                $("#dinnersaladtype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Salad Type</label> "+response['dinnersaladtype']+"</div></div>");
                $("#dinnerpickletype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Pickle Type</label> "+response['dinnerpickletype']+"</div></div>");
                $("#dinnerpapadtype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Papad Type</label> "+response['dinnerpapadtype']+"</div></div>");
                $("#dinnercurd").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Curd</label> "+response['dinnercurd']+"</div></div>");
                $("#dinnerbuttermilktype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Butter Milk Type</label> "+response['dinnerbuttermilktype']+"</div></div>");
                $("#dinnerpaneertype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Paneer Type</label> "+response['dinnerpaneertype']+"</div></div>");
                $("#dinnervegetabletype").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Vegetable Type</label> "+response['dinnervegetabletype']+"</div></div>");
                $("#dinnerhotelling").html("<div class='col-sm-3'><div class='form-group'><label>Dinner Hotelling</label> "+response['dinnerhotelling']+"</div></div>");

        }
      });
    }
    function patient_g(){
      $.ajax({
        url:"fetch_patient_details_dinner_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);

               $("#howmuchtimeeatperday").html("<div class='col-sm-6'><div class='form-group'><label>How Much Time Eat Per Day?</label> "+response['howmuchtimeeatperday']+"</div></div>");
               $("#simplevegatableeating").html("<div class='col-sm-6'><div class='form-group'><label>Simple Vegatable Eating</label> "+response['simplevegatableeating']+"</div></div>");
               $("#nonvegpercentage").html("<div class='col-sm-6'><div class='form-group'><label>Non Veg Percentage</label> "+response['nonvegpercentage']+"</div></div>");
               $("#nonvegitems").html("<div class='col-sm-6'><div class='form-group'><label>Non Veg Items</label> "+response['nonvegitems']+"</div></div>");
               $("#percentageeatingofeggs").html("<div class='col-sm-6'><div class='form-group'><label>EGGS(%)</label> "+response['percentageeatingofeggs']+"</div></div>");
               $("#percentageeatingoffish").html("<div class='col-sm-6'><div class='form-group'><label>FISH(%)</label> "+response['percentageeatingoffish']+"</div></div>");
               $("#percentageeatingofchicken").html("<div class='col-sm-6'><div class='form-group'><label>CHICKEN(%)</label> "+response['percentageeatingofchicken']+"</div></div>");
               $("#percentageeatingofmutton").html("<div class='col-sm-6'><div class='form-group'><label>MUTTON(%)</label> "+response['percentageeatingofmutton']+"</div></div>");
               $("#percentageeatingofpron").html("<div class='col-sm-6'><div class='form-group'><label>PRON(%)</label> "+response['percentageeatingofpron']+"</div></div>");
               $("#percentageeatingofdryfish").html("<div class='col-sm-6'><div class='form-group'><label>DRY-FISH(%)</label> "+response['percentageeatingofdryfish']+"</div></div>");

        }
      });
    }
    function patient_h(){
      $.ajax({
        url:"fetch_patient_habbits_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
              $("#labelalcohol").html("<div class='col-sm-4'><div class='form-group'><label>Alcohol</label></div></div>");
               $("#brandhabitalcohol").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitalcohol']+"</div></div>");
               $("#frequencyhabitalcohol").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitalcohol']+"</div></div>");
               $("#labelcigarate").html("<div class='col-sm-4'><div class='form-group'><label>Cigarate</label></div></div>");
               $("#brandhabitcigarate").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitcigarate']+"</div></div>");
               $("#frequencyhabitcigarate").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitcigarate']+"</div></div>");
               $("#labeltobacco").html("<div class='col-sm-4'><div class='form-group'><label>Tobacco</label></div></div>");
               $("#brandhabittobacco").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabittobacco']+"</div></div>");
               $("#frequencyhabittobacco").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabittobacco']+"</div></div>");
               $("#labelguthka").html("<div class='col-sm-4'><div class='form-group'><label>Guthka</label></div></div>");
               $("#brandhabitguthka").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitguthka']+"</div></div>");
               $("#frequencyhabitguthka").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitguthka']+"</div></div>");
               $("#labeldrugs").html("<div class='col-sm-4'><div class='form-group'><label>Drugs</label></div></div>");
               $("#brandhabitdrugs").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitdrugs']+"</div></div>");
               $("#frequencyhabitdrugs").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitdrugs']+"</div></div>");
               $("#labelbrownsug").html("<div class='col-sm-4'><div class='form-group'><label>Brown sug</label></div></div>");
               $("#brandhabitbrownsug").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitbrownsug']+"</div></div>");
               $("#frequencyhabitbrownsug").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitbrownsug']+"</div></div>");
               $("#labelcockane").html("<div class='col-sm-4'><div class='form-group'><label>Cockane</label></div></div>");
               $("#brandhabitcockane").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitcockane']+"</div></div>");
               $("#frequencyhabitcockane").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitcockane']+"</div></div>");
               $("#labelsupari").html("<div class='col-sm-4'><div class='form-group'><label>Supari</label></div></div>");
               $("#brandhabitsupari").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitsupari']+"</div></div>");
               $("#frequencyhabitsupari").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitsupari']+"</div></div>");
               $("#labelpan").html("<div class='col-sm-4'><div class='form-group'><label>Pan</label></div></div>");
               $("#brandhabitpan").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['brandhabitpan']+"</div></div>");
               $("#frequencyhabitpan").html("<div class='col-sm-4'><div class='form-group'><label></label> "+response['frequencyhabitpan']+"</div></div>");


        }
      });
    }
    function patient_i(){
      $.ajax({
        url:"fetch_patient_hair_treatment_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data); //Hair Care Treatment
               $("#hairmassage").html("<div class='col-sm-4'><div class='form-group'><label>Hair Massage</label> "+response['hairmassage']+"</div></div>");
               $("#soap").html("<div class='col-sm-4'><div class='form-group'><label>Soap</label> "+response['soap']+"</div></div>");
               $("#shampoo").html("<div class='col-sm-4'><div class='form-group'><label>Shampoo</label> "+response['shampoo']+"</div></div>");
               $("#hairpacks").html("<div class='col-sm-4'><div class='form-group'><label>Hair Packs</label> "+response['hairpacks']+"</div></div>");
               $("#bryalcream").html("<div class='col-sm-4'><div class='form-group'><label>Bryal Cream</label> "+response['bryalcream']+"</div></div>");
               $("#mehandi").html("<div class='col-sm-4'><div class='form-group'><label>Mehandi</label> "+response['mehandi']+"</div></div>");
               $("#labelhairwashingmaterial").html("<div class='col-sm-4'><div class='form-group'><label>Day Time</label> kunalkapse</div></div>");
               $("#watertype").html("<div class='col-sm-4'><div class='form-group'><label>Water Type</label> "+response['watertype']+"</div></div>");
               $("#watertemperature").html("<div class='col-sm-4'><div class='form-group'><label>Water Temperature</label> "+response['watertemperature']+"</div></div>");
               $("#labelstataus").html("<div class='col-sm-4'><div class='form-group'><label>Remark</label></div></div>");
               $("#drandrdufff").html("<div class='col-sm-2'><div class='form-group'><label>Drandrdufff</label> "+response['drandrdufff']+"</div></div>");
               $("#hairlossfrequency").html("<div class='col-sm-2'><div class='form-group'><label>Hair Loss Frequency</label> "+response['hairlossfrequency']+"</div></div>");
               $("#baldnessgap").html("<div class='col-sm-2'><div class='form-group'><label>Baldness Gap</label> "+response['baldnessgap']+"</div></div>");
               $("#howmanyyear").html("<div class='col-sm-2'><div class='form-group'><label>How Many Year</label> "+response['howmanyyear']+"</div></div>");

        }
      });
    }
    function patient_j(){
      $.ajax({
        url:"fetch_patient_sex_related_info_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data); //Hair Care Treatment
               $("#sexsualhistorybluefilms").html("<div class='col-sm-4'><div class='form-group'><label>Blue Flims</label> "+response['sexsualhistorybluefilms']+"</div></div>");
               $("#sexsualhistoryfirstsource").html("<div class='col-sm-4'><div class='form-group'><label>First Source</label> "+response['sexsualhistoryfirstsource']+"</div></div>");
               $("#sexsualhistoryage").html("<div class='col-sm-4'><div class='form-group'><label>Age</label> "+response['sexsualhistoryage']+"</div></div>");
               $("#sexsualhistoryfriendrelative").html("<div class='col-sm-4'><div class='form-group'><label>Friend/Relative</label> "+response['sexsualhistoryfriendrelative']+"</div></div>");
               $("#sexsualhistoryplace").html("<div class='col-sm-4'><div class='form-group'><label>Place</label> "+response['sexsualhistoryplace']+"</div></div>");
               $("#sexsualhistoryrecurrance").html("<div class='col-sm-4'><div class='form-group'><label>Recurrance</label> "+response['sexsualhistoryrecurrance']+"</div></div>");
               $("#sexsualhistorysexualbookreading").html("<div class='col-sm-4'><div class='form-group'><label>Sexual Book Reading</label> "+response['sexsualhistorysexualbookreading']+"</div></div>");
               $("#sexsualhistorymobile").html("<div class='col-sm-4'><div class='form-group'><label>Mobile</label> "+response['sexsualhistorymobile']+"</div></div>");
               $("#sexsualhistoryinternet").html("<div class='col-sm-4'><div class='form-group'><label>Internet</label> "+response['sexsualhistoryinternet']+"</div></div>");
               $("#sexsualhistoryfriend").html("<div class='col-sm-4'><div class='form-group'><label>Friend</label> "+response['sexsualhistoryfriend']+"</div></div>");
               $("#sexsualhistorygirlfriend").html("<div class='col-sm-4'><div class='form-group'><label>Girl-Friend</label> "+response['sexsualhistorygirlfriend']+"</div></div>");
               $("#sexsualhistorywife").html("<div class='col-sm-4'><div class='form-group'><label>Wife</label> "+response['sexsualhistorywife']+"</div></div>");
               $("#sexsualhistoryprostitution").html("<div class='col-sm-4'><div class='form-group'><label>Prostitution</label> "+response['sexsualhistoryprostitution']+"</div></div>");
               $("#sexsualhistoryweekness").html("<div class='col-sm-4'><div class='form-group'><label>Weekness</label> "+response['sexsualhistoryweekness']+"</div></div>");
               $("#sexsualhistorylastestfrequency").html("<div class='col-sm-4'><div class='form-group'><label>Lastest Frequency</label> "+response['sexsualhistorylastestfrequency']+"</div></div>");

        }
      });
    }
    function patient_k(){
      $.ajax({
        url:"fetch_patient_General_info_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){
          response = JSON.parse(data);
               $("#generalhistoryacidity").html("<div class='col-sm-4'><div class='form-group'><label>Acidity</label> "+response['generalhistoryacidity']+"</div></div>");
               $("#generalhistorygases").html("<div class='col-sm-4'><div class='form-group'><label>Gases</label> "+response['generalhistorygases']+"</div></div>");
               $("#generalhistoryconstraption").html("<div class='col-sm-4'><div class='form-group'><label>Constraption</label> "+response['generalhistoryconstraption']+"</div></div>");
               $("#generalhistorypiles").html("<div class='col-sm-4'><div class='form-group'><label>Piles</label> "+response['generalhistorypiles']+"</div></div>");
               $("#generalhistorybleeding").html("<div class='col-sm-4'><div class='form-group'><label>Bleeding</label> "+response['generalhistorybleeding']+"</div></div>");
               $("#generalhistorypain").html("<div class='col-sm-4'><div class='form-group'><label>Pain</label> "+response['generalhistorypain']+"</div></div>");
               $("#generalhistoryhardstrokes").html("<div class='col-sm-4'><div class='form-group'><label>Hard Strokes</label> "+response['generalhistoryhardstrokes']+"</div></div>");
               $("#generalhistorystcickyliquid").html("<div class='col-sm-4'><div class='form-group'><label>Stcicky / Liquid</label> "+response['generalhistorystcickyliquid']+"</div></div>");
               $("#generalhistorycolor").html("<div class='col-sm-4'><div class='form-group'><label>Color</label> "+response['generalhistorycolor']+"</div></div>");

        }
      });
    }
    function patient_L(){
      $.ajax({
        url:"fetch_patient_past_history_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
    $("#majordiseases").html("<div class='col-sm-6'><div class='form-group'><label>Major Diseases</label> "+response['majordiseases']+"</div></div>");
    $("#admit").html("<div class='col-sm-6'><div class='form-group'><label>Admit</label> "+response['admit']+"</div></div>");

        }
      });
    }
    function patient_M(){
      $.ajax({
        url:"fetch_patient_personality_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){

          response = JSON.parse(data);
          $("#personalitybuiltup").html("<div class='col-sm-4'><div class='form-group'><label>Builtup</label> "+response['personalitybuiltup']+"</div></div>");
          $("#personalityweight").html("<div class='col-sm-4'><div class='form-group'><label>Weight</label> "+response['personalityweight']+"</div></div>");
          $("#personalityheight").html("<div class='col-sm-4'><div class='form-group'><label>Height</label> "+response['personalityheight']+"</div></div>");
          $("#personalityeyes").html("<div class='col-sm-4'><div class='form-group'><label>Eyes</label> "+response['personalityeyes']+"</div></div>");
          $("#personalitytongue").html("<div class='col-sm-4'><div class='form-group'><label>Tongue</label> "+response['personalitytongue']+"</div></div>");
          $("#personalitynails").html("<div class='col-sm-4'><div class='form-group'><label>Nails</label> "+response['personalitynails']+"</div></div>");
          $("#personalitybp").html("<div class='col-sm-3'><div class='form-group'><label>BP</label> "+response['personalitybp']+"</div></div>");
          $("#personalitypulses").html("<div class='col-sm-3'><div class='form-group'><label>Pulses</label> "+response['personalitypulses']+"</div></div>");
          $("#personalityresprate").html("<div class='col-sm-3'><div class='form-group'><label>Resp. Rate</label> "+response['personalityresprate']+"</div></div>");
          $("#personalityheartrate").html("<div class='col-sm-3'><div class='form-group'><label>Heart Rate</label> "+response['personalityheartrate']+"</div></div>");

        }
      });
    }
    function patient_N(){
      $.ajax({
        url:"fetch_patient_marrid_life_data",
        type:"POST",
        data:{patient_id:<?php echo $_REQUEST['patient_id'];?>},
        success:function(data){
          response = JSON.parse(data);
                $("#noofchildren").html("<div class='col-sm-2'><div class='form-group'><label>No of Children</label> "+response['noofchildren']+"</div></div>");
                $("#firstchildrenage").html("<div class='col-sm-2'><div class='form-group'><label>Child 1</label> "+response['f_child_age']+"</div></div>");
                $("#secondchildrenage").html("<div class='col-sm-2'><div class='form-group'><label>Child 2</label> "+response['s_child_age']+"</div></div>");
                $("#thirdchildrenage").html("<div class='col-sm-2'><div class='form-group'><label>Child 3</label> "+response['t_child_age']+"</div></div>");
                $("#fourthchildrenage").html("<div class='col-sm-2'><div class='form-group'><label>Child 4</label> "+response['fourth_child_age']+"</div></div>");
                $("#fifthchildrenage").html("<div class='col-sm-2'><div class='form-group'><label>Child 5</label> "+response['fifth_child_age']+"</div></div>");
                $("#ageofmarriage").html("<div class='col-sm-3'><div class='form-group'><label>Age of Marriage</label> "+response['ageofmarriage']+"</div></div>");
                $("#familyplanningtablets").html("<div class='col-sm-3'><div class='form-group'><label>Family planning tablets</label> "+response['f_planing_tablets']+"</div></div>");
                $("#familyplanningoperation").html("<div class='col-sm-3'><div class='form-group'><label>Family planning operation</label> "+response['f_planing_operation']+"</div></div>");
                $("#remarkdetailhistory").html("<div class='col-sm-3'><div class='form-group'><label>Remark</label> "+response['remark']+"</div></div>");
              }
      });
    }
    </script>
    <script>
    function loadpage(){
      $("#showpatientdetail").hide();
      $("#loadsyntumpage").show();
      $("#newbutton").hide();
      $("#loaddata").load('newloadpage?patient_id='+<?php echo $_REQUEST['patient_id'];?>);
    }
    function view_histoy(){

      $("#showpatientdetail").hide();
      $("#loadsyntumpage").show();
      $("#newbutton").hide();
      $("#view_histoy").hide();
      $("#view_history").load('view_history?patient_id='+<?php echo $_REQUEST['patient_id'];?>);
    }

    </script>

</body>

</html>
<?php }else {
  header("location:index.php");
} ?>
