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
 * Clase SanAgustin2aEtapa
 */
class SanAgustin2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'San Agustin 2A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'san-agustin-2a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Agustin 2A. Etapa de Torreón.';
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
                    'Población total' => 351,
                    'Porcentaje de población masculina' => 50.14,
                    'Porcentaje de población femenina' => 49.86,
                    'Porcentaje de población de 0 a 14 años' => 35.90,
                    'Porcentaje de población de 15 a 64 años' => 61.82,
                    'Porcentaje de población de 65 y más años' => 2.28,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.98,
                    'Porcentaje de población nacida en otro estado' => 20.51,
                    'Porcentaje de población con discapacidad' => 7.11
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.28,
                    'Grado Promedio de Escolaridad masculina' => 9.39,
                    'Grado Promedio de Escolaridad femenina' => 9.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.29,
                    'Población Económicamente Activa masculina' => 59.88,
                    'Población Económicamente Activa femenina' => 40.12,
                    'Población Ocupada' => 88.42,
                    'Población Ocupada masculina' => 57.93,
                    'Población Ocupada femenina' => 42.07,
                    'Población Desocupada' => 11.58,
                    'Derechohabiencia' => 55.56
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 102,
                    'Hogares Jefatura masculina' => 63.73,
                    'Hogares Jefatura femenina' => 36.27,
                    'Ocupación por Vivienda' => 3.44,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 90.20,
                    'Viviendas con Televisión' => 97.06,
                    'Viviendas con Automóvil' => 53.88,
                    'Viviendas con Computadora' => 25.82,
                    'Viviendas con Celular' => 86.27,
                    'Viviendas con Internet' => 20.49
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Construcción',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 16.67
                )
            )
        );
    } // datos

} // Clase SanAgustin2aEtapa

?>
