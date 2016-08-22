#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2016 Guillermo Valdés Lozano
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/trcimplan.github.io"
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
BETA_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/beta"

echo "[Copiar] Inicia"

#
# Verificar
#
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $BETA_DIR ]; then
    echo "Error: No se encuentra el directorio $BETA_DIR"
    exit $E_FATAL
fi
cd $BETA_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio $BETA_DIR/lib."
    exit $E_FATAL
fi

#
# Respaldar Imprentas
#
echo "  Respaldando Imprentas..."
cd $BETA_DIR/lib
for DIR in Blog ConsejoDirectivo Contacto Institucional Investigaciones PlanEstrategicoMetropolitano PreguntasFrecuentes Proyectos SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresTorreon Terminos
do
    if [ -e $DIR/Imprenta.php ]; then
        mv $DIR/Imprenta.php "${DIR}Imprenta.php"
    fi
done
echo "  Respaldando Iconos..."
cd $BETA_DIR/imagenes
for DIR in 64 128 256
do
    if [ -d $DIR ]; then
        mv $DIR "../imagenes${DIR}"
    fi
done

#
# Eliminar
#
echo "  Eliminando en la raíz..."
cd $BETA_DIR
rm -f css/plataforma-de-conocimiento.css
rm -rf fonts
rm -rf imagenes
rm -rf img
rm -rf js
rm -rf less
rm -rf scss
# Por los cambios de Ilse, no se borran plan-estrategico-metropolitano, ni proyectos
for DIR in autores blog categorias consejo-directivo contacto indicadores-categorias indicadores-gomez-palacio indicadores-la-laguna indicadores-lerdo indicadores-matamoros indicadores-torreon institucional investigaciones plan-estrategico-torreon preguntas-frecuentes sala-prensa sig sig-mapas-torreon sig-planes smi smi-georreferenciados terminos
do
    rm -rf $DIR
done
echo "  Eliminando en /bin..."
cd $BETA_DIR/bin
rm -f  Crear.php
echo "  Eliminando en /lib..."
cd $BETA_DIR/lib
rm -rf Base
rm -rf Michelf
# Por los cambios de Ilse, no se borran PlanEstrategicoMetropolitano, ni Proyectos
for DIR in Blog ConsejoDirectivo Contacto Institucional Investigaciones PreguntasFrecuentes SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresTorreon Terminos
do
    rm -rf $DIR
done

#
# Copiar
#
echo "  Copiando a la raíz..."
cd $BETA_DIR
cp -r $SITIO_WEB_DIR/fonts .
cp -r $SITIO_WEB_DIR/imagenes .
cp -r $SITIO_WEB_DIR/img .
cp -r $SITIO_WEB_DIR/js .
cp -r $SITIO_WEB_DIR/less .
cp -r $SITIO_WEB_DIR/scss .
# Por los cambios de Ilse, no se copian plan-estrategico-metropolitano, ni proyectos
for DIR in blog consejo-directivo contacto indicadores-categorias indicadores-gomez-palacio indicadores-la-laguna indicadores-lerdo indicadores-matamoros indicadores-torreon institucional investigaciones plan-estrategico-torreon preguntas-frecuentes sala-prensa sig sig-mapas-torreon sig-planes smi smi-georreferenciados terminos
do
    cp -r $SITIO_WEB_DIR/$DIR .
    rm -f $DIR/*.html
done
echo "  Copiando a /bin..."
cd $BETA_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
echo "  Copiando a /lib..."
cd $BETA_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .
# Por los cambios de Ilse, no se copian PlanEstrategicoMetropolitano, ni Proyectos
for DIR in Blog ConsejoDirectivo Contacto Institucional Investigaciones PreguntasFrecuentes SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresTorreon Terminos
do
    cp -r $SITIO_WEB_DIR/lib/$DIR .
done
echo "  Copiando a /css..."
cd $BETA_DIR/css
cp $PLATAFORMA_DIR/css/plataforma-de-conocimiento.css .

#
# Restaurando Imprentas
#
echo "  Restaurando Imprentas..."
cd $BETA_DIR/lib
for DIR in Blog ConsejoDirectivo Contacto Institucional Investigaciones PlanEstrategicoMetropolitano PreguntasFrecuentes Proyectos SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresTorreon Terminos
do
    if [ -e "${DIR}Imprenta.php" ]; then
        rm -f $DIR/Imprenta.php
        mv "${DIR}Imprenta.php" $DIR/Imprenta.php
    fi
done
echo "  Restaurando Iconos..."
cd $BETA_DIR
for DIR in 64 128 256
do
    if [ -d "imagenes${DIR}" ]; then
        mv "imagenes${DIR}" imagenes/$DIR
    fi
done

echo "[Copiar] Terminó con éxito."
exit $EXITO
