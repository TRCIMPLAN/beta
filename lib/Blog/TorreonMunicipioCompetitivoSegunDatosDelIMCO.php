<?php
/**
 * TrcIMPLAN Sitio Web - Torreón, municipio competitivo según datos del IMCO
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace Blog;

/**
 * Clase TorreonMunicipioCompetitivoSegunDatosDelIMCO
 */
class TorreonMunicipioCompetitivoSegunDatosDelIMCO extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Torreón, municipio competitivo según datos del IMCO';
        $this->autor           = 'Lic. Rodrigo González Morales';
        $this->fecha           = '2016-11-01T12:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'torreon-municipio-competitivo-segun-datos-del-imco';
        $this->imagen          = 'torreon-municipio-competitivo-segun-datos-del-imco/imagen.jpg';
        $this->imagen_previa   = 'torreon-municipio-competitivo-segun-datos-del-imco/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'De acuerdo con los datos y metodología del IMCO, comparando los 375 municipios de las zonas metropolitanas del país, el municipio de Torreón ocupa el lugar 32.';
        $this->claves          = 'IMPLAN, Torreon, ';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonMunicipioCompetitivoSegunDatosDelIMCO.md';
        // Para el Organizador
        $this->categorias      = array('Competitividad', 'Índice de Competitividad Urbana');
        $this->fuentes         = array('IMCO', 'IMPLAN');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros');
    } // constructor

} // Clase TorreonMunicipioCompetitivoSegunDatosDelIMCO

?>
