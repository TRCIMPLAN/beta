<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Índice
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
 * Clase PaginasAutoresIndice
 */
class PaginasAutoresIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $recolector; // Instancia de RecolectorAutores

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorAutores
     */
    public function __construct(RecolectorAutores $recolector) {
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
        // Cargar configuración de los autores
        $autores_config = new \Configuracion\AutoresConfig();
        $clase          = sprintf('\\Base\\%s', $autores_config->vinculos_indice);
        $concentrador   = new $clase();
        // Bucle por todos los autores
        foreach ($this->recolector->obtener_autores() as $nombre) {
            // Obtener la cantidad de publicaciones de este autor
            $this->recolector->filtrar_publicaciones_de_autor($nombre);
            $cantidad = $this->recolector->obtener_cantidad_de_publicaciones();
            // Obtener instancia de Autor
            $autor = $autores_config->obtener_con_apodo($nombre);
            if ($autor === false) {
                $autor = $autores_config->obtener_con_titulo_nombre_completo($nombre);
            }
            // Si está definido en \Configuracion\AutoresConfig
            if ($autor instanceof Autor) {
                $autor->en_raiz = false;
                $autor->en_otro = false;
                // Parámetros para Vinculo: nombre, vinculo, icono, imagen_previa, descripcion, autor, fecha
                $vinculo = new Vinculo(
                    sprintf('%s %s', $autor->titulo, $autor->nombre_completo),
                    $autor->url(),
                    $autor->icono,
                    '',
                    sprintf('%s, %s', $autor->empresa, $autor->cargo));
                $vinculo->boton_etiqueta = "$cantidad publicaciones";
                $concentrador->agregar($vinculo);
            } elseif ($autores_config->mostrar_no_definidos) {
                $vinculo = new Vinculo(sprintf('%s (%d)', $nombre, $cantidad)); // No lo está, sólo poner la etiqueta sin enlace
                $concentrador->agregar($vinculo);
            }
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

} // Clase PaginasAutoresIndice

?>
