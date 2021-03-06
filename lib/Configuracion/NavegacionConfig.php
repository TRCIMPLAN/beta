<?php
/**
 * TrcIMPLAN Sitio Web - Navegacion Config
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
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo = 'IMPLAN Torreón';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico-gris.png';
    protected $opciones     = array(
        'Análisis Publicados' => 'blog/index.html',
        'Indicadores' => array(
            'Indicadores > Introducción al S.M.I.'    => 'smi/introduccion.html',
            'Indicadores > Indicadores por Categoría' => 'indicadores-categorias/index.html',
            'Indicadores > Indicadores por Región'    => 'smi/por-region.html',
            'Indicadores > Georreferenciados'         => 'smi-georreferenciados/index.html',
            'Indicadores > Datos Abiertos'            => 'smi/datos-abiertos.html'),
        'IBC Torreón' => array(
            'IBC Torreón > Introducción'        => '#',
            'IBC Torreón > Listado de Colonias' => 'ibc-torreon/index.html',
            'IBC Torreón > Mapa de Colonias'    => '#',
            'IBC Torreón > Datos Abiertos'      => '#'),
        'Información Geográfica' => array(
            'Información Geográfica > Introducción al S.I.G.'  => 'sig/introduccion.html',
            'Información Geográfica > Planes'                  => 'sig-planes/index.html',
            'Información Geográfica > S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            'Información Geográfica > Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html'),
        'Plan Estratégico Metropolitano' => array(
            'Plan Estratégico Metropolitano > Qué es el P.E.M.'        => 'plan-estrategico-metropolitano/introduccion.html',
            'Plan Estratégico Metropolitano > Metodología'             => 'plan-estrategico-metropolitano/metodologia.html',
            'Plan Estratégico Metropolitano > Descripción del Proceso' => 'plan-estrategico-metropolitano/descripcion-del-proceso.html'),
        'Banco de Proyectos' => array(
            'Banco de Proyectos > Proyectos por Ejes' => 'proyectos/proyectos-por-ejes.html',
            'Banco de Proyectos > Cartera P.E.M.'     => 'proyectos/cartera-pem.html',
            'Banco de Proyectos > Planes y Programas' => 'proyectos/planes-y-programas.html'),
        'Investigaciones' => 'investigaciones/index.html',
        'Institucional' => array(
            'Institucional > Visión / Misión'        => 'institucional/vision-mision.html',
            'Institucional > Mensaje del Director'   => 'institucional/mensaje-director.html',
            'Institucional > Quienes Somos'          => 'autores/index.html',
            'Institucional > Estructura Orgánica'    => 'institucional/estructura-organica.html',
            'Institucional > Modelo Operativo Univ.' => 'institucional/modelo-operativo-universal.html',
            'Institucional > Reglamentos'            => 'institucional/reglamentos.html',
            'Institucional > Información Financiera' => 'institucional/informacion-financiera.html',
            'Institucional > Transparencia'          => 'http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178'),
        'Consejo Directivo' => 'consejo-directivo/integrantes.html',
        'Sala de Prensa'    => 'sala-prensa/index.html',
        'Preguntas Frecuentes' => 'preguntas-frecuentes/preguntas-frecuentes.html',
        'Términos de Uso' => array(
            'Términos de Uso > De la información'   => 'terminos/terminos-informacion.html',
            'Términos de Uso > Del sitio web'       => 'terminos/terminos-sitio.html',
            'Términos de Uso > Aviso de Privacidad' => 'terminos/privacidad.html'),
        'Contacto' => array(
            'Contacto > Medios de contacto'        => 'contacto/contacto.html',
            'Contacto > Comentarios y Sugerencias' => '#'));
    static public $iconos = array(
        'Análisis Publicados'             => 'fa fa-lightbulb-o',
        'Indicadores'                     => 'fa fa-area-chart',
            'Introducción al S.M.I.'      => 'fa fa-file-text-o',
            'Indicadores por Categoría'   => 'fa fa-th-list',
            'Indicadores por Región'      => 'fa fa-table',
            'Georreferenciados'           => 'fa fa-map-marker',
        'IBC Torreón'                     => 'fa fa-puzzle-piece',
        'Información Geográfica'          => 'fa fa-map-marker',
            'Introducción al S.I.G.'      => 'fa fa-file-text-o',
            'Planes'                      => 'fa fa-server',
            'S.I.G. de Torreón'           => 'fa fa-map-marker',
            'Zonificación Secundaria'     => 'fa fa-map-marker',
        'Plan Estratégico Metropolitano'  => 'fa fa-sun-o',
            'Conoce el Plan'              => 'fa fa-file-text-o',
            'Todas las Mesas'             => 'fa fa-calendar',
            'Participación Ciudadana'     => 'fa fa-external-link',
        'Proyectos Estratégicos'          => 'fa fa-check-square',
            'Banco de Proyectos'          => 'fa fa-check-square',
            'Todos los Proyectos'         => 'fa fa-check-square',
        'Institucional'                   => 'fa fa-building-o',
            'Transparencia'               => 'fa fa-external-link',
        'Consejo Directivo'               => 'fa fa-users',
        'Sala de Prensa'                  => 'fa fa-comments',
        'Preguntas Frecuentes'            => 'fa fa-question',
        'Términos de Uso'                 => 'fa fa-files-o',
        'Contacto'                        => 'fa fa-phone',
            'Medios de contacto'          => 'fa fa-phone',
            'Comentarios y Sugerencias'   => 'fa fa-external-link');
    protected $buscador_html = <<<FINAL
          <form method="get" id="searchbox_015475140351266618625:04hulmghdys" action="http://www.trcimplan.gob.mx/buscador-resultados.html">
            <input type="hidden" value="015475140351266618625:04hulmghdys" name="cx">
            <input type="hidden" value="FORID:11" name="cof">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Buscar..." value="" name="s" id="s">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
FINAL;
    protected $buscador_js = "";

} // Clase NavegacionConfig

?>
