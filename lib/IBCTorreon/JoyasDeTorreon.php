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
 * Clase JoyasDeTorreon
 */
class JoyasDeTorreon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Joyas De Torreon';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'joyas-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Joyas De Torreon de Torreón.';
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
                'Población total' => '1913',
                'Porcentaje de población masculina' => '48.98',
                'Porcentaje de población femenina' => '51.02',
                'Porcentaje de población de 0 a 14 años' => '35.70',
                'Porcentaje de población de 15 a 64 años' => '61.42',
                'Porcentaje de población de 65 y más años' => '2.25',
                'Porcentaje de población no especificada' => '0.63',
                'Fecundidad promedio' => '1.91',
                'Porcentaje de población nacida en otro estado' => '17.12',
                'Porcentaje de población con discapacidad' => '1.08'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.35',
                'Grado Promedio de Escolaridad masculina' => '10.37',
                'Grado Promedio de Escolaridad femenina' => '10.32'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.95',
                'Población Económicamente Activa masculina' => '65.73',
                'Población Económicamente Activa femenina' => '34.27',
                'Población Ocupada' => '93.49',
                'Población Ocupada masculina' => '64.58',
                'Población Ocupada femenina' => '35.42',
                'Población Desocupada' => '6.51',
                'Derechohabiencia' => '75.43'
            ),
            'Viviendas' => array(
                'Hogares' => '521',
                'Hogares Jefatura masculina' => '78.89',
                'Hogares Jefatura femenina' => '21.11',
                'Ocupación por Vivienda' => '3.67',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.85',
                'Viviendas con Automóvil' => '51.74',
                'Viviendas con Computadora' => '26.76',
                'Viviendas con Celular' => '84.84',
                'Viviendas con Internet' => '15.45'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '56',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.64',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '10.71',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.14',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '5.36'
            )
        );
    } // datos

} // Clase JoyasDeTorreon

?>
