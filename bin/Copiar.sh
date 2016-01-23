#!/bin/bash

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/TrcIMPLAN/GitHub/trcimplan.github.io"
PLATAFORMA_DIR="$HOME/Documentos/MovimientoLibre/GitHub/movimientolibre.github.io"
BETA_DIR="$HOME/Documentos/TrcIMPLAN/GitHub/beta"

echo "Copiar directorios y archivos a la versión Beta del Sitio Web."

#
# Verificar
#
cd $BETA_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio lib."
    exit $E_FATAL
fi

#
# Respaldar Imprentas
#
echo "  Respaldando Imprentas..."
cd $BETA_DIR/lib
if [ -e Blog/Imprenta.php ]; then
    mv Blog/Imprenta.php BlogImprenta.php
fi
if [ -e Contacto/Imprenta.php ]; then
    mv Contacto/Imprenta.php ContactoImprenta.php
fi
if [ -e Institucional/Imprenta.php ]; then
    mv Institucional/Imprenta.php InstitucionalImprenta.php
fi
if [ -e PreguntasFrecuentes/Imprenta.php ]; then
    mv PreguntasFrecuentes/Imprenta.php PreguntasFrecuentesImprenta.php
fi
if [ -e Terminos/Imprenta.php ]; then
    mv Terminos/Imprenta.php TerminosImprenta.php
fi

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
rm -rf blog
rm -rf contacto
rm -rf institucional
rm -rf preguntas-frecuentes
rm -rf terminos
echo "  Eliminando en /bin..."
cd $BETA_DIR/bin
rm -f  Crear.php
echo "  Eliminando en /lib..."
cd $BETA_DIR/lib
rm -rf Base
rm -rf Michelf
rm -rf Blog
rm -rf Contacto
rm -rf Institucional
rm -rf PreguntasFrecuentes
rm -rf Terminos

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
cp -r $SITIO_WEB_DIR/blog .
cp -r $SITIO_WEB_DIR/contacto .
cp -r $SITIO_WEB_DIR/institucional .
cp -r $SITIO_WEB_DIR/preguntas-frecuentes .
cp -r $SITIO_WEB_DIR/terminos .
rm -f blog/*.html
rm -f contacto/*.html
rm -f institucional/*.html
rm -f preguntas-frecuentes/*.html
rm -f terminos/*.html
echo "  Copiando a la /bin..."
cd $BETA_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
echo "  Copiando a la /lib..."
cd $BETA_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .
cp -r $SITIO_WEB_DIR/lib/Blog .
cp -r $SITIO_WEB_DIR/lib/Contacto .
cp -r $SITIO_WEB_DIR/lib/Institucional .
cp -r $SITIO_WEB_DIR/lib/PreguntasFrecuentes .
cp -r $SITIO_WEB_DIR/lib/Terminos .
echo "  Copiando a la /css..."
cd $BETA_DIR/css
cp $PLATAFORMA_DIR/css/plataforma-de-conocimiento.css .

#
# Restaurando Imprentas
#
echo "  Restaurando Imprentas..."
cd $BETA_DIR/lib
if [ -e BlogImprenta.php ]; then
    rm -f Blog/Imprenta.php
    mv BlogImprenta.php Blog/Imprenta.php
fi
if [ -e ContactoImprenta.php ]; then
    rm -f Contacto/Imprenta.php
    mv ContactoImprenta.php Contacto/Imprenta.php
fi
if [ -e InstitucionalImprenta.php ]; then
    rm -f Institucional/Imprenta.php
    mv InstitucionalImprenta.php Institucional/Imprenta.php
fi
if [ -e PreguntasFrecuentesImprenta.php ]; then
    rm -f PreguntasFrecuentes/Imprenta.php
    mv PreguntasFrecuentesImprenta.php PreguntasFrecuentes/Imprenta.php
fi
if [ -e TerminosImprenta.php ]; then
    rm -f Terminos/Imprenta.php
    mv TerminosImprenta.php Terminos/Imprenta.php
fi

echo "Script terminado."
exit $EXITO

