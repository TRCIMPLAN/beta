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
 * Clase RinconSanAngel
 */
class RinconSanAngel extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Rincon San Angel';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'rincon-san-angel';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Rincon San Angel de IBC Torreón.';
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
                'Población total' => '461',
                'Porcentaje de población masculina' => '50.76',
                'Porcentaje de población femenina' => '49.24',
                'Porcentaje de población de 0 a 14 años' => '31.67',
                'Porcentaje de población de 15 a 64 años' => '57.48',
                'Porcentaje de población de 65 y más años' => '4.34',
                'Porcentaje de población no especificada' => '6.51',
                'Fecundidad promedio' => '1.80',
                'Porcentaje de población nacida en otro estado' => '26.38',
                'Porcentaje de población con discapacidad' => '1.08'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.26',
                'Grado Promedio de Escolaridad masculina' => '14.66',
                'Grado Promedio de Escolaridad femenina' => '13.87'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.48',
                'Población Económicamente Activa masculina' => '65.70',
                'Población Económicamente Activa femenina' => '34.30',
                'Población Ocupada' => '97.01',
                'Población Ocupada masculina' => '66.47',
                'Población Ocupada femenina' => '33.53',
                'Población Desocupada' => '2.99',
                'Derechohabiencia' => '73.75'
            ),
            'Viviendas' => array(
                'Hogares' => '108',
                'Hogares Jefatura masculina' => '86.11',
                'Hogares Jefatura femenina' => '13.89',
                'Ocupación por Vivienda' => '4.27',
                'Viviendas con Electricidad' => '99.07',
                'Viviendas con Agua' => '98.15',
                'Viviendas con Drenaje' => '97.22',
                'Viviendas con Televisión' => '93.52',
                'Viviendas con Automóvil' => '90.68',
                'Viviendas con Computadora' => '82.41',
                'Viviendas con Celular' => '90.74',
                'Viviendas con Internet' => '80.56'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '50.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase RinconSanAngel

?>
