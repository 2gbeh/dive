<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("glob/Master.php");
include_once("inc/Bean-Master.php");
include_once("inc/INF-Acute2.php");
include_once("inc/Bean-Poll.php");
include_once("inc/Logic-Acute2.php");
$display = procForm($USER);
#var_dump($display);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = $menu1;
include_once("../../include/shared/Meta.php");
include_once("lib/@JRAD-CSS.php");
include_once("lib/@JRAD-JS.php");
include_once("lib/@JRAD-CSS-DRA.php");
include_once("glob/External.php");
?>
<link type="text/css" href="inc/Style-Master.css" rel="stylesheet" /> 
<link type="text/css" href="inc/Style-Poll.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS poll">
<?php include_once("glob/Header.php"); ?>
<main>
    <section class="">
    <table class="list">
    <tr>
        <th class="nowrap">
            This survey is conducted by HWP Labs and MautechInsight.com
        </th>
    </tr>
    <tr>
        <td class="notice">
			<?php echo $meta_desc; ?>
            <p></p>
            <div class="notice">
                <b>Disclaimer</b>: 
                Your <a>Personal Information</a> and <a>Political Party</a> 
                will not be captured in this survey.
            </div>
        </td>
    </tr>
    <tr>
        <th>
            <a href="<?php echo $page2; ?>" class="meta">
                <img src="../../media/icons/Trends.png" border="0" alt="View Analysis" title="View Analysis" />
            </a>
            <?php echo $meta_page; ?> 
        </th>
    </tr>    
	</table>
	</section>
    
    <section class="">
    <form <?php echo JRAD_FORM_POST(); ?>>
		<?php echo JRAD_DISPLAY_ERROR($display->err); ?>
        <table class="list">
        <?php echo $display->form; ?>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>
        </table>
    </form>
    </section>    
    
	<section>
    <table class="menu">    
    	<tr><th>Options</th></tr>
        <tr><td><a href="<?php echo $page2; ?>"><?php echo $menu2; ?></a></td></tr>
        <tr><td><a href="index.php">Main Menu</a></td></tr>
        <tr><td><a href="../../index.php">Home</a></td></tr>            
    </table>
    </section>     
</main>
<?php include_once("../../include/shared/Footer.php"); ?>
</body>
</html>

