<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LuisHoracioSalinas
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
 * Clase LuisHoracioSalinas
 */
class LuisHoracioSalinas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Luis Horacio Salinas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo                    = 'luis-horacio-salinas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Luis Horacio Salinas en Torreón, Coahuila de Zaragoza, México.';
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
                    'Total Actividades Económicas' => 44,
                    'Primer actividad nombre' => 'Comercio Mayoreo',
                    'Primer actividad porcentaje' => 34.09,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 15.91,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 4.55
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
            'Centro latitud'  => 25.5326998729761,
            'Centro longitud' => -103.370847115524
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

} // Clase LuisHoracioSalinas

?>