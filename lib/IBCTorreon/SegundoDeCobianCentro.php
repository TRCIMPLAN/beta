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
 * Clase SegundoDeCobianCentro
 */
class SegundoDeCobianCentro extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Segundo De Cobian Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'segundo-de-cobian-centro';
    //  $this->imagen          = '';
    //  $this->imagen_previa   = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Segundo De Cobian Centro de IBC Torreón.';
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
                'Población total' => '8,015',
                'Porcentaje de población masculina' => '46.37 %',
                'Porcentaje de población femenina' => '53.63 %',
                'Porcentaje de población de 0 a 14 años' => '17.18 %',
                'Porcentaje de población de 15 a 64 años' => '64.10 %',
                'Porcentaje de población de 65 y más años' => '16.36 %',
                'Porcentaje de población no especificada' => '2.36 %',
                'Fecundidad promedio' => '2.0700',
                'Porcentaje de población nacida en otro estado' => '18.78 %',
                'Porcentaje de población con discapacidad' => '9.42 %'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.1200',
                'Grado Promedio de Escolaridad masculina' => '11.6700',
                'Grado Promedio de Escolaridad femenina' => '10.6400'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.02 %',
                'Población Económicamente Activa masculina' => '58.81 %',
                'Población Económicamente Activa femenina' => '41.19 %',
                'Población Ocupada' => '93.34 %',
                'Población Ocupada masculina' => '57.94 %',
                'Población Ocupada femenina' => '42.06 %',
                'Población Desocupada' => '6.66 %',
                'Derechohabiencia' => '67.95 %'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '60.38 %',
                'Hogares Jefatura femenina' => '39.62 %',
                'Ocupación por Vivienda' => '3.1300',
                'Viviendas con Electricidad' => '99.37 %',
                'Viviendas con Agua' => '99.13 %',
                'Viviendas con Drenaje' => '99.01 %',
                'Viviendas con Televisión' => '97.41 %',
                'Viviendas con Automóvil' => '53.01 %',
                'Viviendas con Computadora' => '43.28 %',
                'Viviendas con Celular' => '67.60 %',
                'Viviendas con Internet' => '34.25 %'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AESalud 22.25%',
                'Segunda actividad' => 'AEComercioMenu 18.43%',
                'Tercera actividad' => 'AEOtros 13.28%',
                'Cuarta actividad' => 'AEProfesional 10.51%',
                'Quinta actividad' => 'AEAlimentos 10.13%'
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
        $lenguetas->agregar("Demografía", "Demografía", "<p>Población total = 8,015</p><p>Porcentaje de población masculina = 46.37 %</p><p>Porcentaje de población femenina = 53.63 %</p><p>Porcentaje de población de 0 a 14 años = 17.18 %</p><p>Porcentaje de población de 15 a 64 años = 64.10 %</p><p>Porcentaje de población de 65 y más años = 16.36 %</p><p>Porcentaje de población no especificada = 2.36 %</p><p>Fecundidad promedio = 2.0700</p><p>Porcentaje de población nacida en otro estado = 18.78 %</p><p>Porcentaje de población con discapacidad = 9.42 %</p>");
        $lenguetas->agregar("Educación", "Educación", "<p>Grado Promedio de Escolaridad = 11.1200</p><p>Grado Promedio de Escolaridad masculina = 11.6700</p><p>Grado Promedio de Escolaridad femenina = 10.6400</p>");
        $lenguetas->agregar("Economía", "Características Económicas", "<p>Población Económicamente Activa = 54.02 %</p><p>Población Económicamente Activa masculina = 58.81 %</p><p>Población Económicamente Activa femenina = 41.19 %</p><p>Población Ocupada = 93.34 %</p><p>Población Ocupada masculina = 57.94 %</p><p>Población Ocupada femenina = 42.06 %</p><p>Población Desocupada = 6.66 %</p><p>Derechohabiencia = 67.95 %</p>");
        $lenguetas->agregar("Viviendas", "Viviendas", "<p>Hogares Jefatura masculina = 60.38 %</p><p>Hogares Jefatura femenina = 39.62 %</p><p>Ocupación por Vivienda = 3.1300</p><p>Viviendas con Electricidad = 99.37 %</p><p>Viviendas con Agua = 99.13 %</p><p>Viviendas con Drenaje = 99.01 %</p><p>Viviendas con Televisión = 97.41 %</p><p>Viviendas con Automóvil = 53.01 %</p><p>Viviendas con Computadora = 43.28 %</p><p>Viviendas con Celular = 67.60 %</p><p>Viviendas con Internet = 34.25 %</p>");
        $lenguetas->agregar("U. Económicas", "Unidades Económicas", "<p>Primer actividad = AESalud 22.25%</p><p>Segunda actividad = AEComercioMenu 18.43%</p><p>Tercera actividad = AEOtros 13.28%</p><p>Cuarta actividad = AEProfesional 10.51%</p><p>Quinta actividad = AEAlimentos 10.13%</p>");
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

} // Clase SegundoDeCobianCentro

?>
