<!DOCTYPE html>

<html lang="en">
<head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Default Title" ?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Content/andreaStyle.css" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <div class="container-fluid">
            <div class="row" style="background-color: #53718e;">
                <div class="mx-auto">

                    <a href="Default.aspx">
                        <img src="images/andreaOrrHeader.jpg" alt="Andrea Orr homepage image." height="156" border="0" class="hide4-mobile img-fluid" /></a>
                    <img src="images/andreaOrrSM.jpg" alt="Andrea Orr homepage image." border="0" class="show4-mobile img-fluid"/>
                </div>
        <div id="blackRow" style="height: 20px; background-color: #000000 !important;">
        </div>
</div>
</div>
<!-- body container starts here -->
<div class="container-fluid mx-auto">
            <div class="row" style="background-color: #7cafde;">
                <div class="col-md-4 col-xl-3 col-lg-4 col-sm-12 col-xs-12">