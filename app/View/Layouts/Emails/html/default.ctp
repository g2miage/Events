<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title><?php echo $title_for_layout; ?></title>

    <?php echo $this->Html->css('email'); ?>
</head>
 
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
    <tr>
        <td></td>
        <td class="header container">

            <div class="content">
                <table bgcolor="#999999">
                    <tr>
                        <td><img src="http://placehold.it/200x50/" /></td>
                        <td align="right"><h6 class="collapse">Events</h6></td>
                    </tr>
                </table>
            </div>

        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
    <tr>
        <td></td>
            <td class="container" bgcolor="#FFFFFF">
                <div class="content">
                    <table>
                        <tr>
                            <td>
                                <!--<h3>Welcome, Elijah Baily</h3>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </p>

                                    
                                    <p><img src="http://placehold.it/600x300" /></p>

                                    
                                    <p class="callout">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#">Do it Now! &raquo;</a>
                                    </p>

                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <a class="btn">Click Me!</a>
                                -->
                                <?php echo $this->fetch('content'); ?>
                                
                                <br/><br/>							

                                <!-- social & contact -->
                                <table class="social" width="100%">
                                    <tr>
                                        <td>
                                            <!--- column 1 -->
                                            <table align="left" class="column">
                                                <tr>
                                                    <td>				
                                                        <h5 class="">Restez connecté :</h5>
                                                        <p class="">
                                                            <a href="#" class="soc-btn fb">Facebook</a> 
                                                            <a href="#" class="soc-btn tw">Twitter</a> <a href="#" class="soc-btn gp">Google+</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table><!-- /column 1 -->	

                                                <!--- column 2 -->
                                            <table align="left" class="column">
                                                <tr>
                                                    <td>				
                                                        <h5 class="">Contact :</h5>												
                                                        <p>
                                                            Tél. : <strong>05.12.34.56.78</strong><br/>
                                                            E-mail : <strong><a href="contact@events.com">contact@events.com</a></strong>
                                                        </p>

                                                    </td>
                                                </tr>
                                            </table><!-- /column 2 -->
                                            <span class="clear"></span>	
                                        </td>
                                    </tr>
                                </table><!-- /social & contact -->
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        <td></td>
    </tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">

            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                            <p>
                                <a href="#">Mentions Légales</a> |
                                <a href="#">Protection de la vie privée</a> |
                                <a href="#"><unsubscribe>Se désinscrire</unsubscribe></a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /FOOTER -->

</body>
</html>