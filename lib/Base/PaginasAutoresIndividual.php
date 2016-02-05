<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Individual
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
 * Clase PaginasAutoresIndividual
 */
class PaginasAutoresIndividual extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $autor;      // Nombre del autor como se encuentra en la publicación
    protected $recolector; // Instancia de RecolectorAutores

    /**
     * Constructor
     *
     * @param string Nombre del autor como se encuentra en la publicación
     * @param mixed  Instancia de RecolectorAutores
     */
    public function __construct($autor, RecolectorAutores $recolector) {
        $this->autor      = $autor;
        $this->recolector = $recolector;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar configuración de los autores
        $autores_config = new \Configuracion\AutoresConfig();
        // Obtener el autor primero con el apodo, luego con 'titulo nombre_completo'
        $autor = $autores_config->obtener_con_apodo($this->autor);
        if ($autor === false) {
            $autor = $autores_config->obtener_con_titulo_nombre_completo($this->autor);
        }
        // Si está definido el autor como instancia
        if ($autor === false) {
            // El autor NO está definido
            $this->titulo      = $this->autor;
            $this->descripcion = sprintf('Datos y publicaciones de %s.', $this->autor);
        } else {
            // El autor está definido
            $this->titulo      = $autor->titulo_nombre_completo();
            $this->descripcion = sprintf('Datos y publicaciones de %s.', $autor->titulo_nombre_completo());
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Si está definido el autor como instancia
        if ($autor !== false) {
            // Agregar foto del autor
            $a[] = sprintf('<div><img src="%s"><br>%s</div>', $autor->icono_url(256), $autor->titulo_nombre_completo());
        }
        // Definir concentrador
        $clase          = sprintf('\\Base\\%s', $autores_config->vinculos_individual);
        $concentrador   = new $clase();
        // Bucle por todos los autores
        foreach ($this->recolector->obtener_publicaciones() as $p) {
            // Validar publicacion
            $p->validar();
            // Pasar valores a la publicación
            $p->en_raiz = $this->en_raiz;
            $p->en_otro = $this->en_otro;
            // Parámetros para Vinculo: nombre, vinculo, icono, imagen_previa, descripcion, autor, fecha
            $vinculo = new Vinculo($p->nombre, $p->url(), '', $p->imagen_previa_url(), $p->descripcion, $p->autor, $p->fecha_con_formato_humano());
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

} // Clase PaginasAutoresIndividual

?>
