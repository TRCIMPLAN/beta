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
 * Clase ResidencialLasVillas7aEtapa
 */
class ResidencialLasVillas7aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Villas 7A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-villas-7a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Villas 7A. Etapa de Torreón.';
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
                'Población total' => '5',
                'Porcentaje de población masculina' => '46.79',
                'Porcentaje de población femenina' => '53.21',
                'Porcentaje de población de 0 a 14 años' => '28.26',
                'Porcentaje de población de 15 a 64 años' => '68.42',
                'Porcentaje de población de 65 y más años' => '2.20',
                'Porcentaje de población no especificada' => '1.12',
                'Fecundidad promedio' => '1.81',
                'Porcentaje de población nacida en otro estado' => '15.91',
                'Porcentaje de población con discapacidad' => '1.86'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.88',
                'Grado Promedio de Escolaridad masculina' => '11.00',
                'Grado Promedio de Escolaridad femenina' => '10.78'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.96',
                'Población Económicamente Activa masculina' => '62.20',
                'Población Económicamente Activa femenina' => '37.80',
                'Población Ocupada' => '94.54',
                'Población Ocupada masculina' => '60.82',
                'Población Ocupada femenina' => '39.18',
                'Población Desocupada' => '5.46',
                'Derechohabiencia' => '76.75'
            ),
            'Viviendas' => array(
                'Hogares' => '1',
                'Hogares Jefatura masculina' => '91.94',
                'Hogares Jefatura femenina' => '8.06',
                'Ocupación por Vivienda' => '5.00',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '74.87',
                'Viviendas con Computadora' => '58.72',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '40.93'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialLasVillas7aEtapa

?>
