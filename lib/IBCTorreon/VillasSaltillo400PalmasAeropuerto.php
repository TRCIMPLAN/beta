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
 * Clase VillasSaltillo400PalmasAeropuerto
 */
class VillasSaltillo400PalmasAeropuerto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Saltillo 400 - Palmas Aeropuerto';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-saltillo-400-palmas-aeropuerto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Saltillo 400 - Palmas Aeropuerto de Torreón.';
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
                    'Población total' => 367,
                    'Porcentaje de población masculina' => 50.68,
                    'Porcentaje de población femenina' => 49.32,
                    'Porcentaje de población de 0 a 14 años' => 25.61,
                    'Porcentaje de población de 15 a 64 años' => 66.49,
                    'Porcentaje de población de 65 y más años' => 3.00,
                    'Porcentaje de población no especificada' => 4.90,
                    'Fecundidad promedio' => 1.56,
                    'Porcentaje de población nacida en otro estado' => 16.62,
                    'Porcentaje de población con discapacidad' => 1.36,
                    'Porcentaje de población de 15 y más analfabeta' => 0.82,
                    'Porcentaje de población de 18 y más' => 60.76,
                    'Porcentaje de población de 18 y más postbásicos' => 46.32
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.63,
                    'Grado Promedio de Escolaridad masculina' => 12.91,
                    'Grado Promedio de Escolaridad femenina' => 12.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.55,
                    'Población Económicamente Activa masculina' => 60.37,
                    'Población Económicamente Activa femenina' => 39.63,
                    'Población Ocupada' => 92.15,
                    'Población Ocupada masculina' => 60.53,
                    'Población Ocupada femenina' => 39.47,
                    'Población Desocupada' => 7.85,
                    'Derechohabiencia' => 78.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 95,
                    'Hogares Jefatura masculina' => 77.89,
                    'Hogares Jefatura femenina' => 22.11,
                    'Ocupación por Vivienda' => 3.86,
                    'Viviendas con Electricidad' => 98.95,
                    'Viviendas con Agua' => 98.95,
                    'Viviendas con Drenaje' => 98.95,
                    'Viviendas con Televisión' => 98.95,
                    'Viviendas con Automóvil' => 81.05,
                    'Viviendas con Computadora' => 72.63,
                    'Viviendas con Celular' => 90.53,
                    'Viviendas con Internet' => 63.16
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
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
            )
        );
    } // datos

} // Clase VillasSaltillo400PalmasAeropuerto

?>
