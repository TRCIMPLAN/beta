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
 * Clase VillasSanAgustin
 */
class VillasSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas San Agustin';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-san-agustin';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas San Agustin de IBC Torreón.';
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
                'Población total' => '905',
                'Porcentaje de población masculina' => '49.16',
                'Porcentaje de población femenina' => '50.84',
                'Porcentaje de población de 0 a 14 años' => '36.47',
                'Porcentaje de población de 15 a 64 años' => '62.66',
                'Porcentaje de población de 65 y más años' => '0.83',
                'Porcentaje de población no especificada' => '0.04',
                'Fecundidad promedio' => '1.76',
                'Porcentaje de población nacida en otro estado' => '19.01',
                'Porcentaje de población con discapacidad' => '1.89'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.67',
                'Grado Promedio de Escolaridad masculina' => '9.85',
                'Grado Promedio de Escolaridad femenina' => '9.49'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.69',
                'Población Económicamente Activa masculina' => '64.27',
                'Población Económicamente Activa femenina' => '35.73',
                'Población Ocupada' => '94.68',
                'Población Ocupada masculina' => '63.16',
                'Población Ocupada femenina' => '36.84',
                'Población Desocupada' => '5.32',
                'Derechohabiencia' => '74.34'
            ),
            'Viviendas' => array(
                'Hogares' => '278',
                'Hogares Jefatura masculina' => '82.89',
                'Hogares Jefatura femenina' => '17.11',
                'Ocupación por Vivienda' => '3.26',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.00',
                'Viviendas con Automóvil' => '43.20',
                'Viviendas con Computadora' => '32.93',
                'Viviendas con Celular' => '84.19',
                'Viviendas con Internet' => '15.44'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '24',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '8.33',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '8.33',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '4.17'
            )
        );
    } // datos

} // Clase VillasSanAgustin

?>
