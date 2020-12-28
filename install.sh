#!/usr/bin/env bash
# Lampp webserver adalah sebuah paket untuk memudahkan
# dalam instalasi paket webserver di linux dan android.
#
# @author Ayus Irfang Filaras <ayus.sahabat@gmail.com>
# @since version v1.0.0
# @license MIT
# @link https://github.com/apolbox/lampp
declare -r rootdir=$(pwd)

# Memanggil file autoload
. ${rootdir}/src/autoload.lampp

# Create class object
package app

# Mengenali target penginstalan lampp webserver
app.installTo $(uname -o)
