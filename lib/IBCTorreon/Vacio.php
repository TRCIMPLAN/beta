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
 * Clase Vacio
 */
class Vacio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Vacio';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'vacio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Vacio de Torreón.';
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
                    'Población total' => 9,
                    'Porcentaje de población masculina' => 48.68,
                    'Porcentaje de población femenina' => 51.32,
                    'Porcentaje de población de 0 a 14 años' => 25.56,
                    'Porcentaje de población de 15 a 64 años' => 71.71,
                    'Porcentaje de población de 65 y más años' => 2.15,
                    'Porcentaje de población no especificada' => 0.58,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población nacida en otro estado' => 14.24,
                    'Porcentaje de población con discapacidad' => 6.16,
                    'Porcentaje de población de 15 y más analfabeta' => 1.09,
                    'Porcentaje de población de 18 y más' => 56.23,
                    'Porcentaje de población de 18 y más postbásicos' => 26.02
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.26,
                    'Grado Promedio de Escolaridad masculina' => 8.03,
                    'Grado Promedio de Escolaridad femenina' => 8.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 34.96,
                    'Población Económicamente Activa masculina' => 68.42,
                    'Población Económicamente Activa femenina' => 31.58,
                    'Población Ocupada' => 89.40,
                    'Población Ocupada masculina' => 66.58,
                    'Población Ocupada femenina' => 33.42,
                    'Población Desocupada' => 10.60,
                    'Derechohabiencia' => 52.82
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2,
                    'Hogares Jefatura masculina' => 44.69,
                    'Hogares Jefatura femenina' => 55.31,
                    'Ocupación por Vivienda' => 4.50,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 54.52,
                    'Viviendas con Computadora' => 24.64,
                    'Viviendas con Celular' => 86.89,
                    'Viviendas con Internet' => 14.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Primer actividad porcentaje' => 30.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 10.00,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 10.00
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

} // Clase Vacio

?>
