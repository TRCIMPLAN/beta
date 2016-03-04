<?php
/**
 * TrcIMPLAN - Zona 30
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

namespace Proyectos;

/**
 * Clase Zona30
 */
class Zona30 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Zona 30';
        $this->autor           = 'Dirección de Proyectos Estratégicos';
        $this->fecha           = '2015-08-12T15:15';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'zona-30';
        $this->imagen          = 'zona-30/imagen.jpg';
        $this->imagen_previa   = 'zona-30/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Proyecto de regeneración del espacio público mediante una estrategia de pacificación de tránsito y los principios de visión cero, accesibilidad universal.';
        $this->claves          = 'IMPLAN, Torreon, Zona, 30, Centro, Espacio, Publico, Regeneracion, Vision Cero, Accesabilidad';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'proyectos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Banco de Proyectos > Proyectos por Ejes';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaArticle
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Proyectos/Zona30.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura', 'Vialidad');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase Zona30

?>
