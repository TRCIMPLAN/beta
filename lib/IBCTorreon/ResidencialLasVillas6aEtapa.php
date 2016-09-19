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
 * Clase ResidencialLasVillas6aEtapa
 */
class ResidencialLasVillas6aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Villas 6A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-villas-6a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Villas 6A. Etapa de Torreón.';
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
                    'Población total' => 20,
                    'Porcentaje de población masculina' => 35.00,
                    'Porcentaje de población femenina' => 65.00,
                    'Porcentaje de población de 0 a 14 años' => 45.00,
                    'Porcentaje de población de 15 a 64 años' => 55.00,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.33,
                    'Porcentaje de población nacida en otro estado' => 0.00,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.44,
                    'Grado Promedio de Escolaridad masculina' => 16.00,
                    'Grado Promedio de Escolaridad femenina' => 13.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 31.25,
                    'Población Económicamente Activa masculina' => 80.00,
                    'Población Económicamente Activa femenina' => 20.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 80.00,
                    'Población Ocupada femenina' => 20.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 100.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 4,
                    'Hogares Jefatura masculina' => 100.00,
                    'Hogares Jefatura femenina' => 0.00,
                    'Ocupación por Vivienda' => 5.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 100.00,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 100.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
                )
            )
        );
    } // datos

} // Clase ResidencialLasVillas6aEtapa

?>
