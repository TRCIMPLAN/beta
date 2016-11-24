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
 * Clase EjidoSanAntonioDeLosBravos
 */
class EjidoSanAntonioDeLosBravos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido San Antonio de Los Bravos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-san-antonio-de-los-bravos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido San Antonio de Los Bravos de Torreón.';
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
                    'Población total' => 2428,
                    'Porcentaje de población masculina' => 48.64,
                    'Porcentaje de población femenina' => 51.36,
                    'Porcentaje de población de 0 a 14 años' => 28.28,
                    'Porcentaje de población de 15 a 64 años' => 66.23,
                    'Porcentaje de población de 65 y más años' => 5.48,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población nacida en otro estado' => 8.84,
                    'Porcentaje de población con discapacidad' => 7.51,
                    'Porcentaje de población de 15 y más analfabeta' => 1.60,
                    'Porcentaje de población de 18 y más' => 65.40,
                    'Porcentaje de población de 18 y más postbásicos' => 21.77
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.89,
                    'Grado Promedio de Escolaridad masculina' => 8.99,
                    'Grado Promedio de Escolaridad femenina' => 8.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 66.81,
                    'Población Económicamente Activa femenina' => 33.19,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 64.39,
                    'Población Ocupada femenina' => 35.61,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 75.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 590,
                    'Hogares Jefatura masculina' => 76.27,
                    'Hogares Jefatura femenina' => 23.73,
                    'Ocupación por Vivienda' => 4.12,
                    'Viviendas con Electricidad' => 99.55,
                    'Viviendas con Agua' => 99.55,
                    'Viviendas con Drenaje' => 97.68,
                    'Viviendas con Televisión' => 98.69,
                    'Viviendas con Automóvil' => 44.13,
                    'Viviendas con Computadora' => 31.06,
                    'Viviendas con Celular' => 68.18,
                    'Viviendas con Internet' => 21.18
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 31,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.39,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.13,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 9.68,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.45,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 6.45
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
            'Centro latitud'  => 25.552791628889,
            'Centro longitud' => -103.38255814488
        );
    } // mapas

} // Clase EjidoSanAntonioDeLosBravos

?>
