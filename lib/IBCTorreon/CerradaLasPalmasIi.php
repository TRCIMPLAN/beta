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
 * Clase CerradaLasPalmasIi
 */
class CerradaLasPalmasIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cerrada Las Palmas Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cerrada-las-palmas-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerrada Las Palmas Ii de Torreón.';
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
                'Población total' => 155,
                'Porcentaje de población masculina' => 52.90,
                'Porcentaje de población femenina' => 47.10,
                'Porcentaje de población de 0 a 14 años' => 40.00,
                'Porcentaje de población de 15 a 64 años' => 58.71,
                'Porcentaje de población de 65 y más años' => 1.29,
                'Porcentaje de población no especificada' => 0.00,
                'Fecundidad promedio' => 1.88,
                'Porcentaje de población nacida en otro estado' => 17.42,
                'Porcentaje de población con discapacidad' => 0.00
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 14.36,
                'Grado Promedio de Escolaridad masculina' => 14.33,
                'Grado Promedio de Escolaridad femenina' => 14.39
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 67.68,
                'Población Económicamente Activa masculina' => 59.70,
                'Población Económicamente Activa femenina' => 40.30,
                'Población Ocupada' => 100.00,
                'Población Ocupada masculina' => 59.70,
                'Población Ocupada femenina' => 40.30,
                'Población Desocupada' => 0.00,
                'Derechohabiencia' => 84.52
            ),
            'Viviendas' => array(
                'Hogares' => 42,
                'Hogares Jefatura masculina' => 85.71,
                'Hogares Jefatura femenina' => 14.29,
                'Ocupación por Vivienda' => 3.69,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 100.00,
                'Viviendas con Computadora' => 92.86,
                'Viviendas con Celular' => 100.00,
                'Viviendas con Internet' => 80.95
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase CerradaLasPalmasIi

?>
