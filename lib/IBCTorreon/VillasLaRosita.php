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
 * Clase VillasLaRosita
 */
class VillasLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:03';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas La Rosita de Torreón.';
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
                'Población total' => 231,
                'Porcentaje de población masculina' => 45.45,
                'Porcentaje de población femenina' => 54.55,
                'Porcentaje de población de 0 a 14 años' => 13.85,
                'Porcentaje de población de 15 a 64 años' => 64.50,
                'Porcentaje de población de 65 y más años' => 9.96,
                'Porcentaje de población no especificada' => 11.69,
                'Fecundidad promedio' => 1.51,
                'Porcentaje de población nacida en otro estado' => 19.48,
                'Porcentaje de población con discapacidad' => 3.77
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 14.75,
                'Grado Promedio de Escolaridad masculina' => 15.79,
                'Grado Promedio de Escolaridad femenina' => 13.94
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 54.95,
                'Población Económicamente Activa masculina' => 60.00,
                'Población Económicamente Activa femenina' => 40.00,
                'Población Ocupada' => 92.51,
                'Población Ocupada masculina' => 60.22,
                'Población Ocupada femenina' => 39.78,
                'Población Desocupada' => 7.49,
                'Derechohabiencia' => 71.43
            ),
            'Viviendas' => array(
                'Hogares' => 64,
                'Hogares Jefatura masculina' => 79.69,
                'Hogares Jefatura femenina' => 20.31,
                'Ocupación por Vivienda' => 3.61,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 96.88,
                'Viviendas con Automóvil' => 93.75,
                'Viviendas con Computadora' => 81.25,
                'Viviendas con Celular' => 93.75,
                'Viviendas con Internet' => 79.69
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 20,
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => 15.00,
                'Segunda actividad nombre' => 'Financieros y Seguros',
                'Segunda actividad porcentaje' => 15.00,
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => 10.00,
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => 10.00,
                'Quinta actividad nombre' => 'Comercio Menudeo',
                'Quinta actividad porcentaje' => 10.00
            )
        );
    } // datos

} // Clase VillasLaRosita

?>
