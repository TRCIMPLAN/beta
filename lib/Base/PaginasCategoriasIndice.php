<?php
/**
 * Plataforma de Conocimiento - Páginas Categorías Índice
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
 * Clase PaginasCategoriasIndice
 */
class PaginasCategoriasIndice extends Paginas {

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
        $this->recolector = $recolector;
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
        $clase             = sprintf('\\Base\\%s', $categorias_config->vinculos_indice);
        $concentrador      = new $clase();
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $nombre) {
            // Obtener la cantidad de publicaciones de esta categoría
            $this->recolector->filtrar_publicaciones_de_categoria($nombre);
            $cantidad = $this->recolector->obtener_cantidad_de_publicaciones();
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener_con_nombre($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof Categoria) {
                $categoria->en_raiz = false;
                $categoria->en_otro = false;
                // Parámetros para Vinculo: nombre, vinculo, icono, imagen_previa, descripcion, autor, fecha
                $vinculo = new Vinculo(
                    sprintf('%s (%d)', $categoria->nombre, $cantidad),
                    $categoria->url(),
                    $categoria->icono,
                    '',
                    $categoria->descripcion);
            } else {
                $vinculo = new Vinculo(sprintf('%s (%d)', $nombre, $cantidad)); // No lo está, sólo poner la etiqueta sin enlace
            }
            // Agregar
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

} // Clase PaginasCategoriasIndice

?>
