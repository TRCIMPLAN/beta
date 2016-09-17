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
 * Clase ResidencialLasVillasEtapaXi
 */
class ResidencialLasVillasEtapaXi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Villas Etapa Xi';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-villas-etapa-xi';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Villas Etapa Xi de Torreón.';
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
                'Población total' => 33,
                'Porcentaje de población masculina' => 48.48,
                'Porcentaje de población femenina' => 51.52,
                'Porcentaje de población de 0 a 14 años' => 21.21,
                'Porcentaje de población de 15 a 64 años' => 42.42,
                'Porcentaje de población de 65 y más años' => 0.00,
                'Porcentaje de población no especificada' => 36.37,
                'Fecundidad promedio' => 1.56,
                'Porcentaje de población nacida en otro estado' => 15.91,
                'Porcentaje de población con discapacidad' => 0.00
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 14.86,
                'Grado Promedio de Escolaridad masculina' => 15.29,
                'Grado Promedio de Escolaridad femenina' => 14.43
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 29.41,
                'Población Económicamente Activa masculina' => 80.00,
                'Población Económicamente Activa femenina' => 20.00,
                'Población Ocupada' => 100.00,
                'Población Ocupada masculina' => 80.00,
                'Población Ocupada femenina' => 20.00,
                'Población Desocupada' => 0.00,
                'Derechohabiencia' => 63.64
            ),
            'Viviendas' => array(
                'Hogares' => 5,
                'Hogares Jefatura masculina' => 80.00,
                'Hogares Jefatura femenina' => 20.00,
                'Ocupación por Vivienda' => 6.60,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 100.00,
                'Viviendas con Computadora' => 100.00,
                'Viviendas con Celular' => 100.00,
                'Viviendas con Internet' => 100.00
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase ResidencialLasVillasEtapaXi

?>
