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
 * Clase LaDaliaOriente
 */
class LaDaliaOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Dalia Oriente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-dalia-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Dalia Oriente de Torreón.';
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
                    'Población total' => 3863,
                    'Porcentaje de población masculina' => 48.25,
                    'Porcentaje de población femenina' => 51.75,
                    'Porcentaje de población de 0 a 14 años' => 25.52,
                    'Porcentaje de población de 15 a 64 años' => 71.65,
                    'Porcentaje de población de 65 y más años' => 2.51,
                    'Porcentaje de población no especificada' => 0.32,
                    'Fecundidad promedio' => 2.03,
                    'Porcentaje de población nacida en otro estado' => 14.24,
                    'Porcentaje de población con discapacidad' => 5.55,
                    'Porcentaje de población de 15 y más analfabeta' => 0.53,
                    'Porcentaje de población de 18 y más' => 67.05,
                    'Porcentaje de población de 18 y más postbásicos' => 29.12
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.90,
                    'Grado Promedio de Escolaridad masculina' => 10.10,
                    'Grado Promedio de Escolaridad femenina' => 9.72
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.48,
                    'Población Económicamente Activa masculina' => 63.68,
                    'Población Económicamente Activa femenina' => 36.32,
                    'Población Ocupada' => 90.91,
                    'Población Ocupada masculina' => 62.99,
                    'Población Ocupada femenina' => 37.01,
                    'Población Desocupada' => 9.09,
                    'Derechohabiencia' => 76.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 943,
                    'Hogares Jefatura masculina' => 74.13,
                    'Hogares Jefatura femenina' => 25.87,
                    'Ocupación por Vivienda' => 4.10,
                    'Viviendas con Electricidad' => 99.58,
                    'Viviendas con Agua' => 99.58,
                    'Viviendas con Drenaje' => 98.94,
                    'Viviendas con Televisión' => 99.15,
                    'Viviendas con Automóvil' => 50.58,
                    'Viviendas con Computadora' => 34.46,
                    'Viviendas con Celular' => 77.09,
                    'Viviendas con Internet' => 22.54
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 45,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.56,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 6.67,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.44
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

} // Clase LaDaliaOriente

?>
