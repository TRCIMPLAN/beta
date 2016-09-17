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
 * Clase VillasSaltillo400
 */
class VillasSaltillo400 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Saltillo 400';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:03';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-saltillo-400';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Saltillo 400 de Torreón.';
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
                'Población total' => 395,
                'Porcentaje de población masculina' => 51.14,
                'Porcentaje de población femenina' => 48.86,
                'Porcentaje de población de 0 a 14 años' => 25.32,
                'Porcentaje de población de 15 a 64 años' => 66.58,
                'Porcentaje de población de 65 y más años' => 2.78,
                'Porcentaje de población no especificada' => 5.32,
                'Fecundidad promedio' => 1.57,
                'Porcentaje de población nacida en otro estado' => 16.20,
                'Porcentaje de población con discapacidad' => 1.27
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 12.64,
                'Grado Promedio de Escolaridad masculina' => 12.95,
                'Grado Promedio de Escolaridad femenina' => 12.36
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 56.45,
                'Población Económicamente Activa masculina' => 60.57,
                'Población Económicamente Activa femenina' => 39.43,
                'Población Ocupada' => 91.36,
                'Población Ocupada masculina' => 60.25,
                'Población Ocupada femenina' => 39.75,
                'Población Desocupada' => 8.64,
                'Derechohabiencia' => 79.24
            ),
            'Viviendas' => array(
                'Hogares' => 102,
                'Hogares Jefatura masculina' => 77.45,
                'Hogares Jefatura femenina' => 22.55,
                'Ocupación por Vivienda' => 3.87,
                'Viviendas con Electricidad' => 99.02,
                'Viviendas con Agua' => 99.02,
                'Viviendas con Drenaje' => 99.02,
                'Viviendas con Televisión' => 99.02,
                'Viviendas con Automóvil' => 82.35,
                'Viviendas con Computadora' => 73.53,
                'Viviendas con Celular' => 90.20,
                'Viviendas con Internet' => 63.73
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 10,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 40.00,
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => 30.00,
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => 20.00,
                'Cuarta actividad nombre' => 'Financieros y Seguros',
                'Cuarta actividad porcentaje' => 10.00
            )
        );
    } // datos

} // Clase VillasSaltillo400

?>
