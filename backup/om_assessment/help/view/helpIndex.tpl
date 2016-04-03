<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">


    <title>Checkpoint Website</title>

     <link href="../resources/css/reset.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="../resources/css/bootstrap.css" rel="stylesheet">

    <!-- -- styles --  -->
     <link href="../resources/css/main.css" rel="stylesheet">
     <link href="../resources/css/myStyle.css" rel="stylesheet">
   
    <!-- -- jquery Scripts --  -->
      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!-- -- scripts --  --> 
      <script src="../resources/js/filter.js"></script>
    <!--Condicionals -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="container">
    
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Checkpoint</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="../help">Instruccions</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="../dashboard">Dashboard</a></li>
            <li><a>Assessments</a></li>
            <li><a>Accion Plans</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a>OM tools</a></li>
            <li><a href="../assessment/index.php">Assessments</a></li>
            <li><a>Action Plans  </a></li>
            <li><a>Reports</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a>Maintenance</a></li>
            <li><a href="../question">Questions</a></li>
            <li><a href="../questionary">Questionary</a></li>
            <li><a href="../maturityLevel">Levels</a></li>
            <li><a href="../maturityCategory">Categories</a></li>
            <li><a href="../users">Users</a></li>
            <li><a href="../team">Teams</a></li>            <li><a href="../prioritization">Prioritization</a></li>
          </ul>
        </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
    <div id="mainContent">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#Instructions" data-toggle="tab">Instructions</a></li>
            <li><a href="#Acronyms" data-toggle="tab">Acronyms</a></li> 
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="Instructions">

            <h3>General information</h3>
            </br>
              <ul>
                <li>The Service Operations Maturity Framework (SOMF) provides a clear set of standards by which delivery process teams are measured to help to ensure optimal levels of efficiency and Operational Excellence. Please find the embedded file as a standard guideline: 
                </li>
                <li>The structure of the framework is based on 6 Maturity Categories: Focus, Standardize, Plan, Organize, Visualize, and Improve. In each category the teams are assessed with NOT STABLE, STABLE, CAPABLE or OPTIMIZED  GEN 4 rating.
                </li>
                <li>Based on the SOMF the Operational Excellence Team developed The Maturity Assessment sheet to further support the regular assessments and measurements and ensure standardized, objective and fair approach to the quarterly/monthly operational maturity assessments across BPO Service Delivery Teams.
                </li>
              </ul>

          </br>
          <h3>Instructions to update OM Assessment</h3>
         </br>

          <img class="img-responsive  marginleft" alt="Responsive image" src="../resources/images/ominfo.png">
          </br>
          <ol>
            <li> Maturity Category: The structure of the tool is based on the Maturity Categories: Focus, Standardize, Plan, Organize, Visualize, Improve.
            </li>
            <li> Questions: are numbered and grouped according to the Maturity Categories. There are different questions linked to each of the rating level. Most questions are based on the SOMF. Questions can be further appended with a detailed explanation in the comment field. 
            </li>
            <li>Rating:  If the question/statement can be positively answered select "Y" against the respective month  the assessment is being done.  If the question/statement can NOT be positively answered,  select "N".  For specific questions where it is not applicable,  select "N/A" providing  proper explanation and  it needs to  be validated by assessment providers. 
            </li>
            <h4> Important:</h4>
             <p class="marginleft">Individual questions are always linked to only one Maturity Level. To receive the correct final rating, all questions need to be evaluated and rated. 
             It is recommendable to conduct  a floor walk prior to making an assessment of a team since the operational maturity need to be demonstrated by the visuals.
             </p>
            <li>Maturity Level of the Maturity Category: Based on the number of positively answered questions , the tool returns the result in every evaluated category.   
            </li>
            <li>Overall  Score: The tool automatically calculates the total score per all 6 categories.
            </li>
            <li>Overall rating: is defined based on the total achieved score :  < 1.83 = "Not Stable",   < 2.83 = "Stable", <3.75 = "Capable",  ≥ 3.75 and Optimized  Gen 4 rating achieved in Focus, Organize & Improve category =  "Optimized Gen 4."
            </li>
          </ol>

          </br>
          <h3>Instructions to update 'Maturity Results and Action Plan'</h3>
         </br>

          <ul>
            <li>After having  done  the assessment, the results need to be recorded and an Action plan for the next monthhas to be developed. It can be carried out on the worksheet 'Maturity Results & Action Plan'.
            </li>
            <li>Fill out the header accordingly. (Client Name, Capability, Process, Region, Location, OE Lead, OE Focal, Last Assessment Date).
            </li>
            <li>Enter the maturity level per categtory into respective cells in rows  15-20. Based on your entries, the tool will calculate a score and an overall rating. (The maturity level has to be entered - copied from the OM Assessment - for each category, since each category has an impact on the final overall rating. The "Radar chart" showing the maturity development is automatically being updated). This way your can track your OM development even on monthly basis.
            </li>
            <li>In case you do the assessment for the first time, copy the results for the 'Baseline' assessment into the respective month in which the assessment has started. Next assessments will follow up chronologically.
            </li>
            <li>The Action plan is linked to all the questions which did not meet the expectations - marked as 'N'. Type the number of the question into the respective column  (task description and category will be filled automatically).  Define an appropriate action to meet the target (to be able to positively answer the question). There can be more actions suggested per 1 question.
            </li>
            <li>You can also suggest an action for those items which are classified as 'Y' to enable a continuous improvement or sustainable result in the respective area or in case of changes or further improvements. 
            </li>
            <li>Those actions which are achievable in the next quarter, have to be prioritized. Monthly prioritization is being supported by columns 'L', 'M' and 'N'. (30-60-90 days) which need to be filled by typing an "x" into the respective cell.
            </li>
            <li>An 'Owner' and 'Due Date' need to be specified at least for all actions dedicated to the respective quarter.</li>
            <li>There is an 'Action Summary' table at the top of the worksheet, which shows you which actions are already overdue and which are due in 5 and 10 days.
            </li> 
          </ul>

            </div><!-- end Instructions tab panel-->


            <div class="tab-pane" id="Acronyms">

           <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Filter by</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table marginleft">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder=" Acronyms " disabled></th>
                            <th><input type="text" class="form-control" placeholder="Detail" disabled></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACMS</td>
                            <td>Advanced Capacity Measurement System</td>  
                        </tr>  

                        <tr> 
                            <td>BOIs</td>
                            <td>Business Outcome Indicators</td>                           
                        </tr> 
                         <tr>
                            <td>CAL</td>
                            <td>Customer Account Lead</td>  
                        </tr>                        
                        <tr>
                            <td>CBT</td>
                            <td>Computer Based Training</td>  
                        </tr> 
                        <tr>
                            <td>CCI</td>
                            <td>Contract Committed Income</td>  
                        </tr> 
                        <tr>
                            <td>CICM</td>
                            <td>Critical Infosec Compliance Metric</td>  
                        </tr> 
                        <tr>
                            <td>COS</td>
                            <td>Cost Operation Savings</td>  
                        </tr> 
                        <tr>
                            <td>CTS</td>
                            <td>Cost To Serve</td>  
                        </tr> 
                        <tr>
                            <td>CU</td>
                            <td>Capacity utilization</td>  
                        </tr> 
                        <tr>
                            <td>F&A</td>
                            <td>Finance and Accounting</td>  
                        </tr> 
                        <tr>
                            <td>FMEA</td>
                            <td>Failure Mode & Effects Analysis</td>  
                        </tr> 
                        <tr>
                            <td>GBO</td>
                            <td>Global Business Owner</td>  
                        </tr> 
                        <tr>
                            <td>GPO</td>
                            <td>Global Process Owner</td>  
                        </tr> 
                        <tr>
                            <td>HC</td>
                            <td>Headcount</td>  
                        </tr> 
                        <tr>
                            <td>HLPM</td>
                            <td>High Level Process Map</td>  
                        </tr> 
                        <tr>
                            <td>HRE</td>
                            <td>High Risk Engagemnet</td>  
                        </tr> 
                        <tr>
                            <td>JRB</td>
                            <td>Joint Review Board</td>  
                        </tr> 
                        <tr>
                            <td>MBO</td>
                            <td>Measurable Business Objective</td>  
                        </tr> 
                        <tr>
                            <td>MOR</td>
                            <td>Monthly Operating Review</td>  
                        </tr> 
                        <tr>
                            <td>MOS</td>
                            <td>Management Operating System</td>  
                        </tr> 
                        <tr>
                            <td>O2C</td>
                            <td>Order To Cash</td>  
                        </tr> 
                        <tr>
                            <td>OADM</td>
                            <td>Outsourcing Account Delivery Manager</td>  
                        </tr> 
                        <tr>
                            <td>ODE</td>
                            <td>Original Deal Economics</td>  
                        </tr> 
                        <tr>
                            <td>OLA</td>
                            <td>Operation Level Agreement</td>  
                        </tr> 

                        <tr>
                            <td>OM</td>
                            <td>Operational Maturity</td>  
                        </tr> 

                        <tr>
                            <td>P2P</td>
                            <td>Procure to Pay</td>  
                        </tr> 
                        <tr>
                            <td>PoV</td>
                            <td>Service Performance Point of View</td>  
                        </tr> 
                        <tr>
                            <td>R&R</td>
                            <td>Rewards and Recognition</td>  
                        </tr> 
                        <tr>
                            <td>R2R</td>
                            <td>Record To Record</td>  
                        </tr> 
                        <tr>
                            <td>RTY</td>
                            <td>Rolled throughput yield</td>  
                        </tr> 
                        <tr>
                            <td>SDL</td>
                            <td>Service Delivery Lead (CISO)</td>  
                        </tr> 

                        <tr>
                            <td>SDS</td>
                            <td>Standard Delivery Structure</td>  
                        </tr> 
                        <tr>
                            <td>SIPOC</td>
                            <td>Supplier/Inputs/Process/Outputs/Costumer</td>  
                        </tr> 

                        <tr>
                            <td>SLA</td>
                            <td>Service Level Agreement</td>  
                        </tr> 
                        <tr>
                            <td>SPPOV</td>
                            <td>Service Performance Point Of View</td>  
                        </tr> 
                        <tr>
                            <td>SU</td>
                            <td>Seat Utilization</td>  
                        </tr> 
                        <tr>
                            <td>SWI</td>
                            <td>Standarized Work Instructions</td>  
                        </tr> 
                        <tr>
                            <td>TAT</td>
                            <td>Time for Average Turnaround</td>  
                        </tr> 
                        <tr>
                            <td>TGP</td>
                            <td>Technology Growth Platform</td>  
                        </tr> 
                        <tr>
                            <td>VOC</td>
                            <td>Voice of the costumer</td>  
                        </tr> 
                        <tr>
                            <td>VSM</td>
                            <td>Value Stream Mapping</td>  
                        </tr>  
                    </tbody>
                </table>
            </div>
    </div> 
           </div> <!-- end Acronyms tab panel-->
          </div><!-- end tab-content-->


    </div> <!-- end mainContent-->


      </div>  <!-- end column -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/js/bootstrap.min.js"></script>  
  </body>
</html>
