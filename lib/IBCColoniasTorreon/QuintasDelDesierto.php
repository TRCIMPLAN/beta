<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasDelDesierto
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace IBCColoniasTorreon;

/**
 * Clase QuintasDelDesierto
 */
class QuintasDelDesierto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Quintas del Desierto';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo                    = 'quintas-del-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Quintas del Desierto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Desagregación, Colonia, {$this->conglomerado->nombre}';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 0
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Comercio Mayoreo',
                    'Primer actividad porcentaje' => 28.57,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 28.57,
                    'Tercera actividad nombre' => 'Construcción',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Cuarta actividad porcentaje' => 14.29,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 14.29
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5961663344756,
            'Centro longitud' => -103.424968845764
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return '';
    } // resena

} // Clase QuintasDelDesierto

?>
