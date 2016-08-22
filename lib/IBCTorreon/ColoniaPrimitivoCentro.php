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
 * Clase ColoniaPrimitivoCentro
 */
class ColoniaPrimitivoCentro extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Colonia Primitivo Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'colonia-primitivo-centro';
    //  $this->imagen          = '';
    //  $this->imagen_previa   = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Colonia Primitivo Centro de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
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
    protected function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '1,527',
                'Porcentaje de población masculina' => '45.32 %',
                'Porcentaje de población femenina' => '54.68 %',
                'Porcentaje de población de 0 a 14 años' => '18.76 %',
                'Porcentaje de población de 15 a 64 años' => '60.71 %',
                'Porcentaje de población de 65 y más años' => '15.41 %',
                'Porcentaje de población no especificada' => '5.12 %',
                'Fecundidad promedio' => '1.9700',
                'Porcentaje de población nacida en otro estado' => '19.54 %',
                'Porcentaje de población con discapacidad' => '8.83 %'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.9700',
                'Grado Promedio de Escolaridad masculina' => '10.3800',
                'Grado Promedio de Escolaridad femenina' => '9.6700'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.44 %',
                'Población Económicamente Activa masculina' => '55.47 %',
                'Población Económicamente Activa femenina' => '44.53 %',
                'Población Ocupada' => '93.40 %',
                'Población Ocupada masculina' => '54.74 %',
                'Población Ocupada femenina' => '45.26 %',
                'Población Desocupada' => '6.60 %',
                'Derechohabiencia' => '58.61 %'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '58.57 %',
                'Hogares Jefatura femenina' => '41.43 %',
                'Ocupación por Vivienda' => '3.5300',
                'Viviendas con Electricidad' => '99.94 %',
                'Viviendas con Agua' => '99.69 %',
                'Viviendas con Drenaje' => '99.47 %',
                'Viviendas con Televisión' => '98.45 %',
                'Viviendas con Automóvil' => '40.56 %',
                'Viviendas con Computadora' => '30.60 %',
                'Viviendas con Celular' => '70.80 %',
                'Viviendas con Internet' => '21.97 %'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 50.29%',
                'Segunda actividad' => 'AEAlimentos 12.12%',
                'Tercera actividad' => 'AEOtros 11.51%',
                'Cuarta actividad' => 'AEComercioMayo 8.15%',
                'Quinta actividad' => 'AEProfesional 3.6%'
            )
        );
    } // datos

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar("Demografía", "Demografía", "<p>Población total = 1,527</p><p>Porcentaje de población masculina = 45.32 %</p><p>Porcentaje de población femenina = 54.68 %</p><p>Porcentaje de población de 0 a 14 años = 18.76 %</p><p>Porcentaje de población de 15 a 64 años = 60.71 %</p><p>Porcentaje de población de 65 y más años = 15.41 %</p><p>Porcentaje de población no especificada = 5.12 %</p><p>Fecundidad promedio = 1.9700</p><p>Porcentaje de población nacida en otro estado = 19.54 %</p><p>Porcentaje de población con discapacidad = 8.83 %</p>");
        $lenguetas->agregar("Educación", "Educación", "<p>Grado Promedio de Escolaridad = 9.9700</p><p>Grado Promedio de Escolaridad masculina = 10.3800</p><p>Grado Promedio de Escolaridad femenina = 9.6700</p>");
        $lenguetas->agregar("Economía", "Características Económicas", "<p>Población Económicamente Activa = 58.44 %</p><p>Población Económicamente Activa masculina = 55.47 %</p><p>Población Económicamente Activa femenina = 44.53 %</p><p>Población Ocupada = 93.40 %</p><p>Población Ocupada masculina = 54.74 %</p><p>Población Ocupada femenina = 45.26 %</p><p>Población Desocupada = 6.60 %</p><p>Derechohabiencia = 58.61 %</p>");
        $lenguetas->agregar("Viviendas", "Viviendas", "<p>Hogares Jefatura masculina = 58.57 %</p><p>Hogares Jefatura femenina = 41.43 %</p><p>Ocupación por Vivienda = 3.5300</p><p>Viviendas con Electricidad = 99.94 %</p><p>Viviendas con Agua = 99.69 %</p><p>Viviendas con Drenaje = 99.47 %</p><p>Viviendas con Televisión = 98.45 %</p><p>Viviendas con Automóvil = 40.56 %</p><p>Viviendas con Computadora = 30.60 %</p><p>Viviendas con Celular = 70.80 %</p><p>Viviendas con Internet = 21.97 %</p>");
        $lenguetas->agregar("U. Económicas", "Unidades Económicas", "<p>Primer actividad = AEComercioMenu 50.29%</p><p>Segunda actividad = AEAlimentos 12.12%</p><p>Tercera actividad = AEOtros 11.51%</p><p>Cuarta actividad = AEComercioMayo 8.15%</p><p>Quinta actividad = AEProfesional 3.6%</p>");
        $this->contenido->articleBody = $lenguetas->html();
        // Entregar resultado del padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Definir código JavaScript
        $this->javascript[] = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir contenido para redifusión
        $this->redifusion = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase ColoniaPrimitivoCentro

?>
