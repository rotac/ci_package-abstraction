<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$config[ ABST_ERROR_PREFIX ][ 0 ] = 'Database abstraction layer fatal error';

$config[ ABST_ERROR_PREFIX ][ 1 ] = 'Call to undefined function: <strong>%s</strong>.
                            <br /> DB abstraction class autodeclaration only
                            works for array keys present in file:
                            %sconfig/%s<br />Error origin: %s';

$config[ ABST_ERROR_PREFIX ][ 2 ] = 'Autodeclared functions only accept one parameter.
                            Array with plsql procedure input parameters.<br />
                            Error origin: <br />%s';

$config[ ABST_ERROR_PREFIX ][ 3 ] = 'The parameter naming or parameter count does 
                            not corespond to configuration in %sconfig/%s.<br />
                            Error origin: <br />%s';


$config[ 'db_errors' ][ 20010 ] = 'Input for package not complete.';