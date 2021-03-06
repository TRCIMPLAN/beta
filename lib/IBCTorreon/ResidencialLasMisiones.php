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
 * Clase ResidencialLasMisiones
 */
class ResidencialLasMisiones extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Misiones';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-misiones';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Misiones de IBC Torreón.';
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
                'Población total' => '152',
                'Porcentaje de población masculina' => '41.45',
                'Porcentaje de población femenina' => '58.55',
                'Porcentaje de población de 0 a 14 años' => '15.79',
                'Porcentaje de población de 15 a 64 años' => '73.68',
                'Porcentaje de población de 65 y más años' => '4.61',
                'Porcentaje de población no especificada' => '5.92',
                'Fecundidad promedio' => '1.46',
                'Porcentaje de población nacida en otro estado' => '32.89',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.07',
                'Grado Promedio de Escolaridad masculina' => '14.50',
                'Grado Promedio de Escolaridad femenina' => '13.77'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.97',
                'Población Económicamente Activa masculina' => '57.63',
                'Población Económicamente Activa femenina' => '42.37',
                'Población Ocupada' => '98.28',
                'Población Ocupada masculina' => '58.62',
                'Población Ocupada femenina' => '41.38',
                'Población Desocupada' => '1.72',
                'Derechohabiencia' => '78.95'
            ),
            'Viviendas' => array(
                'Hogares' => '37',
                'Hogares Jefatura masculina' => '72.97',
                'Hogares Jefatura femenina' => '27.03',
                'Ocupación por Vivienda' => '4.11',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '97.30',
                'Viviendas con Computadora' => '81.08',
                'Viviendas con Celular' => '94.59',
                'Viviendas con Internet' => '86.49'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '56',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '57.14',
                'Segunda actividad nombre' => 'Financieros y Seguros',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.71',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '7.14',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '1.79'
            )
        );
    } // datos

} // Clase ResidencialLasMisiones

?>
