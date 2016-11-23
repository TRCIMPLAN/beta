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
 * Clase FuentesDelSur
 */
class FuentesDelSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Fuentes del Sur';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'fuentes-del-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fuentes del Sur de Torreón.';
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
                    'Población total' => 4354,
                    'Porcentaje de población masculina' => 47.06,
                    'Porcentaje de población femenina' => 52.94,
                    'Porcentaje de población de 0 a 14 años' => 20.58,
                    'Porcentaje de población de 15 a 64 años' => 71.41,
                    'Porcentaje de población de 65 y más años' => 6.78,
                    'Porcentaje de población no especificada' => 1.23,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población nacida en otro estado' => 18.38,
                    'Porcentaje de población con discapacidad' => 4.53,
                    'Porcentaje de población de 15 y más analfabeta' => 0.11,
                    'Porcentaje de población de 18 y más' => 73.15,
                    'Porcentaje de población de 18 y más postbásicos' => 51.52
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.04,
                    'Grado Promedio de Escolaridad masculina' => 12.43,
                    'Grado Promedio de Escolaridad femenina' => 11.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.96,
                    'Población Económicamente Activa masculina' => 60.23,
                    'Población Económicamente Activa femenina' => 39.77,
                    'Población Ocupada' => 89.17,
                    'Población Ocupada masculina' => 58.80,
                    'Población Ocupada femenina' => 41.20,
                    'Población Desocupada' => 10.83,
                    'Derechohabiencia' => 76.80
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1210,
                    'Hogares Jefatura masculina' => 69.67,
                    'Hogares Jefatura femenina' => 30.33,
                    'Ocupación por Vivienda' => 3.60,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.59,
                    'Viviendas con Drenaje' => 99.75,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 74.30,
                    'Viviendas con Computadora' => 57.87,
                    'Viviendas con Celular' => 83.14,
                    'Viviendas con Internet' => 43.55
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 65,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.77,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.31,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.77,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 9.23
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
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase FuentesDelSur

?>
