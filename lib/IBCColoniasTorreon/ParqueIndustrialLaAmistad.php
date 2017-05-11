<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ParqueIndustrialLaAmistad
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
 * Clase ParqueIndustrialLaAmistad
 */
class ParqueIndustrialLaAmistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Parque Industrial La Amistad';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo                    = 'parque-industrial-la-amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Parque Industrial La Amistad en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 46,
                    'Porcentaje de población masculina' => 56.52,
                    'Porcentaje de población femenina' => 43.48,
                    'Porcentaje de población de 0 a 14 años' => 26.09,
                    'Porcentaje de población de 15 a 64 años' => 73.91,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 69.44,
                    'Población Económicamente Activa masculina' => 64.00,
                    'Población Económicamente Activa femenina' => 36.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 64.00,
                    'Población Ocupada femenina' => 36.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 82.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 12,
                    'Ocupación por Vivienda' => 3.83,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 75.00,
                    'Viviendas con Computadora' => 25.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5485948941054,
            'Centro longitud' => -103.369040172128
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

} // Clase ParqueIndustrialLaAmistad

?>
