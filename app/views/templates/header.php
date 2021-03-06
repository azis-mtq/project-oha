<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title> <?= $data['judul']; ?> </title>

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/all.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/reset.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/text.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/grid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/layout.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/nav.css" media="screen" />

    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->

    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

    <link href="<?= BASEURL; ?>/fancy-button/fancy-button.css" rel="stylesheet" type="text/css" />

    <!--Jquery UI CSS-->

    <link href="<?= BASEURL; ?>/css/themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN: load jquery -->

    <script src="<?= BASEURL; ?>/js/jquery-1.6.4.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.core.min.js"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>

    <!-- END: load jquery -->

    <!--jQuery Date Picker-->

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>

    <!-- jQuery dialog related-->

    <script src="<?= BASEURL; ?>/js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>

    <!-- jQuery dialog end here-->

    <script src="<?= BASEURL; ?>/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>

    <!--Fancy Button-->

    <script src="<?= BASEURL; ?>/js/fancy-button/fancy-button.js" type="text/javascript"></script>

    <script src="<?= BASEURL; ?>/js/setup.js" type="text/javascript"></script>

    <!-- Load TinyMCE -->

    <script src="<?= BASEURL; ?>/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            setupTinyMCE();

            setupProgressbar('progress-bar');

            setDatePicker('date-picker');

            setupDialogBox('dialog', 'opener');

            $('input[type="checkbox"]').fancybutton();

            $('input[type="radio"]').fancybutton();

        });

    </script>

    <!-- /TinyMCE -->

    <style type="text/css">

        #progress-bar

        {

            width: 400px;

        }

    </style>

     <script type="text/javascript">

         $(window).load(function () {

             $('#demo-side-bar').removeAttr('style');

         });

</script>

<style type="text/css">

#demo-side-bar{left:90%!important;display:block!important;}

#branding .floatright{margin-right:130px!important;}

</style>

      <div class="container_12">

        <div class="grid_12 header-repeat">

            <div id="branding">

                <div class="floatleft">
                    
                    <img src="img/logo2.png" alt="Logo" /></div>

                <div class="floatright">

                    <div class="floatleft">

                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>

                    <div class="floatleft marginleft10">

                        <ul class="inline-ul floatleft">

                            <li>Hello Admin</li>

                            <li><a href="#">Config</a></li>

                            <li><a href="#">Logout</a></li>

                        </ul>

                        <br />

                        <span class="small grey">Last Login: 3 hours ago</span>

                    </div>

                </div>

                <div class="clear">

                </div>

            </div>

        </div>

        <div class="clear">

        </div>

        <div class="grid_12">

             <ul class="nav main">
             <li><a class="active" href="<?= BASEURL; ?>/home"><i class="fa fa-fw fa-home fa-lg"></i> Dashboard</a></li>
             <li><a class="active" href="<?= BASEURL; ?>/loading"><i class="fa fa-fw fa-cloud-upload-alt fa-lg"></i> Loading</a></li>
             <li><a class="active" href="#"><i class="fa fa-fw fa-cloud-download-alt fa-lg"></i> Unloading</a></li>
             <li><a class="active" href="#"><i class="fa fa-fw fa-cloud-sun fa-lg"></i> Drying</a></li>

        </div>

        <div class="clear">

        </div>