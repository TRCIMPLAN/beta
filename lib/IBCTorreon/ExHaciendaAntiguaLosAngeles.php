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
 * Clase ExHaciendaAntiguaLosAngeles
 */
class ExHaciendaAntiguaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ex-Hacienda Antigua Los Angeles';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ex-hacienda-antigua-los-angeles';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ex-Hacienda Antigua Los Angeles de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '601',
                'Porcentaje de población masculina' => '46.07',
                'Porcentaje de población femenina' => '53.93',
                'Porcentaje de población de 0 a 14 años' => '22.93',
                'Porcentaje de población de 15 a 64 años' => '71.52',
                'Porcentaje de población de 65 y más años' => '4.03',
                'Porcentaje de población no especificada' => '1.52',
                'Fecundidad promedio' => '1.43',
                'Porcentaje de población nacida en otro estado' => '23.95',
                'Porcentaje de población con discapacidad' => '0.71'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.62',
                'Grado Promedio de Escolaridad masculina' => '15.02',
                'Grado Promedio de Escolaridad femenina' => '14.29'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.50',
                'Población Económicamente Activa masculina' => '54.40',
                'Población Económicamente Activa femenina' => '45.60',
                'Población Ocupada' => '97.36',
                'Población Ocupada masculina' => '54.33',
                'Población Ocupada femenina' => '45.67',
                'Población Desocupada' => '2.64',
                'Derechohabiencia' => '87.31'
            ),
            'Viviendas' => array(
                'Hogares' => '166',
                'Hogares Jefatura masculina' => '75.61',
                'Hogares Jefatura femenina' => '24.39',
                'Ocupación por Vivienda' => '3.62',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '92.80',
                'Viviendas con Computadora' => '87.29',
                'Viviendas con Celular' => '94.63',
                'Viviendas con Internet' => '81.14'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '40',
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => '27.50',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => '7.50',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.50'
            )
        );
    } // datos

} // Clase ExHaciendaAntiguaLosAngeles

?>
