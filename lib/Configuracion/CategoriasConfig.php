<?php
/**
 * TrcIMPLAN Sitio Web - Categorias Config
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
 * @package TrcIMPLANSitioWeb
 */

namespace Configuracion;

/**
 * Clase CategoriasConfig
 */
class CategoriasConfig {

    public $categorias           = array();              // Arreglo asociativo con instancias de \Base\Categoria
    public $vinculos_indice      = 'VinculosGalerias';   // Nombre de la clase para el índice de categorias, en categorias/index.html
    public $vinculos_individual  = 'VinculosDetallados'; // Nombre de la clase para listar las publicaciones de cada categoría, a usarse en las páginas de las categorías
    public $mostrar_no_definidos = false;                // Verdadero pone todos los autores encontrados, falso solo los definidos aquí

    /**
     * Constructor
     */
    public function __construct() {
        $this->categorias[] = new \Base\Categoria('Bienestar',                                    'bienestar');
        $this->categorias[] = new \Base\Categoria('Competitividad',                               'competitividad');
        $this->categorias[] = new \Base\Categoria('Cultura',                                      'cultura');
        $this->categorias[] = new \Base\Categoria('Delincuencia',                                 'delincuencia');
        $this->categorias[] = new \Base\Categoria('Doing Business',                               'doing-business');
        $this->categorias[] = new \Base\Categoria('Educación',                                    'educacion');
        $this->categorias[] = new \Base\Categoria('Empleo',                                       'empleo');
        $this->categorias[] = new \Base\Categoria('Empresas',                                     'empresas');
        $this->categorias[] = new \Base\Categoria('Finanzas Públicas',                            'finanzas-publicas');
        $this->categorias[] = new \Base\Categoria('Género',                                       'genero');
        $this->categorias[] = new \Base\Categoria('Gobierno',                                     'gobierno');
        $this->categorias[] = new \Base\Categoria('Gobierno Digital',                             'gobierno-digital');
        $this->categorias[] = new \Base\Categoria('Grupos Vulnerables',                           'grupos-vulnerables');
        $this->categorias[] = new \Base\Categoria('Índice de Competitividad Urbana',              'indice-de-competitividad-urbana');
        $this->categorias[] = new \Base\Categoria('Infraestructura',                              'infraestructura');
        $this->categorias[] = new \Base\Categoria('Innovación',                                   'innovacion');
        $this->categorias[] = new \Base\Categoria('Macroeconomía',                                'macroeconomia');
        $this->categorias[] = new \Base\Categoria('Mercados',                                     'mercados');
        $this->categorias[] = new \Base\Categoria('Movilidad',                                    'movilidad');
        $this->categorias[] = new \Base\Categoria('Objetivos del Milenio',                        'objetivos-del-milenio');
        $this->categorias[] = new \Base\Categoria('Participación Ciudadana',                      'participacion-ciudadana');
        $this->categorias[] = new \Base\Categoria('Población',                                    'poblacion');
        $this->categorias[] = new \Base\Categoria('Recursos Naturales',                           'recursos-naturales');
        $this->categorias[] = new \Base\Categoria('Salud',                                        'salud');
        $this->categorias[] = new \Base\Categoria('Seguridad',                                    'seguridad');
        $this->categorias[] = new \Base\Categoria('Servicios Públicos',                           'servicios-publicos');
        $this->categorias[] = new \Base\Categoria('Sistema de Indicadores de Desempeño (SINDES)', 'sistema-de-indicadores-de-desempeno-sindes');
        $this->categorias[] = new \Base\Categoria('Transparencia',                                'transparencia');
        $this->categorias[] = new \Base\Categoria('Vialidad',                                     'vialidad');
        $this->categorias[] = new \Base\Categoria('Vivienda',                                     'vivienda');
    } // constructor

    /**
     * Obtener con nombre
     *
     * @param  string Nombre de la categoría a obtener
     * @return mixed  La instancia de Categoria encontrada, falso si no se haya
     */
    public function obtener_con_nombre($nombre) {
        foreach ($this->categorias as $categoria) {
            if ($categoria->nombre == $nombre) {
                return $categoria;
            }
        }
        return false;
    } // obtener_con_nombre

} // Clase CategoriasConfig

?>
