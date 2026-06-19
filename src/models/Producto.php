<?php
class Producto {
    public int $id;
    public string $nombre;
    public ?string $descripcion;
    public float $precio;
    public ?string $imagen;
    public ?string $artesana;
    public ?string $impacto;
    public bool $activo;
}
