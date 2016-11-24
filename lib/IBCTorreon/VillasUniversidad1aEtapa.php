<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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

namespace IBCTorreon;

/**
 * Clase VillasUniversidad1aEtapa
 */
class VillasUniversidad1aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Universidad 1a. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-universidad-1a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Universidad 1a. Etapa de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
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
                    'Población total' => 1356,
                    'Porcentaje de población masculina' => 48.23,
                    'Porcentaje de población femenina' => 51.77,
                    'Porcentaje de población de 0 a 14 años' => 37.68,
                    'Porcentaje de población de 15 a 64 años' => 60.55,
                    'Porcentaje de población de 65 y más años' => 1.55,
                    'Porcentaje de población no especificada' => 0.22,
                    'Fecundidad promedio' => 1.78,
                    'Porcentaje de población nacida en otro estado' => 17.16,
                    'Porcentaje de población con discapacidad' => 1.66,
                    'Porcentaje de población de 15 y más analfabeta' => 0.38,
                    'Porcentaje de población de 18 y más' => 57.37,
                    'Porcentaje de población de 18 y más postbásicos' => 25.07
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.11,
                    'Grado Promedio de Escolaridad masculina' => 10.28,
                    'Grado Promedio de Escolaridad femenina' => 9.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.90,
                    'Población Económicamente Activa masculina' => 63.49,
                    'Población Económicamente Activa femenina' => 36.51,
                    'Población Ocupada' => 94.91,
                    'Población Ocupada masculina' => 62.95,
                    'Población Ocupada femenina' => 37.05,
                    'Población Desocupada' => 5.09,
                    'Derechohabiencia' => 75.59
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 391,
                    'Hogares Jefatura masculina' => 73.91,
                    'Hogares Jefatura femenina' => 26.09,
                    'Ocupación por Vivienda' => 3.47,
                    'Viviendas con Electricidad' => 99.23,
                    'Viviendas con Agua' => 99.23,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.21,
                    'Viviendas con Automóvil' => 44.75,
                    'Viviendas con Computadora' => 24.13,
                    'Viviendas con Celular' => 80.82,
                    'Viviendas con Internet' => 12.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.37,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 15.79,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.79,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.26
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
            'Centro latitud'  => 25.5415365946156,
            'Centro longitud' => -103.320592315368
        );
    } // mapas

} // Clase VillasUniversidad1aEtapa

?>
