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
      <script src="../resources/js/functions.js"></script>

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
                  <a class="navbar-brand" href="#">Checkpoint  </a>
                  <a> Welcome t.mcfarlane </a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="../help">Instruccions</a></li>
                    <li><a href="../ ">Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                  <li class="active"><a href="#">Overview</a></li>
                  <li><a href="../dashboard">Dashboard</a></li>
                  <li><a>Accion Plans</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li class="active"><a>OM tools</a></li>
                  <li><a href="../assessment/index.php">Assessments</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li class="active"><a>Maintenance</a></li>
                  <li><a href="../question">Questions</a></li>
                  <li><a href="../questionary">Questionaries</a></li>
                  <li><a href="../maturityLevel">Levels</a></li>
                  <li><a href="../maturityCategory">Categories</a></li>
                  <li><a href="../users">Users</a></li>
                  <li><a href="../team">Teams</a></li>
                  <li><a href="../prioritization">Prioritization</a></li>
                </ul>
              </div>
          </div>


     <div class="container-fluid"> 
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <div id="mainContent"> 
  
  <br>
   <div class="row clearfix"> 
   <div class="panel panel-default"> <!-- Default panel contents -->
       
    
       <h1 class="page-header marginleft"></h1>
        <h2 class="sub-header marginleft">Role</h2>
      
        <?php require("users/controller/displayRoleController.php");?>

        <form class="form-inline" role="form" action="../users/addRoleIndex.php" method="POST">
        
              <div class="form-group">
              <label class="marginleft">ID</label>
               {foreach from=$maxID item=max } 
               {$id=$max[role_ID]+1}
               <input name="idUserRole"  type="id_UserRole" class="form-control" id="id_UserRole"  value="{$id}" readonly>
               {/foreach}
              </div>
       
              <div class="form-group">
              <label  class="marginleft" >Role</label>
              <input name="roleName"type="text" class="form-control" value="{$rolename}" placeholder="Name">
              </div>

              <div class="form-group">
              <label class="marginleft">Description</label>              
               <span class="clearfix" ></span>
               <div class="col-sm-4">
               <textarea name="roleDesc" class="form-control" rows="2" cols="30">{$roledescription}</textarea>
               </div>
              </div>
              <button type="submit" name="addRoleBtn"class="btn btn-info "> ADD</button>
               <span class="clearfix" ></span>

               <span class="error">{$IdErr}</span>
               <span class="error">{$roleErr}</span>
               <span class="error">{$descripErr}</span>
              
        </form>
      <br><br>
  </div> <!-- end panel panel-default-->
  </div> <!-- end row clearfix-->
   <div class="row clearfix"> 
        <table class="table roleTable">
        <thead>
        <tr>
        <th>Id</th>
        <th>Role</th>
        <th>Description</th>
        <th></th>
        </tr>
        </thead>
        {section name=rl loop=$roles}
         <tbody>
          <tr>
          <td>{$roles[rl].role_ID}</td>
          <td>{$roles[rl].role_name}</td>
          <td>{$roles[rl].role_desc}</td>
          <td> <a href='../users/displayRoleUpdate.php?id={$roles[rl].role_ID}'><input class="btn btn-default" type="submit" name="editQuestion" value="EDIT"></a> </td>
          </tr>
         </tbody>
          {/section}
        </table>
 </div>

  
     </div>  <!-- end mainContent -->
     </div>  <!-- end column -->
     </div><!--end container-fluid -->




   </div> <!-- end container-->
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/js/bootstrap.min.js"></script> 


  </body>
</html>
