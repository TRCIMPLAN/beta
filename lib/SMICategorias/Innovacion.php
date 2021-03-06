<?php
/**
 * TrcIMPLAN - SMI Categorías Innovación (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Innovacion
 */
class Innovacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Innovación';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'innovacion';
        $this->imagen           = '../imagenes/categorias/innovacion.jpg';
        $this->imagen_previa    = '../imagenes/categorias/innovacion.jpg';
        $this->imagen_id        = 'categorias-innovacion';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Innovación';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Centros de Investigación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">27.5685</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">23.2116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">13.0615</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">6.4458</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">23.1127</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Certificadas con ISO-9000 y 14000</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">10.6011</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">14.9306</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">61.3409</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">279.3651</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">21.4807</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas (según CNN Expansión)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.1205</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.3472</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.1640</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Patentes</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">5.6569</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">8.4125</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">8.4125</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">7.7962</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">5.3714</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/03/2014, CONACYT">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad (por cada 100mil de PEA)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Twitter como Proxy de Uso de Tecnologías de Información</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">8.2249</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.8366</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.1624</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">1.1490</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">5.4432</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase Innovacion

?>
