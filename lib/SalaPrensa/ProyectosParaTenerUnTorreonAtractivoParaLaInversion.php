<?php
/**
 * TrcIMPLAN Sitio Web - ProyectosParaTenerUnTorreonAtractivoParaLaInversion
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

namespace SalaPrensa;

/**
 * Clase ProyectosParaTenerUnTorreonAtractivoParaLaInversion
 */
class ProyectosParaTenerUnTorreonAtractivoParaLaInversion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Proyectos para tener un Torreón atractivo para la inversión';
    //  $this->autor                      = '';
        $this->fecha                      = '2017-01-19T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-01-19-proyectos-para-tener-un-torreon-atractivo-para-la-inversion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón presentó ante el Cabildo los avances en los distintos ejes en los que ha trabajado el Instituto.';
        $this->claves                     = 'IMPLAN, Torreon, Inversiones, Atraer';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ProyectosParaTenerUnTorreonAtractivoParaLaInversion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ProyectosParaTenerUnTorreonAtractivoParaLaInversion

?>