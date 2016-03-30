<?php
/**
 * TrcIMPLAN Sitio Web - Plantilla Config
 *
 * Copyright (C) 2016 IMPLAN Torreón
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace Configuracion;

/**
 * Clase PlantillaConfig
 */
class PlantillaConfig {

    public $sitio_titulo     = 'IMPLAN Torreón';
    public $sitio_url        = 'http://www.trcimplan.gob.mx'; // Sin diagonal al final
    public $rss              = 'rss.xml';
    public $favicon          = 'imagenes/favicon.png';
    public $propio_css       = 'css/trcimplan.css';
    public $en_raiz          = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $para_compartir   = false; // Si es verdadero pondrá los metas para tarjetas en Twitter/Facebook
    public $autor            = 'TrcIMPLAN Staff'; // Autor por defecto
    public $mensaje_oculto   = <<<FINAL
<!-- ===========================================================================================

        Instituto Municipal de Planeación y Competitividad de Torreón.

        Al usar, estudiar y copiar está aceptando los términos de uso de la información y del sitio web:
          http://www.trcimplan.gob.mx/terminos/terminos-informacion.html
          http://www.trcimplan.gob.mx/terminos/terminos-sitio.html
        El software que lo construye está bajo la licencia GPL versión 3. © 2014, 2015, 2016.
          Una copia está contenida en el archivo LICENCE al bajar desde GitHub.
          Plataforma de Conocimiento  https://github.com/guivaloz/PlataformaDeConocimiento
        Agradecemos y compartimos las tecnologías abiertas y gratuitas sobre las que se basa:
          Morris.js              https://morrisjs.github.io/morris.js/
          PHP                    http://php.net
          StartBootStrap         http://startbootstrap.com
          Twitter Bootstrap      http://getbootstrap.com
        Descargue, aprenda y colabore con este Software Libre:
          GitHub IMPLAN Torreón  https://github.com/TRCIMPLAN/trcimplan.github.io

     =========================================================================================== -->
FINAL;
    public $pie;
    protected $google_analytics = <<<FINAL
<script>
  // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58290501-1', 'auto');
  ga('send', 'pageview');
</script>
FINAL;
    protected $google_site_verification;
    protected $cabecera_bootstrap_css;
    protected $cabecera_font_awesome_css;
    protected $cabecera_google_fonts_css;
    protected $scripts_jquery_css;
    protected $scripts_bootstrap_js;

    /**
     * Constructor
     *
     * Twitter Bootstrap desde http://www.bootstrapcdn.com/
     * Font Awsome desde http://www.bootstrapcdn.com/fontawesome/
     * JQuery desde Google apis segun https://developers.google.com/speed/libraries/
     */
    public function __construct() {
        // Si cambia a false entonces NO dependará de Internet
        if (true) {
            // jQuery según https://developers.google.com/speed/libraries/#jquery
            $this->scripts_jquery_css        = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>';
            // Twitter Bootstrap según https://www.bootstrapcdn.com/
            $this->cabecera_bootstrap_css    = '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';
            $this->scripts_bootstrap_js      = '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';
            // Font Awesome según https://www.bootstrapcdn.com/
            $this->cabecera_font_awesome_css = '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">';
            // Google Fonts Questrial y Roboto Condensed
            $this->cabecera_google_fonts_css = '<link href="http://fonts.googleapis.com/css?family=Questrial|Roboto+Condensed:400,700" rel="stylesheet" type="text/css">';
        }
    } // constructor

} // Clase PlantillaConfig

?>
