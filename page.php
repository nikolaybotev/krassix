<?php
$tdir = esc_url( get_template_directory_uri() );
$sidebar_image_id = get_post_meta( $post->ID, 'image id', true );
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
  <table border="0" cellpadding="0" cellspacing="0" width="851">
    <!-- fwtable fwsrc="secondary_8.5.07.png" fwbase="secondary.gif" fwstyle="Dreamweaver" fwdocid = "754599977" fwnested="0" -->
    <tr>
      <td width="27"><img src="<?=$tdir ?>/images/spacer.gif" width="27" height="1" border="0" alt=""></td>
      <td width="199"><img src="<?=$tdir ?>/images/spacer.gif" width="199" height="1" border="0" alt=""></td>
      <td width="31"><img src="<?=$tdir ?>/images/spacer.gif" width="31" height="1" border="0" alt=""></td>
      <td width="593"><img src="<?=$tdir ?>/images/spacer.gif" width="593" height="1" border="0" alt=""></td>
      <td width="10"><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img name="secondary_header" src="<?=$tdir ?>/images/secondary_header.jpg" width="850" height="138" border="0" alt=""></td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="138" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3" bgcolor="#000000" class="whiteborderleft">&nbsp;</td>
      <td valign="top" bgcolor="#000000">
        <div class="widget_pages" style="padding-top:15px;">
          <ul>
            <li class="page_item"><a href="/">Home</a></li>
          </ul>
        </div>
        <?php  if ( is_active_sidebar( 'sidebar-1' ) ) { dynamic_sidebar( 'sidebar-1' ); } ?></td>
      <td rowspan="3" bgcolor="#000000">&nbsp;</td>
      <td rowspan="3" valign="top" bgcolor="#000000" class="whiteborderright">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodytext">
          <tr>
            <td valign="top" class="header"><strong><font color="#6699CC"><?php the_title(); ?></font></strong></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><p><?php the_post(); the_content(); ?></p></td>
          </tr>
        </table>
      </td>
      <td rowspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#000000">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#000000"><?php if (! empty( $sidebar_image_id ) ) : ?>
        <div align="center"><img src="<?php echo wp_get_attachment_url( $sidebar_image_id ); ?>" /></div><?php endif; ?></td>
    </tr>
    <tr>
      <td bgcolor="#000000" class="whiteborderleft">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td valign="top" bgcolor="#000000" class="whiteborderright">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" valign="top" background="<?=$tdir ?>/images/bbackgrnd.jpg" class="footer"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr valign="top">
          <td width="33%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="64%">&nbsp;</td>
        </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="quote">
            <p><strong>&quot;<?php echo esc_html( get_post_meta( $post->ID, 'quote', true ) ); ?>&quot;</strong></p></td>
        </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="bylines">
           <?php echo esc_html( get_post_meta( $post->ID, 'bylines', true ) ); ?></td>
        </tr>
      </table></td>
      <td><img src="<?=$tdir ?>/images/spacer.gif" width="1" height="115" border="0" alt=""></td>
    </tr>
  </table>
</div>

<?php wp_footer(); ?>

</body>
</html>
