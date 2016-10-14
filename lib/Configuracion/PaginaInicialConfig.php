<?php
/**
 * TrcIMPLAN Sitio Web - Pagina Inicial Config
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
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // protected $google_analytics;
    // protected $google_site_verification;
    // protected $cabecera_bootstrap_css;
    // protected $cabecera_font_awesome_css;
    // protected $cabecera_google_fonts_css;
    // protected $scripts_jquery_css;
    // protected $scripts_bootstrap_js;
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $archivo_ruta;
    // public $imagen_previa_ruta;
    // public $icono;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;
    // public $contenido_en_renglon;
    public $imprentas;                        // Arreglo con rutas a las clases de ImprentaPublicaciones, es usado en ultimas_publicaciones
    const   ULTIMAS_PUBLICACIONES_LIMITE = 6; // Cantidad límite de últimas publicaciones

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        // Propiedades para la página inicial
        $this->en_raiz                  = true;
        $this->titulo                   = 'IMPLAN Torreón';
        $this->autor                    = 'IMPLAN Torreón';
        $this->descripcion              = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.';
        $this->claves                   = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio               = '.';
        $this->archivo_ruta             = "index.html";
        $this->imagen_previa_ruta       = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon     = false;
        $this->google_site_verification = '<meta name="google-site-verification" content="Hz-cnyG17CBaAXopvSHn7J81Za2cmg4dvnRh1VJE7ks">';
    } // constructor

    /**
     * Organizacion
     */
    protected function organizacion() {
        // Encabezado
        $organizacion                 = new \PaginaInicial\Organizacion();
        $organizacion->name           = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $organizacion->description    = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.';
        $organizacion->image          = 'imagenes/implan-logo.png';
        $organizacion->is_article     = false;
        $organizacion->big_heading    = true;
        $organizacion->headline_style = 'organizacion';
        // Acumular
        $this->contenido[] = '  <section id="organizacion">';
    //~ $this->contenido[] = '    <a href="consejo-directivo/convocatoria-2015.html"><img class="banner" src="consejo-directivo/convocatoria-2015/banner.jpg" alt="Banner"></a>';
        $this->contenido[] = '    <img class="banner" src="imagenes/banner-implan.jpg" alt="Banner">';
        $this->contenido[] = $organizacion->html();
        $this->contenido[] = '  </section>';
    } // organizacion

    /**
     * Destacado
     */
    protected function destacado() {
        // SMI
        $smi              = new \PaginaInicial\Destacado();
        $smi->name        = 'Sistema Metropolitano de Indicadores';
        $smi->description = 'Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.';
        $smi->image       = 'servicio-smi';
        $smi->url         = 'indicadores-categorias/index.html';
        $smi->botones     = array(
            '<i class="fa fa-th-list"></i> Por Categoría'        => 'indicadores-categorias/index.html',
            '<i class="fa fa-table"></i> Por Región'             => 'smi/por-region.html',
            '<i class="fa fa-map-marker"></i> Georreferenciados' => 'smi-georreferenciados/index.html');
        // SIG
        $sig              = new \PaginaInicial\Destacado();
        $sig->name        = 'Sistema de Información Geográfica';
        $sig->description = 'La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.';
        $sig->image       = 'servicio-sig';
        $sig->url         = 'sig-mapas-torreon/index.html';
        $sig->botones     = array(
            '<i class="fa fa-server"></i> Planes'                      => 'sig-planes/index.html',
            '<i class="fa fa-map-marker"></i> S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            '<i class="fa fa-map-marker"></i> Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html');
        // PEM
        $pem              = new \PaginaInicial\Destacado();
        $pem->name        = 'Plan Estratégico Metropolitano';
        $pem->description = 'Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.';
        $pem->image       = 'servicio-pem';
        $pem->url         = 'plan-estrategico-metropolitano/index.html';
        $pem->botones     = array(
            '<i class="fa fa-file-text-o"></i> Conoce el Plan' => 'plan-estrategico-metropolitano/introduccion.html',
            '<i class="fa fa-calendar"></i> Todas las Mesas'   => 'plan-estrategico-metropolitano/index.html');
        // Acumular sección destacado
        $this->contenido[]  = '  <section id="destacado">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $smi->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $sig->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $pem->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // destacado

    /**
     * Aviso
     */
    protected function aviso() {
        $this->contenido[] = '    <div class="panel" style="margin:4px;border:2px solid #FF3300;">';
        $this->contenido[] = '        <div class="panel-heading" style="background-color:#FFFFFF">';
        $this->contenido[] = '            <h2>Elección de Consejeros de Representación Sectorial 2015</h2>';
        $this->contenido[] = '            <div>Resultado del proceso de elección de los ciudadanos que van a formar parte del Consejo Directivo como Consejeros de Representación Sectorial en el IMPLAN Torreón.</div>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '        <a href="consejo-directivo/eleccion-de-consejeros-de-representacion-sectorial-2015.html">';
        $this->contenido[] = '            <div class="panel-footer" style="background-color:#CACACA">';
        $this->contenido[] = '                <span class="pull-left">Ir a la página</span>';
        $this->contenido[] = '                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>';
        $this->contenido[] = '                <div class="clearfix"></div>';
        $this->contenido[] = '            </div>';
        $this->contenido[] = '        </a>';
        $this->contenido[] = '    </div>';
    } // aviso

    /**
     * Últimas publicaciones
     */
    protected function ultimas_publicaciones() {
        // Iniciar concentrador
        $concentrador          = new \Base\VinculosDetallados();
        $concentrador->en_raiz = true;
        // Iniciar recolector
        $recolector = new \Base\Recolector();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Ordenar publicaciones por tiempo, de la más nueva a la más antigua
        $recolector->ordenar_por_tiempo_desc();
        // Bucle por las publicaciones
        foreach ($recolector->obtener_publicaciones(self::ULTIMAS_PUBLICACIONES_LIMITE) as $publicacion) {
            // Iniciar vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = true;
            $vinculo->en_otro = false;
            $vinculo->definir_con_publicacion($publicacion);
            // Agregar
            $concentrador->agregar($vinculo);
        }
        // Acumular Últimas Publicaciones y Twitter Timeline
        $this->contenido[]  = '  <section id="ultimas-publicaciones">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-md-8">';
        $this->contenido[]  = '        <div class="ultimas">';
        $this->contenido[]  = '          <h2>Últimas publicaciones</h2>';
        $this->contenido[]  = $concentrador->html();
        $this->contenido[]  = '          <div class="text-center">';
        $this->contenido[]  = "            <a href=\"blog/index.html\" class=\"btn btn-default\" role=\"button\">Todos los Análisis Publicados</a>";
        $this->contenido[]  = '          </div>';
        $this->contenido[]  = '        </div>';
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-md-4">';
        $this->contenido[]  = '        <div class="red-social-twitter">';
        $this->contenido[]  = '          <a class="twitter-timeline" height="720px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
        $this->contenido[]  = '        </div>';
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
        // Acumular javascipt del Twitter Timeline
        $this->javascript[] = '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");';
    } // ultimas_publicaciones

    /**
     * Categorías
     */
    protected function categorias() {
        // Cargar configuración de las categorías
        $categorias_config = new CategoriasConfig();
        // Iniciar concentrador
        $concentrador = new \Base\VinculosCompactos();
        // Inicializar el recolector
        $recolector = new \Base\RecolectorCategorias();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Bucle por todas las categorias
        foreach ($recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                // Sí está definido
                $categoria->en_raiz = true;
                $categoria->en_otro = false;
                $vinculo            = new \Base\Vinculo($categoria->nombre, $categoria->url(), $categoria->icono, '', $categoria->descripcion);
                $vinculo->en_raiz   = true;
                $vinculo->en_otro   = false;
                $concentrador->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                // No está definido
                $vinculo          = new \Base\Vinculo($nombre, sprintf('%s.html', \Base\Funciones::caracteres_para_web($nombre)), 'unknown', \Base\ImprentaCategorias::CATEGORIAS_DIR);
                $vinculo->en_raiz = true;
                $vinculo->en_otro = false;
                $concentrador->agregar($vinculo);
            }
        }
        // Poner
        $this->contenido[] = '  <section id="categorias">';
        $this->contenido[] = '    <h2>Categorías</h2>';
        $this->contenido[] = sprintf('    <p>Explore por medio de las categorías que clasifican las %s publicaciones en este sitio web.</p>', number_format($recolector->obtener_cantidad_de_publicaciones(), 0, ".", ","));
        $this->contenido[] = $concentrador->html();
        $this->contenido[] = '  </section>';
    } // categorias

    /**
     * Mapa
     */
    protected function mapa() {
        // Mapa
        $servicios     = new \PaginaInicial\Mapa('SERVICIOS', array(
            'Análisis Publicados'               => 'blog/index.html',
            'Indicadores'                       => 'indicadores-categorias/index.html',
            'Indicadores Básicos por Colonias'  => 'ibc-torreon/index.html',
            'Información Geográfica'            => 'sig-mapas-torreon/index.html',
            'Plan Estratégico Metropolitano'    => 'plan-estrategico-metropolitano/index.html',
            'Banco de Proyectos'                => 'proyectos/index.html'));
        $institucional = new \PaginaInicial\Mapa('INSTITUCIONAL', array(
            'Visión / Misión'                   => 'institucional/vision-mision.html',
            'Mensaje del Director'              => 'institucional/mensaje-director.html',
            'Quienes Somos'                     => 'autores/index.html',
            'Estructura Orgánica'               => 'institucional/estructura-organica.html',
            'Reglamentos'                       => 'institucional/reglamentos.html',
            'Información Financiera'            => 'institucional/informacion-financiera.html',
            'Consejo Directivo'                 => 'consejo-directivo/integrantes.html'));
        $interaccion   = new \PaginaInicial\Mapa('INTERACCION', array(
            'Contacto'                          => 'contacto/contacto.html',
            'Preguntas Frecuentes'              => 'preguntas-frecuentes/preguntas-frecuentes.html',
            'Sala de Prensa'                    => 'sala-prensa/index.html',
            'Quejas y Sugerencias'              => 'http://goo.gl/forms/1rdX4X128PpMOif73'));
        $legal         = new \PaginaInicial\Mapa('LEGAL', array(
            'Transparencia'                     => 'http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178',
            'Términos de Uso de la Información' => 'terminos/terminos-informacion.html',
            'Términos de Uso del Sitio Web'     => 'terminos/terminos-sitio.html',
            'Aviso de Privacidad'               => 'terminos/privacidad.html'));
        // Mapa grande
        $this->contenido[] = '  <section id="mapa">';
        $this->contenido[] = '    <div class="row">';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $servicios->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $institucional->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $interaccion->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $legal->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '    </div>';
        $this->contenido[] = '  </section>';
        // Mapa chico
        $this->contenido[] = '  <section id="mapa-chico">';
        $this->contenido[] = $servicios->chico_html();
        $this->contenido[] = $institucional->chico_html();
        $this->contenido[] = $interaccion->chico_html();
        $this->contenido[] = $legal->chico_html();
        $this->contenido[] = '  </section>';
    } // mapa

    /**
     * Redes
     */
    protected function redes() {
        $this->contenido[] = '  <section id="redes">';
        $this->contenido[] = '    <div class="row">';
        $this->contenido[] = '      <div class="col-md-8">';
        $this->contenido[] = '        <a href="index.html"><img class="img-responsive logotipo" src="imagenes/implan-transparente-gris.png" alt="IMPLAN Torreón"></a>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-md-4">';
        $this->contenido[] = '        <div class="pull-right redes-sociales">';
        $this->contenido[] = '          <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-google-plus-square" href="https://plus.google.com/106220426241750550649" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-rss-square" href="rss.xml"></a>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '    </div>';
        $this->contenido[] = '  </section>';
    } // redes

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Elaborar secciones
        $this->organizacion();
        $this->destacado();
    //  $this->aviso();
        $this->ultimas_publicaciones();
        $this->categorias();
        $this->mapa();
        $this->redes();
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>
