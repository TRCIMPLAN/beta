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
 * Clase QuintasDelNazas
 */
class QuintasDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Del Nazas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Del Nazas de Torreón.';
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
                'Población total' => '1671',
                'Porcentaje de población masculina' => '48.65',
                'Porcentaje de población femenina' => '51.35',
                'Porcentaje de población de 0 a 14 años' => '36.74',
                'Porcentaje de población de 15 a 64 años' => '60.20',
                'Porcentaje de población de 65 y más años' => '1.08',
                'Porcentaje de población no especificada' => '1.98',
                'Fecundidad promedio' => '1.72',
                'Porcentaje de población nacida en otro estado' => '18.25',
                'Porcentaje de población con discapacidad' => '2.06'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.35',
                'Grado Promedio de Escolaridad masculina' => '12.54',
                'Grado Promedio de Escolaridad femenina' => '12.16'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.15',
                'Población Económicamente Activa masculina' => '62.48',
                'Población Económicamente Activa femenina' => '37.52',
                'Población Ocupada' => '96.19',
                'Población Ocupada masculina' => '61.69',
                'Población Ocupada femenina' => '38.31',
                'Población Desocupada' => '3.81',
                'Derechohabiencia' => '79.23'
            ),
            'Viviendas' => array(
                'Hogares' => '458',
                'Hogares Jefatura masculina' => '81.66',
                'Hogares Jefatura femenina' => '18.34',
                'Ocupación por Vivienda' => '3.65',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.78',
                'Viviendas con Drenaje' => '99.78',
                'Viviendas con Televisión' => '99.56',
                'Viviendas con Automóvil' => '72.49',
                'Viviendas con Computadora' => '53.71',
                'Viviendas con Celular' => '91.05',
                'Viviendas con Internet' => '34.28'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '16',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '43.75',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '18.75',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '6.25',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '6.25'
            )
        );
    } // datos

} // Clase QuintasDelNazas

?>
