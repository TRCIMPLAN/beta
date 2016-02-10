<?php
/**
 * Plataforma de Conocimiento - Páginas Categorías Individual
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

namespace Base;

/**
 * Clase PaginasCategoriasIndividual
 */
class PaginasCategoriasIndividual extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $recolector; // Instancia de RecolectorCategorias

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorCategorias
     */
    public function __construct(RecolectorCategorias $recolector) {
        // Parámetro
        $this->recolector = $recolector;
        // Los vínculos apuntan a páginas en otros directorios
        $this->en_otro = true;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        $clase             = sprintf('\\Base\\%s', $categorias_config->vinculos_individual);
        $concentrador      = new $clase();
        // Bucle por todos los autores
        foreach ($this->recolector->obtener_publicaciones() as $p) {
            // Validar publicacion
            $p->validar();
            // Pasar valores a la publicación
            $p->en_raiz = $this->en_raiz;
            $p->en_otro = $this->en_otro;
            // Iniciar vínculo
            $vinculo = new Vinculo();
            $vinculo->agregar_publicacion($p);
             // Agregar vínculo
            $concentrador->agregar($vinculo);
        }
        // Acumular concentrador
        $a[] = $concentrador->html();
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase PaginasCategoriasIndividual

?>
