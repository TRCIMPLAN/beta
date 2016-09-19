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
 * Clase SolDeOriente2aEtapa
 */
class SolDeOriente2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sol De Oriente 2A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sol-de-oriente-2a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sol De Oriente 2A. Etapa de Torreón.';
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
                    'Población total' => 1042,
                    'Porcentaje de población masculina' => 51.06,
                    'Porcentaje de población femenina' => 48.94,
                    'Porcentaje de población de 0 a 14 años' => 36.76,
                    'Porcentaje de población de 15 a 64 años' => 62.86,
                    'Porcentaje de población de 65 y más años' => 0.38,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.73,
                    'Porcentaje de población nacida en otro estado' => 15.16,
                    'Porcentaje de población con discapacidad' => 1.01
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.81,
                    'Grado Promedio de Escolaridad masculina' => 10.85,
                    'Grado Promedio de Escolaridad femenina' => 10.78
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.50,
                    'Población Económicamente Activa masculina' => 65.98,
                    'Población Económicamente Activa femenina' => 34.02,
                    'Población Ocupada' => 93.92,
                    'Población Ocupada masculina' => 65.85,
                    'Población Ocupada femenina' => 34.15,
                    'Población Desocupada' => 6.08,
                    'Derechohabiencia' => 78.98
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 293,
                    'Hogares Jefatura masculina' => 82.94,
                    'Hogares Jefatura femenina' => 17.06,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 99.66,
                    'Viviendas con Agua' => 99.66,
                    'Viviendas con Drenaje' => 99.66,
                    'Viviendas con Televisión' => 97.95,
                    'Viviendas con Automóvil' => 53.24,
                    'Viviendas con Computadora' => 35.39,
                    'Viviendas con Celular' => 87.03,
                    'Viviendas con Internet' => 23.93
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 36,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.22,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 5.56,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 5.56
                )
            )
        );
    } // datos

} // Clase SolDeOriente2aEtapa

?>
