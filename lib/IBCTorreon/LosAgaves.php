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
 * Clase LosAgaves
 */
class LosAgaves extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Agaves';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-agaves';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Agaves de Torreón.';
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
                'Población total' => '43',
                'Porcentaje de población masculina' => '49.99',
                'Porcentaje de población femenina' => '50.01',
                'Porcentaje de población de 0 a 14 años' => '39.18',
                'Porcentaje de población de 15 a 64 años' => '52.81',
                'Porcentaje de población de 65 y más años' => '7.69',
                'Porcentaje de población no especificada' => '0.32',
                'Fecundidad promedio' => '3.02',
                'Porcentaje de población nacida en otro estado' => '21.30',
                'Porcentaje de población con discapacidad' => '2.44'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.24',
                'Grado Promedio de Escolaridad masculina' => '7.45',
                'Grado Promedio de Escolaridad femenina' => '6.97'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.00',
                'Población Económicamente Activa masculina' => '85.05',
                'Población Económicamente Activa femenina' => '14.95',
                'Población Ocupada' => '97.33',
                'Población Ocupada masculina' => '84.68',
                'Población Ocupada femenina' => '15.32',
                'Población Desocupada' => '2.67',
                'Derechohabiencia' => '73.92'
            ),
            'Viviendas' => array(
                'Hogares' => '12',
                'Hogares Jefatura masculina' => '91.64',
                'Hogares Jefatura femenina' => '8.36',
                'Ocupación por Vivienda' => '3.58',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '91.51',
                'Viviendas con Drenaje' => '57.97',
                'Viviendas con Televisión' => '99.21',
                'Viviendas con Automóvil' => '49.73',
                'Viviendas con Computadora' => '13.50',
                'Viviendas con Celular' => '76.82',
                'Viviendas con Internet' => '9.20'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00'
            )
        );
    } // datos

} // Clase LosAgaves

?>
