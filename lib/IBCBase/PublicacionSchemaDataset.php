<?php
/**
 * Plataforma de Conocimiento - PublicacionSchemaDataset
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase PublicacionSchemaDataset
 */
abstract class PublicacionSchemaDataset extends \Base\Publicacion {

    abstract public function datos();

    /**
     * Validar
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaThing();
        $schema->is_article    = true;
        $schema->big_heading   = true;
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->image         = $this->imagen;
        $schema->image_show    = false;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Ejecutar método en el padre
        parent::validar();
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir
        $lenguetas = new \Base\Lenguetas();
        foreach ($this->datos() as $eje => $eje_datos) {
            $a = array();
            foreach ($eje_datos as $etiqueta => $dato) {
                $a[] = "<p>$etiqueta = $dato</p>";
            }
            $lenguetas->agregar(\Base\Funciones::caracteres_para_web($etiqueta), $etiqueta, implode("\n", $a));
        }
        $this->contenido->articleBody = $lenguetas->html();;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Definir
        $this->javascript[] = "<!-- Aun sin Javascript -->";
        // Entregar
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir
        $this->redifusion = "Debe haber algo aquí";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Disenador

?>
