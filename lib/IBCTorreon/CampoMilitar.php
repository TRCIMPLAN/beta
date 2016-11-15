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
 * Clase CampoMilitar
 */
class CampoMilitar extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Campo Militar';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'campo-militar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Campo Militar de Torreón.';
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
                    'Población total' => 324,
                    'Porcentaje de población masculina' => 53.40,
                    'Porcentaje de población femenina' => 46.60,
                    'Porcentaje de población de 0 a 14 años' => 37.04,
                    'Porcentaje de población de 15 a 64 años' => 62.65,
                    'Porcentaje de población de 65 y más años' => 0.31,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población nacida en otro estado' => 84.88,
                    'Porcentaje de población con discapacidad' => 0.93,
                    'Porcentaje de población de 15 y más analfabeta' => 0.29,
                    'Porcentaje de población de 18 y más' => 59.26,
                    'Porcentaje de población de 18 y más postbásicos' => 38.89
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.15,
                    'Grado Promedio de Escolaridad masculina' => 9.89,
                    'Grado Promedio de Escolaridad femenina' => 8.59
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.98,
                    'Población Económicamente Activa masculina' => 91.59,
                    'Población Económicamente Activa femenina' => 8.41,
                    'Población Ocupada' => 99.06,
                    'Población Ocupada masculina' => 91.51,
                    'Población Ocupada femenina' => 8.49,
                    'Población Desocupada' => 0.94,
                    'Derechohabiencia' => 99.69
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 96,
                    'Hogares Jefatura masculina' => 97.92,
                    'Hogares Jefatura femenina' => 2.08,
                    'Ocupación por Vivienda' => 3.38,
                    'Viviendas con Electricidad' => 97.92,
                    'Viviendas con Agua' => 97.92,
                    'Viviendas con Drenaje' => 97.92,
                    'Viviendas con Televisión' => 97.92,
                    'Viviendas con Automóvil' => 63.54,
                    'Viviendas con Computadora' => 53.12,
                    'Viviendas con Celular' => 85.42,
                    'Viviendas con Internet' => 19.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.44,
                    'Segunda actividad nombre' => 'Gubernamentales',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 11.11
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

} // Clase CampoMilitar

?>
