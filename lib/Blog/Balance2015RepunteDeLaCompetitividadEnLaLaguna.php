<?php
/**
 * TrcIMPLAN Sitio Web - Balance 2015: repunte de la competitividad en La Laguna
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
 * Clase Balance2015RepunteDeLaCompetitividadEnLaLaguna
 */
class Balance2015RepunteDeLaCompetitividadEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Balance 2015: repunte de la competitividad en La Laguna';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2016-01-04T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'balance-2015-repunte-de-la-competitividad-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Indicadores sociales, económicos y demográficos muestran la tendencia de recuperación de la competitividad de la Zona Metropolitana.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad, Indicadores, Recuperacion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/Balance2015RepunteDeLaCompetitividadEnLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Competitividad', 'Mercados');
        $this->fuentes                    = array('CIDE', 'IMCO', 'INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase Balance2015RepunteDeLaCompetitividadEnLaLaguna

?>
