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
 * Clase JoyasDelOriente
 */
class JoyasDelOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Joyas del Oriente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'joyas-del-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Joyas del Oriente de Torreón.';
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
                    'Población total' => 3037,
                    'Porcentaje de población masculina' => 49.98,
                    'Porcentaje de población femenina' => 50.02,
                    'Porcentaje de población de 0 a 14 años' => 35.78,
                    'Porcentaje de población de 15 a 64 años' => 61.98,
                    'Porcentaje de población de 65 y más años' => 1.15,
                    'Porcentaje de población no especificada' => 1.09,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población nacida en otro estado' => 15.57,
                    'Porcentaje de población con discapacidad' => 2.20,
                    'Porcentaje de población de 15 y más analfabeta' => 0.61,
                    'Porcentaje de población de 18 y más' => 58.39,
                    'Porcentaje de población de 18 y más postbásicos' => 29.42
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.56,
                    'Grado Promedio de Escolaridad masculina' => 10.67,
                    'Grado Promedio de Escolaridad femenina' => 10.46
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.76,
                    'Población Económicamente Activa masculina' => 66.37,
                    'Población Económicamente Activa femenina' => 33.63,
                    'Población Ocupada' => 92.95,
                    'Población Ocupada masculina' => 65.37,
                    'Población Ocupada femenina' => 34.63,
                    'Población Desocupada' => 7.05,
                    'Derechohabiencia' => 74.83
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 820,
                    'Hogares Jefatura masculina' => 80.61,
                    'Hogares Jefatura femenina' => 19.39,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 99.95,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 99.58,
                    'Viviendas con Televisión' => 99.09,
                    'Viviendas con Automóvil' => 54.31,
                    'Viviendas con Computadora' => 31.45,
                    'Viviendas con Celular' => 86.28,
                    'Viviendas con Internet' => 23.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 59,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.07,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.64,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.47,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 8.47,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.78
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
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase JoyasDelOriente

?>
