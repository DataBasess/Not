
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ตลาดนัดเรียบด่วน</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style type="text/css">
        
        body {
          padding-top: 50px;
          position: relative;
      }
      
      pre {
          tab-size: 8;
      }
      
      @media screen and (max-width: 768px) {
          .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              transition:left .4s;
          }
          .side-collapse-container.out{
              left:200px;
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:200px;
              position:fixed;
              overflow:hidden;
              transition:width .4s;
          }
          .side-collapse.in {
              width:0;
          }
      }
    </style>
    <body>
        

<header role="banner" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="navbar-inverse side-collapse in">
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('block'); ?>">จองร้านค้า</a></li>
              <li><a href="<?php echo base_url('user/edit/'.$this->session->userdata('login_id')); ?>">ข็อมูลผู้ใช้</a></li>
              <li><a href="#users">ข้อมูลการจองร้านค้า</a></li>
              <li><a href="<?php echo base_url('user/logout'); ?>">ออกจากระบบ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="container side-collapse-container">
      <div class="row">
      
        <div class="col-md-12 col-xs-12" align="center">
            <h1>จองพื้นที่ร้านค้า</h1>
            <div class="text-center">
                
                <div class="container">
                    <div class="row">
                        <?php foreach($blocks as $b){ ?>                        
                            <a
                            <?php if ($b['status'] == 'success') { ?>
                            href="<?php echo base_url('Block/select/'.$b['id']); ?>" 
                            <?php } ?>

                            class="btn btn-<?php echo $b['status']; ?>" >
                            <?php echo $b['name']; ?>                        

                            </a>                                                        
                        <?php } ?>                       
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                </div>
                
                

            </div>
        </div>

      </div>
    </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
         <script >
             
             $(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
         </script>

    </body>
</html>