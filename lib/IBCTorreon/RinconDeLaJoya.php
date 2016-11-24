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
 * Clase RinconDeLaJoya
 */
class RinconDeLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón de La Joya';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-de-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón de La Joya de Torreón.';
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
                    'Población total' => 153,
                    'Porcentaje de población masculina' => 50.32,
                    'Porcentaje de población femenina' => 49.68,
                    'Porcentaje de población de 0 a 14 años' => 38.93,
                    'Porcentaje de población de 15 a 64 años' => 60.37,
                    'Porcentaje de población de 65 y más años' => 0.68,
                    'Porcentaje de población no especificada' => 0.02,
                    'Fecundidad promedio' => 1.94,
                    'Porcentaje de población nacida en otro estado' => 15.12,
                    'Porcentaje de población con discapacidad' => 4.60,
                    'Porcentaje de población de 15 y más analfabeta' => 0.26,
                    'Porcentaje de población de 18 y más' => 53.03,
                    'Porcentaje de población de 18 y más postbásicos' => 13.48
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.11,
                    'Grado Promedio de Escolaridad masculina' => 9.01,
                    'Grado Promedio de Escolaridad femenina' => 9.21
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.70,
                    'Población Económicamente Activa masculina' => 67.67,
                    'Población Económicamente Activa femenina' => 32.33,
                    'Población Ocupada' => 93.15,
                    'Población Ocupada masculina' => 67.15,
                    'Población Ocupada femenina' => 32.85,
                    'Población Desocupada' => 6.85,
                    'Derechohabiencia' => 64.40
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 44,
                    'Hogares Jefatura masculina' => 79.57,
                    'Hogares Jefatura femenina' => 20.43,
                    'Ocupación por Vivienda' => 3.48,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 34.33,
                    'Viviendas con Computadora' => 30.39,
                    'Viviendas con Celular' => 78.33,
                    'Viviendas con Internet' => 4.11
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 30.00,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5510476315806,
            'Centro longitud' => -103.316316189485
        );
    } // mapas

} // Clase RinconDeLaJoya

?>
