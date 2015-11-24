#Diseño TODO App

##Tablas BD  
* usuarios(id_usuario(INT(3)),nombre(VARCHAR(20)),password(varchar(20)),tipo(VARCHAR(20) DEFAULT = normal))  
* tareas(id_tarea(INT(3)),descripcion(VARCHAR(30)),id_lista(INT(3)),archivada(BOOLEAN DEFAULT = false))  
* listas(id_lista(INT(3)),titulo(VARCHAR(20)),archivada(BOOLEAN DEFAULT = false)) 
* lista_usuario(id_lista_usuario(INT(3)),id_usuario(INT(3)),id_lista(INT(3)) 


##Paginas Web
* index.html
* login.php
* paginaPrincipal.php  
    >a href="agregarLista.html" --> agregarLista.php(INSERT)(header:location=paginaPrincipal.html)  
    >a href="agregarTarea.html" --> agregarTarea.php(INSERT)(header:location=paginaPrincipal.html)  
    >a href="modificarTarea.html" --> modificarTarea.php(UPDATE)(header:location=paginaPrincipal.html)  
    >a href="modificarLista.html" --> modificarLista.php(UPDATE)(header:location=paginaPrincipal.html)  
    >a href="archivadas.html"  
    >a href="agregarUsuario.html" --> agregarUsuario.php(INSERT)(header:location=paginaPrincipal.html)  
* logout.php
* archivarLista.php
* archivarTarea.php
* desarchivar.php
* eliminarLista.php
* eliminarTarea.php


##Reparto de trabajos
###Iker
* todoApp.sql
* archivadas.html
* archivarLista.php
* archivarTarea.php
* desarchivar.php
* eliminarLista.php
* eliminarTarea.php

###Egoitz
* index.html
* login.php
* logout.php
* paginaPrincipal.php

###Iñaki
* agregarUsuario.html
* agregarUsuario.php
* agregarLista.html
* agregarLista.php
* agregarTarea.html
* agregarTarea.php
* modificarLista.html
* modificarLista.php
* modificarTarea.html
* modificarTarea.php
