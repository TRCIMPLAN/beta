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
 * Clase ResidencialLasVillas3aEtapa
 */
class ResidencialLasVillas3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Villas 3A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-villas-3a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Villas 3A. Etapa de Torreón.';
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
                    'Población total' => 69,
                    'Porcentaje de población masculina' => 50.72,
                    'Porcentaje de población femenina' => 49.28,
                    'Porcentaje de población de 0 a 14 años' => 34.78,
                    'Porcentaje de población de 15 a 64 años' => 52.17,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 13.05,
                    'Fecundidad promedio' => 1.61,
                    'Porcentaje de población nacida en otro estado' => 21.74,
                    'Porcentaje de población con discapacidad' => 0.92
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.28,
                    'Grado Promedio de Escolaridad masculina' => 15.26,
                    'Grado Promedio de Escolaridad femenina' => 13.55
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.62,
                    'Población Económicamente Activa masculina' => 75.00,
                    'Población Económicamente Activa femenina' => 25.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 75.00,
                    'Población Ocupada femenina' => 25.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 73.91
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 14,
                    'Hogares Jefatura masculina' => 100.00,
                    'Hogares Jefatura femenina' => 0.00,
                    'Ocupación por Vivienda' => 4.93,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 92.86,
                    'Viviendas con Celular' => 92.86,
                    'Viviendas con Internet' => 92.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
                )
            )
        );
    } // datos

} // Clase ResidencialLasVillas3aEtapa

?>
