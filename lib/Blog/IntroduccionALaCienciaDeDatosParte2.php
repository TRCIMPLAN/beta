<?php
/**
 * TrcIMPLAN - Introducción a la Ciencia de Datos Parte 2
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase IntroduccionALaCienciaDeDatosParte2
 */
class IntroduccionALaCienciaDeDatosParte2 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Introducción a la Ciencia de Datos (parte 2)';
        $this->autor           = 'Ing. Guillermo Valdés Lozano';
        $this->fecha           = '2015-09-22T10:25';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'introduccion-a-la-ciencia-de-datos-parte-2';
        $this->imagen          = 'introduccion-a-la-ciencia-de-datos-parte-2/imagen.png';
        $this->imagen_previa   = 'introduccion-a-la-ciencia-de-datos-parte-2/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Ejemplo práctico de cómo bajar datos abiertos sobre escuelas y realizar un análisis de los mismos.';
        $this->claves          = 'IMPLAN, Torreon, Ciencia, Científico, Datos';
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
        $this->contenido_archivo_markdown = 'lib/Blog/IntroduccionALaCienciaDeDatosParte2.md';
        // Para el Organizador
        $this->categorias      = array('Gobierno Digital', 'Innovación');
        $this->fuentes         = array('SEP', 'Gobierno de la República');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase IntroduccionALaCienciaDeDatosParte2

?>
