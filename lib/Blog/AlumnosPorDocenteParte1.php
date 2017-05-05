<?php
/**
 * TrcIMPLAN Sitio Web - Alumnos por docente, indicador clave para la mejora de la educación (primera parte)
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase AlumnosPorDocenteParte1
 */
class AlumnosPorDocenteParte1 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Alumnos por docente, indicador clave para la mejora de la educación (parte 1)';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-06-16T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'alumnos-por-docente-parte-1';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Estudio sobre si debe considerarse la cantidad de alumnos por profesor como un factor en la mejora educativa.';
        $this->claves                     = 'IMPLAN, Torreon, Alumnos, Docente, Educacion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/AlumnosPorDocenteParte1.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array('Banco Mundial', 'SEP', 'IMCO', 'INEGI');
        $this->regiones                   = array('Torreón', 'Coahuila', 'Nacional');
    } // constructor

} // Clase AlumnosPorDocenteParte1

?>
