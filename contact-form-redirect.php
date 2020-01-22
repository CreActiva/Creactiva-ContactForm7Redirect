<?php
/**
 * Plugin Name: Contact form REDIRECT
 * Plugin URI: https://soycreactivo.com
 * Description: Funciona para redireccionar el submit de un contact form.
 * Version: 1.0.0
 * Author: Miguel Peña
 * Text Domain: contact-form-REDIRECT
*/
defined ('ABSPATH') or die ('¡No HACKS Man!');//bloquear acceso por url
add_action( 'wp_footer', 'redirect_cf7' );
 function redirect_cf7() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
   if ( '1933' == event.detail.contactFormId ) { // Sends sumissions on form 947 to the first thank you page
    location = ' https://alechkaperez.com/pagina-de-gracias';
    }
}, false );
</script>
<?php
}