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
 * Clase ResidencialLasTrojes
 */
class ResidencialLasTrojes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Trojes';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-trojes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Trojes de Torreón.';
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
                    'Población total' => 134,
                    'Porcentaje de población masculina' => 46.85,
                    'Porcentaje de población femenina' => 53.15,
                    'Porcentaje de población de 0 a 14 años' => 29.28,
                    'Porcentaje de población de 15 a 64 años' => 69.67,
                    'Porcentaje de población de 65 y más años' => 0.96,
                    'Porcentaje de población no especificada' => 0.09,
                    'Fecundidad promedio' => 1.33,
                    'Porcentaje de población nacida en otro estado' => 24.89,
                    'Porcentaje de población con discapacidad' => 0.30,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 66.98,
                    'Porcentaje de población de 18 y más postbásicos' => 63.06
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.21,
                    'Grado Promedio de Escolaridad masculina' => 16.04,
                    'Grado Promedio de Escolaridad femenina' => 14.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.76,
                    'Población Económicamente Activa masculina' => 61.50,
                    'Población Económicamente Activa femenina' => 38.50,
                    'Población Ocupada' => 98.22,
                    'Población Ocupada masculina' => 62.44,
                    'Población Ocupada femenina' => 37.56,
                    'Población Desocupada' => 1.78,
                    'Derechohabiencia' => 97.49
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 42,
                    'Hogares Jefatura masculina' => 89.62,
                    'Hogares Jefatura femenina' => 10.38,
                    'Ocupación por Vivienda' => 3.19,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 99.05,
                    'Viviendas con Computadora' => 96.02,
                    'Viviendas con Celular' => 99.98,
                    'Viviendas con Internet' => 92.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Primer actividad porcentaje' => 100.00
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

} // Clase ResidencialLasTrojes

?>