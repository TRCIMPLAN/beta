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
 * Clase CampoMilitar
 */
class CampoMilitar extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Campo Militar';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'campo-militar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Campo Militar de Torreón.';
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
                    'Población total' => 406,
                    'Porcentaje de población masculina' => 54.19,
                    'Porcentaje de población femenina' => 45.81,
                    'Porcentaje de población de 0 a 14 años' => 35.71,
                    'Porcentaje de población de 15 a 64 años' => 63.05,
                    'Porcentaje de población de 65 y más años' => 1.23,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.85,
                    'Porcentaje de población nacida en otro estado' => 71.91,
                    'Porcentaje de población con discapacidad' => 3.94
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.98,
                    'Grado Promedio de Escolaridad masculina' => 9.52,
                    'Grado Promedio de Escolaridad femenina' => 8.58
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.47,
                    'Población Económicamente Activa masculina' => 86.52,
                    'Población Económicamente Activa femenina' => 13.48,
                    'Población Ocupada' => 97.08,
                    'Población Ocupada masculina' => 86.13,
                    'Población Ocupada femenina' => 13.87,
                    'Población Desocupada' => 2.92,
                    'Derechohabiencia' => 95.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 115,
                    'Hogares Jefatura masculina' => 96.52,
                    'Hogares Jefatura femenina' => 3.48,
                    'Ocupación por Vivienda' => 3.53,
                    'Viviendas con Electricidad' => 98.26,
                    'Viviendas con Agua' => 96.52,
                    'Viviendas con Drenaje' => 98.26,
                    'Viviendas con Televisión' => 98.26,
                    'Viviendas con Automóvil' => 58.07,
                    'Viviendas con Computadora' => 46.64,
                    'Viviendas con Celular' => 87.83,
                    'Viviendas con Internet' => 17.84
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Gubernamentales',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase CampoMilitar

?>
