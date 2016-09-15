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
 * Clase LasArboledas3aEtapa
 */
class LasArboledas3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Arboledas 3A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-arboledas-3a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Arboledas 3A. Etapa de Torreón.';
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
                'Población total' => '1251',
                'Porcentaje de población masculina' => '48.04',
                'Porcentaje de población femenina' => '51.96',
                'Porcentaje de población de 0 a 14 años' => '37.65',
                'Porcentaje de población de 15 a 64 años' => '59.55',
                'Porcentaje de población de 65 y más años' => '2.32',
                'Porcentaje de población no especificada' => '0.48',
                'Fecundidad promedio' => '1.87',
                'Porcentaje de población nacida en otro estado' => '14.87',
                'Porcentaje de población con discapacidad' => '1.34'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.44',
                'Grado Promedio de Escolaridad masculina' => '11.97',
                'Grado Promedio de Escolaridad femenina' => '10.96'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.06',
                'Población Económicamente Activa masculina' => '62.24',
                'Población Económicamente Activa femenina' => '37.76',
                'Población Ocupada' => '95.53',
                'Población Ocupada masculina' => '61.19',
                'Población Ocupada femenina' => '38.81',
                'Población Desocupada' => '4.47',
                'Derechohabiencia' => '75.54'
            ),
            'Viviendas' => array(
                'Hogares' => '318',
                'Hogares Jefatura masculina' => '84.28',
                'Hogares Jefatura femenina' => '15.72',
                'Ocupación por Vivienda' => '3.93',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.37',
                'Viviendas con Automóvil' => '72.01',
                'Viviendas con Computadora' => '53.14',
                'Viviendas con Celular' => '84.91',
                'Viviendas con Internet' => '30.38'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '15',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '53.33',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '13.33',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '13.33',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '13.33',
                'Quinta actividad nombre' => 'Construcción',
                'Quinta actividad porcentaje' => '6.67'
            )
        );
    } // datos

} // Clase LasArboledas3aEtapa

?>
