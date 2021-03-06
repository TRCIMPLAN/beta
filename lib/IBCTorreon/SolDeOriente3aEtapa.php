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
 * Clase SolDeOriente3aEtapa
 */
class SolDeOriente3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Sol De Oriente 3A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'sol-de-oriente-3a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Sol De Oriente 3A. Etapa de IBC Torreón.';
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
                'Población total' => '906',
                'Porcentaje de población masculina' => '49.12',
                'Porcentaje de población femenina' => '50.88',
                'Porcentaje de población de 0 a 14 años' => '34.88',
                'Porcentaje de población de 15 a 64 años' => '63.36',
                'Porcentaje de población de 65 y más años' => '1.43',
                'Porcentaje de población no especificada' => '0.33',
                'Fecundidad promedio' => '1.60',
                'Porcentaje de población nacida en otro estado' => '17.55',
                'Porcentaje de población con discapacidad' => '1.80'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.80',
                'Grado Promedio de Escolaridad masculina' => '12.93',
                'Grado Promedio de Escolaridad femenina' => '12.69'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.56',
                'Población Económicamente Activa masculina' => '59.34',
                'Población Económicamente Activa femenina' => '40.66',
                'Población Ocupada' => '95.74',
                'Población Ocupada masculina' => '60.00',
                'Población Ocupada femenina' => '40.00',
                'Población Desocupada' => '4.26',
                'Derechohabiencia' => '83.89'
            ),
            'Viviendas' => array(
                'Hogares' => '258',
                'Hogares Jefatura masculina' => '80.62',
                'Hogares Jefatura femenina' => '19.38',
                'Ocupación por Vivienda' => '3.51',
                'Viviendas con Electricidad' => '98.84',
                'Viviendas con Agua' => '99.22',
                'Viviendas con Drenaje' => '99.22',
                'Viviendas con Televisión' => '98.45',
                'Viviendas con Automóvil' => '75.97',
                'Viviendas con Computadora' => '52.33',
                'Viviendas con Celular' => '92.25',
                'Viviendas con Internet' => '39.15'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '13',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '53.85',
                'Segunda actividad nombre' => 'Financieros y Seguros',
                'Segunda actividad porcentaje' => '23.08',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '7.69',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase SolDeOriente3aEtapa

?>
