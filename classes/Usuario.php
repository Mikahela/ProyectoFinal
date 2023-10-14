<?php

class Usuario {
    public $ID;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $correo;
    public $contraseña;

    public Perfil $perfil;
    public Mascota $mascotas = [];
}