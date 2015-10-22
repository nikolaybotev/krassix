<?php
$tdir = esc_url( get_template_directory_uri() );
?>
<html <?php language_attributes(); ?>>
<head>
<title>Krassen Karagiozov</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-Type" content="text/html;">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?=$tdir ?>/kk_styles.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>

<body class="backgrndtile">

<div align="center">
  <table border="0" cellpadding="0" cellspacing="0" width="855">
    <!-- fwtable fwsrc="splash_8.5.07.png" fwbase="index.gif" fwstyle="Dreamweaver" fwdocid = "754599977" fwnested="0" -->
    <tr>
      <td width="31"><img src="<?=$tdir ?>/images/spacer.gif" width="31" height="1" border="0" alt=""></td>
      <td width="199"><img src="<?=$tdir ?>/images/spacer.gif" width="195" height="1" border="0" alt=""></td>
      <td width="624"><img src="<?=$tdir ?>/images/spacer.gif" width="624" height="1" border="0" alt=""></td>
      <td width="10"><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" valign="top" bgcolor="#000000" class="whiteborderleft"><img src="<?=$tdir ?>/images/index/kk_image.jpg" width="229" height="238"></td>
      <td><img src="<?=$tdir ?>/images/index/index_header.jpg" width="624" height="185" border="0" alt=""></td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="185" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="11" bgcolor="#000000" class="whiteborderright"><img src="<?=$tdir ?>/images/index/main_image.jpg" width="623" height="338"></td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="53" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="10" bgcolor="#000000" class="whiteborderleft">&nbsp;</td>
      <td rowspan="9" valign="top" bgcolor="#000000">
        <div class="widget_pages" style="padding-top:15px;">
          <ul>
            <li class="page_item"><a href="/">Home</a></li>
          </ul>
        </div>
        <?php  if ( is_active_sidebar( 'sidebar-1' ) ) { dynamic_sidebar( 'sidebar-1' ); } ?></td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="27" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="27" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
    </tr>
    <tr>
      <td bgcolor="#000000">&nbsp;</td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="20" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" background="<?=$tdir ?>/images/bbackgrnd.jpg" class="footer"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="33%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="64%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>

          <td valign="top" class="quote"><!-- InstanceBeginEditable name="Quote" -->
            <p><strong>&quot;Baritone Krassen Karagiozov (Guglielmo)... sang with ardor and dramatic flair.&quot;</strong></p>
          <!-- InstanceEndEditable --></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td valign="top" class="bylines"><!-- InstanceBeginEditable name="Bylines" -->Scott MacClelland, Metro San Jose, CA, February 10, 2009<!-- InstanceEndEditable --></td>
        </tr>
      </table></td>

      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="115" border="0" alt=""></td>
    </tr>
  </table>
</div>

<?php wp_footer(); ?>

</body>
</html>
